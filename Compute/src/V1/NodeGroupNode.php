<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupNode</code>
 */
class NodeGroupNode extends \Google\Protobuf\Internal\Message
{
    /**
     * Accelerators for this node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig accelerators = 1141608;</code>
     */
    private $accelerators;
    /**
     * CPU overcommit.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupNode.CpuOvercommitType cpu_overcommit_type = 247727959;</code>
     */
    private $cpu_overcommit_type = 0;
    /**
     * Local disk configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LocalDisk disks = 95594102;</code>
     */
    private $disks;
    /**
     * Instances scheduled on this node.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     */
    private $instances;
    /**
     * The name of the node.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * The type of this node.
     *
     * Generated from protobuf field <code>string node_type = 197397335;</code>
     */
    private $node_type = '';
    /**
     * Binding properties for the physical server.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ServerBinding server_binding = 208179593;</code>
     */
    private $server_binding = null;
    /**
     * Server ID associated with this node.
     *
     * Generated from protobuf field <code>string server_id = 70997911;</code>
     */
    private $server_id = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupNode.Status status = 181260274;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\AcceleratorConfig[]|\Google\Protobuf\Internal\RepeatedField $accelerators
     *           Accelerators for this node.
     *     @type int $cpu_overcommit_type
     *           CPU overcommit.
     *     @type \Google\Cloud\Compute\V1\LocalDisk[]|\Google\Protobuf\Internal\RepeatedField $disks
     *           Local disk configurations.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $instances
     *           Instances scheduled on this node.
     *     @type string $name
     *           The name of the node.
     *     @type string $node_type
     *           The type of this node.
     *     @type \Google\Cloud\Compute\V1\ServerBinding $server_binding
     *           Binding properties for the physical server.
     *     @type string $server_id
     *           Server ID associated with this node.
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Accelerators for this node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig accelerators = 1141608;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccelerators()
    {
        return $this->accelerators;
    }

    /**
     * Accelerators for this node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig accelerators = 1141608;</code>
     * @param \Google\Cloud\Compute\V1\AcceleratorConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AcceleratorConfig::class);
        $this->accelerators = $arr;

        return $this;
    }

    /**
     * CPU overcommit.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupNode.CpuOvercommitType cpu_overcommit_type = 247727959;</code>
     * @return int
     */
    public function getCpuOvercommitType()
    {
        return $this->cpu_overcommit_type;
    }

    /**
     * CPU overcommit.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupNode.CpuOvercommitType cpu_overcommit_type = 247727959;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuOvercommitType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NodeGroupNode\CpuOvercommitType::class);
        $this->cpu_overcommit_type = $var;

        return $this;
    }

    /**
     * Local disk configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LocalDisk disks = 95594102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * Local disk configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LocalDisk disks = 95594102;</code>
     * @param \Google\Cloud\Compute\V1\LocalDisk[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\LocalDisk::class);
        $this->disks = $arr;

        return $this;
    }

    /**
     * Instances scheduled on this node.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Instances scheduled on this node.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instances = $arr;

        return $this;
    }

    /**
     * The name of the node.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the node.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The type of this node.
     *
     * Generated from protobuf field <code>string node_type = 197397335;</code>
     * @return string
     */
    public function getNodeType()
    {
        return $this->node_type;
    }

    /**
     * The type of this node.
     *
     * Generated from protobuf field <code>string node_type = 197397335;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_type = $var;

        return $this;
    }

    /**
     * Binding properties for the physical server.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ServerBinding server_binding = 208179593;</code>
     * @return \Google\Cloud\Compute\V1\ServerBinding
     */
    public function getServerBinding()
    {
        return isset($this->server_binding) ? $this->server_binding : null;
    }

    public function hasServerBinding()
    {
        return isset($this->server_binding);
    }

    public function clearServerBinding()
    {
        unset($this->server_binding);
    }

    /**
     * Binding properties for the physical server.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ServerBinding server_binding = 208179593;</code>
     * @param \Google\Cloud\Compute\V1\ServerBinding $var
     * @return $this
     */
    public function setServerBinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ServerBinding::class);
        $this->server_binding = $var;

        return $this;
    }

    /**
     * Server ID associated with this node.
     *
     * Generated from protobuf field <code>string server_id = 70997911;</code>
     * @return string
     */
    public function getServerId()
    {
        return $this->server_id;
    }

    /**
     * Server ID associated with this node.
     *
     * Generated from protobuf field <code>string server_id = 70997911;</code>
     * @param string $var
     * @return $this
     */
    public function setServerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupNode.Status status = 181260274;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupNode.Status status = 181260274;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NodeGroupNode\Status::class);
        $this->status = $var;

        return $this;
    }

}

