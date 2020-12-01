<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionHealthCheckServices.Patch. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchRegionHealthCheckServiceRequest</code>
 */
class PatchRegionHealthCheckServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string health_check_service = 139939291 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $health_check_service = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheckService health_check_service_resource = 208932338 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $health_check_service_resource = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $health_check_service
     *           Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *     @type \Google\Cloud\Compute\V1\HealthCheckService $health_check_service_resource
     *           The body resource for this request
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *           For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string health_check_service = 139939291 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHealthCheckService()
    {
        return $this->health_check_service;
    }

    /**
     * Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string health_check_service = 139939291 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHealthCheckService($var)
    {
        GPBUtil::checkString($var, True);
        $this->health_check_service = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheckService health_check_service_resource = 208932338 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\HealthCheckService
     */
    public function getHealthCheckServiceResource()
    {
        return isset($this->health_check_service_resource) ? $this->health_check_service_resource : null;
    }

    public function hasHealthCheckServiceResource()
    {
        return isset($this->health_check_service_resource);
    }

    public function clearHealthCheckServiceResource()
    {
        unset($this->health_check_service_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheckService health_check_service_resource = 208932338 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\HealthCheckService $var
     * @return $this
     */
    public function setHealthCheckServiceResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HealthCheckService::class);
        $this->health_check_service_resource = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

