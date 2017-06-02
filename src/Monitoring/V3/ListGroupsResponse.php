<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The `ListGroups` response.
 * </pre>
 *
 * Protobuf type <code>google.monitoring.v3.ListGroupsResponse</code>
 */
class ListGroupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The groups that match the specified filters.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Group group = 1;</code>
     */
    private $group;
    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The groups that match the specified filters.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Group group = 1;</code>
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * <pre>
     * The groups that match the specified filters.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Group group = 1;</code>
     */
    public function setGroup(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\Group::class);
        $this->group = $arr;

        return $this;
    }

    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

