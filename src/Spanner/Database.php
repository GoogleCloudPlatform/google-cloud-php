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
use Google\Cloud\Exception\NotFoundException;
use Google\Cloud\Iam\Iam;
use Google\Cloud\Spanner\Connection\ConnectionInterface;
use Google\Cloud\Spanner\Connection\IamDatabase;
use Google\Cloud\Spanner\Session\SessionPoolInterface;
use Google\Cloud\Spanner\V1\SpannerClient as GrpcSpannerClient;

/**
 * Represents a Google Cloud Spanner Database
 *
 * Example:
 * ```
 * use Google\Cloud\ServiceBuilder;
 *
 * $cloud = new ServiceBuilder();
 * $spanner = $cloud->spanner();
 *
 * $database = $spanner->connect('my-instance', 'my-database');
 * ```
 *
 * ```
 * // Databases can also be connected to via an Instance.
 * use Google\Cloud\ServiceBuilder;
 *
 * $cloud = new ServiceBuilder();
 * $spanner = $cloud->spanner();
 *
 * $instance = $spanner->instance('my-instance');
 * $database = $instance->database('my-database');
 * ```
 */
class Database
{
    use ArrayTrait;

    /**
     * @var ConnectionInterface
     */
    private $connection;

    /**
     * @var Instance
     */
    private $instance;

    /**
     * @var SessionPoolInterface
     */
    private $sessionPool;

    /**
     * @var Operation
     */
    private $operation;

    /**
     * @var string
     */
    private $projectId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Iam
     */
    private $iam;

    /**
     * Create an object representing a Database.
     *
     * @param ConnectionInterface $connection The connection to the
     *        Google Cloud Spanner Admin API.
     * @param Instance $instance The instance in which the database exists.
     * @param SessionPoolInterface The session pool implementation.
     * @param string $projectId The project ID.
     * @param string $name The database name.
     * @param bool $returnInt64AsObject If true, 64 bit integers will be
     *        returned as a {@see Google\Cloud\Int64} object for 32 bit platform
     *        compatibility. **Defaults to** false.
     */
    public function __construct(
        ConnectionInterface $connection,
        Instance $instance,
        SessionPoolInterface $sessionPool,
        $projectId,
        $name,
        $returnInt64AsObject = false
    ) {
        $this->connection = $connection;
        $this->instance = $instance;
        $this->sessionPool = $sessionPool;
        $this->projectId = $projectId;
        $this->name = $name;

        $this->operation = new Operation($connection, $returnInt64AsObject);
        $this->iam = new Iam(
            new IamDatabase($this->connection),
            $this->fullyQualifiedDatabaseName()
        );
    }

    /**
     * Return the simple database name.
     *
     * Example:
     * ```
     * $name = $database->name();
     * ```
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Check if the database exists.
     *
     * This method sends a service request.
     *
     * Example:
     * ```
     * if ($database->exists()) {
     *     echo 'Database exists!';
     * }
     * ```
     *
     * @param array $options [optional] Configuration options.
     * @return bool
     */
    public function exists(array $options = [])
    {
        try {
            $this->ddl($options);
        } catch (NotFoundException $e) {
            return false;
        }

        return true;
    }

    /**
     * Update the Database schema by running a SQL statement.
     *
     * Example:
     * ```
     * $database->updateDdl(
     *     'CREATE TABLE Users (
     *         id INT64 NOT NULL,
     *         name STRING(100) NOT NULL
     *         password STRING(100) NOT NULL
     *     )'
     * );
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/docs/data-definition-language Data Definition Language
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.admin.database.v1#google.spanner.admin.database.v1.UpdateDatabaseDdlRequest UpdateDDLRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $statement A DDL statement to run against a database.
     * @param array $options [optional] Configuration options.
     * @return <something>
     */
    public function updateDdl($statement, array $options = [])
    {
        return $this->updateDdlBatch([$statement], $options);
    }

    /**
     * Update the Database schema by running a set of SQL statements.
     *
     * Example:
     * ```
     * $database->updateDdlBatch([
     *     'CREATE TABLE Users (
     *         id INT64 NOT NULL,
     *         name STRING(100) NOT NULL,
     *         password STRING(100) NOT NULL
     *     ) PRIMARY KEY (id)',
     *     'CREATE TABLE Posts (
     *         id INT64 NOT NULL,
     *         title STRING(100) NOT NULL,
     *         content STRING(MAX) NOT NULL
     *     ) PRIMARY KEY(id)'
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/docs/data-definition-language Data Definition Language
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.admin.database.v1#google.spanner.admin.database.v1.UpdateDatabaseDdlRequest UpdateDDLRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string[] $statements A list of DDL statements to run against a database.
     * @param array $options [optional] Configuration options.
     * @return <something>
     */
    public function updateDdlBatch(array $statements, array $options = [])
    {
        $options += [
            'operationId' => null
        ];

        return $this->connection->updateDatabase($options + [
            'name' => $this->fullyQualifiedDatabaseName(),
            'statements' => $statements,
        ]);
    }

