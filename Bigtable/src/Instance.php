<?php
/**
 * Copyright 2018, Google LLC All rights reserved.
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

namespace Google\Cloud\Bigtable;

use Google\Cloud\Bigtable\Admin\V2\BigtableInstanceAdminClient as InstanceAdminClient;
use Google\Cloud\Bigtable\Admin\V2\Instance_Type;
use Google\Cloud\Bigtable\Admin\V2\Instance_State;
use Google\Cloud\Bigtable\Admin\V2\StorageType;
use Google\Cloud\Bigtable\Connection\ConnectionInterface;
use Google\Cloud\Core\ArrayTrait;
use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\Core\Iterator\ItemIterator;
use Google\Cloud\Core\LongRunning\LongRunningConnectionInterface;
use Google\Cloud\Core\LongRunning\LongRunningOperation;
use Google\Cloud\Core\LongRunning\LROTrait;

/**
 * Represents a Cloud Bigtable instance
 *
 * Example:
 * ```
 * use Google\Cloud\Bigtable\BigtableClient;
 *
 * $bigtable = new BigtableClient();
 *
 * $instance = $bigtable->instance('my-instance');
 * ```
 *
 * @method resumeOperation() {
 *     Resume a Long Running Operation
 *
 *     Example:
 *     ```
 *     $operation = $instance->resumeOperation($operationName);
 *     ```
 *
 *     @param string $operationName The Long Running Operation name.
 *     @param array $info [optional] The operation data.
 *     @return LongRunningOperation
 * }
 * @method longRunningOperations() {
 *     List long running operations.
 *
 *     Example:
 *     ```
 *     $operations = $instance->longRunningOperations();
 *     ```
 *
 *     @param array $options [optional] {
 *         Configuration Options.
 *
 *         @type string $name The name of the operation collection.
 *         @type string $filter The standard list filter.
 *         @type int $pageSize Maximum number of results to return per
 *               request.
 *         @type int $resultLimit Limit the number of results returned in total.
 *               **Defaults to** `0` (return all results).
 *         @type string $pageToken A previously-returned page token used to
 *               resume the loading of results from a specific point.
 *     }
 *     @return ItemIterator<LongRunningOperation>
 * }
 */
class Instance
{
    use ArrayTrait;
    use LROTrait;

    const STORAGE_TYPE_UNSPECIFIED = StorageType::STORAGE_TYPE_UNSPECIFIED;
    const STORAGE_TYPE_SSD = StorageType::SSD;
    const STORAGE_TYPE_HDD = StorageType::HDD;

    const INSTANCE_TYPE_UNSPECIFIED = Instance_Type::TYPE_UNSPECIFIED;
    const INSTANCE_TYPE_PRODUCTION = Instance_Type::PRODUCTION;
    const INSTANCE_TYPE_DEVELOPMENT = Instance_Type::DEVELOPMENT;

    const STATE_TYPE_STATE_NOT_KNOWN = Instance_State::STATE_NOT_KNOWN;
    const STATE_TYPE_READY = Instance_State::READY;
    const STATE_TYPE_CREATING = Instance_State::CREATING;

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
     * @var array
     */
    private $info;

    /**
     * Create an object representing a Cloud Bigtable instance.
     *
     * @param ConnectionInterface $connection The connection to the
     *        Cloud Bigtable Admin API.
     * @param LongRunningConnectionInterface $lroConnection An implementation
     *        mapping to methods which handle LRO resolution in the service.
     * @param array $lroCallables Grpc object.
     * @param string $projectId The project ID.
     * @param string $instanceId The instance ID.
     * @param array $info [optional] A representation of the instance object.
     */
    public function __construct(
        ConnectionInterface $connection,
        LongRunningConnectionInterface $lroConnection,
        array $lroCallables,
        $projectId,
        $instanceId,
        array $info = []
    ) {
        $this->connection = $connection;
        $this->projectId = $projectId;
        $this->name = $this->fullyQualifiedInstanceName($instanceId, $projectId);
        $this->info = $info;
        $this->setLroProperties($lroConnection, $lroCallables, $this->name);
    }

    /**
     * Return the instance name.
     *
     * Example:
     * ```
     * $name = $instance->name();
     * ```
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Return the service representation of the instance.
     *
     * This method may require a service call.
     *
     * Example:
     * ```
     * $info = $instance->info();
     * echo $info['displayName'];
     * ```
     *
     * @param array $options [optional] Configuration options.
     * @return array
     */
    public function info(array $options = [])
    {
        if (!$this->info) {
            $this->reload($options);
        }

        return $this->info;
    }

    /**
     * Check if the instance exists.
     *
     * This method requires a service call.
     *
     * Example:
     * ```
     * if ($instance->exists()) {
     *     echo 'Instance exists!';
     * }
     * ```
     *
     * @param array $options [optional] Configuration options.
     * @return bool
     */
    public function exists(array $options = [])
    {
        try {
            $this->reload($options);
        } catch (NotFoundException $e) {
            return false;
        }

        return true;
    }

