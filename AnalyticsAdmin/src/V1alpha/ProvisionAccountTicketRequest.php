<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ProvisionAccountTicket RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ProvisionAccountTicketRequest</code>
 */
class ProvisionAccountTicketRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The account to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     */
    private $account = null;
    /**
     * Redirect URI where the user will be sent after accepting Terms of Service.
     * Must be configured in Developers Console as a Redirect URI
     *
     * Generated from protobuf field <code>string redirect_uri = 2;</code>
     */
    private $redirect_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\Account $account
     *           The account to create.
     *     @type string $redirect_uri
     *           Redirect URI where the user will be sent after accepting Terms of Service.
     *           Must be configured in Developers Console as a Redirect URI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The account to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\Account|null
     */
    public function getAccount()
    {
        return isset($this->account) ? $this->account : null;
    }

    public function hasAccount()
    {
        return isset($this->account);
    }

    public function clearAccount()
    {
        unset($this->account);
    }

    /**
     * The account to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\Account $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Account::class);
        $this->account = $var;

        return $this;
    }

    /**
     * Redirect URI where the user will be sent after accepting Terms of Service.
     * Must be configured in Developers Console as a Redirect URI
     *
     * Generated from protobuf field <code>string redirect_uri = 2;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Redirect URI where the user will be sent after accepting Terms of Service.
     * Must be configured in Developers Console as a Redirect URI
     *
     * Generated from protobuf field <code>string redirect_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

}

