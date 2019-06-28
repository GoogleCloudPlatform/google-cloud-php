<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/task.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A unit of scheduled work.
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.Task</code>
 */
final class Task extends \Google\Protobuf\Internal\Message
{
    /**
     * Optionally caller-specified in [CreateTask][google.cloud.tasks.v2beta3.CloudTasks.CreateTask].
     * The task name.
     * The task name must have the following format:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     * * `PROJECT_ID` can contain letters ([A-Za-z]), numbers ([0-9]),
     *    hyphens (-), colons (:), or periods (.).
     *    For more information, see
     *    [Identifying
     *    projects](https://cloud.google.com/resource-manager/docs/creating-managing-projects#identifying_projects)
     * * `LOCATION_ID` is the canonical ID for the task's location.
     *    The list of available locations can be obtained by calling
     *    [ListLocations][google.cloud.location.Locations.ListLocations].
     *    For more information, see https://cloud.google.com/about/locations/.
     * * `QUEUE_ID` can contain letters ([A-Za-z]), numbers ([0-9]), or
     *   hyphens (-). The maximum length is 100 characters.
     * * `TASK_ID` can contain only letters ([A-Za-z]), numbers ([0-9]),
     *   hyphens (-), or underscores (_). The maximum length is 500 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The time when the task is scheduled to be attempted.
     * For App Engine queues, this is when the task will be attempted or retried.
     * `schedule_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 4;</code>
     */
    private $schedule_time = null;
    /**
     * Output only. The time that the task was created.
     * `create_time` will be truncated to the nearest second.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    private $create_time = null;
    /**
     * The deadline for requests sent to the worker. If the worker does not
     * respond by this deadline then the request is cancelled and the attempt
     * is marked as a `DEADLINE_EXCEEDED` failure. Cloud Tasks will retry the
     * task according to the [RetryConfig][google.cloud.tasks.v2beta3.RetryConfig].
     * Note that when the request is cancelled, Cloud Tasks will stop listing for
     * the response, but whether the worker stops processing depends on the
     * worker. For example, if the worker is stuck, it may not react to cancelled
     * requests.
     * The default and maximum values depend on the type of request:
     * * For [HTTP tasks][google.cloud.tasks.v2beta3.HttpRequest], the default is 10 minutes. The deadline
     *   must be in the interval [15 seconds, 30 minutes].
     * * For [App Engine tasks][google.cloud.tasks.v2beta3.AppEngineHttpRequest], 0 indicates that the
     *   request has the default deadline. The default deadline depends on the
     *   [scaling
     *   type](https://cloud.google.com/appengine/docs/standard/go/how-instances-are-managed#instance_scaling)
     *   of the service: 10 minutes for standard apps with automatic scaling, 24
     *   hours for standard apps with manual and basic scaling, and 60 minutes for
     *   flex apps. If the request deadline is set, it must be in the interval [15
     *   seconds, 24 hours 15 seconds]. Regardless of the task's
     *   `dispatch_deadline`, the app handler will not run for longer than than
     *   the service's timeout. We recommend setting the `dispatch_deadline` to
     *   at most a few seconds more than the app handler's timeout. For more
     *   information see
     *   [Timeouts](https://cloud.google.com/tasks/docs/creating-appengine-handlers#timeouts).
     * `dispatch_deadline` will be truncated to the nearest millisecond. The
     * deadline is an approximate deadline.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration dispatch_deadline = 12;</code>
     */
    private $dispatch_deadline = null;
    /**
     * Output only. The number of attempts dispatched.
     * This count includes attempts which have been dispatched but haven't
     * received a response.
     *
     * Generated from protobuf field <code>int32 dispatch_count = 6;</code>
     */
    private $dispatch_count = 0;
    /**
     * Output only. The number of attempts which have received a response.
     *
     * Generated from protobuf field <code>int32 response_count = 7;</code>
     */
    private $response_count = 0;
    /**
     * Output only. The status of the task's first attempt.
     * Only [dispatch_time][google.cloud.tasks.v2beta3.Attempt.dispatch_time] will be set.
     * The other [Attempt][google.cloud.tasks.v2beta3.Attempt] information is not retained by Cloud Tasks.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Attempt first_attempt = 8;</code>
     */
    private $first_attempt = null;
    /**
     * Output only. The status of the task's last attempt.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Attempt last_attempt = 9;</code>
     */
    private $last_attempt = null;
    /**
     * Output only. The view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] has
     * been returned.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Task.View view = 10;</code>
     */
    private $view = 0;
    protected $payload_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optionally caller-specified in [CreateTask][google.cloud.tasks.v2beta3.CloudTasks.CreateTask].
     *           The task name.
     *           The task name must have the following format:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *           * `PROJECT_ID` can contain letters ([A-Za-z]), numbers ([0-9]),
     *              hyphens (-), colons (:), or periods (.).
     *              For more information, see
     *              [Identifying
     *              projects](https://cloud.google.com/resource-manager/docs/creating-managing-projects#identifying_projects)
     *           * `LOCATION_ID` is the canonical ID for the task's location.
     *              The list of available locations can be obtained by calling
     *              [ListLocations][google.cloud.location.Locations.ListLocations].
     *              For more information, see https://cloud.google.com/about/locations/.
     *           * `QUEUE_ID` can contain letters ([A-Za-z]), numbers ([0-9]), or
     *             hyphens (-). The maximum length is 100 characters.
     *           * `TASK_ID` can contain only letters ([A-Za-z]), numbers ([0-9]),
     *             hyphens (-), or underscores (_). The maximum length is 500 characters.
     *     @type \Google\Cloud\Tasks\V2beta3\AppEngineHttpRequest $app_engine_http_request
     *           HTTP request that is sent to the App Engine app handler.
     *           An App Engine task is a task that has [AppEngineHttpRequest][google.cloud.tasks.v2beta3.AppEngineHttpRequest] set.
     *     @type \Google\Cloud\Tasks\V2beta3\HttpRequest $http_request
     *           HTTP request that is sent to the task's target.
     *           An HTTP task is a task that has [HttpRequest][google.cloud.tasks.v2beta3.HttpRequest] set.
     *     @type \Google\Protobuf\Timestamp $schedule_time
     *           The time when the task is scheduled to be attempted.
     *           For App Engine queues, this is when the task will be attempted or retried.
     *           `schedule_time` will be truncated to the nearest microsecond.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time that the task was created.
     *           `create_time` will be truncated to the nearest second.
     *     @type \Google\Protobuf\Duration $dispatch_deadline
     *           The deadline for requests sent to the worker. If the worker does not
     *           respond by this deadline then the request is cancelled and the attempt
     *           is marked as a `DEADLINE_EXCEEDED` failure. Cloud Tasks will retry the
     *           task according to the [RetryConfig][google.cloud.tasks.v2beta3.RetryConfig].
     *           Note that when the request is cancelled, Cloud Tasks will stop listing for
     *           the response, but whether the worker stops processing depends on the
     *           worker. For example, if the worker is stuck, it may not react to cancelled
     *           requests.
     *           The default and maximum values depend on the type of request:
     *           * For [HTTP tasks][google.cloud.tasks.v2beta3.HttpRequest], the default is 10 minutes. The deadline
     *             must be in the interval [15 seconds, 30 minutes].
     *           * For [App Engine tasks][google.cloud.tasks.v2beta3.AppEngineHttpRequest], 0 indicates that the
     *             request has the default deadline. The default deadline depends on the
     *             [scaling
     *             type](https://cloud.google.com/appengine/docs/standard/go/how-instances-are-managed#instance_scaling)
     *             of the service: 10 minutes for standard apps with automatic scaling, 24
     *             hours for standard apps with manual and basic scaling, and 60 minutes for
     *             flex apps. If the request deadline is set, it must be in the interval [15
     *             seconds, 24 hours 15 seconds]. Regardless of the task's
     *             `dispatch_deadline`, the app handler will not run for longer than than
     *             the service's timeout. We recommend setting the `dispatch_deadline` to
     *             at most a few seconds more than the app handler's timeout. For more
     *             information see
     *             [Timeouts](https://cloud.google.com/tasks/docs/creating-appengine-handlers#timeouts).
     *           `dispatch_deadline` will be truncated to the nearest millisecond. The
     *           deadline is an approximate deadline.
     *     @type int $dispatch_count
     *           Output only. The number of attempts dispatched.
     *           This count includes attempts which have been dispatched but haven't
     *           received a response.
     *     @type int $response_count
     *           Output only. The number of attempts which have received a response.
     *     @type \Google\Cloud\Tasks\V2beta3\Attempt $first_attempt
     *           Output only. The status of the task's first attempt.
     *           Only [dispatch_time][google.cloud.tasks.v2beta3.Attempt.dispatch_time] will be set.
     *           The other [Attempt][google.cloud.tasks.v2beta3.Attempt] information is not retained by Cloud Tasks.
     *     @type \Google\Cloud\Tasks\V2beta3\Attempt $last_attempt
     *           Output only. The status of the task's last attempt.
     *     @type int $view
     *           Output only. The view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] has
     *           been returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Optionally caller-specified in [CreateTask][google.cloud.tasks.v2beta3.CloudTasks.CreateTask].
     * The task name.
     * The task name must have the following format:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     * * `PROJECT_ID` can contain letters ([A-Za-z]), numbers ([0-9]),
     *    hyphens (-), colons (:), or periods (.).
     *    For more information, see
     *    [Identifying
     *    projects](https://cloud.google.com/resource-manager/docs/creating-managing-projects#identifying_projects)
     * * `LOCATION_ID` is the canonical ID for the task's location.
     *    The list of available locations can be obtained by calling
     *    [ListLocations][google.cloud.location.Locations.ListLocations].
     *    For more information, see https://cloud.google.com/about/locations/.
     * * `QUEUE_ID` can contain letters ([A-Za-z]), numbers ([0-9]), or
     *   hyphens (-). The maximum length is 100 characters.
     * * `TASK_ID` can contain only letters ([A-Za-z]), numbers ([0-9]),
     *   hyphens (-), or underscores (_). The maximum length is 500 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optionally caller-specified in [CreateTask][google.cloud.tasks.v2beta3.CloudTasks.CreateTask].
     * The task name.
     * The task name must have the following format:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     * * `PROJECT_ID` can contain letters ([A-Za-z]), numbers ([0-9]),
     *    hyphens (-), colons (:), or periods (.).
     *    For more information, see
     *    [Identifying
     *    projects](https://cloud.google.com/resource-manager/docs/creating-managing-projects#identifying_projects)
     * * `LOCATION_ID` is the canonical ID for the task's location.
     *    The list of available locations can be obtained by calling
     *    [ListLocations][google.cloud.location.Locations.ListLocations].
     *    For more information, see https://cloud.google.com/about/locations/.
     * * `QUEUE_ID` can contain letters ([A-Za-z]), numbers ([0-9]), or
     *   hyphens (-). The maximum length is 100 characters.
     * * `TASK_ID` can contain only letters ([A-Za-z]), numbers ([0-9]),
     *   hyphens (-), or underscores (_). The maximum length is 500 characters.
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
     * HTTP request that is sent to the App Engine app handler.
     * An App Engine task is a task that has [AppEngineHttpRequest][google.cloud.tasks.v2beta3.AppEngineHttpRequest] set.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.AppEngineHttpRequest app_engine_http_request = 3;</code>
     * @return \Google\Cloud\Tasks\V2beta3\AppEngineHttpRequest
     */
    public function getAppEngineHttpRequest()
    {
        return $this->readOneof(3);
    }

    /**
     * HTTP request that is sent to the App Engine app handler.
     * An App Engine task is a task that has [AppEngineHttpRequest][google.cloud.tasks.v2beta3.AppEngineHttpRequest] set.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.AppEngineHttpRequest app_engine_http_request = 3;</code>
     * @param \Google\Cloud\Tasks\V2beta3\AppEngineHttpRequest $var
     * @return $this
     */
    public function setAppEngineHttpRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta3\AppEngineHttpRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * HTTP request that is sent to the task's target.
     * An HTTP task is a task that has [HttpRequest][google.cloud.tasks.v2beta3.HttpRequest] set.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.HttpRequest http_request = 11;</code>
     * @return \Google\Cloud\Tasks\V2beta3\HttpRequest
     */
    public function getHttpRequest()
    {
        return $this->readOneof(11);
    }

    /**
     * HTTP request that is sent to the task's target.
     * An HTTP task is a task that has [HttpRequest][google.cloud.tasks.v2beta3.HttpRequest] set.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.HttpRequest http_request = 11;</code>
     * @param \Google\Cloud\Tasks\V2beta3\HttpRequest $var
     * @return $this
     */
    public function setHttpRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta3\HttpRequest::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * The time when the task is scheduled to be attempted.
     * For App Engine queues, this is when the task will be attempted or retried.
     * `schedule_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getScheduleTime()
    {
        return $this->schedule_time;
    }

    /**
     * The time when the task is scheduled to be attempted.
     * For App Engine queues, this is when the task will be attempted or retried.
     * `schedule_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 4;</code>
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
     * Output only. The time that the task was created.
     * `create_time` will be truncated to the nearest second.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. The time that the task was created.
     * `create_time` will be truncated to the nearest second.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The deadline for requests sent to the worker. If the worker does not
     * respond by this deadline then the request is cancelled and the attempt
     * is marked as a `DEADLINE_EXCEEDED` failure. Cloud Tasks will retry the
     * task according to the [RetryConfig][google.cloud.tasks.v2beta3.RetryConfig].
     * Note that when the request is cancelled, Cloud Tasks will stop listing for
     * the response, but whether the worker stops processing depends on the
     * worker. For example, if the worker is stuck, it may not react to cancelled
     * requests.
     * The default and maximum values depend on the type of request:
     * * For [HTTP tasks][google.cloud.tasks.v2beta3.HttpRequest], the default is 10 minutes. The deadline
     *   must be in the interval [15 seconds, 30 minutes].
     * * For [App Engine tasks][google.cloud.tasks.v2beta3.AppEngineHttpRequest], 0 indicates that the
     *   request has the default deadline. The default deadline depends on the
     *   [scaling
     *   type](https://cloud.google.com/appengine/docs/standard/go/how-instances-are-managed#instance_scaling)
     *   of the service: 10 minutes for standard apps with automatic scaling, 24
     *   hours for standard apps with manual and basic scaling, and 60 minutes for
     *   flex apps. If the request deadline is set, it must be in the interval [15
     *   seconds, 24 hours 15 seconds]. Regardless of the task's
     *   `dispatch_deadline`, the app handler will not run for longer than than
     *   the service's timeout. We recommend setting the `dispatch_deadline` to
     *   at most a few seconds more than the app handler's timeout. For more
     *   information see
     *   [Timeouts](https://cloud.google.com/tasks/docs/creating-appengine-handlers#timeouts).
     * `dispatch_deadline` will be truncated to the nearest millisecond. The
     * deadline is an approximate deadline.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration dispatch_deadline = 12;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getDispatchDeadline()
    {
        return $this->dispatch_deadline;
    }

    /**
     * The deadline for requests sent to the worker. If the worker does not
     * respond by this deadline then the request is cancelled and the attempt
     * is marked as a `DEADLINE_EXCEEDED` failure. Cloud Tasks will retry the
     * task according to the [RetryConfig][google.cloud.tasks.v2beta3.RetryConfig].
     * Note that when the request is cancelled, Cloud Tasks will stop listing for
     * the response, but whether the worker stops processing depends on the
     * worker. For example, if the worker is stuck, it may not react to cancelled
     * requests.
     * The default and maximum values depend on the type of request:
     * * For [HTTP tasks][google.cloud.tasks.v2beta3.HttpRequest], the default is 10 minutes. The deadline
     *   must be in the interval [15 seconds, 30 minutes].
     * * For [App Engine tasks][google.cloud.tasks.v2beta3.AppEngineHttpRequest], 0 indicates that the
     *   request has the default deadline. The default deadline depends on the
     *   [scaling
     *   type](https://cloud.google.com/appengine/docs/standard/go/how-instances-are-managed#instance_scaling)
     *   of the service: 10 minutes for standard apps with automatic scaling, 24
     *   hours for standard apps with manual and basic scaling, and 60 minutes for
     *   flex apps. If the request deadline is set, it must be in the interval [15
     *   seconds, 24 hours 15 seconds]. Regardless of the task's
     *   `dispatch_deadline`, the app handler will not run for longer than than
     *   the service's timeout. We recommend setting the `dispatch_deadline` to
     *   at most a few seconds more than the app handler's timeout. For more
     *   information see
     *   [Timeouts](https://cloud.google.com/tasks/docs/creating-appengine-handlers#timeouts).
     * `dispatch_deadline` will be truncated to the nearest millisecond. The
     * deadline is an approximate deadline.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration dispatch_deadline = 12;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDispatchDeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->dispatch_deadline = $var;

        return $this;
    }

    /**
     * Output only. The number of attempts dispatched.
     * This count includes attempts which have been dispatched but haven't
     * received a response.
     *
     * Generated from protobuf field <code>int32 dispatch_count = 6;</code>
     * @return int
     */
    public function getDispatchCount()
    {
        return $this->dispatch_count;
    }

    /**
     * Output only. The number of attempts dispatched.
     * This count includes attempts which have been dispatched but haven't
     * received a response.
     *
     * Generated from protobuf field <code>int32 dispatch_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDispatchCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->dispatch_count = $var;

        return $this;
    }

    /**
     * Output only. The number of attempts which have received a response.
     *
     * Generated from protobuf field <code>int32 response_count = 7;</code>
     * @return int
     */
    public function getResponseCount()
    {
        return $this->response_count;
    }

    /**
     * Output only. The number of attempts which have received a response.
     *
     * Generated from protobuf field <code>int32 response_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->response_count = $var;

        return $this;
    }

    /**
     * Output only. The status of the task's first attempt.
     * Only [dispatch_time][google.cloud.tasks.v2beta3.Attempt.dispatch_time] will be set.
     * The other [Attempt][google.cloud.tasks.v2beta3.Attempt] information is not retained by Cloud Tasks.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Attempt first_attempt = 8;</code>
     * @return \Google\Cloud\Tasks\V2beta3\Attempt
     */
    public function getFirstAttempt()
    {
        return $this->first_attempt;
    }

    /**
     * Output only. The status of the task's first attempt.
     * Only [dispatch_time][google.cloud.tasks.v2beta3.Attempt.dispatch_time] will be set.
     * The other [Attempt][google.cloud.tasks.v2beta3.Attempt] information is not retained by Cloud Tasks.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Attempt first_attempt = 8;</code>
     * @param \Google\Cloud\Tasks\V2beta3\Attempt $var
     * @return $this
     */
    public function setFirstAttempt($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta3\Attempt::class);
        $this->first_attempt = $var;

        return $this;
    }

    /**
     * Output only. The status of the task's last attempt.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Attempt last_attempt = 9;</code>
     * @return \Google\Cloud\Tasks\V2beta3\Attempt
     */
    public function getLastAttempt()
    {
        return $this->last_attempt;
    }

    /**
     * Output only. The status of the task's last attempt.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Attempt last_attempt = 9;</code>
     * @param \Google\Cloud\Tasks\V2beta3\Attempt $var
     * @return $this
     */
    public function setLastAttempt($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta3\Attempt::class);
        $this->last_attempt = $var;

        return $this;
    }

    /**
     * Output only. The view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] has
     * been returned.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Task.View view = 10;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Output only. The view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] has
     * been returned.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Task.View view = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tasks\V2beta3\Task_View::class);
        $this->view = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayloadType()
    {
        return $this->whichOneof("payload_type");
    }

}

