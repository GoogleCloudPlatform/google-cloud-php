<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the UpdateSubscription method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.UpdateSubscriptionRequest</code>
 */
final class UpdateSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The updated subscription object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Subscription subscription = 1;</code>
     */
    private $subscription = null;
    /**
     * Indicates which fields in the provided subscription to update.
     * Must be specified and non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PubSub\V1\Subscription $subscription
     *           The updated subscription object.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Indicates which fields in the provided subscription to update.
     *           Must be specified and non-empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The updated subscription object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Subscription subscription = 1;</code>
     * @return \Google\Cloud\PubSub\V1\Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The updated subscription object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Subscription subscription = 1;</code>
     * @param \Google\Cloud\PubSub\V1\Subscription $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\Subscription::class);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided subscription to update.
     * Must be specified and non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Indicates which fields in the provided subscription to update.
     * Must be specified and non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

