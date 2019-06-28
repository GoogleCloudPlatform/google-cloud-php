<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The description of a dynamic collection of monitored resources. Each group
 * has a filter that is matched against monitored resources and their associated
 * metadata. If a group's filter matches an available monitored resource, then
 * that resource is a member of that group.  Groups can contain any number of
 * monitored resources, and each monitored resource can be a member of any
 * number of groups.
 * Groups can be nested in parent-child hierarchies. The `parentName` field
 * identifies an optional parent for each group.  If a group has a parent, then
 * the only monitored resources available to be matched by the group's filter
 * are the resources contained in the parent group.  In other words, a group
 * contains the monitored resources that match its filter and the filters of all
 * the group's ancestors.  A group without a parent can contain any monitored
 * resource.
 * For example, consider an infrastructure running a set of instances with two
 * user-defined tags: `"environment"` and `"role"`. A parent group has a filter,
 * `environment="production"`.  A child of that parent group has a filter,
 * `role="transcoder"`.  The parent group contains all instances in the
 * production environment, regardless of their roles.  The child group contains
 * instances that have the transcoder role *and* are in the production
 * environment.
 * The monitored resources contained in a group can change at any moment,
 * depending on what resources exist and what filters are associated with the
 * group and its ancestors.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Group</code>
 */
final class Group extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of this group. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     * When creating a group, this field is ignored and a new name is created
     * consisting of the project specified in the call to `CreateGroup`
     * and a unique `{group_id}` that is generated automatically.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A user-assigned name for this group, used only for display purposes.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * The name of the group's parent, if it has one.
     * The format is `"projects/{project_id_or_number}/groups/{group_id}"`.
     * For groups with no parent, `parentName` is the empty string, `""`.
     *
     * Generated from protobuf field <code>string parent_name = 3;</code>
     */
    private $parent_name = '';
    /**
     * The filter used to determine which monitored resources belong to this
     * group.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    private $filter = '';
    /**
     * If true, the members of this group are considered to be a cluster.
     * The system can perform additional analysis on groups that are clusters.
     *
     * Generated from protobuf field <code>bool is_cluster = 6;</code>
     */
    private $is_cluster = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of this group. The format is
     *           `"projects/{project_id_or_number}/groups/{group_id}"`.
     *           When creating a group, this field is ignored and a new name is created
     *           consisting of the project specified in the call to `CreateGroup`
     *           and a unique `{group_id}` that is generated automatically.
     *     @type string $display_name
     *           A user-assigned name for this group, used only for display purposes.
     *     @type string $parent_name
     *           The name of the group's parent, if it has one.
     *           The format is `"projects/{project_id_or_number}/groups/{group_id}"`.
     *           For groups with no parent, `parentName` is the empty string, `""`.
     *     @type string $filter
     *           The filter used to determine which monitored resources belong to this
     *           group.
     *     @type bool $is_cluster
     *           If true, the members of this group are considered to be a cluster.
     *           The system can perform additional analysis on groups that are clusters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Group::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of this group. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     * When creating a group, this field is ignored and a new name is created
     * consisting of the project specified in the call to `CreateGroup`
     * and a unique `{group_id}` that is generated automatically.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of this group. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     * When creating a group, this field is ignored and a new name is created
     * consisting of the project specified in the call to `CreateGroup`
     * and a unique `{group_id}` that is generated automatically.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A user-assigned name for this group, used only for display purposes.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A user-assigned name for this group, used only for display purposes.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The name of the group's parent, if it has one.
     * The format is `"projects/{project_id_or_number}/groups/{group_id}"`.
     * For groups with no parent, `parentName` is the empty string, `""`.
     *
     * Generated from protobuf field <code>string parent_name = 3;</code>
     * @return string
     */
    public function getParentName()
    {
        return $this->parent_name;
    }

    /**
     * The name of the group's parent, if it has one.
     * The format is `"projects/{project_id_or_number}/groups/{group_id}"`.
     * For groups with no parent, `parentName` is the empty string, `""`.
     *
     * Generated from protobuf field <code>string parent_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setParentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_name = $var;

        return $this;
    }

    /**
     * The filter used to determine which monitored resources belong to this
     * group.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter used to determine which monitored resources belong to this
     * group.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * If true, the members of this group are considered to be a cluster.
     * The system can perform additional analysis on groups that are clusters.
     *
     * Generated from protobuf field <code>bool is_cluster = 6;</code>
     * @return bool
     */
    public function getIsCluster()
    {
        return $this->is_cluster;
    }

    /**
     * If true, the members of this group are considered to be a cluster.
     * The system can perform additional analysis on groups that are clusters.
     *
     * Generated from protobuf field <code>bool is_cluster = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsCluster($var)
    {
        GPBUtil::checkBool($var);
        $this->is_cluster = $var;

        return $this;
    }

}

