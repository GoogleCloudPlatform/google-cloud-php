<?php
/**
 * Copyright 2017 Google Inc.
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

namespace Google\Cloud\Firestore;

use Google\Cloud\Core\Timestamp;
use Google\Cloud\Core\ArrayTrait;
use Google\Cloud\Firestore\Connection\ConnectionInterface;
use Google\Firestore\V1beta1\DocumentTransform_FieldTransform_ServerValue;

/**
 * Enqueue and write multiple mutations to Cloud Firestore
 *
 * This class may be used directly for multiple non-transactional writes. To
 * run changes in a transaction (with automatic retry/rollback on failure),
 * use {@see Google\Cloud\Firestore\Transaction}. Single modifications can be
 * made using the various methods on {@see Google\Cloud\Firestore\DocumentReference}.
 */
class WriteBatch
{
    use ArrayTrait;

    const TYPE_UPDATE = 'update';
    const TYPE_DELETE = 'delete';
    const TYPE_VERIFY = 'verify';
    const TYPE_TRANSFORM = 'transform';

    /**
     * @var ConnectionInterface
     */
    private $connection;

    /**
     * @var ValueMapper
     */
    private $valueMapper;

    /**
     * @var string
     */
    private $database;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var array
     */
    private $writes = [];

    /**
     * @var bool
     */
    private $hasPreviousTransform = false;

    /**
     * @param ConnectionInterface $connection A connection to Cloud Firestore
     * @param ValueMapper $valueMapper A Value Mapper instance
     * @param string $database The current database
     * @param string|null $transactionId The transaction to run commits in.
     *        **Defaults to** `null`.
     */
    public function __construct(ConnectionInterface $connection, $valueMapper, $database, $transactionId = null)
    {
        $this->connection = $connection;
        $this->valueMapper = $valueMapper;
        $this->database = $database;
        $this->transactionId = $transactionId;
    }

    /**
     * Enqueue a document creation.
     *
     * This operation will fail (when committed) if the document already exists.
     *
     * @param string $documentName The document to create.
     * @param array $fields An array containing field names paired with their value.
     *        Accepts a nested array, or a simple array of field paths.
     * @param array $options Configuration options
     * @return WriteBatch
     */
    public function create($documentName, array $fields, array $options = [])
    {
        return $this->update($documentName, $fields, [
            'precondition' => ['exists' => false]
        ] + $options);
    }

    /**
     * Enqueue an update.
     *
     * Merges provided data with data stored in Firestore.
     *
     * By default, this method will fail if the document does not exist.
     *
     * To remove a field, set the field value to `FirestoreClient::DELETE_FIELD`.
     *
     * @codingStandardsIgnoreStart
     * @param string $documentName The document to update.
     * @param array $fields An array containing field names paired with their value.
     *        Accepts a nested array, or a simple array of field paths.
     * @param array $options {
     *     Configuration options
     *
     *     @type array $precondition An optional precondition on the document. If
     *           this is set and not met by the target document, the write will
     *           fail. Allowed arguments are `(bool) $exists` and
     *           {@see Google\Cloud\Core\Timestamp} `$updateTime`.
     *           To completely disable precondition checks, provide an empty array
     *           as the value of `$precondition`. **Defaults to**
     *           `['exists' => true]` (i.e. Document must exist in Firestore).
     *           For more information, refer to the [Precondition](https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.Precondition)
     *           documentation.
     * }
     * @return WriteBatch
     * @codingStandardsIgnoreEnd
     */
    public function update($documentName, array $fields, array $options = [])
    {
        if ($this->hasPreviousTransform) {
            throw new \BadMethodCallException(
                'Cannot apply an UPDATE operation after a TRANSFORM operation has been enqueued.'
            );
        }

        $options += [
            'precondition' => ['exists' => true]
        ];

        list($fields, $timestamps, $deletes) = $this->valueMapper->findSentinels($fields);

        $this->writes[] = $this->createDatabaseWrite(self::TYPE_UPDATE, $documentName, [
            'fields' => $this->valueMapper->decodeFieldPaths($fields),
            'updateMask' => array_merge($this->valueMapper->encodeFieldPaths($fields), $deletes)
        ] + $options);

        // Setting values to the server timestamp is implemented as a document tranformation.
        if ($timestamps) {
            $transforms = [];
            foreach ($timestamps as $timestamp) {
                $transforms[] = [
                    'fieldPath' => $timestamp,
                    'setToServerValue' => DocumentTransform_FieldTransform_ServerValue::REQUEST_TIME
                ];
            }

            $this->transform($documentName, $transforms);
        }

        return $this;
    }

