<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Information related to tracking the progress on resolving the error.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouderrorreporting.v1beta1.TrackingIssue</code>
 */
class TrackingIssue extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A URL pointing to a related entry in an issue tracking system.
     * Example: https://github.com/user/project/issues/4
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    private $url = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A URL pointing to a related entry in an issue tracking system.
     * Example: https://github.com/user/project/issues/4
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <pre>
     * A URL pointing to a related entry in an issue tracking system.
     * Example: https://github.com/user/project/issues/4
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

