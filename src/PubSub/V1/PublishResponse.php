<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the `Publish` method.
 * </pre>
 *
 * Protobuf type <code>Google\Pubsub\V1\PublishResponse</code>
 */
class PublishResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     * </pre>
     *
     * <code>repeated string message_ids = 1;</code>
     */
    private $message_ids;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     * </pre>
     *
     * <code>repeated string message_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageIds()
    {
        return $this->message_ids;
    }

    /**
     * <pre>
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     * </pre>
     *
     * <code>repeated string message_ids = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setMessageIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->message_ids = $arr;

        return $this;
    }

}

