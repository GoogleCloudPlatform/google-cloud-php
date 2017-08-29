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
use Google\Cloud\Core\Iterator\ItemIterator;
use Google\Cloud\Core\Iterator\PageIterator;
use Google\Cloud\Firestore\Connection\ConnectionInterface;

/**
 * Represents a reference to a Firestore document.
 */
class Document
{
    use OperationTrait;
    use DebugInfoTrait;
    use PathTrait;

    private $connection;
    private $valueMapper;
    private $name;

    public function __construct(ConnectionInterface $connection, ValueMapper $valueMapper, $name)
    {
        $this->connection = $connection;
        $this->valueMapper = $valueMapper;
        $this->name = $name;
    }

    public function parent()
    {
        return new Collection($this->connection, $this->valueMapper, $this->parentPath($this->name));
    }

    public function create(array $fields = [], array $options = [])
    {
        $fields = $this->valueMapper->encodeValues($fields);

        $writes = [
            $this->createDatabaseWrite('update', $this->name, [
                'fields' => $fields,
                'currentDocument' => ['exists' => false]
            ])
        ];

        return $this->commitResponse($this->connection->commit([
            'database' => $this->databaseName($this->name),
            'writes' => $writes
        ] + $options));
    }

    public function set($key, $value, array $options = [])
    {}

    public function update(array $fields, array $options = [])
    {}

    public function delete(array $options = [])
    {}

    /**
     * Get a document snapshot.
     *
     * @param array $options {
     *     Configuration Options
     *
     *     @type array $mask A list of fields to return. If not set, returns all
     *           fields.
     * }
     * @return DocumentSnapshot
     */
    public function snapshot(array $options = [])
    {
        $exists = true;
        $document = [];
        $fields = [];

        try {
            $document = $this->connection->getDocument([
                'name' => $this->name,
            ] + $options);

            $fields = $this->valueMapper->decodeValues(
                $this->pluck('fields', $document)
            );
        } catch (NotFoundException $e) {
            $exists = false;
        }

        return new DocumentSnapshot($this->name, $document, $fields, $exists);
    }

    public function collection($collectionId)
    {
        return new Collection($this->connection, $this->valueMapper, $this->childPath($this->name, $collectionId));
    }

    public function collections(array $options = [])
    {
        $resultLimit = $this->pluck('resultLimit', $options, false);
        return new ItemIterator(
            new PageIterator(
                function ($collectionId) {
                    return new Collection($this->connection, $this->valueMapper, $this->childPath($this->name, $collectionId));
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
