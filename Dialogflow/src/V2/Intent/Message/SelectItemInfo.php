<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional info about the select item for when it is triggered in a
 * dialog.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.SelectItemInfo</code>
 */
class SelectItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A unique key that will be sent back to the agent if this
     * response is given.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * Optional. A list of synonyms that can also be used to trigger this
     * item in dialog.
     *
     * Generated from protobuf field <code>repeated string synonyms = 2;</code>
     */
    private $synonyms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Required. A unique key that will be sent back to the agent if this
     *           response is given.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $synonyms
     *           Optional. A list of synonyms that can also be used to trigger this
     *           item in dialog.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A unique key that will be sent back to the agent if this
     * response is given.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. A unique key that will be sent back to the agent if this
     * response is given.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Optional. A list of synonyms that can also be used to trigger this
     * item in dialog.
     *
     * Generated from protobuf field <code>repeated string synonyms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * Optional. A list of synonyms that can also be used to trigger this
     * item in dialog.
     *
     * Generated from protobuf field <code>repeated string synonyms = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSynonyms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->synonyms = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SelectItemInfo::class, \Google\Cloud\Dialogflow\V2\Intent_Message_SelectItemInfo::class);

