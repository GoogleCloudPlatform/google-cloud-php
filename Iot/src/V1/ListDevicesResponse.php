<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for `ListDevices`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.ListDevicesResponse</code>
 */
final class ListDevicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The devices that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.iot.v1.Device devices = 1;</code>
     */
    private $devices;
    /**
     * If not empty, indicates that there may be more devices that match the
     * request; this value should be passed in a new `ListDevicesRequest`.
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
     *     @type \Google\Cloud\Iot\V1\Device[]|\Google\Protobuf\Internal\RepeatedField $devices
     *           The devices that match the request.
     *     @type string $next_page_token
     *           If not empty, indicates that there may be more devices that match the
     *           request; this value should be passed in a new `ListDevicesRequest`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * The devices that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.iot.v1.Device devices = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * The devices that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.iot.v1.Device devices = 1;</code>
     * @param \Google\Cloud\Iot\V1\Device[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Iot\V1\Device::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there may be more devices that match the
     * request; this value should be passed in a new `ListDevicesRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more devices that match the
     * request; this value should be passed in a new `ListDevicesRequest`.
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

