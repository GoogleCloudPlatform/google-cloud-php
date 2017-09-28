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
use Google\Cloud\Core\Iterator\ItemIterator;
use Google\Cloud\Core\Iterator\PageIterator;
use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\Core\Exception\ConflictException;
use Google\Cloud\Firestore\Connection\ConnectionInterface;

/**
 * Represents a reference to a Firestore document.
 */
class DocumentReference
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
     * @var CollectionReference
     */
    private $parent;

    /**
     * @var string
     */
    private $name;

    public function __construct(ConnectionInterface $connection, ValueMapper $valueMapper, CollectionReference $parent, $name)
    {
        $this->connection = $connection;
        $this->valueMapper = $valueMapper;
        $this->parent = $parent;
        $this->name = $name;
    }

    /**
     * Returns the parent collection.
     *
     * @return CollectionReference
     */
    public function parent()
    {
        return $this->parent;
    }

    /**
     * Get the document name.
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Get the document identifier (i.e. the last path element).
     *
     * @return string
     */
    public function id()
    {
        return $this->pathId($this->name);
    }

    /**
     * Create a new document in Firestore. If the document already exists, this method will fail.
     *
     * @param array $fields An array containing field names paired with their value.
     *        Accepts a nested array, or a simple array of field paths.
     * @param array $options Configuration Options.
     * @return array
     * @throws ConflictException
     */
    public function create(array $fields = [], array $options = [])
    {
        $writer = new WriteBatch(
            $this->connection,
            $this->valueMapper,
            $this->databaseFromName($this->name)
        );

        $writer->create($this->name, $fields, $options);

        return $writer->commit($options);
    }

    /**
     * Replace all fields in a Firestore document.
     *
     * @param array $fields An array containing fields, where keys are the field
     *        names, and values are field values. Nested arrays are allowed.
     *        Note that unlike {@see Google\Cloud\Firestore\Document::update()},
     *        field paths are NOT supported by this method.
     * @param array $options {
     *     Configuration Options
     *
     *     @type bool $merge If true, unwritten fields will be preserved.
     *           Otherwise, they will be overwritten (removed). **Defaults to**
     *           `false`.
     * }
     * @return array
     * @throws ConflictException If the precondition is not met.
     */
    public function set(array $fields, array $options = [])
    {
        $writer = new WriteBatch(
            $this->connection,
            $this->valueMapper,
            $this->databaseFromName($this->name)
        );

        $writer->set($this->name, $fields, $options);

        return $writer->commit($options);
    }

    /**
     * Update a Firestore document. Merges provided data with data stored in Firestore.
     *
     * By default, this method will fail if the document does not exist.
     *
     * To remove a field, set the field value to `FirestoreClient::DELETE_FIELD`.
     *
     * Example:
     * ```
     * $document->update([
     *     'name' => 'John',
     *     'country' => 'USA',
     *     'cryptoCurrencies' => [
     *         'bitcoin' => 0.5,
     *         'ethereum' => 10,
     *         'litecoin' => 5.51
     *     ]
     * ]);
     *
     * ```
     * // Remove a field using the `FirestoreClient::DELETE_FIELD` special value.
     * $document->update([
     *     'country' => FirestoreClient::DELETE_FIELD
     * ]);
     * ```
     *
     * ```
     * // Documents can be updated using field paths as well.
     * $document->update([
     *     'name' => 'John',
     *     'country' => 'USA',
     *     'cryptoCurrencies.bitcoin' => 0.5,
     *     'cryptoCurrencies.ethereum' => 10,
     *     'cryptoCurrencies.litecoin' => 5.51
     * ]);
     * ```
     *
     * @param array $fields An array containing field names paired with their value.
     *        Accepts a nested array, or a simple array of field paths.
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
     * }
     * @return array
     * @throws ConflictException If the
     *         precondition is not met.
     */
    public function update(array $fields, array $options = [])
    {
        $writer = new WriteBatch(
            $this->connection,
            $this->valueMapper,
            $this->databaseFromName($this->name)
        );

        $writer->update($this->name, $fields, $options);

        return $writer->commit($options);
    }

    /**
     * Delete a Firestore document.
     *
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
     * }
     * @return array
     * @throws ConflictException If the precondition is not met.
     */
    public function delete(array $options = [])
    {
        $writer = new WriteBatch(
            $this->connection,
            $this->valueMapper,
            $this->databaseFromName($this->name)
        );

        $writer->delete($this->name, $options);

        return $writer->commit($options);
    }

    /**
     * Get a read-only snapshot of the document.
     *
     * @param array $options {
     *     Configuration Options
     *
     *     @type array $mask A list of fields to return. If not set, returns all
     *           fields.
     *     @type Timestamp $readTime Reads the version of the document at the
     *           given time. This may not be older than 60 seconds.
     * }
     * @return DocumentSnapshot
     */
    public function snapshot(array $options = [])
    {
        return $this->createSnapshot($this, $options);
    }

    /**
     * Lazily get a collection which is a child of the current document.
     *
     * @param string $collectionId
     * @return CollectionReference
     */
    public function collection($collectionId)
    {
        return new CollectionReference($this->connection, $this->valueMapper, $this->childPath($this->name, $collectionId));
    }

    /**
     * List all collections which are children of the current document.
     *
     * @param array $options
     * @return ItemIterator<Collection>
     */
    public function collections(array $options = [])
    {
        $resultLimit = $this->pluck('resultLimit', $options, false);
        return new ItemIterator(
            new PageIterator(
                function ($collectionId) {
                    return new CollectionReference($this->connection, $this->valueMapper, $this->childPath($this->name, $collectionId));
                },
                [$this->connection, 'listCollectionIds'],
                $options + ['parent' => $this->name],
                [
                    'itemsKey' => 'collectionIds',
                    'resultLimit' => $resultLimit
                ]
            )
        );
    }
}
