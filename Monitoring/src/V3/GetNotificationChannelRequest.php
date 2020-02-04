<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetNotificationChannel` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.GetNotificationChannelRequest</code>
 */
class GetNotificationChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The channel for which to execute the request. The format is
     * `projects/[PROJECT_ID]/notificationChannels/[CHANNEL_ID]`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The channel for which to execute the request. The format is
     *           `projects/[PROJECT_ID]/notificationChannels/[CHANNEL_ID]`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The channel for which to execute the request. The format is
     * `projects/[PROJECT_ID]/notificationChannels/[CHANNEL_ID]`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The channel for which to execute the request. The format is
     * `projects/[PROJECT_ID]/notificationChannels/[CHANNEL_ID]`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