    /**
     * Fetch a fresh representation of the instance from the service.
     *
     * Example:
     * ```
     * $info = $instance->reload();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/bigtable/docs/reference/admin/rpc/google.bigtable.admin.v2#google.bigtable.admin.v2.GetInstanceRequest GetInstanceRequest
     * @see https://cloud.google.com/bigtable/docs/reference/admin/rpc/google.bigtable.admin.v2#instance Instance
     * @codingStandardsIgnoreEnd
     *
     * @param array $options [optional] Configuration options.
     * @return array
     */
    public function reload(array $options = [])
    {
        $this->info = $this->connection->getInstance($options + [
            'name' => $this->name,
            'projectId' => $this->projectId
        ]);

        return $this->info;
    }

    /**
     * Return the instance state.
     *
     * When instances are created or updated, they may take some time before
     * they are ready for use. This method allows for checking whether an
     * instance is ready.
     *
     * Example:
     * ```
     * if ($instance->state() === Instance::STATE_TYPE_READY) {
     *     echo 'Instance is ready!';
     * }
     * ```
     *
     * @param array $options [optional] Configuration options.
     * @return string|null
     */
    public function state(array $options = [])
    {
        $info = $this->info($options);
        return (isset($info['state']))
            ? $info['state']
            : null;
    }

    /**
     * Create a new instance.
     *
     * Example:
     * ```
     * $operation = $instance->create();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/bigtable/docs/reference/admin/rpc/google.bigtable.admin.v2#CreateInstanceRequest CreateInstanceRequest
     *
     * @param array $options [optional] {
     *     Configuration options
     *
     *     @type string $displayName **Defaults to** the value of $instanceId.
     *     @type int $instanceType Possible values are represented by the following constants: `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_PRODUCTION`, `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_DEVELOPMENT` and `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_UNSPECIFIED`.
     *           **Defaults to** using `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_UNSPECIFIED`.
     *     @type array $labels as key/value pair ['foo' => 'bar']. For more information, see
     *           [Using labels to organize Google Cloud Platform resources](https://cloudplatform.googleblog.com/2015/10/using-labels-to-organize-Google-Cloud-Platform-resources.html).
     *     @type array $clusters [{
     *         string $clusterId
     *         string $locationId
     *         int $serveNodes
     *         int $storageType The storage media type for persisting Bigtable data. Possible values include `Google\Cloud\Bigtable\Instance::STORAGE_TYPE_SSD` and `Google\Cloud\Bigtable\Instance::STORAGE_TYPE_HDD`.
     *             **Defaults to** `Google\Cloud\Bigtable\Instance::STORAGE_TYPE_UNSPECIFIED`.
     *     }]
     *     Ex. [
     *           [
     *               clusterId => 'my-cluster1',
     *               location => 'us-east1-c',
     *               serveNodes => 3,
     *               storageType => Google\Cloud\Bigtable\Instance::STORAGE_TYPE_SSD
     *           ],
     *           [
     *               clusterId => 'my-cluster2',
     *               location => 'us-east1-b',
     *               serveNodes => 3,
     *               storageType => Google\Cloud\Bigtable\Instance::STORAGE_TYPE_SSD
     *           ]
     *     ]
     * }
     * @return LongRunningOperation<Instance>
     * @codingStandardsIgnoreEnd
     */
    public function create(array $options = [])
    {
        $projectName = InstanceAdminClient::projectName($this->projectId);
        $instanceId = InstanceAdminClient::parseName($this->name)['instance'];
        $displayName = isset($options['displayName']) ? $options['displayName'] : $instanceId;
        $type = isset($options['instanceType']) ? $options['instanceType'] : self::INSTANCE_TYPE_UNSPECIFIED;
        $labels = isset($options['labels']) ? $options['labels'] : [];
        $clusters = isset($options['clusters']) ? $options['clusters'] : [];

        $clustersArray = [];
        foreach ($clusters as $value) {
            $id = $value['clusterId'];
            $clustersArray[$id] = $this->cluster($value);
        }

        $operation = $this->connection->createInstance([
            'parent' => $projectName,
            'instanceId' => $instanceId,
            'instance' => [
                'displayName' => $displayName,
                'type' => $type,
                'labels' => $labels
            ],
            'clusters' => $clustersArray
        ]);

        return $this->resumeOperation($operation['name'], $operation);
    }

    /**
     * @param array $args {
     *     @type string $locationId
     *     @type int $serveNodes
     *     @type int $storageType **Defaults to** `StorageType::STORAGE_TYPE_UNSPECIFIED`.
     * }
     * @return array
     */
    private function cluster($args)
    {
        $cluster = [];
        $cluster['location'] = InstanceAdminClient::locationName($this->projectId, $args['locationId']);
        $cluster['defaultStorageType'] = isset($args['storageType'])
            ? $args['storageType']
            : self::STORAGE_TYPE_UNSPECIFIED;
        if (isset($args['serveNodes'])) {
            $cluster['serveNodes'] = $args['serveNodes'];
        }

        return $cluster;
    }

    /**
     * Convert the simple instance name to a fully qualified name.
     *
     * @param string $instanceId The instance ID.
     * @param string $projectId The project ID.
     * @return string
     */
    private function fullyQualifiedInstanceName($instanceId, $projectId)
    {
        return InstanceAdminClient::instanceName($projectId, $instanceId);
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
            'info' => $this->info
        ];
    }
}
