<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Description of a group of similar error events.
 * </pre>
 *
 * Protobuf type <code>Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroup</code>
 */
class ErrorGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The group resource name.
     * Example: <code>projects/my-project-123/groups/my-groupid</code>
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Group IDs are unique for a given project. If the same kind of error
     * occurs in different service contexts, it will receive the same group ID.
     * </pre>
     *
     * <code>string group_id = 2;</code>
     */
    private $group_id = '';
    /**
     * <pre>
     * Associated tracking issues.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.TrackingIssue tracking_issues = 3;</code>
     */
    private $tracking_issues;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The group resource name.
     * Example: <code>projects/my-project-123/groups/my-groupid</code>
     * </pre>
     *
     * <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The group resource name.
     * Example: <code>projects/my-project-123/groups/my-groupid</code>
     * </pre>
     *
     * <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * <pre>
     * Group IDs are unique for a given project. If the same kind of error
     * occurs in different service contexts, it will receive the same group ID.
     * </pre>
     *
     * <code>string group_id = 2;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <pre>
     * Group IDs are unique for a given project. If the same kind of error
     * occurs in different service contexts, it will receive the same group ID.
     * </pre>
     *
     * <code>string group_id = 2;</code>
     * @param string $var
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

    /**
     * <pre>
     * Associated tracking issues.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.TrackingIssue tracking_issues = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackingIssues()
    {
        return $this->tracking_issues;
    }

    /**
     * <pre>
     * Associated tracking issues.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.TrackingIssue tracking_issues = 3;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setTrackingIssues(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ErrorReporting\V1beta1\TrackingIssue::class);
        $this->tracking_issues = $arr;

        return $this;
    }

}

