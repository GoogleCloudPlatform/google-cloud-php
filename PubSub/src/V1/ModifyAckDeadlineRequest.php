<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the ModifyAckDeadline method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ModifyAckDeadlineRequest</code>
 */
class ModifyAckDeadlineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * List of acknowledgment IDs.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 4;</code>
     */
    private $ack_ids;
    /**
     * The new ack deadline with respect to the time this request was sent to
     * the Pub/Sub system. For example, if the value is 10, the new
     * ack deadline will expire 10 seconds after the `ModifyAckDeadline` call
     * was made. Specifying zero might immediately make the message available for
     * delivery to another subscriber client. This typically results in an
     * increase in the rate of message redeliveries (that is, duplicates).
     * The minimum deadline you can specify is 0 seconds.
     * The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 ack_deadline_seconds = 3;</code>
     */
    private $ack_deadline_seconds = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           The name of the subscription.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ack_ids
     *           List of acknowledgment IDs.
     *     @type int $ack_deadline_seconds
     *           The new ack deadline with respect to the time this request was sent to
     *           the Pub/Sub system. For example, if the value is 10, the new
     *           ack deadline will expire 10 seconds after the `ModifyAckDeadline` call
     *           was made. Specifying zero might immediately make the message available for
     *           delivery to another subscriber client. This typically results in an
     *           increase in the rate of message redeliveries (that is, duplicates).
     *           The minimum deadline you can specify is 0 seconds.
     *           The maximum deadline you can specify is 600 seconds (10 minutes).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * List of acknowledgment IDs.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * List of acknowledgment IDs.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;

        return $this;
    }

    /**
     * The new ack deadline with respect to the time this request was sent to
     * the Pub/Sub system. For example, if the value is 10, the new
     * ack deadline will expire 10 seconds after the `ModifyAckDeadline` call
     * was made. Specifying zero might immediately make the message available for
     * delivery to another subscriber client. This typically results in an
     * increase in the rate of message redeliveries (that is, duplicates).
     * The minimum deadline you can specify is 0 seconds.
     * The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 ack_deadline_seconds = 3;</code>
     * @return int
     */
    public function getAckDeadlineSeconds()
    {
        return $this->ack_deadline_seconds;
    }

    /**
     * The new ack deadline with respect to the time this request was sent to
     * the Pub/Sub system. For example, if the value is 10, the new
     * ack deadline will expire 10 seconds after the `ModifyAckDeadline` call
     * was made. Specifying zero might immediately make the message available for
     * delivery to another subscriber client. This typically results in an
     * increase in the rate of message redeliveries (that is, duplicates).
     * The minimum deadline you can specify is 0 seconds.
     * The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 ack_deadline_seconds = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAckDeadlineSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->ack_deadline_seconds = $var;

        return $this;
    }

}

