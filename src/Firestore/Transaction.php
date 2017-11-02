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

use Google\Cloud\Core\DebugInfoTrait;
use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\Firestore\Connection\ConnectionInterface;

/**
 * Represents a Firestore transaction.
 *
 * This class should be accessed inside a transaction callable, obtained via
 * {@see Google\Cloud\Firestore\FirestoreClient::runTransaction()}.
 *
 * Note that method examples, while shown as being called directly for the sake
 * of brevity, should be called only within the context of a transaction
 * callable, as noted above.
 *
 * Example:
 * ```
 * use Google\Cloud\Firestore\FirestoreClient;
 * use Google\Cloud\Firestore\Transaction;
 *
 * $firestore = new FirestoreClient();
 * $document = $firestore->document('users/john');
 * $firestore->runTransaction(function (Transaction $transaction) use ($document) {
 *     // Manage Transaction.
 * });
 * ```
 */
class Transaction
{
    use SnapshotTrait;
    use DebugInfoTrait;

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
    private $transaction;

    /**
     * @var string
     */
    private $database;

    /**
     * @var WriteBatch
     */
    private $writer;

    /**
     * @param ConnectionInterface $connection A connection to Cloud Firestore.
     * @param ValueMapper $valueMapper A Firestore Value Mapper.
     * @param string $database The database name.
     * @param string $transaction The transaction ID.
     */
    public function __construct(
        ConnectionInterface $connection,
        ValueMapper $valueMapper,
        $database,
        $transaction
    ) {
        $this->connection = $connection;
        $this->valueMapper = $valueMapper;
        $this->database = $database;
        $this->transaction = $transaction;

        $this->writer = new WriteBatch($connection, $valueMapper, $database, $transaction);
    }

    /**
     * Get a Document Snapshot.
     *
     * Unlike {@see Google\Cloud\Firestore\Document::snapshot()}, if the document
     * does not exist, this method will throw
     * {@see Google\Cloud\Core\Exception\NotFoundException}.
     *
     * Example:
     * ```
     * $snapshot = $transaction->snapshot($document);
     * ```
     *
     * @param DocumentReference $document The document to retrieve.
     * @param array $options Configuration options.
     * @return DocumentSnapshot
     * @throws NotFoundException If the document does not exist.
     */
    public function snapshot(DocumentReference $document, array $options = [])
    {
        return $this->createSnapshot($this->connection, $this->valueMapper, $document, [
            'transaction' => $this->transaction,
            'allowNonExistence' => false
        ] + $options);
    }

    /**
     * Run a Query inside the Transaction.
     *
     * Example:
     * ```
     * $results = $transaction->runQuery($query);
     * ```
     *
     * @param Query $query A Firestore Query.
     * @param array $options Configuration options.
     * @return QuerySnapshot
     */
    public function runQuery(Query $query, array $options = [])
    {
        return $query->documents([
            'transaction' => $this->transaction
        ] + $options);
    }

    /**
     * Enqueue an operation to create a Firestore document.
     *
     * Example:
     * ```
     * $transaction->create($document, [
     *     'name' => 'John',
     *     'country' => 'USA'
     * ]);
     * ```
     *
     * @param DocumentReference $document The document to create.
     * @param array $fields An array containing fields, where keys are the field
     *        names, and values are field values. Nested arrays are allowed.
     *        Note that unlike {@see Google\Cloud\Firestore\Document::update()},
     *        field paths are NOT supported by this method.
     * @return Transaction
     */
    public function create(DocumentReference $document, array $fields)
    {
        $this->writer->create($document->name(), $fields);

        return $this;
    }

    /**
     * Enqueue an operation to modify or replace a Firestore document.
     *
     * Example:
     * ```
     * // In this example, all field not explicitly specified will be removed.
     * $transaction->set($document, [
     *     'name' => 'Johnny'
     * ]);
     * ```
     *
     * ```
     * // To specify MERGE over REPLACE, set `$options.merge` to `true`.
     * $transaction->set($document, [
     *     'name' => 'Johnny'
     * ], [
     *     'merge' => true
     * ]);
     * ```
     *
     * @param DocumentReference $document The document to modify or replace.
     * @param array $fields An array containing fields, where keys are the field
     *        names, and values are field values. Nested arrays are allowed.
     *        Note that unlike {@see Google\Cloud\Firestore\Document::update()},
     *        field paths are NOT supported by this method.
     * @param array $options {
     *     Configuration options.
     *
     *     @type bool $merge If true, unwritten fields will be preserved.
     *           Otherwise, they will be overwritten (removed). **Defaults to**
     *           `false`.
     * }
     * @return Transaction
     */
    public function set(DocumentReference $document, array $fields, array $options = [])
    {
        $this->writer->set($document->name(), $fields, $options);

        return $this;
    }

