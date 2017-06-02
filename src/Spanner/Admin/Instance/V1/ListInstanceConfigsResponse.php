<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response for [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs].
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.instance.v1.ListInstanceConfigsResponse</code>
 */
class ListInstanceConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The list of requested instance configurations.
     * </pre>
     *
     * <code>repeated .google.spanner.admin.instance.v1.InstanceConfig instance_configs = 1;</code>
     */
    private $instance_configs;
    /**
     * <pre>
     * `next_page_token` can be sent in a subsequent
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs] call to
     * fetch more of the matching instance configurations.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The list of requested instance configurations.
     * </pre>
     *
     * <code>repeated .google.spanner.admin.instance.v1.InstanceConfig instance_configs = 1;</code>
     */
    public function getInstanceConfigs()
    {
        return $this->instance_configs;
    }

    /**
     * <pre>
     * The list of requested instance configurations.
     * </pre>
     *
     * <code>repeated .google.spanner.admin.instance.v1.InstanceConfig instance_configs = 1;</code>
     */
    public function setInstanceConfigs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig::class);
        $this->instance_configs = $arr;

        return $this;
    }

    /**
     * <pre>
     * `next_page_token` can be sent in a subsequent
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs] call to
     * fetch more of the matching instance configurations.
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
     * `next_page_token` can be sent in a subsequent
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs] call to
     * fetch more of the matching instance configurations.
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

