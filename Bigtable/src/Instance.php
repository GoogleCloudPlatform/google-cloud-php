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
 */
class Instance
{
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
    private $id;

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
     * @param array $lroCallables
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
        
        if (strpos($instanceId, '/') !== false) {
            $namePrefix = 'projects/' .$projectId. '/instances/';
            if (substr($instanceId, 0, strlen($namePrefix)) === $namePrefix) {
                $name = $instanceId;
            } else {
                throw new \Exception('Instance id ' .$instanceId. ' is not formatted correctly.
                Please use the format `my-instance` or ' .$namePrefix. 'my-instance.');
            }
        } else {
            $name = $this->fullyQualifiedInstanceName($instanceId, $projectId);
        }
        $this->name = $name;
        $this->id = InstanceAdminClient::parseName($this->name)['instance'];
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
     * Return the instance id.
     *
     * Example:
     * ```
     * $instanceId = $instance->id();
     * ```
     *
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * Return the service representation of the instance.
     *
     * This method may require a service call.
     *
     *
     * @param array $options [optional] Configuration options.
     */
    public function info(array $options = [])
    {
        throw new \BadMethodCallException('This method is not implemented yet');
    }

    /**
     * Check if the instance exists.
     *
     * This method requires a service call.
     *
     *
     * @param array $options [optional] Configuration options.
     */
    public function exists(array $options = [])
    {
        throw new \BadMethodCallException('This method is not implemented yet');
    }

    /**
     * Fetch a fresh representation of the instance from the service.
     *
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/bigtable/docs/reference/admin/rpc/google.bigtable.admin.v2#google.bigtable.admin.v2.GetInstanceRequest GetInstanceRequest
     * @see https://cloud.google.com/bigtable/docs/reference/admin/rpc/google.bigtable.admin.v2#instance Instance
     * @codingStandardsIgnoreEnd
     *
     * @param array $options [optional] Configuration options.
     */
    public function reload(array $options = [])
    {
        throw new \BadMethodCallException('This method is not implemented yet');
    }

    /**
     * Return the instance state.
     *
     * When instances are created or updated, they may take some time before
     * they are ready for use. This method allows for checking whether an
     * instance is ready.
     *
     *
     * @param array $options [optional] Configuration options.
     */
    public function state(array $options = [])
    {
        throw new \BadMethodCallException('This method is not implemented yet');
    }

    /**
     * Create a new instance.
     *
     * Example:
     * ```
     * $bigtable = new Google\Cloud\Bigtable\BigtableClient();
     * $instanceType = Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_DEVELOPMENT;
     * $operation = $instance->create(
     *     [$bigtable->clusterMetadata('my-cluster', 'us-east1-b')],
     *     'My Instance',
     *     ['foo' => 'bar'],
     *     $instanceType
     * );
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/bigtable/docs/reference/admin/rpc/google.bigtable.admin.v2#CreateInstanceRequest CreateInstanceRequest
     * @codingStandardsIgnoreEnd
     *
     * @param array $clusterMetadataArray [
     *        $bigtable->clusterMetadata('clusterId1', 'locationId1', 'SSD', 3),
     *        $bigtable->clusterMetadata('clusterId2', 'locationId2', 'SSD', 3)
     * ]
     * @param string $displayName **Defaults to** the value of $instanceId.
     * @param array $labels as key/value pair ['foo' => 'bar']. For more information, see
     *        [Using labels to organize Google Cloud Platform resources](https://cloudplatform.googleblog.com/2015/10/using-labels-to-organize-Google-Cloud-Platform-resources.html).
     * @param int $type Possible values are represented by the following constants:
     *            `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_PRODUCTION`,
     *            `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_DEVELOPMENT` and
     *            `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_UNSPECIFIED`.
     *            **Defaults to** using `Google\Cloud\Bigtable\Instance::INSTANCE_TYPE_UNSPECIFIED`.
     *
     * @return LongRunningOperation<Instance>
     */
    public function create(
        array $clusterMetadataArray,
        $displayName = null,
        array $labels = [],
        $type = self::INSTANCE_TYPE_UNSPECIFIED
    ) {
        $projectName = InstanceAdminClient::projectName($this->projectId);
        $displayName = ($displayName) ? $displayName : $this->id;

        $clustersArray = [];
        foreach ($clusterMetadataArray as $value) {
            $id = $value['clusterId'];
            $clustersArray[$id] = $value;
        }

        $operation = $this->connection->createInstance([
            'parent' => $projectName,
            'instanceId' => $this->id,
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
            'instanceId' => $this->id,
            'name' => $this->name,
            'info' => $this->info
        ];
    }
}
