<?php
/**
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Storage;

use Google\Cloud\ClientInterface;
use Google\Cloud\Storage\Bucket;
use Google\Cloud\Storage\Connection\JsonAPI;
use Google\Cloud\Storage\Connection\ConnectionInterface;

/**
 * Google Cloud Storage client. Allows you to store and retrieve data on
 * Google's infrastructure. Find more information at
 * [Google Cloud Storage API docs](https://developers.google.com/storage).
 */
class StorageClient
{
    /**
     * @var ConnectionInterface
     */
    private $connection;

    /**
     * @var string
     */
    private $projectId;

    /**
     * Pass in an array of configuration parameters to construct your client.
     *
     * Example:
     * ```
     * $client = new StorageClient([
     *     'keyFilePath' => '/path/to/key/file.json',
     *     'projectId' => 'myAwesomeProject'
     * ]);
     * ```
     *
     * @param array $config Configuration options. {
     *     @type callable $httpHandler Override the default http handler.
     *     @type string $keyFilePath The full path to your service account
     *           credentials .json file retrieved from the Google Developers
     *           Console.
     *     @type array $keyFile The contents of the service account credentials
     *           .json file retrieved from the Google Developers Console.
     *     @type string $projectId The project ID created in the Google
     *           Developers Console.
     * }
     */
    public function __construct(array $config = [])
    {
        // @todo should projectId be required?
        if (!array_key_exists('projectId', $config)) {
            return \InvalidArgumentException('projectId is required.');
        }

        $this->projectId = $config['projectId'];
        $this->connection = new JsonAPI($config);
    }

    /**
     * Lazily instantiates a bucket.
     *
     * @param string $bucketName The name of the bucket to request.
     * @return Bucket
     */
    public function bucket($bucketName)
    {
        return new Bucket($this->connection, $bucketName);
    }

    /**
     * Fetches all buckets in the project.
     *
     * Example:
     * ```
     * // Get all buckets beginning with the prefix 'album'.
     * $buckets = $client->buckets([
     *     'prefix' => 'album',
     *     'fields' => 'items/name,nextPageToken'
     * ]);
     *
     * foreach ($buckets as $bucket) {
     *     var_dump($bucket->name());
     * }
     * ```
     *
     * @param array $options Configuration options. {
     *     @type integer $maxResults Maximum number of results to return per
     *           request.
     *     @type string $prefix Filter results with this prefix.
     *     @type string $projection Determines which properties to return. May
     *           be either 'full' or 'noAcl'.
     *     @type string $fields Selector which will cause the response to only
     *           return the specified fields.
     * }
     * @return \Generator
     */
    public function buckets(array $options = [])
    {
        $options['pageToken'] = null;

        do {
            $response = $this->connection->listBuckets($options + ['project' => $this->projectId]);

            foreach ($response['items'] as $bucket) {
                yield new Bucket($this->connection, $bucket['name'], $bucket);
            }

            $options['pageToken'] = isset($response['nextPageToken']) ? $response['nextPageToken'] : null;
        } while ($options['pageToken']);
    }

    /**
     * Create a bucket.
     *
     * @link https://goo.gl/PNTqTh Learn more about configuring request options
     *       at the bucket insert API documentation.
     *
     * Example:
     * ```
     * // Create a bucket with logging enabled.
     * $bucket = $client->createBucket('myBeautifulBucket', [
     *     'logging' => [
     *         'logBucket' => 'bucketToLogTo',
     *         'logObjectPrefix' => 'myPrefix'
     *     ]
     * ]);
     * ```
     *
     * @param string $name Name of the bucket to be created.
     * @param array $options Configuration options. {
     *     @type string $preDefinedAcl Apply a predefined set of access controls
     *           to this bucket.
     *     @type string $predefinedDefaultObjectAcl Apply a predefined set of
     *           default object access controls to this bucket.
     *     @type string $projection Determines which properties to return. May
     *           be either 'full' or 'noAcl'.
     *     @type string $fields Selector which will cause the response to only
     *           return the specified fields.
     *     @type array $acl Access controls on the bucket.
     *     @type array $cors The bucket's Cross-Origin Resource Sharing (CORS)
     *           configuration.
     *     @type array $defaultObjectAcl Default access controls to apply to new
     *           objects when no ACL is provided.
     *     @type array $lifecycle The bucket's lifecycle configuration.
     *     @type string $location The location of the bucket. Defaults to US.
     *     @type array $logging The bucket's logging configuration, which
     *           defines the destination bucket and optional name prefix for the
     *           current bucket's logs.
     *     @type string $storageClass The bucket's storage class. This defines
     *           how objects in the bucket are stored anddetermines the SLA and
     *           the cost of storage. Values include STANDARD, NEARLINE and
     *           DURABLE_REDUCED_AVAILABILITY.
     *     @type array $versioning The bucket's versioning configuration.
     *     @type array $website The bucket's website configuration.
     * }
     * @return Bucket
     */
    public function createBucket($name, array $options = [])
    {
        $response = $this->connection->createBucket($options + ['name' => $name, 'project' => $this->projectId]);
        return new Bucket($this->connection, $name, $response);
    }
}
