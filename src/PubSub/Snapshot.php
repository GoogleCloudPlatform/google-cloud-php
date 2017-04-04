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

namespace Google\Cloud\PubSub;

use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\PubSub\Connection\ConnectionInterface;

/**
 * Represents a Pub/Sub Snapshot
 *
 * Example:
 * ```
 * use Google\Cloud\PubSub\PubSubClient;
 *
 * $pubsub = new PubSubClient();
 *
 * $snapshot = $pubsub->snapshot($snapshotName);
 * ```
 */
class Snapshot
{
    use ResourceNameTrait;

    /**
     * @var ConnectionInterface
     */
    private $connection;

    /**
     * @var string
     */
    private $projectId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $encode;

    /**
     * @var array
     */
    private $info;

    /**
     * @param ConnectionInterface $connection A connection to Cloud Pub/Sub
     * @param string $projectId The current Project ID.
     * @param string $name The snapshot name. This value should be the bare
     *        name, not fully qualified. (e.g. `foo`, rather than `projects/<projectId>/snapshots/foo`).
     * @param bool $encode Whether certain request arguments should be base64-encoded.
     * @param array $info [optional] The snapshot data. When creating a
     *        Snapshot, this array **must** contain a `$info.subscription`
     *        argument with a fully-qualified subscription name.
     */
    public function __construct(ConnectionInterface $connection, $projectId, $name, $encode, array $info = [])
    {
        $this->connection = $connection;
        $this->projectId = $projectId;
        $this->name = $name;
        $this->encode = $encode;
        $this->info = $info + [
            'name' => null,
            'subscription' => null,
            'topic' => null,
            'expirationTime' => null
        ];
    }

    /**
     * Get the Snapshot name.
     *
     * Example:
     * ```
     * echo $snapshot->name();
     * ```
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Create a new Snapshot.
     *
     * Example:
     * ```
     * $info = $snapshot->create();
     * ```
     *
     * @param array $options [optional] Configuration options.
     * @return array
     * @throws \BadMethodCallException If a subscription name cannot be found.
     */
    public function create(array $options = [])
    {
        if (!$this->info['subscription']) {
            throw new \BadMethodCallException('A subscription is required to create a snapshot.');
        }

        return $this->info = $this->connection->createSnapshot([
            'project' => $this->formatName('project', $this->projectId),
            'name' => $this->formatName('snapshot', $this->name, $this->projectId),
            'subscription' => $this->info['subscription']
        ]);
    }

    /**
     * Delete the snapshot.
     *
     * Example:
     * ```
     * $snapshot->delete();
     * ```
     *
     * @param array $options [optional] Configuration options.
     * @return void
     */
    public function delete(array $options = [])
    {
        $this->connection->deleteSnapshot([
            'snapshot' => $this->formatName('snapshot', $this->name, $this->projectId)
        ]);
    }

    /**
     * Get the Topic attached to the snapshot, if one exists.
     *
     * Example:
     * ```
     * $topic = $snapshot->topic();
     * ```
     *
     * @return Topic|null
     */
    public function topic()
    {
        return $this->info['topic']
            ? new Topic($this->connection, $this->projectId, $this->info['topic'])
            : null;
    }

    /**
     * Get the Subscription attached to the snapshot, if one exists.
     *
     * Example:
     * ```
     * $subscription = $snapshot->subscription();
     * ```
     *
     * @return Subscription|null
     */
    public function subscription()
    {
        return $this->info['subscription']
            ? new Subscription($this->connection, $this->projectId, $this->info['subscription'], null)
            : null;
    }

    /**
     * @access private
     */
    public function __debugInfo()
    {
        return [
            'connection' => get_class($this->connection),
            'projectId' => $this->projectId,
            'name' => $this->name,
            'info' => $this->info
        ];
    }
}
