<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [GetTaxonomy][google.cloud.datacatalog.v1.PolicyTagManager.GetTaxonomy].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.GetTaxonomyRequest</code>
 */
class GetTaxonomyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the requested taxonomy.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the requested taxonomy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the requested taxonomy.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the requested taxonomy.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

