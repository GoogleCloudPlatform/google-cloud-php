<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GetQueue][google.cloud.tasks.v2beta3.CloudTasks.GetQueue].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.GetQueueRequest</code>
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

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required.
     *           The resource name of the queue. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Cloudtasks::initOnce();
        parent::__construct($data);
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

