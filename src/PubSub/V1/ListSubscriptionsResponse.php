<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the `ListSubscriptions` method.
 * </pre>
 *
 * Protobuf type <code>Google\Pubsub\V1\ListSubscriptionsResponse</code>
 */
class ListSubscriptionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The subscriptions that match the request.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Subscription subscriptions = 1;</code>
     */
    private $subscriptions;
    /**
     * <pre>
     * If not empty, indicates that there may be more subscriptions that match
     * the request; this value should be passed in a new
     * `ListSubscriptionsRequest` to get more subscriptions.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The subscriptions that match the request.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Subscription subscriptions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * <pre>
     * The subscriptions that match the request.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Subscription subscriptions = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setSubscriptions(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PubSub\V1\Subscription::class);
        $this->subscriptions = $arr;

        return $this;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more subscriptions that match
     * the request; this value should be passed in a new
     * `ListSubscriptionsRequest` to get more subscriptions.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more subscriptions that match
     * the request; this value should be passed in a new
     * `ListSubscriptionsRequest` to get more subscriptions.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param string $var
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

