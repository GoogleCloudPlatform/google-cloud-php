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

use Google\Cloud\Core\ArrayTrait;
use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\Core\Timestamp;
use Google\Cloud\Core\ValueMapperTrait;
use Google\Cloud\Firestore\Connection\ConnectionInterface;
use Google\Cloud\Firestore\DocumentReference;

/**
 * Methods common to representing Document Snapshots.
 */
trait SnapshotTrait
{
    use ArrayTrait;
    use PathTrait;

    /**
     * Execute a service request to retrieve a document snapshot.
     *
     * @param ConnectionInterface $connection A Connection to Cloud Firestore.
     * @param ValueMapper $valueMapper A Firestore Value Mapper.
     * @param DocumentReference $reference The parent document.
     * @param array $options {
     *     Configuration Options
     *
     *     @type string $transaction The transaction ID to fetch the snapshot.
     * }
     * @return DocumentSnapshot
     */
    private function createSnapshot(
        ConnectionInterface $connection,
        ValueMapper $valueMapper,
        DocumentReference $reference,
        array $options = []
    ) {
        $document = [];
        $fields = [];
        $exists = true;

        try {
            $document = $this->getSnapshot($connection, $reference->name(), $options);
        } catch (NotFoundException $e) {
            $exists = false;
        }

        return $this->createSnapshotWithData($valueMapper, $reference, $document, $exists);
    }

    /**
     * Create a document snapshot by providing a dataset.
     *
     * This method will not perform a service request.
     *
     * @codingStandardsIgnoreStart
     * @param ValueMapper $valueMapper A Firestore Value Mapper.
     * @param DocumentReference $reference The parent document.
     * @param array $document [Document](https://cloud.google.com/firestore/docs/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.Document)
     * @param bool $exists Whether the document exists. **Defaults to** `true`.
     * @codingStandardsIgnoreEnd
     */
    private function createSnapshotWithData(
        ValueMapper $valueMapper,
        DocumentReference $reference,
        array $document,
        $exists = true
    ) {
        $fields = $exists
            ? $valueMapper->decodeValues($this->pluck('fields', $document))
            : [];

        $document = $this->transformSnapshotTimestamps($valueMapper, $document);

        return new DocumentSnapshot($reference, $valueMapper, $document, $fields, $exists);
    }

    /**
     * Send a service request for a snapshot, and return the raw data
     *
     * @param ConnectionInterface $connection A Connection to Cloud Firestore
     * @param string $name The document name.
     * @param array $options Configuration options.
     * @return array
     * @throws \InvalidArgumentException if an invalid `$options.readTime` is specified.
     * @throws NotFoundException If the document does not exist.
     */
    private function getSnapshot(ConnectionInterface $connection, $name, array $options = [])
    {
        if (isset($options['readTime'])) {
            if (!($options['readTime'] instanceof Timestamp)) {
                throw new \InvalidArgumentException(sprintf(
                    '`$options.readTime` must be an instance of %s',
                    Timestamp::class
                ));
            }

            $options['readTime'] = $options['readTime']->formatForApi();
        }

        $snapshot = $connection->batchGetDocuments([
            'database' => $this->databaseFromName($name),
            'documents' => [$name],
        ] + $options)->current();

        if (!isset($snapshot['found'])) {
            throw new NotFoundException(sprintf(
                'Document %s does not exist',
                $name
            ));
        }

        return $snapshot['found'];
    }

    /**
     * Convert snapshot timestamps to Google Cloud PHP types.
     *
     * @param ValueMapper $valueMapper A Firestore Value Mapper
     * @param array $data The snapshot data.
     * @return array
     */
    private function transformSnapshotTimestamps(ValueMapper $valueMapper, array $data)
    {
        $data['createTime'] = isset($data['createTime'])
            ? $valueMapper->createTimestampWithNanos($data['createTime'])
            : null;

        $data['updateTime'] = isset($data['updateTime'])
            ? $valueMapper->createTimestampWithNanos($data['updateTime'])
            : null;

        $data['readTime'] = isset($data['readTime'])
            ? $valueMapper->createTimestampWithNanos($data['readTime'])
            : null;

        return $data;
    }

    private function getDocumentsByPaths(
        ConnectionInterface $connection,
        ValueMapper $mapper,
        $projectId,
        $database,
        array $paths,
        array $options
    ) {
        array_walk($paths, function (&$path) use ($projectId, $database) {
            if ($path instanceof DocumentReference) {
                $path = $path->name();
            }

            if (!is_string($path)) {
                throw new \InvalidArgumentException(
                    'All members of $paths must be strings or instances of DocumentReference.'
                );
            }

            $path = $this->isRelative($path)
                ? $this->fullName($projectId, $database, $path)
                : $path;
        });

        $documents = $this->connection->batchGetDocuments([
            'database' => $this->databaseName($projectId, $database),
            'documents' => $paths,
        ] + $options);

        $res = [];
        foreach ($documents as $document) {
            $exists = isset($document['found']);
            $data = $exists
                ? $document['found'] + ['readTime' => $document['readTime']]
                : ['readTime' => $document['readTime']];

            $name = $exists
                ? $document['found']['name']
                : $document['missing'];

            $ref = $this->getDocumentReference(
                $connection,
                $mapper,
                $projectId,
                $database,
                $name
            );

            $res[$name] = $this->createSnapshotWithData(
                $mapper,
                $ref,
                $data,
                $exists
            );
        }

        $out = [];
        foreach ($paths as $path) {
            $out[] = $res[$path];
        }

        return $out;
    }

    private function getDocumentReference(
        ConnectionInterface $connection,
        ValueMapper $mapper,
        $projectId,
        $database,
        $name
    ) {
        if ($this->isRelative($name)) {
            $name = $this->fullName($projectId, $database, $name);
        }

        if (!$this->isDocument($name)) {
            throw new \InvalidArgumentException('Given path is not a valid document path.');
        }

        return new DocumentReference(
            $connection,
            $mapper,
            $this->getCollectionReference(
                $connection,
                $mapper,
                $projectId,
                $database,
                $this->parentPath($name)
            ),
            $name
        );
    }

    private function getCollectionReference(
        ConnectionInterface $connection,
        ValueMapper $mapper,
        $projectId,
        $database,
        $name
    ) {
        if ($this->isRelative($name)) {
            $name = $this->fullName($projectId, $database, $name);
        }

        if (!$this->isCollection($name)) {
            throw new \InvalidArgumentException(sprintf(
                'Given path `%s` is not a valid collection path.',
                $name
            ));
        }

        return new CollectionReference($connection, $mapper, $name);
    }
}