    /**
     * Enqueue a set mutation.
     *
     * Replaces all fields in a Firestore document.
     *
     * @codingStandardsIgnoreStart
     * @param string $documentName The document to update.
     * @param array $fields An array containing fields, where keys are the field
     *        names, and values are field values. Nested arrays are allowed.
     *        Note that unlike {@see Google\Cloud\Firestore\WriteBatch::update()},
     *        field paths are NOT supported by this method.
     * @param array $options {
     *     Configuration Options
     *
     *     @type bool $merge If true, unwritten fields will be preserved.
     *           Otherwise, they will be overwritten (removed). **Defaults to**
     *           `false`.
     * }
     * @return WriteBatch
     * @codingStandardsIgnoreEnd
     */
    public function set($documentName, array $fields, array $options = [])
    {
        if ($this->hasPreviousTransform) {
            throw new \BadMethodCallException(
                'Cannot apply an UPDATE operation after a TRANSFORM operation has been enqueued.'
            );
        }

        $options += [
            'merge' => false
        ];

        $write = array_filter([
            'fields' => $this->valueMapper->encodeValues($fields),
            'updateMask' => $merge ? $this->valueMapper->encodeFieldPaths($fields) : null
        ]);

        $this->writes[] = $this->createDatabaseWrite(self::TYPE_UPDATE, $documentName, $write);

        return $this;
    }

    /**
     * Delete a Firestore document.
     *
     * @codingStandardsIgnoreStart
     * @param string $documentName The document to delete.
     * @param array Configuration Options
     * @return WriteBatch
     * @codingStandardsIgnoreEnd
     */
    public function delete($documentName, array $options = [])
    {
        $options['precondition'] = [];

        $this->writes[] = $this->createDatabaseWrite(self::TYPE_DELETE, $documentName, $options);

        return $this;
    }

    /**
     * Verify a precondition without performing a write.
     *
     * @codingStandardsIgnoreStart
     * @param string $documentName The document to delete.
     * @param array $options {
     *     Configuration Options
     *
     *     @type array $precondition An optional precondition on the document. If
     *           this is set and not met by the target document, the write will
     *           fail. Allowed arguments are `(bool) $exists` and
     *           {@see Google\Cloud\Core\Timestamp} `$updateTime`.
     *           To completely disable precondition checks, provide an empty array
     *           as the value of `$precondition`. **Defaults to**
     *           `['exists' => true]` (i.e. Document must exist in Firestore).
     *           For more information, refer to the [Precondition](https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.Precondition)
     *           documentation.
     * }
     * @return WriteBatch
     * @codingStandardsIgnoreEnd
     */
    public function verify($documentName, array $options = [])
    {
        $this->writes[] = $this->createDatabaseWrite(self::TYPE_VERIFY, $documentName, $options);

        return $this;
    }

    public function transform($documentName, array $transforms = [], array $options = [])
    {
        $this->writes[] = $this->createDatabaseWrite(self::TYPE_TRANSFORM, $documentName, [
            'fieldTransforms' => $transforms
        ] + $options);

        $this->hasPreviousTransform = true;

        return $this;
    }

