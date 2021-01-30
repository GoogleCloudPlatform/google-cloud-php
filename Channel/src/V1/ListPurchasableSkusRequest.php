<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListPurchasableSkus.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListPurchasableSkusRequest</code>
 */
class ListPurchasableSkusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the customer for which to list SKUs.
     * Format: accounts/{account_id}/customers/{customer_id}.
     *
     * Generated from protobuf field <code>string customer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $customer = '';
    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token identifying a page of results, if other than the first one.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';
    protected $purchase_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\CreateEntitlementPurchase $create_entitlement_purchase
     *           List SKUs for CreateEntitlement purchase.
     *     @type \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\ChangeOfferPurchase $change_offer_purchase
     *           List SKUs for ChangeOffer purchase with a new SKU.
     *     @type string $customer
     *           Required. The resource name of the customer for which to list SKUs.
     *           Format: accounts/{account_id}/customers/{customer_id}.
     *     @type int $page_size
     *           Optional. Requested page size. Server might return fewer results than requested.
     *           If unspecified, at most 100 SKUs will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           Optional. A token identifying a page of results, if other than the first one.
     *     @type string $language_code
     *           Optional. The BCP-47 language code, such as "en-US".  If specified, the
     *           response will be localized to the corresponding language code. Default is
     *           "en-US".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List SKUs for CreateEntitlement purchase.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ListPurchasableSkusRequest.CreateEntitlementPurchase create_entitlement_purchase = 2;</code>
     * @return \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\CreateEntitlementPurchase
     */
    public function getCreateEntitlementPurchase()
    {
        return $this->readOneof(2);
    }

    public function hasCreateEntitlementPurchase()
    {
        return $this->hasOneof(2);
    }

    /**
     * List SKUs for CreateEntitlement purchase.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ListPurchasableSkusRequest.CreateEntitlementPurchase create_entitlement_purchase = 2;</code>
     * @param \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\CreateEntitlementPurchase $var
     * @return $this
     */
    public function setCreateEntitlementPurchase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\CreateEntitlementPurchase::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * List SKUs for ChangeOffer purchase with a new SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ListPurchasableSkusRequest.ChangeOfferPurchase change_offer_purchase = 3;</code>
     * @return \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\ChangeOfferPurchase
     */
    public function getChangeOfferPurchase()
    {
        return $this->readOneof(3);
    }

    public function hasChangeOfferPurchase()
    {
        return $this->hasOneof(3);
    }

    /**
     * List SKUs for ChangeOffer purchase with a new SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ListPurchasableSkusRequest.ChangeOfferPurchase change_offer_purchase = 3;</code>
     * @param \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\ChangeOfferPurchase $var
     * @return $this
     */
    public function setChangeOfferPurchase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ListPurchasableSkusRequest\ChangeOfferPurchase::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. The resource name of the customer for which to list SKUs.
     * Format: accounts/{account_id}/customers/{customer_id}.
     *
     * Generated from protobuf field <code>string customer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Required. The resource name of the customer for which to list SKUs.
     * Format: accounts/{account_id}/customers/{customer_id}.
     *
     * Generated from protobuf field <code>string customer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results, if other than the first one.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results, if other than the first one.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOption()
    {
        return $this->whichOneof("purchase_option");
    }

}

