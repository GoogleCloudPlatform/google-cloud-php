<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information related to tracking the progress on resolving the error.
 *
 * Protobuf type <code>Google\Devtools\Clouderrorreporting\V1beta1\TrackingIssue</code>
 */
class TrackingIssue extends \Google\Protobuf\Internal\Message
{
    /**
     * A URL pointing to a related entry in an issue tracking system.
     * Example: https://github.com/user/project/issues/4
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    private $url = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct();
    }

    /**
     * A URL pointing to a related entry in an issue tracking system.
     * Example: https://github.com/user/project/issues/4
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A URL pointing to a related entry in an issue tracking system.
     * Example: https://github.com/user/project/issues/4
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

