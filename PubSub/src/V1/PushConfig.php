<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a push delivery endpoint.
 *
 * Generated from protobuf message <code>google.pubsub.v1.PushConfig</code>
 */
final class PushConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A URL locating the endpoint to which messages should be pushed.
     * For example, a Webhook endpoint might use "https://example.com/push".
     *
     * Generated from protobuf field <code>string push_endpoint = 1;</code>
     */
    private $push_endpoint = '';
    /**
     * Endpoint configuration attributes.
     * Every endpoint has a set of API supported attributes that can be used to
     * control different aspects of the message delivery.
     * The currently supported attribute is `x-goog-version`, which you can
     * use to change the format of the pushed message. This attribute
     * indicates the version of the data expected by the endpoint. This
     * controls the shape of the pushed message (i.e., its fields and metadata).
     * The endpoint version is based on the version of the Pub/Sub API.
     * If not present during the `CreateSubscription` call, it will default to
     * the version of the API used to make such call. If not present during a
     * `ModifyPushConfig` call, its value will not be changed. `GetSubscription`
     * calls will always return a valid version, even if the subscription was
     * created without this attribute.
     * The possible values for this attribute are:
     * * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     * * `v1` or `v1beta2`: uses the push format defined in the v1 Pub/Sub API.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     */
    private $attributes;
    protected $authentication_method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $push_endpoint
     *           A URL locating the endpoint to which messages should be pushed.
     *           For example, a Webhook endpoint might use "https://example.com/push".
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Endpoint configuration attributes.
     *           Every endpoint has a set of API supported attributes that can be used to
     *           control different aspects of the message delivery.
     *           The currently supported attribute is `x-goog-version`, which you can
     *           use to change the format of the pushed message. This attribute
     *           indicates the version of the data expected by the endpoint. This
     *           controls the shape of the pushed message (i.e., its fields and metadata).
     *           The endpoint version is based on the version of the Pub/Sub API.
     *           If not present during the `CreateSubscription` call, it will default to
     *           the version of the API used to make such call. If not present during a
     *           `ModifyPushConfig` call, its value will not be changed. `GetSubscription`
     *           calls will always return a valid version, even if the subscription was
     *           created without this attribute.
     *           The possible values for this attribute are:
     *           * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     *           * `v1` or `v1beta2`: uses the push format defined in the v1 Pub/Sub API.
     *     @type \Google\Cloud\PubSub\V1\PushConfig\OidcToken $oidc_token
     *           If specified, Pub/Sub will generate and attach an OIDC JWT token as an
     *           `Authorization` header in the HTTP request for every pushed message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * A URL locating the endpoint to which messages should be pushed.
     * For example, a Webhook endpoint might use "https://example.com/push".
     *
     * Generated from protobuf field <code>string push_endpoint = 1;</code>
     * @return string
     */
    public function getPushEndpoint()
    {
        return $this->push_endpoint;
    }

    /**
     * A URL locating the endpoint to which messages should be pushed.
     * For example, a Webhook endpoint might use "https://example.com/push".
     *
     * Generated from protobuf field <code>string push_endpoint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPushEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->push_endpoint = $var;

        return $this;
    }

    /**
     * Endpoint configuration attributes.
     * Every endpoint has a set of API supported attributes that can be used to
     * control different aspects of the message delivery.
     * The currently supported attribute is `x-goog-version`, which you can
     * use to change the format of the pushed message. This attribute
     * indicates the version of the data expected by the endpoint. This
     * controls the shape of the pushed message (i.e., its fields and metadata).
     * The endpoint version is based on the version of the Pub/Sub API.
     * If not present during the `CreateSubscription` call, it will default to
     * the version of the API used to make such call. If not present during a
     * `ModifyPushConfig` call, its value will not be changed. `GetSubscription`
     * calls will always return a valid version, even if the subscription was
     * created without this attribute.
     * The possible values for this attribute are:
     * * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     * * `v1` or `v1beta2`: uses the push format defined in the v1 Pub/Sub API.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Endpoint configuration attributes.
     * Every endpoint has a set of API supported attributes that can be used to
     * control different aspects of the message delivery.
     * The currently supported attribute is `x-goog-version`, which you can
     * use to change the format of the pushed message. This attribute
     * indicates the version of the data expected by the endpoint. This
     * controls the shape of the pushed message (i.e., its fields and metadata).
     * The endpoint version is based on the version of the Pub/Sub API.
     * If not present during the `CreateSubscription` call, it will default to
     * the version of the API used to make such call. If not present during a
     * `ModifyPushConfig` call, its value will not be changed. `GetSubscription`
     * calls will always return a valid version, even if the subscription was
     * created without this attribute.
     * The possible values for this attribute are:
     * * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     * * `v1` or `v1beta2`: uses the push format defined in the v1 Pub/Sub API.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * If specified, Pub/Sub will generate and attach an OIDC JWT token as an
     * `Authorization` header in the HTTP request for every pushed message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig.OidcToken oidc_token = 3;</code>
     * @return \Google\Cloud\PubSub\V1\PushConfig\OidcToken
     */
    public function getOidcToken()
    {
        return $this->readOneof(3);
    }

    /**
     * If specified, Pub/Sub will generate and attach an OIDC JWT token as an
     * `Authorization` header in the HTTP request for every pushed message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig.OidcToken oidc_token = 3;</code>
     * @param \Google\Cloud\PubSub\V1\PushConfig\OidcToken $var
     * @return $this
     */
    public function setOidcToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\PushConfig_OidcToken::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->whichOneof("authentication_method");
    }

}

