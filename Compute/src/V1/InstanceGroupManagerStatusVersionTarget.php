<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerStatusVersionTarget</code>
 */
class InstanceGroupManagerStatusVersionTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] A bit indicating whether version target has been reached in this managed instance group, i.e. all instances are in their target version. Instances' target version are specified by version field on Instance Group Manager.
     *
     * Generated from protobuf field <code>bool is_reached = 164773693;</code>
     */
    private $is_reached = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_reached
     *           [Output Only] A bit indicating whether version target has been reached in this managed instance group, i.e. all instances are in their target version. Instances' target version are specified by version field on Instance Group Manager.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] A bit indicating whether version target has been reached in this managed instance group, i.e. all instances are in their target version. Instances' target version are specified by version field on Instance Group Manager.
     *
     * Generated from protobuf field <code>bool is_reached = 164773693;</code>
     * @return bool
     */
    public function getIsReached()
    {
        return $this->is_reached;
    }

    /**
     * [Output Only] A bit indicating whether version target has been reached in this managed instance group, i.e. all instances are in their target version. Instances' target version are specified by version field on Instance Group Manager.
     *
     * Generated from protobuf field <code>bool is_reached = 164773693;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsReached($var)
    {
        GPBUtil::checkBool($var);
        $this->is_reached = $var;

        return $this;
    }

}