    /**
     * Enqueue an update to a Firestore document.
     *
     * Merges provided data with data stored in Firestore.
     *
     * Calling this method on a non-existent document will raise an exception.
     *
     * This method supports various sentinel values, to perform special operations
     * on fields. Available sentinel values are provided as methods, found in
     * {@see Google\Cloud\Firestore\FieldValue}.
     *
     * To update a document using field paths, see
     * {@see Google\Cloud\Firestore\Transaction::updatePaths()}.
     *
     * Example:
     * ```
     * $transaction->update($document, [
     *     'name' => 'John'
     * ]);
     * ```
     *
     * ```
     * // Fields may be deleted by setting them to a special value.
     * use Google\Cloud\Firestore\FieldValue;
     *
     * $transaction->update($document, [
     *     'country' => FieldValue::deleteField()
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @param DocumentReference $document The document to update.
     * @param array $fields An array containing field names paired with their value.
     * @param array $options Configuration options
     * @return Transaction
     * @codingStandardsIgnoreEnd
     */
    public function update(DocumentReference $document, array $fields, array $options = [])
    {
        $this->writer->update($document->name(), $fields, $options);

        return $this;
    }

    /**
     * Enqueue an update with field paths and values.
     *
     * Merges provided data with data stored in Firestore.
     *
     * Calling this method on a non-existent document will raise an exception.
     *
     * This method supports various sentinel values, to perform special operations
     * on fields. Available sentinel values are provided as methods, found in
     * {@see Google\Cloud\Firestore\FieldValue}.
     *
     * Note that field names must be provided using field paths, encoded either
     * as a dot-delimited string (i.e. `foo.bar`), or an instance of
     * {@see Google\Cloud\Firestore\FieldPath}. Nested arrays are not allowed.
     *
     * Example:
     * ```
     * $transaction->updatePaths($document, [
     *     ['path' => 'name', 'value' => 'John'],
     *     ['path' => 'country', 'value' => 'USA'],
     *     ['path' => 'cryptoCurrencies.bitcoin', 'value' => 0.5],
     *     ['path' => 'cryptoCurrencies.ethereum', 'value' => 10],
     *     ['path' => 'cryptoCurrencies.litecoin', 'value' => 5.51]
     * ]);
     * ```
     *
     * ```
     * // If your field names contain special characters (such as `.`, or symbols),
     * // using {@see Google\Cloud\Firestore\FieldPath} will properly escape each element.
     *
     * use Google\Cloud\Firestore\FieldPath;
     *
     * $transaction->updatePaths($document, [
     *     ['path' => new FieldPath(['cryptoCurrencies', 'big$$$coin']), 'value' => 5.51]
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @param DocumentReference $document The document to modify or replace.
     * @param array[] $data A list of arrays of form `[FieldPath|string $path, mixed $value]`.
     * @param array $options Configuration options
     * @return Transaction
     * @codingStandardsIgnoreEnd
     */
    public function updatePaths(DocumentReference $document, array $data, array $options = [])
    {
        $this->writer->updatePaths($document->name(), $data, $options);

        return $this;
    }

    /**
     * Enqueue an operation to delete a Firestore document.
     *
     * Example:
     * ```
     * $transaction->delete($document);
     * ```
     *
     * @param DocumentReference $document The document to delete.
     * @param array $options Configuration Options.
     * @return Transaction
     */
    public function delete(DocumentReference $document, array $options = [])
    {
        $this->writer->delete($document->name(), $options);

        return $this;
    }

    /**
     * Get the WriteBatch object.
     *
     * @access private
     * @return WriteBatch
     */
    public function writer()
    {
        return $this->writer;
    }
}
