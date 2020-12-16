<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1beta1/service.proto

namespace Google\Cloud\Notebooks\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the metadata of the long-running operation.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1beta1.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    private $create_time = null;
    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     */
    private $target = '';
    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     */
    private $verb = '';
    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_message = 5;</code>
     */
    private $status_message = '';
    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have [Operation.error][] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6;</code>
     */
    private $requested_cancellation = false;
    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     */
    private $api_version = '';
    /**
     * API endpoint name of this operation.
     *
     * Generated from protobuf field <code>string endpoint = 8;</code>
     */
    private $endpoint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the operation finished running.
     *     @type string $target
     *           Server-defined resource path for the target of the operation.
     *     @type string $verb
     *           Name of the verb executed by the operation.
     *     @type string $status_message
     *           Human-readable status of the operation, if any.
     *     @type bool $requested_cancellation
     *           Identifies whether the user has requested cancellation
     *           of the operation. Operations that have successfully been cancelled
     *           have [Operation.error][] value with a
     *           [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to `Code.CANCELLED`.
     *     @type string $api_version
     *           API version used to start the operation.
     *     @type string $endpoint
     *           API endpoint name of this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkString($var, True);
        $this->verb = $var;

        return $this;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_message = 5;</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_message = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have [Operation.error][] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6;</code>
     * @return bool
     */
    public function getRequestedCancellation()
    {
        return $this->requested_cancellation;
    }

    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have [Operation.error][] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestedCancellation($var)
    {
        GPBUtil::checkBool($var);
        $this->requested_cancellation = $var;

        return $this;
    }

    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

    /**
     * API endpoint name of this operation.
     *
     * Generated from protobuf field <code>string endpoint = 8;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * API endpoint name of this operation.
     *
     * Generated from protobuf field <code>string endpoint = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

}

