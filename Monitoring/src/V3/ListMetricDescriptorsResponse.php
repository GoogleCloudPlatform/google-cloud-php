<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListMetricDescriptors` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListMetricDescriptorsResponse</code>
 */
final class ListMetricDescriptorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The metric descriptors that are available to the project
     * and that match the value of `filter`, if present.
     *
     * Generated from protobuf field <code>repeated .google.api.MetricDescriptor metric_descriptors = 1;</code>
     */
    private $metric_descriptors;
    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\MetricDescriptor[]|\Google\Protobuf\Internal\RepeatedField $metric_descriptors
     *           The metric descriptors that are available to the project
     *           and that match the value of `filter`, if present.
     *     @type string $next_page_token
     *           If there are more results than have been returned, then this field is set
     *           to a non-empty value.  To see the additional results,
     *           use that value as `pageToken` in the next call to this method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * The metric descriptors that are available to the project
     * and that match the value of `filter`, if present.
     *
     * Generated from protobuf field <code>repeated .google.api.MetricDescriptor metric_descriptors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricDescriptors()
    {
        return $this->metric_descriptors;
    }

    /**
     * The metric descriptors that are available to the project
     * and that match the value of `filter`, if present.
     *
     * Generated from protobuf field <code>repeated .google.api.MetricDescriptor metric_descriptors = 1;</code>
     * @param \Google\Api\MetricDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricDescriptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\MetricDescriptor::class);
        $this->metric_descriptors = $arr;

        return $this;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

