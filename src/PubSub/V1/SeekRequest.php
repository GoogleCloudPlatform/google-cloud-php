<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the `Seek` method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.SeekRequest</code>
 */
class SeekRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The subscription to affect.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    private $subscription = '';
    protected $target;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The subscription to affect.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * <pre>
     * The subscription to affect.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * <pre>
     * The time to seek to.
     * Messages retained in the subscription that were published before this
     * time are marked as acknowledged, and messages retained in the
     * subscription that were published after this time are marked as
     * unacknowledged. Note that this operation affects only those messages
     * retained in the subscription (configured by the combination of
     * `message_retention_duration` and `retain_acked_messages`). For example,
     * if `time` corresponds to a point before the message retention
     * window (or to a point before the system's notion of the subscription
     * creation time), only retained messages will be marked as unacknowledged,
     * and already-expunged messages will not be restored.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp time = 2;</code>
     */
    public function getTime()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * The time to seek to.
     * Messages retained in the subscription that were published before this
     * time are marked as acknowledged, and messages retained in the
     * subscription that were published after this time are marked as
     * unacknowledged. Note that this operation affects only those messages
     * retained in the subscription (configured by the combination of
     * `message_retention_duration` and `retain_acked_messages`). For example,
     * if `time` corresponds to a point before the message retention
     * window (or to a point before the system's notion of the subscription
     * creation time), only retained messages will be marked as unacknowledged,
     * and already-expunged messages will not be restored.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp time = 2;</code>
     */
    public function setTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * <pre>
     * The snapshot to seek to. The snapshot's topic must be the same as that of
     * the provided subscription.
     * Format is `projects/{project}/snapshots/{snap}`.
     * </pre>
     *
     * <code>string snapshot = 3;</code>
     */
    public function getSnapshot()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * The snapshot to seek to. The snapshot's topic must be the same as that of
     * the provided subscription.
     * Format is `projects/{project}/snapshots/{snap}`.
     * </pre>
     *
     * <code>string snapshot = 3;</code>
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