    /**
     * Drop the database.
     *
     * Example:
     * ```
     * $database->drop();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.admin.database.v1#google.spanner.admin.database.v1.DropDatabaseRequest DropDatabaseRequest
     * @codingStandardsIgnoreEnd
     *
     * @param array $options [optional] Configuration options.
     * @return void
     */
    public function drop(array $options = [])
    {
        return $this->connection->dropDatabase($options + [
            'name' => $this->fullyQualifiedDatabaseName()
        ]);
    }

    /**
     * Get a list of all database DDL statements.
     *
     * Example:
     * ```
     * $statements = $database->ddl();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.admin.database.v1#getdatabaseddlrequest GetDatabaseDdlRequest
     * @codingStandardsIgnoreEnd
     *
     * @param array $options [optional] Configuration options.
     * @return array
     */
    public function ddl(array $options = [])
    {
        $ddl = $this->connection->getDatabaseDDL($options + [
            'name' => $this->fullyQualifiedDatabaseName()
        ]);

        if (isset($ddl['statements'])) {
            return $ddl['statements'];
        }

        return [];
    }

    /**
     * Manage the database IAM policy
     *
     * Example:
     * ```
     * $iam = $database->iam();
     * ```
     *
     * @return Iam
     */
    public function iam()
    {
        return $this->iam;
    }

    /**
     * Create a Read Only transaction.
     *
     * If no configuration options are provided, transaction will be opened with
     * strong consistency.
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.BeginTransactionRequest BeginTransactionRequest
     * @codingStandardsIgnoreEnd
     *
     * @codingStandardsIgnoreStart
     * @param array $options [optional] {
     *     Configuration Options
     *
     *     See [ReadOnly](https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.TransactionOptions.ReadOnly)
     *     for detailed description of available options. Please note that only
     *     one of `$strong`, `$minReadTimestamp`, `$maxStaleness`,
     *     `$readTimestamp` or `$exactStaleness` may be set in a request.
     *
     *     @type bool $returnReadTimestamp If true, the Cloud Spanner-selected
     *           read timestamp is included in the Transaction message that
     *           describes the transaction.
     *     @type bool $strong Read at a timestamp where all previously committed
     *           transactions are visible.
     *     @type Timestamp $minReadTimestamp Executes all reads at a timestamp
     *           greater than or equal to the given timestamp.
     *     @type int $maxStaleness Represents a number of seconds. Read data at
     *           a timestamp greater than or equal to the current time minus the
     *           given number of seconds.
     *     @type Timestamp $readTimestamp Executes all reads at the given
     *           timestamp.
     *     @type int $exactStaleness Represents a number of seconds. Executes
     *           all reads at a timestamp that is $exactStaleness old.
     * }
     * @codingStandardsIgnoreEnd
     * @return Transaction
     */
    public function readOnlyTransaction(array $options = [])
    {
        $options += [
            'returnReadTimestamp' => null,
            'strong' => null,
            'minReadTimestamp' => null,
            'maxStaleness' => null,
            'readTimestamp' => null,
            'exactStaleness' => null
        ];

        $options['transactionOptions'] = [
            'readOnly' => $this->arrayFilterPreserveBool([
                'returnReadTimestamp' => $this->pluck('returnReadTimestamp', $options),
                'strong' => $this->pluck('strong', $options),
                'minReadTimestamp' => $this->pluck('minReadTimestamp', $options),
                'maxStaleness' => $this->pluck('maxStaleness', $options),
                'readTimestamp' => $this->pluck('readTimestamp', $options),
                'exactStaleness' => $this->pluck('exactStaleness', $options),
            ])
        ];

        if (empty($options['transactionOptions']['readOnly'])) {
            $options['transactionOptions']['readOnly']['strong'] = true;
        }

        $timestampFields = [
            'minReadTimestamp',
            'readTimestamp'
        ];

        foreach ($timestampFields as $tsf) {
            if (isset($options['transactionOptions']['readOnly'][$tsf])) {
                $field = $options['transactionOptions']['readOnly'][$tsf];
                if (!($field instanceof Timestamp)) {
                    throw new \InvalidArgumentException(sprintf(
                        'Read Only Transaction Configuration Field %s must be an instance of Timestamp',
                        $tsf
                    ));
                }

                $options['transactionOptions']['readOnly'][$tsf] = $field->formatAsString();
            }
        }

        return $this->transaction(SessionPoolInterface::CONTEXT_READ, $options);
    }

