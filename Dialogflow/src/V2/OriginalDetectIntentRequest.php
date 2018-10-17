<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/webhook.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the contents of the original request that was passed to
 * the `[Streaming]DetectIntent` call.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.OriginalDetectIntentRequest</code>
 */
class OriginalDetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     * by Dialogflow-owned servers.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     */
    private $source = '';
    /**
     * Optional. This field is set to the value of `QueryParameters.payload` field
     * passed in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 3;</code>
     */
    private $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source
     *           The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     *           by Dialogflow-owned servers.
     *     @type \Google\Protobuf\Struct $payload
     *           Optional. This field is set to the value of `QueryParameters.payload` field
     *           passed in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     * by Dialogflow-owned servers.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source of this request, e.g., `google`, `facebook`, `slack`. It is set
     * by Dialogflow-owned servers.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Optional. This field is set to the value of `QueryParameters.payload` field
     * passed in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 3;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Optional. This field is set to the value of `QueryParameters.payload` field
     * passed in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->payload = $var;

        return $this;
    }

}

