<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `CreateSink`.
 *
 * Generated from protobuf message <code>google.logging.v2.CreateSinkRequest</code>
 */
class CreateSinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource in which to create the sink:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The new sink, whose `name` parameter is a sink identifier that
     * is not already in use.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink sink = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sink = null;
    /**
     * Optional. Determines the kind of IAM identity returned as `writer_identity`
     * in the new sink. If this value is omitted or set to false, and if the
     * sink's parent is a project, then the value returned as `writer_identity` is
     * the same group or service account used by Logging before the addition of
     * writer identities to this API. The sink's destination must be in the same
     * project as the sink itself.
     * If this field is set to true, or if the sink is owned by a non-project
     * resource such as an organization, then the value of `writer_identity` will
     * be a unique service account used only for exports from the new sink. For
     * more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     *
     * Generated from protobuf field <code>bool unique_writer_identity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $unique_writer_identity = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource in which to create the sink:
     *               "projects/[PROJECT_ID]"
     *               "organizations/[ORGANIZATION_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]"
     *               "folders/[FOLDER_ID]"
     *           Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     *     @type \Google\Cloud\Logging\V2\LogSink $sink
     *           Required. The new sink, whose `name` parameter is a sink identifier that
     *           is not already in use.
     *     @type bool $unique_writer_identity
     *           Optional. Determines the kind of IAM identity returned as `writer_identity`
     *           in the new sink. If this value is omitted or set to false, and if the
     *           sink's parent is a project, then the value returned as `writer_identity` is
     *           the same group or service account used by Logging before the addition of
     *           writer identities to this API. The sink's destination must be in the same
     *           project as the sink itself.
     *           If this field is set to true, or if the sink is owned by a non-project
     *           resource such as an organization, then the value of `writer_identity` will
     *           be a unique service account used only for exports from the new sink. For
     *           more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource in which to create the sink:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource in which to create the sink:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
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
     * Required. The new sink, whose `name` parameter is a sink identifier that
     * is not already in use.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink sink = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Logging\V2\LogSink
     */
    public function getSink()
    {
        return $this->sink;
    }

    /**
     * Required. The new sink, whose `name` parameter is a sink identifier that
     * is not already in use.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink sink = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Logging\V2\LogSink $var
     * @return $this
     */
    public function setSink($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogSink::class);
        $this->sink = $var;

        return $this;
    }

    /**
     * Optional. Determines the kind of IAM identity returned as `writer_identity`
     * in the new sink. If this value is omitted or set to false, and if the
     * sink's parent is a project, then the value returned as `writer_identity` is
     * the same group or service account used by Logging before the addition of
     * writer identities to this API. The sink's destination must be in the same
     * project as the sink itself.
     * If this field is set to true, or if the sink is owned by a non-project
     * resource such as an organization, then the value of `writer_identity` will
     * be a unique service account used only for exports from the new sink. For
     * more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     *
     * Generated from protobuf field <code>bool unique_writer_identity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getUniqueWriterIdentity()
    {
        return $this->unique_writer_identity;
    }

    /**
     * Optional. Determines the kind of IAM identity returned as `writer_identity`
     * in the new sink. If this value is omitted or set to false, and if the
     * sink's parent is a project, then the value returned as `writer_identity` is
     * the same group or service account used by Logging before the addition of
     * writer identities to this API. The sink's destination must be in the same
     * project as the sink itself.
     * If this field is set to true, or if the sink is owned by a non-project
     * resource such as an organization, then the value of `writer_identity` will
     * be a unique service account used only for exports from the new sink. For
     * more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     *
     * Generated from protobuf field <code>bool unique_writer_identity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setUniqueWriterIdentity($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_writer_identity = $var;

        return $this;
    }

}

