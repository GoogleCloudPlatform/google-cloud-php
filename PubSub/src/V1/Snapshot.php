<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A snapshot resource.<br><br>
 * <b>ALPHA:</b> This feature is part of an alpha release. This API might be
 * changed in backward-incompatible ways and is not recommended for production
 * use. It is not subject to any SLA or deprecation policy.
 *
 * Generated from protobuf message <code>google.pubsub.v1.Snapshot</code>
 */
class Snapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the snapshot.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of the topic from which this snapshot is retaining messages.
     *
     * Generated from protobuf field <code>string topic = 2;</code>
     */
    private $topic = '';
    /**
     * The snapshot is guaranteed to exist up until this time.
     * A newly-created snapshot expires no later than 7 days from the time of its
     * creation. Its exact lifetime is determined at creation by the existing
     * backlog in the source subscription. Specifically, the lifetime of the
     * snapshot is `7 days - (age of oldest unacked message in the subscription)`.
     * For example, consider a subscription whose oldest unacked message is 3 days
     * old. If a snapshot is created from this subscription, the snapshot -- which
     * will always capture this 3-day-old backlog as long as the snapshot
     * exists -- will expire in 4 days. The service will refuse to create a
     * snapshot that would expire in less than 1 hour after creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     */
    private $expire_time = null;
    /**
     * See <a href="/pubsub/docs/labels"> Creating and managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the snapshot.
     *     @type string $topic
     *           The name of the topic from which this snapshot is retaining messages.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The snapshot is guaranteed to exist up until this time.
     *           A newly-created snapshot expires no later than 7 days from the time of its
     *           creation. Its exact lifetime is determined at creation by the existing
     *           backlog in the source subscription. Specifically, the lifetime of the
     *           snapshot is `7 days - (age of oldest unacked message in the subscription)`.
     *           For example, consider a subscription whose oldest unacked message is 3 days
     *           old. If a snapshot is created from this subscription, the snapshot -- which
     *           will always capture this 3-day-old backlog as long as the snapshot
     *           exists -- will expire in 4 days. The service will refuse to create a
     *           snapshot that would expire in less than 1 hour after creation.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           See <a href="/pubsub/docs/labels"> Creating and managing labels</a>.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the snapshot.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the snapshot.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The name of the topic from which this snapshot is retaining messages.
     *
     * Generated from protobuf field <code>string topic = 2;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The name of the topic from which this snapshot is retaining messages.
     *
     * Generated from protobuf field <code>string topic = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * The snapshot is guaranteed to exist up until this time.
     * A newly-created snapshot expires no later than 7 days from the time of its
     * creation. Its exact lifetime is determined at creation by the existing
     * backlog in the source subscription. Specifically, the lifetime of the
     * snapshot is `7 days - (age of oldest unacked message in the subscription)`.
     * For example, consider a subscription whose oldest unacked message is 3 days
     * old. If a snapshot is created from this subscription, the snapshot -- which
     * will always capture this 3-day-old backlog as long as the snapshot
     * exists -- will expire in 4 days. The service will refuse to create a
     * snapshot that would expire in less than 1 hour after creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * The snapshot is guaranteed to exist up until this time.
     * A newly-created snapshot expires no later than 7 days from the time of its
     * creation. Its exact lifetime is determined at creation by the existing
     * backlog in the source subscription. Specifically, the lifetime of the
     * snapshot is `7 days - (age of oldest unacked message in the subscription)`.
     * For example, consider a subscription whose oldest unacked message is 3 days
     * old. If a snapshot is created from this subscription, the snapshot -- which
     * will always capture this 3-day-old backlog as long as the snapshot
     * exists -- will expire in 4 days. The service will refuse to create a
     * snapshot that would expire in less than 1 hour after creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * See <a href="/pubsub/docs/labels"> Creating and managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * See <a href="/pubsub/docs/labels"> Creating and managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

