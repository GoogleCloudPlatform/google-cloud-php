<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A topic resource.
 *
 * Generated from protobuf message <code>google.pubsub.v1.Topic</code>
 */
class Topic extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and
     * managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;
    /**
     * Policy constraining the set of Google Cloud Platform regions where messages
     * published to the topic may be stored. If not present, then no constraints
     * are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     */
    private $message_storage_policy = null;
    /**
     * The resource name of the Cloud KMS CryptoKey to be used to protect access
     * to messages published on this topic.
     * The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string kms_key_name = 5;</code>
     */
    private $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the topic. It must have the format
     *           `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     *           and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     *           underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     *           signs (`%`). It must be between 3 and 255 characters in length, and it
     *           must not start with `"goog"`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and
     *           managing labels</a>.
     *     @type \Google\Cloud\PubSub\V1\MessageStoragePolicy $message_storage_policy
     *           Policy constraining the set of Google Cloud Platform regions where messages
     *           published to the topic may be stored. If not present, then no constraints
     *           are in effect.
     *     @type string $kms_key_name
     *           The resource name of the Cloud KMS CryptoKey to be used to protect access
     *           to messages published on this topic.
     *           The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the topic. It must have the format
     * `"projects/{project}/topics/{topic}"`. `{topic}` must start with a letter,
     * and contain only letters (`[A-Za-z]`), numbers (`[0-9]`), dashes (`-`),
     * underscores (`_`), periods (`.`), tildes (`~`), plus (`+`) or percent
     * signs (`%`). It must be between 3 and 255 characters in length, and it
     * must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and
     * managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * See <a href="https://cloud.google.com/pubsub/docs/labels"> Creating and
     * managing labels</a>.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Policy constraining the set of Google Cloud Platform regions where messages
     * published to the topic may be stored. If not present, then no constraints
     * are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     * @return \Google\Cloud\PubSub\V1\MessageStoragePolicy
     */
    public function getMessageStoragePolicy()
    {
        return $this->message_storage_policy;
    }

    /**
     * Policy constraining the set of Google Cloud Platform regions where messages
     * published to the topic may be stored. If not present, then no constraints
     * are in effect.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.MessageStoragePolicy message_storage_policy = 3;</code>
     * @param \Google\Cloud\PubSub\V1\MessageStoragePolicy $var
     * @return $this
     */
    public function setMessageStoragePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\MessageStoragePolicy::class);
        $this->message_storage_policy = $var;

        return $this;
    }

    /**
     * The resource name of the Cloud KMS CryptoKey to be used to protect access
     * to messages published on this topic.
     * The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string kms_key_name = 5;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The resource name of the Cloud KMS CryptoKey to be used to protect access
     * to messages published on this topic.
     * The expected format is `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string kms_key_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

