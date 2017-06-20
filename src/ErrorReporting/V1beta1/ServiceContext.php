<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a running service that sends errors.
 * Its version changes over time and multiple versions can run in parallel.
 *
 * Protobuf type <code>Google\Devtools\Clouderrorreporting\V1beta1\ServiceContext</code>
 */
class ServiceContext extends \Google\Protobuf\Internal\Message
{
    /**
     * An identifier of the service, such as the name of the
     * executable, job, or Google App Engine service name. This field is expected
     * to have a low number of values that are relatively stable over time, as
     * opposed to `version`, which can be changed whenever new code is deployed.
     * Contains the service name for error reports extracted from Google
     * App Engine logs or `default` if the App Engine default service is used.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     */
    private $service = '';
    /**
     * Represents the source code version that the developer provided,
     * which could represent a version label or a Git SHA-1 hash, for example.
     *
     * Generated from protobuf field <code>string version = 3;</code>
     */
    private $version = '';
    /**
     * Type of the MonitoredResource. List of possible values:
     * https://cloud.google.com/monitoring/api/resources
     * Value is set automatically for incoming errors and must not be set when
     * reporting errors.
     *
     * Generated from protobuf field <code>string resource_type = 4;</code>
     */
    private $resource_type = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct();
    }

    /**
     * An identifier of the service, such as the name of the
     * executable, job, or Google App Engine service name. This field is expected
     * to have a low number of values that are relatively stable over time, as
     * opposed to `version`, which can be changed whenever new code is deployed.
     * Contains the service name for error reports extracted from Google
     * App Engine logs or `default` if the App Engine default service is used.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * An identifier of the service, such as the name of the
     * executable, job, or Google App Engine service name. This field is expected
     * to have a low number of values that are relatively stable over time, as
     * opposed to `version`, which can be changed whenever new code is deployed.
     * Contains the service name for error reports extracted from Google
     * App Engine logs or `default` if the App Engine default service is used.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @param string $var
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Represents the source code version that the developer provided,
     * which could represent a version label or a Git SHA-1 hash, for example.
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Represents the source code version that the developer provided,
     * which could represent a version label or a Git SHA-1 hash, for example.
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @param string $var
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Type of the MonitoredResource. List of possible values:
     * https://cloud.google.com/monitoring/api/resources
     * Value is set automatically for incoming errors and must not be set when
     * reporting errors.
     *
     * Generated from protobuf field <code>string resource_type = 4;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Type of the MonitoredResource. List of possible values:
     * https://cloud.google.com/monitoring/api/resources
     * Value is set automatically for incoming errors and must not be set when
     * reporting errors.
     *
     * Generated from protobuf field <code>string resource_type = 4;</code>
     * @param string $var
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

}

