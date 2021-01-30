<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/products.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Product is the entity a customer uses when placing an order. For example,
 * Google Workspace, Google Voice, etc.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Product</code>
 */
class Product extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource Name of the Product.
     * Format: products/{product_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Marketing information for the product.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.MarketingInfo marketing_info = 2;</code>
     */
    private $marketing_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource Name of the Product.
     *           Format: products/{product_id}
     *     @type \Google\Cloud\Channel\V1\MarketingInfo $marketing_info
     *           Marketing information for the product.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Products::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource Name of the Product.
     * Format: products/{product_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource Name of the Product.
     * Format: products/{product_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Marketing information for the product.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.MarketingInfo marketing_info = 2;</code>
     * @return \Google\Cloud\Channel\V1\MarketingInfo
     */
    public function getMarketingInfo()
    {
        return isset($this->marketing_info) ? $this->marketing_info : null;
    }

    public function hasMarketingInfo()
    {
        return isset($this->marketing_info);
    }

    public function clearMarketingInfo()
    {
        unset($this->marketing_info);
    }

    /**
     * Marketing information for the product.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.MarketingInfo marketing_info = 2;</code>
     * @param \Google\Cloud\Channel\V1\MarketingInfo $var
     * @return $this
     */
    public function setMarketingInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\MarketingInfo::class);
        $this->marketing_info = $var;

        return $this;
    }

}

