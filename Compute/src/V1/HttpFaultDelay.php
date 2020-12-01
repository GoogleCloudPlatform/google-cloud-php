<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the delay introduced by Loadbalancer before forwarding the request to the backend service as part of fault injection.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpFaultDelay</code>
 */
class HttpFaultDelay extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the value of the fixed delay interval.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration fixed_delay = 48602360;</code>
     */
    private $fixed_delay = null;
    /**
     * The percentage of traffic (connections/operations/requests) on which delay will be introduced as part of fault injection.
     * The value must be between 0.0 and 100.0 inclusive.
     *
     * Generated from protobuf field <code>double percentage = 151909018;</code>
     */
    private $percentage = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Duration $fixed_delay
     *           Specifies the value of the fixed delay interval.
     *     @type float $percentage
     *           The percentage of traffic (connections/operations/requests) on which delay will be introduced as part of fault injection.
     *           The value must be between 0.0 and 100.0 inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the value of the fixed delay interval.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration fixed_delay = 48602360;</code>
     * @return \Google\Cloud\Compute\V1\Duration
     */
    public function getFixedDelay()
    {
        return isset($this->fixed_delay) ? $this->fixed_delay : null;
    }

    public function hasFixedDelay()
    {
        return isset($this->fixed_delay);
    }

    public function clearFixedDelay()
    {
        unset($this->fixed_delay);
    }

    /**
     * Specifies the value of the fixed delay interval.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration fixed_delay = 48602360;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setFixedDelay($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->fixed_delay = $var;

        return $this;
    }

    /**
     * The percentage of traffic (connections/operations/requests) on which delay will be introduced as part of fault injection.
     * The value must be between 0.0 and 100.0 inclusive.
     *
     * Generated from protobuf field <code>double percentage = 151909018;</code>
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * The percentage of traffic (connections/operations/requests) on which delay will be introduced as part of fault injection.
     * The value must be between 0.0 and 100.0 inclusive.
     *
     * Generated from protobuf field <code>double percentage = 151909018;</code>
     * @param float $var
     * @return $this
     */
    public function setPercentage($var)
    {
        GPBUtil::checkDouble($var);
        $this->percentage = $var;

        return $this;
    }

}

