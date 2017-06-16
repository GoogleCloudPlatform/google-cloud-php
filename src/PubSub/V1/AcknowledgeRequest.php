<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the Acknowledge method.
 * </pre>
 *
 * Protobuf type <code>Google\Pubsub\V1\AcknowledgeRequest</code>
 */
class AcknowledgeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * <pre>
     * The acknowledgment ID for the messages being acknowledged that was returned
     * by the Pub/Sub system in the `Pull` response. Must not be empty.
     * </pre>
     *
     * <code>repeated string ack_ids = 2;</code>
     */
    private $ack_ids;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * <pre>
     * The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     * @param string $var
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * <pre>
     * The acknowledgment ID for the messages being acknowledged that was returned
     * by the Pub/Sub system in the `Pull` response. Must not be empty.
     * </pre>
     *
     * <code>repeated string ack_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * <pre>
     * The acknowledgment ID for the messages being acknowledged that was returned
     * by the Pub/Sub system in the `Pull` response. Must not be empty.
     * </pre>
     *
     * <code>repeated string ack_ids = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setAckIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;

        return $this;
    }

}