    /**
     * Commit writes to the database.
     *
     * Example:
     * ```
     * $writer->commit();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.Firestore.Commit Commit
     *
     * @param array $options Configuration Options
     * @return array [https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#commitresponse](CommitResponse)
     * @codingStandardsIgnoreEnd
     */
    public function commit(array $options = [])
    {
        $response = $this->connection->commit(array_filter([
            'database' => $this->database,
            'writes' => $this->writes,
            'transaction' => $this->transactionId
        ]) + $options);

        if (isset($response['commitTime'])) {
            $response['commitTime'] = $this->valueMapper->createTimestampWithNanos($response['commitTime']);
        }

        if (isset($response['writeResults'])) {
            foreach ($response['writeResults'] as &$result) {
                if (isset($result['updateTime'])) {
                    $result['updateTime'] = $this->valueMapper->createTimestampWithNanos($result['updateTime']);
                }
            }
        }

        return $response;
    }

    /**
     * Rollback a transaction.
     *
     * If the class was created without a Transaction ID, this method will fail.
     *
     * Example:
     * ```
     * $batch->rollback();
     * ```
     *
     * @param array $options Configuration Options
     * @return void
     * @throws \BadMethodCallException
     */
    public function rollback(array $options = [])
    {
        if (!$this->transactionId) {
            throw new \BadMethodCallException('Cannot rollback because no transaction id was provided.');
        }

        $this->connection->rollback([
            'database' => $this->database,
            'transaction' => $this->transactionId
        ] + $options);
    }

    /**
     * @param string $type The write operation type.
     * @param string $name The document name to update.
     * @param array $options {
     *     Configuration Options.
     *
     *     @type array $updateMask A list of field paths to update in this document.
     *     @type array $currentDocument An optional precondition.
     *     @type array $fields An array of document fields and their values. Required
     *           if $type is `update`.
     * }
     * @return array
     */
    private function createDatabaseWrite($type, $name, array $options = [])
    {
        return array_filter([
            'updateMask' => $this->pluck('updateMask', $options, false),
            'currentDocument' => $this->validatePrecondition($options),
        ]) + $this->createDatabaseWriteOperation($type, $name, $options);
    }

    /**
     * Validates a document precondition, if set.
     *
     * @codingStandardsIgnoreStart
     * @param array $options Configuration Options
     * @return array [Precondition](https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.Precondition)
     * @throws \InvalidArgumentException If the precondition is invalid.
     * @codingStandardsIgnoreEnd
     */
    private function validatePrecondition(array &$options)
    {
        $precondition = $this->pluck('precondition', $options, false);

        if (!$precondition) {
            return;
        }

        if (isset($precondition['exists'])) {
            return $precondition;
        }

        if (isset($precondition['updateTime'])) {
            if (!($precondition['updateTime'] instanceof Timestamp)) {
                throw new \InvalidArgumentException(
                    'Precondition Update Time must be an instance of Google\\Cloud\\Core\\Timestamp'
                );
            }

            return [
                'updateTime' => $precondition['updateTime']->formatForApi()
            ];
        }

        throw new \InvalidArgumentException('Preconditions must provide either `exists` or `updateTime`.');
    }

    /**
     * Create the write operation object.
     *
     * @param string $type The write type.
     * @param string $name The document name.
     * @param array $options Configuration Options.
     * @return array
     * @throws \InvalidArgumentException If $type is not a valid value.
     */
    private function createDatabaseWriteOperation($type, $name, array $options = [])
    {
        switch ($type) {
            case self::TYPE_UPDATE:
                return ['update' => [
                    'name' => $name,
                    'fields' => $this->pluck('fields', $options)
                ]];
                break;

            case self::TYPE_DELETE:
                return ['delete' => $name];
                break;

            case self::TYPE_VERIFY:
                return ['verify' => $name];
                break;

            case self::TYPE_TRANSFORM:
                return ['transform' => [
                    'document' => $name,
                    'fieldTransforms' => $this->pluck('fieldTransforms', $options)
                ]];
                break;

            default:
                throw new \InvalidArgumentException(sprintf(
                    'Write operation type `%s is not valid. Allowed values are update, delete, verify, transform.',
                    $type
                ));
                break;
        }
    }
}
