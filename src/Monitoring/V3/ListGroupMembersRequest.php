<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListGroupMembers` request.
 *
 * Protobuf type <code>Google\Monitoring\V3\ListGroupMembersRequest</code>
 */
class ListGroupMembersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The group whose members are listed. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     */
    private $name = '';
    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * An optional [list filter](/monitoring/api/learn_more#filtering) describing
     * the members to be returned.  The filter may reference the type, labels, and
     * metadata of monitored resources that comprise the group.
     * For example, to return only resources representing Compute Engine VM
     * instances, use this filter:
     *     resource.type = "gce_instance"
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    private $filter = '';
    /**
     * An optional time interval for which results should be returned. Only
     * members that were part of the group during the specified interval are
     * included in the response.  If no interval is provided then the group
     * membership over the last minute is returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 6;</code>
     */
    private $interval = null;

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct();
    }

    /**
     * The group whose members are listed. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The group whose members are listed. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * An optional [list filter](/monitoring/api/learn_more#filtering) describing
     * the members to be returned.  The filter may reference the type, labels, and
     * metadata of monitored resources that comprise the group.
     * For example, to return only resources representing Compute Engine VM
     * instances, use this filter:
     *     resource.type = "gce_instance"
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An optional [list filter](/monitoring/api/learn_more#filtering) describing
     * the members to be returned.  The filter may reference the type, labels, and
     * metadata of monitored resources that comprise the group.
     * For example, to return only resources representing Compute Engine VM
     * instances, use this filter:
     *     resource.type = "gce_instance"
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @param string $var
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * An optional time interval for which results should be returned. Only
     * members that were part of the group during the specified interval are
     * included in the response.  If no interval is provided then the group
     * membership over the last minute is returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 6;</code>
     * @return \Google\Cloud\Monitoring\V3\TimeInterval
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * An optional time interval for which results should be returned. Only
     * members that were part of the group during the specified interval are
     * included in the response.  If no interval is provided then the group
     * membership over the last minute is returned.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 6;</code>
     * @param \Google\Cloud\Monitoring\V3\TimeInterval $var
     */
    public function setInterval(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TimeInterval::class);
        $this->interval = $var;

        return $this;
    }

}

