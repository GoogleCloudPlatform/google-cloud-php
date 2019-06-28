<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/target.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App Engine HTTP queue.
 * The task will be delivered to the App Engine application hostname
 * specified by its [AppEngineHttpQueue][google.cloud.tasks.v2beta3.AppEngineHttpQueue] and [AppEngineHttpRequest][google.cloud.tasks.v2beta3.AppEngineHttpRequest].
 * The documentation for [AppEngineHttpRequest][google.cloud.tasks.v2beta3.AppEngineHttpRequest] explains how the
 * task's host URL is constructed.
 * Using [AppEngineHttpQueue][google.cloud.tasks.v2beta3.AppEngineHttpQueue] requires
 * [`appengine.applications.get`](https://cloud.google.com/appengine/docs/admin-api/access-control)
 * Google IAM permission for the project
 * and the following scope:
 * `https://www.googleapis.com/auth/cloud-platform`
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.AppEngineHttpQueue</code>
 */
final class AppEngineHttpQueue extends \Google\Protobuf\Internal\Message
{
    /**
     * Overrides for the
     * [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     * If set, `app_engine_routing_override` is used for all tasks in
     * the queue, no matter what the setting is for the
     * [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.AppEngineRouting app_engine_routing_override = 1;</code>
     */
    private $app_engine_routing_override = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Tasks\V2beta3\AppEngineRouting $app_engine_routing_override
     *           Overrides for the
     *           [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     *           If set, `app_engine_routing_override` is used for all tasks in
     *           the queue, no matter what the setting is for the
     *           [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * Overrides for the
     * [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     * If set, `app_engine_routing_override` is used for all tasks in
     * the queue, no matter what the setting is for the
     * [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.AppEngineRouting app_engine_routing_override = 1;</code>
     * @return \Google\Cloud\Tasks\V2beta3\AppEngineRouting
     */
    public function getAppEngineRoutingOverride()
    {
        return $this->app_engine_routing_override;
    }

    /**
     * Overrides for the
     * [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     * If set, `app_engine_routing_override` is used for all tasks in
     * the queue, no matter what the setting is for the
     * [task-level app_engine_routing][google.cloud.tasks.v2beta3.AppEngineHttpRequest.app_engine_routing].
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.AppEngineRouting app_engine_routing_override = 1;</code>
     * @param \Google\Cloud\Tasks\V2beta3\AppEngineRouting $var
     * @return $this
     */
    public function setAppEngineRoutingOverride($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta3\AppEngineRouting::class);
        $this->app_engine_routing_override = $var;

        return $this;
    }

}

