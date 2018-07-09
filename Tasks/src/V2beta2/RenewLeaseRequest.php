<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for renewing a lease using
 * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.RenewLeaseRequest</code>
 */
class RenewLeaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required.
     * The task's current schedule time, available in the
     * [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     * to ensure that your worker currently holds the lease.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 2;</code>
     */
    private $schedule_time = null;
    /**
     * Required.
     * The desired new lease duration, starting from now.
     * The maximum lease duration is 1 week.
     * `lease_duration` will be truncated to the nearest second.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lease_duration = 3;</code>
     */
    private $lease_duration = null;
    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](/iam/) permission on the
     * [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 4;</code>
     */
    private $response_view = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct();
    }

    /**
     * Required.
     * The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required.
     * The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
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
     * Required.
     * The task's current schedule time, available in the
     * [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     * to ensure that your worker currently holds the lease.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getScheduleTime()
    {
        return $this->schedule_time;
    }

    /**
     * Required.
     * The task's current schedule time, available in the
     * [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     * to ensure that your worker currently holds the lease.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduleTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->schedule_time = $var;

        return $this;
    }

    /**
     * Required.
     * The desired new lease duration, starting from now.
     * The maximum lease duration is 1 week.
     * `lease_duration` will be truncated to the nearest second.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lease_duration = 3;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getLeaseDuration()
    {
        return $this->lease_duration;
    }

    /**
     * Required.
     * The desired new lease duration, starting from now.
     * The maximum lease duration is 1 week.
     * `lease_duration` will be truncated to the nearest second.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lease_duration = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLeaseDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lease_duration = $var;

        return $this;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](/iam/) permission on the
     * [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 4;</code>
     * @return int
     */
    public function getResponseView()
    {
        return $this->response_view;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](/iam/) permission on the
     * [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tasks\V2beta2\Task_View::class);
        $this->response_view = $var;

        return $this;
    }

}

