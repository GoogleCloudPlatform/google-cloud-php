<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An SLI measuring performance on a well-known service type. Performance will
 * be computed on the basis of pre-defined metrics. The type of the
 * `service_resource` determines the metrics to use and the
 * `service_resource.labels` and `metric_labels` are used to construct a
 * monitoring filter to filter that metric down to just the data relevant to
 * this service.
 *
 * Generated from protobuf message <code>google.monitoring.v3.BasicSli</code>
 */
class BasicSli extends \Google\Protobuf\Internal\Message
{
    /**
     * OPTIONAL: The set of RPCs to which this SLI is relevant. Telemetry from
     * other methods will not be used to calculate performance for this SLI. If
     * omitted, this SLI applies to all the Service's methods. For service types
     * that don't support breaking down by method, setting this field will result
     * in an error.
     *
     * Generated from protobuf field <code>repeated string method = 7;</code>
     */
    private $method;
    /**
     * OPTIONAL: The set of locations to which this SLI is relevant. Telemetry
     * from other locations will not be used to calculate performance for this
     * SLI. If omitted, this SLI applies to all locations in which the Service has
     * activity. For service types that don't support breaking down by location,
     * setting this field will result in an error.
     *
     * Generated from protobuf field <code>repeated string location = 8;</code>
     */
    private $location;
    /**
     * OPTIONAL: The set of API versions to which this SLI is relevant. Telemetry
     * from other API versions will not be used to calculate performance for this
     * SLI. If omitted, this SLI applies to all API versions. For service types
     * that don't support breaking down by version, setting this field will result
     * in an error.
     *
     * Generated from protobuf field <code>repeated string version = 9;</code>
     */
    private $version;
    protected $sli_criteria;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $method
     *           OPTIONAL: The set of RPCs to which this SLI is relevant. Telemetry from
     *           other methods will not be used to calculate performance for this SLI. If
     *           omitted, this SLI applies to all the Service's methods. For service types
     *           that don't support breaking down by method, setting this field will result
     *           in an error.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $location
     *           OPTIONAL: The set of locations to which this SLI is relevant. Telemetry
     *           from other locations will not be used to calculate performance for this
     *           SLI. If omitted, this SLI applies to all locations in which the Service has
     *           activity. For service types that don't support breaking down by location,
     *           setting this field will result in an error.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $version
     *           OPTIONAL: The set of API versions to which this SLI is relevant. Telemetry
     *           from other API versions will not be used to calculate performance for this
     *           SLI. If omitted, this SLI applies to all API versions. For service types
     *           that don't support breaking down by version, setting this field will result
     *           in an error.
     *     @type \Google\Cloud\Monitoring\V3\BasicSli\AvailabilityCriteria $availability
     *           Good service is defined to be the count of requests made to this service
     *           that return successfully.
     *     @type \Google\Cloud\Monitoring\V3\BasicSli\LatencyCriteria $latency
     *           Good service is defined to be the count of requests made to this service
     *           that are fast enough with respect to `latency.threshold`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * OPTIONAL: The set of RPCs to which this SLI is relevant. Telemetry from
     * other methods will not be used to calculate performance for this SLI. If
     * omitted, this SLI applies to all the Service's methods. For service types
     * that don't support breaking down by method, setting this field will result
     * in an error.
     *
     * Generated from protobuf field <code>repeated string method = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * OPTIONAL: The set of RPCs to which this SLI is relevant. Telemetry from
     * other methods will not be used to calculate performance for this SLI. If
     * omitted, this SLI applies to all the Service's methods. For service types
     * that don't support breaking down by method, setting this field will result
     * in an error.
     *
     * Generated from protobuf field <code>repeated string method = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethod($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->method = $arr;

        return $this;
    }

    /**
     * OPTIONAL: The set of locations to which this SLI is relevant. Telemetry
     * from other locations will not be used to calculate performance for this
     * SLI. If omitted, this SLI applies to all locations in which the Service has
     * activity. For service types that don't support breaking down by location,
     * setting this field will result in an error.
     *
     * Generated from protobuf field <code>repeated string location = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * OPTIONAL: The set of locations to which this SLI is relevant. Telemetry
     * from other locations will not be used to calculate performance for this
     * SLI. If omitted, this SLI applies to all locations in which the Service has
     * activity. For service types that don't support breaking down by location,
     * setting this field will result in an error.
     *
     * Generated from protobuf field <code>repeated string location = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->location = $arr;

        return $this;
    }

    /**
     * OPTIONAL: The set of API versions to which this SLI is relevant. Telemetry
     * from other API versions will not be used to calculate performance for this
     * SLI. If omitted, this SLI applies to all API versions. For service types
     * that don't support breaking down by version, setting this field will result
     * in an error.
     *
     * Generated from protobuf field <code>repeated string version = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * OPTIONAL: The set of API versions to which this SLI is relevant. Telemetry
     * from other API versions will not be used to calculate performance for this
     * SLI. If omitted, this SLI applies to all API versions. For service types
     * that don't support breaking down by version, setting this field will result
     * in an error.
     *
     * Generated from protobuf field <code>repeated string version = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersion($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->version = $arr;

        return $this;
    }

    /**
     * Good service is defined to be the count of requests made to this service
     * that return successfully.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.BasicSli.AvailabilityCriteria availability = 2;</code>
     * @return \Google\Cloud\Monitoring\V3\BasicSli\AvailabilityCriteria
     */
    public function getAvailability()
    {
        return $this->readOneof(2);
    }

    public function hasAvailability()
    {
        return $this->hasOneof(2);
    }

    /**
     * Good service is defined to be the count of requests made to this service
     * that return successfully.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.BasicSli.AvailabilityCriteria availability = 2;</code>
     * @param \Google\Cloud\Monitoring\V3\BasicSli\AvailabilityCriteria $var
     * @return $this
     */
    public function setAvailability($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\BasicSli\AvailabilityCriteria::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Good service is defined to be the count of requests made to this service
     * that are fast enough with respect to `latency.threshold`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.BasicSli.LatencyCriteria latency = 3;</code>
     * @return \Google\Cloud\Monitoring\V3\BasicSli\LatencyCriteria
     */
    public function getLatency()
    {
        return $this->readOneof(3);
    }

    public function hasLatency()
    {
        return $this->hasOneof(3);
    }

    /**
     * Good service is defined to be the count of requests made to this service
     * that are fast enough with respect to `latency.threshold`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.BasicSli.LatencyCriteria latency = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\BasicSli\LatencyCriteria $var
     * @return $this
     */
    public function setLatency($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\BasicSli\LatencyCriteria::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSliCriteria()
    {
        return $this->whichOneof("sli_criteria");
    }

}

