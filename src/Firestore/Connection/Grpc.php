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

namespace Google\Cloud\Firestore\Connection;

use Google\Cloud\Core\GrpcRequestWrapper;
use Google\Cloud\Core\GrpcTrait;
use Google\Cloud\Firestore\FirestoreClient as ManualFirestoreClient;
use Google\Cloud\Firestore\V1beta1\FirestoreAdminClient;
use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Firestore\V1beta1\DocumentMask;
use Google\Firestore\V1beta1\Write;
use Google\GAX\Serializer;

class Grpc implements ConnectionInterface
{
    use GrpcTrait;

    private $serializer;

    private $admin;

    private $firestore;

    /**
     * @param array $config [optional]
     */
    public function __construct(array $config = [])
    {
        $this->serializer = new Serializer([
            'create_time' => function ($v) {
                return $this->formatTimestampFromApi($v);
            },
            'update_time' => function ($v) {
                return $this->formatTimestampFromApi($v);
            },
            'commit_time' => function ($v) {
                return $this->formatTimestampFromApi($v);
            },
        ], [
            'google.protobuf.Value' => function ($v) {
                return $this->flattenValue($v);
            },
            'google.protobuf.ListValue' => function ($v) {
                return $this->flattenListValue($v);
            },
            'google.protobuf.Struct' => function ($v) {
                return $this->flattenStruct($v);
            },
        ]);

        $config['serializer'] = $this->serializer;
        $this->setRequestWrapper(new GrpcRequestWrapper($config));

        $grpcConfig = $this->getGaxConfig(ManualFirestoreClient::VERSION);
        $this->admin = new FirestoreAdminClient($grpcConfig);
        $this->firestore = new FirestoreClient($grpcConfig);
    }

        /**
     * @param array $args
     */
    public function batchGetDocuments(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function beginTransaction(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function commit(array $args)
    {
        $writes = $this->pluck('writes', $args);
        foreach ($writes as $idx => $write) {
            if (isset($write['updateMask'])) {
                $maskFields = $write['updateMask'];
                $write['updateMask'] = new DocumentMask;
                $write['updateMask']->setFieldPaths($maskFields);
            }

            $writes[$idx] = $this->serializer->decodeMessage(new Write, $write);
        }

        return $this->send([$this->firestore, 'commit'], [
            $this->pluck('database', $args),
            $writes,
            $args
        ]);
    }

    /**
     * @param array $args
     */
    public function createDocument(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function createIndex(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function deleteDocument(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function deleteIndex(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function disableIndex(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function enableIndex(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function getCollectionGroup(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function getDatabase(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function getDocument(array $args)
    {
        return $this->send([$this->firestore, 'getDocument'], [
            $this->pluck('name', $args),
            $args
        ]);
    }

    /**
     * @param array $args
     */
    public function getField(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function getIndex(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function getNamespace(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function listCollectionGroups(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function listCollectionIds(array $args)
    {
        return $this->send([$this->firestore, 'listCollectionIds'], [
            $this->pluck('parent', $args),
            $args
        ]);
    }

    /**
     * @param array $args
     */
    public function listDatabases(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function listDocuments(array $args)
    {
        if (isset($args['mask'])) {
            $mask = $args['mask'];

            $args['mask'] = new DocumentMask;
            $args['mask']->setFieldPaths($mask);
        }

        return $this->send([$this->firestore, 'listDocuments'], [
            $this->pluck('parent', $args),
            $this->pluck('collectionId', $args),
            $args
        ]);
    }

    /**
     * @param array $args
     */
    public function listFields(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function listIndexes(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function listNamespaces(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function listen(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function rollback(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function runQuery(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function updateDocument(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * @param array $args
     */
    public function write(array $args)
    {
        throw new \BadMethodCallException('not implemented');
    }
}
