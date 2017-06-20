<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the Acknowledge method.
 *
 * Protobuf type <code>Google\Pubsub\V1\AcknowledgeRequest</code>
 */
class AcknowledgeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * The acknowledgment ID for the messages being acknowledged that was returned
     * by the Pub/Sub system in the `Pull` response. Must not be empty.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2;</code>
     */
    private $ack_ids;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The subscription whose message is being acknowledged.
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
     * The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * The acknowledgment ID for the messages being acknowledged that was returned
     * by the Pub/Sub system in the `Pull` response. Must not be empty.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * The acknowledgment ID for the messages being acknowledged that was returned
     * by the Pub/Sub system in the `Pull` response. Must not be empty.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setAckIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;

        return $this;
    }

}

