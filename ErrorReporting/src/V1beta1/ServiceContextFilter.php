<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies criteria for filtering a subset of service contexts.
 * The fields in the filter correspond to the fields in `ServiceContext`.
 * Only exact, case-sensitive matches are supported.
 * If a field is unset or empty, it matches arbitrary values.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter</code>
 */
class ServiceContextFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The exact value to match against
     * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $service = '';
    /**
     * Optional. The exact value to match against
     * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     *
     * Generated from protobuf field <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version = '';
    /**
     * Optional. The exact value to match against
     * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     *
     * Generated from protobuf field <code>string resource_type = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Optional. The exact value to match against
     *           [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     *     @type string $version
     *           Optional. The exact value to match against
     *           [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     *     @type string $resource_type
     *           Optional. The exact value to match against
     *           [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The exact value to match against
     * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Optional. The exact value to match against
     * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Optional. The exact value to match against
     * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     *
     * Generated from protobuf field <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. The exact value to match against
     * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     *
     * Generated from protobuf field <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional. The exact value to match against
     * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     *
     * Generated from protobuf field <code>string resource_type = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Optional. The exact value to match against
     * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     *
     * Generated from protobuf field <code>string resource_type = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

}

