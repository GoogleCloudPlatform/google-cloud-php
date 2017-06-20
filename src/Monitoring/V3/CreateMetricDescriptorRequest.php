<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CreateMetricDescriptor` request.
 *
 * Protobuf type <code>Google\Monitoring\V3\CreateMetricDescriptorRequest</code>
 */
class CreateMetricDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * The new [custom metric](/monitoring/custom-metrics)
     * descriptor.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 2;</code>
     */
    private $metric_descriptor = null;

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct();
    }

    /**
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The new [custom metric](/monitoring/custom-metrics)
     * descriptor.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 2;</code>
     * @return \Google\Api\MetricDescriptor
     */
    public function getMetricDescriptor()
    {
        return $this->metric_descriptor;
    }

    /**
     * The new [custom metric](/monitoring/custom-metrics)
     * descriptor.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 2;</code>
     * @param \Google\Api\MetricDescriptor $var
     */
    public function setMetricDescriptor(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MetricDescriptor::class);
        $this->metric_descriptor = $var;

        return $this;
    }

}

