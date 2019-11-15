<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/company.proto

namespace Google\Cloud\Talent\V4beta1\Company;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Derived details about the company.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Company.DerivedInfo</code>
 */
class DerivedInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A structured headquarters location of the company, resolved from
     * [Company.headquarters_address][google.cloud.talent.v4beta1.Company.headquarters_address]
     * if provided.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Location headquarters_location = 1;</code>
     */
    private $headquarters_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\Location $headquarters_location
     *           A structured headquarters location of the company, resolved from
     *           [Company.headquarters_address][google.cloud.talent.v4beta1.Company.headquarters_address]
     *           if provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Company::initOnce();
        parent::__construct($data);
    }

    /**
     * A structured headquarters location of the company, resolved from
     * [Company.headquarters_address][google.cloud.talent.v4beta1.Company.headquarters_address]
     * if provided.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Location headquarters_location = 1;</code>
     * @return \Google\Cloud\Talent\V4beta1\Location
     */
    public function getHeadquartersLocation()
    {
        return $this->headquarters_location;
    }

    /**
     * A structured headquarters location of the company, resolved from
     * [Company.headquarters_address][google.cloud.talent.v4beta1.Company.headquarters_address]
     * if provided.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Location headquarters_location = 1;</code>
     * @param \Google\Cloud\Talent\V4beta1\Location $var
     * @return $this
     */
    public function setHeadquartersLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Location::class);
        $this->headquarters_location = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DerivedInfo::class, \Google\Cloud\Talent\V4beta1\Company_DerivedInfo::class);

