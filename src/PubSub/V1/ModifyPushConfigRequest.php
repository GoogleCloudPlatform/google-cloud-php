<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the ModifyPushConfig method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.ModifyPushConfigRequest</code>
 */
class ModifyPushConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * <pre>
     * The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` is not called.
     * </pre>
     *
     * <code>.google.pubsub.v1.PushConfig push_config = 2;</code>
     */
    private $push_config = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
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
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
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
     * The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` is not called.
     * </pre>
     *
     * <code>.google.pubsub.v1.PushConfig push_config = 2;</code>
     */
    public function getPushConfig()
    {
        return $this->push_config;
    }

    /**
     * <pre>
     * The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` is not called.
     * </pre>
     *
     * <code>.google.pubsub.v1.PushConfig push_config = 2;</code>
     */
    public function setPushConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\PushConfig::class);
        $this->push_config = $var;

        return $this;
    }

}

