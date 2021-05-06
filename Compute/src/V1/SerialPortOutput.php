<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An instance's serial console output.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SerialPortOutput</code>
 */
class SerialPortOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The contents of the console output.
     *
     * Generated from protobuf field <code>string contents = 506419994;</code>
     */
    private $contents = null;
    /**
     * [Output Only] Type of the resource. Always compute#serialPortOutput for serial port output.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] The position of the next byte of content, regardless of whether the content exists, following the output returned in the `contents` property. Use this value in the next request as the start parameter.
     *
     * Generated from protobuf field <code>string next = 3377907;</code>
     */
    private $next = null;
    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * The starting byte position of the output that was returned. This should match the start parameter sent with the request. If the serial console output exceeds the size of the buffer (1 MB), older output is overwritten by newer content. The output start value will indicate the byte position of the output that was returned, which might be different than the `start` value that was specified in the request.
     *
     * Generated from protobuf field <code>string start = 109757538;</code>
     */
    private $start = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contents
     *           [Output Only] The contents of the console output.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#serialPortOutput for serial port output.
     *     @type string $next
     *           [Output Only] The position of the next byte of content, regardless of whether the content exists, following the output returned in the `contents` property. Use this value in the next request as the start parameter.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for this resource.
     *     @type string $start
     *           The starting byte position of the output that was returned. This should match the start parameter sent with the request. If the serial console output exceeds the size of the buffer (1 MB), older output is overwritten by newer content. The output start value will indicate the byte position of the output that was returned, which might be different than the `start` value that was specified in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The contents of the console output.
     *
     * Generated from protobuf field <code>string contents = 506419994;</code>
     * @return string
     */
    public function getContents()
    {
        return isset($this->contents) ? $this->contents : '';
    }

    public function hasContents()
    {
        return isset($this->contents);
    }

    public function clearContents()
    {
        unset($this->contents);
    }

    /**
     * [Output Only] The contents of the console output.
     *
     * Generated from protobuf field <code>string contents = 506419994;</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->contents = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#serialPortOutput for serial port output.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#serialPortOutput for serial port output.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] The position of the next byte of content, regardless of whether the content exists, following the output returned in the `contents` property. Use this value in the next request as the start parameter.
     *
     * Generated from protobuf field <code>string next = 3377907;</code>
     * @return string
     */
    public function getNext()
    {
        return isset($this->next) ? $this->next : '';
    }

    public function hasNext()
    {
        return isset($this->next);
    }

    public function clearNext()
    {
        unset($this->next);
    }

    /**
     * [Output Only] The position of the next byte of content, regardless of whether the content exists, following the output returned in the `contents` property. Use this value in the next request as the start parameter.
     *
     * Generated from protobuf field <code>string next = 3377907;</code>
     * @param string $var
     * @return $this
     */
    public function setNext($var)
    {
        GPBUtil::checkString($var, True);
        $this->next = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * The starting byte position of the output that was returned. This should match the start parameter sent with the request. If the serial console output exceeds the size of the buffer (1 MB), older output is overwritten by newer content. The output start value will indicate the byte position of the output that was returned, which might be different than the `start` value that was specified in the request.
     *
     * Generated from protobuf field <code>string start = 109757538;</code>
     * @return string
     */
    public function getStart()
    {
        return isset($this->start) ? $this->start : '';
    }

    public function hasStart()
    {
        return isset($this->start);
    }

    public function clearStart()
    {
        unset($this->start);
    }

    /**
     * The starting byte position of the output that was returned. This should match the start parameter sent with the request. If the serial console output exceeds the size of the buffer (1 MB), older output is overwritten by newer content. The output start value will indicate the byte position of the output that was returned, which might be different than the `start` value that was specified in the request.
     *
     * Generated from protobuf field <code>string start = 109757538;</code>
     * @param string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkString($var, True);
        $this->start = $var;

        return $this;
    }

}

