<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagersListPerInstanceConfigsResp</code>
 */
class InstanceGroupManagersListPerInstanceConfigsResp extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The list of PerInstanceConfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PerInstanceConfig items = 100526016;</code>
     */
    private $items;
    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>string next_page_token = 79797525;</code>
     */
    private $next_page_token = '';
    /**
     * [Output Only] Informational warning message.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    private $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\PerInstanceConfig[]|\Google\Protobuf\Internal\RepeatedField $items
     *           [Output Only] The list of PerInstanceConfig.
     *     @type string $next_page_token
     *           [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           [Output Only] Informational warning message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The list of PerInstanceConfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PerInstanceConfig items = 100526016;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * [Output Only] The list of PerInstanceConfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PerInstanceConfig items = 100526016;</code>
     * @param \Google\Cloud\Compute\V1\PerInstanceConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\PerInstanceConfig::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>string next_page_token = 79797525;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>string next_page_token = 79797525;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * [Output Only] Informational warning message.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning
     */
    public function getWarning()
    {
        return isset($this->warning) ? $this->warning : null;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * [Output Only] Informational warning message.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

