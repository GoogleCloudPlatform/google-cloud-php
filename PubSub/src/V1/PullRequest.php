<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `Pull` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.PullRequest</code>
 */
class PullRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    protected $subscription = '';
    /**
     * If this field set to true, the system will respond immediately even if
     * it there are no messages available to return in the `Pull` response.
     * Otherwise, the system may wait (for a bounded amount of time) until at
     * least one message is available, rather than returning no messages.
     *
     * Generated from protobuf field <code>bool return_immediately = 2;</code>
     */
    protected $return_immediately = false;
    /**
     * The maximum number of messages to return for this request. Must be a
     * positive integer. The Pub/Sub system may return fewer than the number
     * specified.
     *
     * Generated from protobuf field <code>int32 max_messages = 3;</code>
     */
    protected $max_messages = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           The subscription from which messages should be pulled.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type bool $return_immediately
     *           If this field set to true, the system will respond immediately even if
     *           it there are no messages available to return in the `Pull` response.
     *           Otherwise, the system may wait (for a bounded amount of time) until at
     *           least one message is available, rather than returning no messages.
     *     @type int $max_messages
     *           The maximum number of messages to return for this request. Must be a
     *           positive integer. The Pub/Sub system may return fewer than the number
     *           specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The subscription from which messages should be pulled.
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
     * The subscription from which messages should be pulled.
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
     * If this field set to true, the system will respond immediately even if
     * it there are no messages available to return in the `Pull` response.
     * Otherwise, the system may wait (for a bounded amount of time) until at
     * least one message is available, rather than returning no messages.
     *
     * Generated from protobuf field <code>bool return_immediately = 2;</code>
     * @return bool
     */
    public function getReturnImmediately()
    {
        return $this->return_immediately;
    }

    /**
     * If this field set to true, the system will respond immediately even if
     * it there are no messages available to return in the `Pull` response.
     * Otherwise, the system may wait (for a bounded amount of time) until at
     * least one message is available, rather than returning no messages.
     *
     * Generated from protobuf field <code>bool return_immediately = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnImmediately($var)
    {
        GPBUtil::checkBool($var);
        $this->return_immediately = $var;

        return $this;
    }

    /**
     * The maximum number of messages to return for this request. Must be a
     * positive integer. The Pub/Sub system may return fewer than the number
     * specified.
     *
     * Generated from protobuf field <code>int32 max_messages = 3;</code>
     * @return int
     */
    public function getMaxMessages()
    {
        return $this->max_messages;
    }

    /**
     * The maximum number of messages to return for this request. Must be a
     * positive integer. The Pub/Sub system may return fewer than the number
     * specified.
     *
     * Generated from protobuf field <code>int32 max_messages = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxMessages($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_messages = $var;

        return $this;
    }

}