    /**
     * Create a Read/Write transaction
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.BeginTransactionRequest BeginTransactionRequest
     * @codingStandardsIgnoreEnd
     *
     * @param array $options [optional] Configuration Options
     * @return Transaction
     */
    public function lockingTransaction(array $options = [])
    {
        $options['transactionOptions'] = [
            'readWrite' => []
        ];

        return $this->transaction(SessionPoolInterface::CONTEXT_READWRITE, $options);
    }

    /**
     * Insert a row.
     *
     * Example:
     * ```
     * $database->insert('Posts', [
     *     'ID' => 1337,
     *     'postTitle' => 'Hello World!',
     *     'postContent' => 'Welcome to our site.'
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $data The row data to insert.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function insert($table, array $data, array $options = [])
    {
        return $this->insertBatch($table, [$data], $options);
    }

    /**
     * Insert multiple rows.
     *
     * Example:
     * ```
     * $database->insert('Posts', [
     *     [
     *         'ID' => 1337,
     *         'postTitle' => 'Hello World!',
     *         'postContent' => 'Welcome to our site.'
     *     ], [
     *         'ID' => 1338,
     *         'postTitle' => 'Our History',
     *         'postContent' => 'Lots of people ask about where we got started.'
     *     ]
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $dataSet The row data to insert.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function insertBatch($table, array $dataSet, array $options = [])
    {
        $mutations = [];
        foreach ($dataSet as $data) {
            $mutations[] = $this->operation->mutation(Operation::OP_INSERT, $table, $data);
        }

        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READWRITE);

        return $this->operation->commit($session, $mutations, $options);
    }

    /**
     * Update a row.
     *
     * Only data which you wish to update need be included. You must provide
     * enough information for the API to determine which row should be modified.
     * In most cases, this means providing values for the Primary Key fields.
     *
     * Example:
     * ```
     * $database->update('Posts', [
     *     'ID' => 1337,
     *     'postContent' => 'Thanks for visiting our site!'
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $data The row data to update.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function update($table, array $data, array $options = [])
    {
        return $this->updateBatch($table, [$data], $options);
    }

    /**
     * Update multiple rows.
     *
     * Only data which you wish to update need be included. You must provide
     * enough information for the API to determine which row should be modified.
     * In most cases, this means providing values for the Primary Key fields.
     *
     * Example:
     * ```
     * $database->update('Posts', [
     *     [
     *         'ID' => 1337,
     *         'postContent' => 'Thanks for visiting our site!'
     *     ], [
     *         'ID' => 1338,
     *         'postContent' => 'A little bit about us!'
     *     ]
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $dataSet The row data to update.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function updateBatch($table, array $dataSet, array $options = [])
    {
        $mutations = [];
        foreach ($dataSet as $data) {
            $mutations[] = $this->operation->mutation(Operation::OP_UPDATE, $table, $data);
        }

        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READWRITE);

        return $this->operation->commit($session, $mutations, $options);
    }

    /**
     * Insert or update a row.
     *
     * If a row already exists (determined by comparing the Primary Key to
     * existing table data), the row will be updated. If not, it will be
     * created.
     *
     * Example:
     * ```
     * $database->insertOrUpdate('Posts', [
     *     'ID' => 1337,
     *     'postTitle' => 'Hello World!',
     *     'postContent' => 'Thanks for visiting our site!'
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $data The row data to insert or update.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function insertOrUpdate($table, array $data, array $options = [])
    {
        return $this->insertOrUpdateBatch($table, [$data], $options);
    }

    /**
     * Insert or update multiple rows.
     *
     * If a row already exists (determined by comparing the Primary Key to
     * existing table data), the row will be updated. If not, it will be
     * created.
     *
     * Example:
     * ```
     * $database->insertOrUpdateBatch('Posts', [
     *     [
     *         'ID' => 1337,
     *         'postTitle' => 'Hello World!',
     *         'postContent' => 'Thanks for visiting our site!'
     *     ], [
     *         'ID' => 1338,
     *         'postTitle' => 'Our History',
     *         'postContent' => 'A little bit about us!'
     *     ]
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $dataSet The row data to insert or update.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function insertOrUpdateBatch($table, array $dataSet, array $options = [])
    {
        $mutations = [];
        foreach ($dataSet as $data) {
            $mutations[] = $this->operation->mutation(Operation::OP_INSERT_OR_UPDATE, $table, $data);
        }

        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READWRITE);

        return $this->operation->commit($session, $mutations, $options);
    }

    /**
     * Replace a row.
     *
     * Provide data for the entire row. Google Cloud Spanner will attempt to
     * find a record matching the Primary Key, and will replace the entire row.
     * If a matching row is not found, it will be inserted.
     *
     * Example:
     * ```
     * $database->replace('Posts', [
     *     'ID' => 1337,
     *     'postTitle' => 'Hello World!',
     *     'postContent' => 'Thanks for visiting our site!'
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $data The row data to replace.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function replace($table, array $data, array $options = [])
    {
        return $this->replaceBatch($table, [$data], $options);
    }

    /**
     * Replace multiple rows.
     *
     * Provide data for the entire row. Google Cloud Spanner will attempt to
     * find a record matching the Primary Key, and will replace the entire row.
     * If a matching row is not found, it will be inserted.
     *
     * Example:
     * ```
     * $database->replaceBatch('Posts', [
     *     [
     *         'ID' => 1337,
     *         'postTitle' => 'Hello World!',
     *         'postContent' => 'Thanks for visiting our site!'
     *     ], [
     *         'ID' => 1338,
     *         'postTitle' => 'Our History',
     *         'postContent' => 'A little bit about us!'
     *     ]
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param array $dataSet The row data to replace.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function replaceBatch($table, array $dataSet, array $options = [])
    {
        $mutations = [];
        foreach ($dataSet as $data) {
            $mutations[] = $this->operation->mutation(Operation::OP_REPLACE, $table, $data);
        }

        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READWRITE);

        return $this->operation->commit($session, $mutations, $options);
    }

    /**
     * Delete one or more rows.
     *
     * Example:
     * ```
     * $keySet = $spanner->keySet([
     *     'keys' => [
     *         1337, 1338
     *     ]
     * ]);
     *
     * $database->delete('Posts', $keySet);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.CommitRequest CommitRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $table The table to mutate.
     * @param KeySet $keySet The KeySet to identify rows to delete.
     * @param array $options [optional] Configuration options.
     * @return Timestamp The commit Timestamp.
     */
    public function delete($table, KeySet $keySet, array $options = [])
    {
        $mutations = [$this->operation->deleteMutation($table, $keySet)];

        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READWRITE);

