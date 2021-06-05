<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Conversations.CreateCallMatcher][google.cloud.dialogflow.v2.Conversations.CreateCallMatcher].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateCallMatcherRequest</code>
 */
class CreateCallMatcherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource identifier of the conversation adding the call matcher.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The call matcher to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.CallMatcher call_matcher = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $call_matcher = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource identifier of the conversation adding the call matcher.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\CallMatcher $call_matcher
     *           Required. The call matcher to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource identifier of the conversation adding the call matcher.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource identifier of the conversation adding the call matcher.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The call matcher to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.CallMatcher call_matcher = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\CallMatcher|null
     */
    public function getCallMatcher()
    {
        return isset($this->call_matcher) ? $this->call_matcher : null;
    }

    public function hasCallMatcher()
    {
        return isset($this->call_matcher);
    }

    public function clearCallMatcher()
    {
        unset($this->call_matcher);
    }

    /**
     * Required. The call matcher to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.CallMatcher call_matcher = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\CallMatcher $var
     * @return $this
     */
    public function setCallMatcher($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\CallMatcher::class);
        $this->call_matcher = $var;

        return $this;
    }

}

