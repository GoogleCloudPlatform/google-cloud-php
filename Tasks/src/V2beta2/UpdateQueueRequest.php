<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateQueue][google.cloud.tasks.v2beta2.CloudTasks.UpdateQueue].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.UpdateQueueRequest</code>
 */
final class UpdateQueueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The queue to create or update.
     * The queue's [name][google.cloud.tasks.v2beta2.Queue.name] must be
     * specified.
     * Output only fields cannot be modified using UpdateQueue.
     * Any value specified for an output only field will be ignored.
     * The queue's [name][google.cloud.tasks.v2beta2.Queue.name] cannot be
     * changed.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Queue queue = 1;</code>
     */
    private $queue = null;
    /**
     * A mask used to specify which fields of the queue are being updated.
     * If empty, then all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Tasks\V2beta2\Queue $queue
     *           Required.
     *           The queue to create or update.
     *           The queue's [name][google.cloud.tasks.v2beta2.Queue.name] must be
     *           specified.
     *           Output only fields cannot be modified using UpdateQueue.
     *           Any value specified for an output only field will be ignored.
     *           The queue's [name][google.cloud.tasks.v2beta2.Queue.name] cannot be
     *           changed.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           A mask used to specify which fields of the queue are being updated.
     *           If empty, then all fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * The queue to create or update.
     * The queue's [name][google.cloud.tasks.v2beta2.Queue.name] must be
     * specified.
     * Output only fields cannot be modified using UpdateQueue.
     * Any value specified for an output only field will be ignored.
     * The queue's [name][google.cloud.tasks.v2beta2.Queue.name] cannot be
     * changed.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Queue queue = 1;</code>
     * @return \Google\Cloud\Tasks\V2beta2\Queue
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Required.
     * The queue to create or update.
     * The queue's [name][google.cloud.tasks.v2beta2.Queue.name] must be
     * specified.
     * Output only fields cannot be modified using UpdateQueue.
     * Any value specified for an output only field will be ignored.
     * The queue's [name][google.cloud.tasks.v2beta2.Queue.name] cannot be
     * changed.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Queue queue = 1;</code>
     * @param \Google\Cloud\Tasks\V2beta2\Queue $var
     * @return $this
     */
    public function setQueue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tasks\V2beta2\Queue::class);
        $this->queue = $var;

        return $this;
    }

    /**
     * A mask used to specify which fields of the queue are being updated.
     * If empty, then all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * A mask used to specify which fields of the queue are being updated.
     * If empty, then all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