        return $this->operation->commit($session, $mutations, $options);
    }

    /**
     * Run a query.
     *
     * Example:
     * ```
     * $result = $spanner->execute(
     *     'SELECT * FROM Posts WHERE ID = @postId',
     *     [
     *          'parameters' => [
     *              'postId' => 1337
     *          ]
     *     ]
     * );
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.ExecuteSqlRequest ExecuteSqlRequest
     * @codingStandardsIgnoreEnd
     *
     * @param string $sql The query string to execute.
     * @param array $options [optional] {
     *     Configuration options.
     *
     *     @type array $parameters A key/value array of Query Parameters, where
     *           the key is represented in the query string prefixed by a `@`
     *           symbol.
     * }
     * @return Result
     */
    public function execute($sql, array $options = [])
    {
        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READ);

        return $this->operation->execute($session, $sql, $options);
    }

    /**
     * Lookup rows in a table.
     *
     * Note that if no KeySet is specified, all rows in a table will be
     * returned.
     *
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.ReadRequest ReadRequest
     *
     * @param string $table The table name.
     * @param array $options [optional] {
     *     Configuration Options.
     *
     *     @type string $index The name of an index on the table.
     *     @type array $columns A list of column names to be returned.
     *     @type KeySet $keySet A [KeySet](https://cloud.google.com/spanner/reference/rest/v1/KeySet).
     *     @type int $offset The number of rows to offset results by.
     *     @type int $limit The number of results to return.
     * }
     */
    public function read($table, array $options = [])
    {
        $session = $this->selectSession(SessionPoolInterface::CONTEXT_READ);

        return $this->operation->read($session, $table, $options);
    }

    /**
     * Create a transaction with a given context.
     *
     * @see https://cloud.google.com/spanner/reference/rpc/google.spanner.v1#google.spanner.v1.BeginTransactionRequest BeginTransactionRequest
     *
     * @param string $context The context of the new transaction.
     * @param array $options [optional] Configuration options.
     * @return Transaction
     */
    private function transaction($context, array $options = [])
    {
        $options += [
            'transactionOptions' => []
        ];

        $session = $this->selectSession($context);

        // make a service call here.
        $res = $this->connection->beginTransaction($options + [
            'session' => $session->name(),
            'context' => $context,
        ]);

        return new Transaction($this->operation, $session, $context, $res);
    }

    /**
     * Retrieve a session from the session pool.
     *
     * @param string $context The session context.
     * @return Session
     */
    private function selectSession($context = SessionPoolInterface::CONTEXT_READ) {
        return $this->sessionPool->session(
            $this->instance->name(),
            $this->name,
            $context
        );
    }

    /**
     * Convert the simple database name to a fully qualified name.
     *
     * @return string
     */
    private function fullyQualifiedDatabaseName()
    {
        return GrpcSpannerClient::formatDatabaseName(
            $this->projectId,
            $this->instance->name(),
            $this->name
        );
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
            'projectId' => $this->projectId,
            'name' => $this->name,
            'instance' => $this->instance,
            'sessionPool' => $this->sessionPool,
            'returnInt64AsObject' => $this->returnInt64AsObject,
        ];
    }
}
