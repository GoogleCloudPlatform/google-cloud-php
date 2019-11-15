<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CidrBlock contains an optional name and one CIDR block.
 *
 * Generated from protobuf message <code>google.container.v1.MasterAuthorizedNetworksConfig.CidrBlock</code>
 */
class CidrBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * display_name is an optional field for users to identify CIDR blocks.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * cidr_block must be specified in CIDR notation.
     *
     * Generated from protobuf field <code>string cidr_block = 2;</code>
     */
    private $cidr_block = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           display_name is an optional field for users to identify CIDR blocks.
     *     @type string $cidr_block
     *           cidr_block must be specified in CIDR notation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * display_name is an optional field for users to identify CIDR blocks.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * display_name is an optional field for users to identify CIDR blocks.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * cidr_block must be specified in CIDR notation.
     *
     * Generated from protobuf field <code>string cidr_block = 2;</code>
     * @return string
     */
    public function getCidrBlock()
    {
        return $this->cidr_block;
    }

    /**
     * cidr_block must be specified in CIDR notation.
     *
     * Generated from protobuf field <code>string cidr_block = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->cidr_block = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CidrBlock::class, \Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig_CidrBlock::class);

