<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.FirewallPoliciesListAssociationsResponse</code>
 */
class FirewallPoliciesListAssociationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of associations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyAssociation associations = 508736530;</code>
     */
    private $associations;
    /**
     * [Output Only] Type of firewallPolicy associations. Always compute#FirewallPoliciesListAssociations for lists of firewallPolicy associations.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\FirewallPolicyAssociation[]|\Google\Protobuf\Internal\RepeatedField $associations
     *           A list of associations.
     *     @type string $kind
     *           [Output Only] Type of firewallPolicy associations. Always compute#FirewallPoliciesListAssociations for lists of firewallPolicy associations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of associations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyAssociation associations = 508736530;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociations()
    {
        return $this->associations;
    }

    /**
     * A list of associations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyAssociation associations = 508736530;</code>
     * @param \Google\Cloud\Compute\V1\FirewallPolicyAssociation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyAssociation::class);
        $this->associations = $arr;

        return $this;
    }

    /**
     * [Output Only] Type of firewallPolicy associations. Always compute#FirewallPoliciesListAssociations for lists of firewallPolicy associations.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of firewallPolicy associations. Always compute#FirewallPoliciesListAssociations for lists of firewallPolicy associations.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

