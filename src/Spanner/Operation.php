<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Spanner;

use Google\Cloud\ArrayTrait;
use Google\Cloud\Spanner\Connection\ConnectionInterface;
use Google\Cloud\Spanner\Session\Session;
use Google\Cloud\ValidateTrait;
use RuntimeException;

/**
 * Common interface for running operations against Google Cloud Spanner. This
 * class is intended for internal use by the client library only. Implementors
 * should access these operations via {@see Google\Cloud\Spanner\Database} or
 * {@see Google\Cloud\Spanner\Transaction}.
 */
class Operation
{
    use ArrayTrait;
    use ValidateTrait;

    const OP_INSERT = 'insert';
    const OP_UPDATE = 'update';
    const OP_INSERT_OR_UPDATE = 'insertOrUpdate';
    const OP_REPLACE = 'replace';
    const OP_DELETE = 'delete';

    /**
     * @var ConnectionInterface
     */
    private $connection;

    /**
     * @var ValueMapper
     */
    private $mapper;

    /**
     * @param ConnectionInterface $connection A connection to Google Cloud
     *        Spanner.
     * @param bool $returnInt64AsObject If true, 64 bit integers will be
     *        returned as a {@see Google\Cloud\Int64} object for 32 bit platform
     *        compatibility.
     */
    public function __construct(ConnectionInterface $connection, $returnInt64AsObject)
    {
        $this->connection = $connection;
        $this->mapper = new ValueMapper($returnInt64AsObject);
    }

    /**
     * Create a formatted mutation.
     *
     * @param string $operation The operation type.
     * @param string $table The table name.
     * @param array $mutation The mutation data, represented as a set of
     *        key/value pairs.
     * @return array
     */
    public function mutation($operation, $table, $mutation)
    {
        $mutation = array_filter($mutation, function ($value) {
            return !is_null($value);
        });

        return [
            $operation => [
                'table' => $table,
                'columns' => array_keys($mutation),
                'values' => $this->mapper->encodeValuesAsSimpleType(array_values($mutation))
            ]
        ];
    }

    /**
     * Create a formatted delete mutation.
     *
     * @param string $table The table name.
     * @param KeySet $keySet The keys to delete.
     * @return array
     */
    public function deleteMutation($table, KeySet $keySet)
    {
        $keyRanges = $keySet->ranges();
        if ($keyRanges) {
            $ranges = [];
            foreach ($keyRanges as $range) {
                $types = $range->types();

                $start = $range->start();
                $range->setStart($types['start'], $this->mapper->encodeValuesAsSimpleType($start));

                $end = $range->end();
                $range->setEnd($types['end'], $this->mapper->encodeValuesAsSimpleType($end));

                $ranges[] = $range;
            }

            $keySet->setRanges($ranges);
        }

        $keys = $keySet->keySetObject();
        if (!empty($keys['keys'])) {
            $keys['keys'] = $this->mapper->encodeValuesAsSimpleType($keys['keys']);
        }

        return [
            self::OP_DELETE => [
                'table' => $table,
                'keySet' => $this->arrayFilterPreserveBool($keys)
            ]
        ];
    }

    /**
     * Commit all enqueued mutations.
     *
     * @codingStandardsIgnoreStart
     * @param Session $session The session ID to use for the commit.
     * @param array $mutations The mutations to commit.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function commit(Session $session, array $mutations, array $options = [])
    {
        if (!isset($options['transactionId'])) {
            $options['singleUseTransaction'] = ['readWrite' => []];
        }

        $res = $this->connection->commit([
            'mutations' => $mutations,
            'session' => $session->name()
        ] + $options);

        return $this->mapper->createTimestampWithNanos($res['commitTimestamp']);
    }

    /**
     * Rollback a Transaction
     *
     * @param Session $session The session to use for the rollback.
     *        Note that the session MUST be the same one in which the
     *        transaction was created.
     * @param string $transactionId The transaction to roll back.
     * @param array $options [optional] Configuration Options.
     * @return void
     */
    public function rollback(Session $session, $transactionId, array $options = [])
    {
        return $this->connection->rollback([
            'transactionId' => $transactionId,
            'session' => $session->name()
        ] + $options);
    }

    /**
     * Run a query
     *
     * @param Session $session The session to use to execute the SQL.
     * @param string $sql The query string.
     * @param array $options [optional] Configuration options.
     * @return array
     */
    public function execute(Session $session, $sql, array $options = [])
    {
        $options += [
            'parameters' => [],
        ];

        $parameters = $this->pluck('parameters', $options);
        $options += $this->mapper->formatParamsForExecuteSql($parameters);

        $res = $this->connection->executeSql([
            'sql' => $sql,
            'session' => $session->name()
        ] + $options);

        return $this->createResult($res);
    }

    /**
     * Lookup rows in a database.
     *
     * @param Session $session The session in which to read data.
     * @param string $table The table to read from.
     * @param array $options [optional] {
     *     Configuration Options
     *
     *     @type string $index
     *     @type array $columns
     *     @type KeySet $keySet
     *     @type string $offset
     *     @type int $limit
     * }
     */
    public function read(Session $session, $table, array $options = [])
    {
        $options += [
            'index' => null,
            'columns' => [],
            'keySet' => [],
            'offset' => null,
            'limit' => null,
        ];

        if (!empty($options['keySet']) && !($options['keySet']) instanceof KeySet) {
            throw new RuntimeException('$options.keySet must be an instance of KeySet');
        }

        if (empty($options['keySet'])) {
            $options['keySet'] = new KeySet();
            $options['keySet']->setMatchAll(true);
        }

        $options['keySet'] = $options['keySet']->keySetObject();

        $res = $this->connection->read([
            'table' => $table,
            'session' => $session->name()
        ] + $options);

        return $this->createResult($res);
    }

    /**
     * Create a transaction with a given context.
     *
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.BeginTransactionRequest BeginTransactionRequest
     *
     * @param Session $session The session to start the transaction in.
     * @param string $context The context of the new transaction.
     * @param array $options [optional] Configuration options.
     * @return Transaction
     */
    public function transaction(Session $session, $context, array $options = [])
    {
        $options += [
            'transactionOptions' => []
        ];

        // make a service call here.
        $res = $this->connection->beginTransaction($options + [
            'session' => $session->name(),
            'context' => $context,
        ]);

        $timestamp = null;
        if (isset($res['readTimestamp'])) {
            $timestamp = $this->mapper->createTimestampWithNanos($res['readTimestamp']);
        }

        return new Transaction($this, $session, $context, $res['id'], $timestamp);
    }

    private function createResult(array $res)
    {
        $columns = $res['metadata']['rowType']['fields'];

        $rows = [];
        if (isset($res['rows'])) {
            foreach ($res['rows'] as $row) {
                $rows[] = $this->mapper->decodeValues($columns, $row);
            }
        }

        return new Result($res, $rows);
    }

    /**
     * Represent the class in a more readable and digestable fashion.
     *
     * @access private
     * @codeCoverageIgnore
     */
    public function __debugInfo()
    {
        return [
            'connection' => get_class($this->connection),
            'sessionPool' => $this->sessionPool
        ];
    }
}
