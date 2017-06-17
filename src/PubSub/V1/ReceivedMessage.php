<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A message and its corresponding acknowledgment ID.
 * </pre>
 *
 * Protobuf type <code>Google\Pubsub\V1\ReceivedMessage</code>
 */
class ReceivedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * This ID can be used to acknowledge the received message.
     * </pre>
     *
     * <code>string ack_id = 1;</code>
     */
    private $ack_id = '';
    /**
     * <pre>
     * The message.
     * </pre>
     *
     * <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     */
    private $message = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * This ID can be used to acknowledge the received message.
     * </pre>
     *
     * <code>string ack_id = 1;</code>
     * @return string
     */
    public function getAckId()
    {
        return $this->ack_id;
    }

    /**
     * <pre>
     * This ID can be used to acknowledge the received message.
     * </pre>
     *
     * <code>string ack_id = 1;</code>
     * @param string $var
     */
    public function setAckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ack_id = $var;

        return $this;
    }

    /**
     * <pre>
     * The message.
     * </pre>
     *
     * <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     * @return \Google\Cloud\PubSub\V1\PubsubMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     * The message.
     * </pre>
     *
     * <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     * @param \Google\Cloud\PubSub\V1\PubsubMessage $var
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\PubsubMessage::class);
        $this->message = $var;

        return $this;
    }

}

