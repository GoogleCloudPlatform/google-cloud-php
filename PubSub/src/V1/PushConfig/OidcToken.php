<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\PushConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information needed for generating an
 * [OpenID Connect
 * token](https://developers.google.com/identity/protocols/OpenIDConnect).
 *
 * Generated from protobuf message <code>google.pubsub.v1.PushConfig.OidcToken</code>
 */
final class OidcToken extends \Google\Protobuf\Internal\Message
{
    /**
     * [Service account
     * email](https://cloud.google.com/iam/docs/service-accounts)
     * to be used for generating the OIDC token. The caller (for
     * CreateSubscription, UpdateSubscription, and ModifyPushConfig RPCs) must
     * have the iam.serviceAccounts.actAs permission for the service account.
     *
     * Generated from protobuf field <code>string service_account_email = 1;</code>
     */
    private $service_account_email = '';
    /**
     * Audience to be used when generating OIDC token. The audience claim
     * identifies the recipients that the JWT is intended for. The audience
     * value is a single case-sensitive string. Having multiple values (array)
     * for the audience field is not supported. More info about the OIDC JWT
     * token audience here: https://tools.ietf.org/html/rfc7519#section-4.1.3
     * Note: if not specified, the Push endpoint URL will be used.
     *
     * Generated from protobuf field <code>string audience = 2;</code>
     */
    private $audience = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_account_email
     *           [Service account
     *           email](https://cloud.google.com/iam/docs/service-accounts)
     *           to be used for generating the OIDC token. The caller (for
     *           CreateSubscription, UpdateSubscription, and ModifyPushConfig RPCs) must
     *           have the iam.serviceAccounts.actAs permission for the service account.
     *     @type string $audience
     *           Audience to be used when generating OIDC token. The audience claim
     *           identifies the recipients that the JWT is intended for. The audience
     *           value is a single case-sensitive string. Having multiple values (array)
     *           for the audience field is not supported. More info about the OIDC JWT
     *           token audience here: https://tools.ietf.org/html/rfc7519#section-4.1.3
     *           Note: if not specified, the Push endpoint URL will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * [Service account
     * email](https://cloud.google.com/iam/docs/service-accounts)
     * to be used for generating the OIDC token. The caller (for
     * CreateSubscription, UpdateSubscription, and ModifyPushConfig RPCs) must
     * have the iam.serviceAccounts.actAs permission for the service account.
     *
     * Generated from protobuf field <code>string service_account_email = 1;</code>
     * @return string
     */
    public function getServiceAccountEmail()
    {
        return $this->service_account_email;
    }

    /**
     * [Service account
     * email](https://cloud.google.com/iam/docs/service-accounts)
     * to be used for generating the OIDC token. The caller (for
     * CreateSubscription, UpdateSubscription, and ModifyPushConfig RPCs) must
     * have the iam.serviceAccounts.actAs permission for the service account.
     *
     * Generated from protobuf field <code>string service_account_email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_email = $var;

        return $this;
    }

    /**
     * Audience to be used when generating OIDC token. The audience claim
     * identifies the recipients that the JWT is intended for. The audience
     * value is a single case-sensitive string. Having multiple values (array)
     * for the audience field is not supported. More info about the OIDC JWT
     * token audience here: https://tools.ietf.org/html/rfc7519#section-4.1.3
     * Note: if not specified, the Push endpoint URL will be used.
     *
     * Generated from protobuf field <code>string audience = 2;</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Audience to be used when generating OIDC token. The audience claim
     * identifies the recipients that the JWT is intended for. The audience
     * value is a single case-sensitive string. Having multiple values (array)
     * for the audience field is not supported. More info about the OIDC JWT
     * token audience here: https://tools.ietf.org/html/rfc7519#section-4.1.3
     * Note: if not specified, the Push endpoint URL will be used.
     *
     * Generated from protobuf field <code>string audience = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OidcToken::class, \Google\Cloud\PubSub\V1\PushConfig_OidcToken::class);

