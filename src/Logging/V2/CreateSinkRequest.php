<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The parameters to `CreateSink`.
 * </pre>
 *
 * Protobuf type <code>Google\Logging\V2\CreateSinkRequest</code>
 */
class CreateSinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The resource in which to create the sink:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * Required. The new sink, whose `name` parameter is a sink identifier that
     * is not already in use.
     * </pre>
     *
     * <code>.google.logging.v2.LogSink sink = 2;</code>
     */
    private $sink = null;
    /**
     * <pre>
     * Optional. Determines the kind of IAM identity returned as `writer_identity`
     * in the new sink.  If this value is omitted or set to false, and if the
     * sink's parent is a project, then the value returned as `writer_identity` is
     * the same group or service account used by Stackdriver Logging before the
     * addition of writer identities to this API. The sink's destination must be
     * in the same project as the sink itself.
     * If this field is set to true, or if the sink is owned by a non-project
     * resource such as an organization, then the value of `writer_identity` will
     * be a unique service account used only for exports from the new sink.  For
     * more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     * </pre>
     *
     * <code>bool unique_writer_identity = 3;</code>
     */
    private $unique_writer_identity = false;

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The resource in which to create the sink:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * <pre>
     * Required. The resource in which to create the sink:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     * @param string $var
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * <pre>
     * Required. The new sink, whose `name` parameter is a sink identifier that
     * is not already in use.
     * </pre>
     *
     * <code>.google.logging.v2.LogSink sink = 2;</code>
     * @return Google\Cloud\Logging\V2\LogSink
     */
    public function getSink()
    {
        return $this->sink;
    }

    /**
     * <pre>
     * Required. The new sink, whose `name` parameter is a sink identifier that
     * is not already in use.
     * </pre>
     *
     * <code>.google.logging.v2.LogSink sink = 2;</code>
     * @param Google\Cloud\Logging\V2\LogSink $var
     */
    public function setSink(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogSink::class);
        $this->sink = $var;

        return $this;
    }

    /**
     * <pre>
     * Optional. Determines the kind of IAM identity returned as `writer_identity`
     * in the new sink.  If this value is omitted or set to false, and if the
     * sink's parent is a project, then the value returned as `writer_identity` is
     * the same group or service account used by Stackdriver Logging before the
     * addition of writer identities to this API. The sink's destination must be
     * in the same project as the sink itself.
     * If this field is set to true, or if the sink is owned by a non-project
     * resource such as an organization, then the value of `writer_identity` will
     * be a unique service account used only for exports from the new sink.  For
     * more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     * </pre>
     *
     * <code>bool unique_writer_identity = 3;</code>
     * @return bool
     */
    public function getUniqueWriterIdentity()
    {
        return $this->unique_writer_identity;
    }

    /**
     * <pre>
     * Optional. Determines the kind of IAM identity returned as `writer_identity`
     * in the new sink.  If this value is omitted or set to false, and if the
     * sink's parent is a project, then the value returned as `writer_identity` is
     * the same group or service account used by Stackdriver Logging before the
     * addition of writer identities to this API. The sink's destination must be
     * in the same project as the sink itself.
     * If this field is set to true, or if the sink is owned by a non-project
     * resource such as an organization, then the value of `writer_identity` will
     * be a unique service account used only for exports from the new sink.  For
     * more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     * </pre>
     *
     * <code>bool unique_writer_identity = 3;</code>
     * @param bool $var
     */
    public function setUniqueWriterIdentity($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_writer_identity = $var;

        return $this;
    }

}

