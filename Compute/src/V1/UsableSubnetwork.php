<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Subnetwork which the current user has compute.subnetworks.use permission on.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UsableSubnetwork</code>
 */
class UsableSubnetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 98117322;</code>
     */
    private $ip_cidr_range = null;
    /**
     * Network URL.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     */
    private $network = null;
    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     */
    private $secondary_ip_ranges;
    /**
     * Subnetwork URL.
     *
     * Generated from protobuf field <code>string subnetwork = 307827694;</code>
     */
    private $subnetwork = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_cidr_range
     *           The range of internal addresses that are owned by this subnetwork.
     *     @type string $network
     *           Network URL.
     *     @type \Google\Cloud\Compute\V1\UsableSubnetworkSecondaryRange[]|\Google\Protobuf\Internal\RepeatedField $secondary_ip_ranges
     *           Secondary IP ranges.
     *     @type string $subnetwork
     *           Subnetwork URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 98117322;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return isset($this->ip_cidr_range) ? $this->ip_cidr_range : '';
    }

    public function hasIpCidrRange()
    {
        return isset($this->ip_cidr_range);
    }

    public function clearIpCidrRange()
    {
        unset($this->ip_cidr_range);
    }

    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 98117322;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * Network URL.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Network URL.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryIpRanges()
    {
        return $this->secondary_ip_ranges;
    }

    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     * @param \Google\Cloud\Compute\V1\UsableSubnetworkSecondaryRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\UsableSubnetworkSecondaryRange::class);
        $this->secondary_ip_ranges = $arr;

        return $this;
    }

    /**
     * Subnetwork URL.
     *
     * Generated from protobuf field <code>string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * Subnetwork URL.
     *
     * Generated from protobuf field <code>string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

}

