<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GetQueue][google.cloud.tasks.v2beta2.CloudTasks.GetQueue].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.GetQueueRequest</code>
 */
class GetQueueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The resource name of the queue. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct();
    }

    /**
     * Required.
     * The resource name of the queue. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
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
     * The resource name of the queue. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
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

}

