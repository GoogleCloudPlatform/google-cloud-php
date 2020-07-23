<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Capacity commitment is a way to purchase compute capacity for BigQuery jobs
 * (in the form of slots) with some committed period of usage. Annual
 * commitments renew by default. Commitments can be removed after their
 * commitment end time passes.
 * In order to remove annual commitment, its plan needs to be changed
 * to monthly or flex first.
 * A capacity commitment resource exists as a child resource of the admin
 * project.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.CapacityCommitment</code>
 */
class CapacityCommitment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the capacity commitment, e.g.,
     * `projects/myproject/locations/US/capacityCommitments/123`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Number of slots in this commitment.
     *
     * Generated from protobuf field <code>int64 slot_count = 2;</code>
     */
    private $slot_count = 0;
    /**
     * Capacity commitment commitment plan.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan plan = 3;</code>
     */
    private $plan = 0;
    /**
     * Output only. State of the commitment.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The end of the current commitment period. It is applicable only for ACTIVE
     * capacity commitments.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commitment_end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $commitment_end_time = null;
    /**
     * Output only. For FAILED commitment plan, provides the reason of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status failure_status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failure_status = null;
    /**
     * The plan this capacity commitment is converted to after commitment_end_time
     * passes. Once the plan is changed, committed period is extended according to
     * commitment plan. Only applicable for ANNUAL and TRIAL commitments.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan renewal_plan = 8;</code>
     */
    private $renewal_plan = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the capacity commitment, e.g.,
     *           `projects/myproject/locations/US/capacityCommitments/123`
     *     @type int|string $slot_count
     *           Number of slots in this commitment.
     *     @type int $plan
     *           Capacity commitment commitment plan.
     *     @type int $state
     *           Output only. State of the commitment.
     *     @type \Google\Protobuf\Timestamp $commitment_end_time
     *           Output only. The end of the current commitment period. It is applicable only for ACTIVE
     *           capacity commitments.
     *     @type \Google\Rpc\Status $failure_status
     *           Output only. For FAILED commitment plan, provides the reason of failure.
     *     @type int $renewal_plan
     *           The plan this capacity commitment is converted to after commitment_end_time
     *           passes. Once the plan is changed, committed period is extended according to
     *           commitment plan. Only applicable for ANNUAL and TRIAL commitments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the capacity commitment, e.g.,
     * `projects/myproject/locations/US/capacityCommitments/123`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the capacity commitment, e.g.,
     * `projects/myproject/locations/US/capacityCommitments/123`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Number of slots in this commitment.
     *
     * Generated from protobuf field <code>int64 slot_count = 2;</code>
     * @return int|string
     */
    public function getSlotCount()
    {
        return $this->slot_count;
    }

    /**
     * Number of slots in this commitment.
     *
     * Generated from protobuf field <code>int64 slot_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlotCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->slot_count = $var;

        return $this;
    }

    /**
     * Capacity commitment commitment plan.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan plan = 3;</code>
     * @return int
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Capacity commitment commitment plan.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan plan = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigquery\Reservation\V1\CapacityCommitment_CommitmentPlan::class);
        $this->plan = $var;

        return $this;
    }

    /**
     * Output only. State of the commitment.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the commitment.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigquery\Reservation\V1\CapacityCommitment_State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The end of the current commitment period. It is applicable only for ACTIVE
     * capacity commitments.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commitment_end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCommitmentEndTime()
    {
        return $this->commitment_end_time;
    }

    /**
     * Output only. The end of the current commitment period. It is applicable only for ACTIVE
     * capacity commitments.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commitment_end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCommitmentEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commitment_end_time = $var;

        return $this;
    }

    /**
     * Output only. For FAILED commitment plan, provides the reason of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status failure_status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status
     */
    public function getFailureStatus()
    {
        return $this->failure_status;
    }

    /**
     * Output only. For FAILED commitment plan, provides the reason of failure.
     *
     * Generated from protobuf field <code>.google.rpc.Status failure_status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setFailureStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->failure_status = $var;

        return $this;
    }

    /**
     * The plan this capacity commitment is converted to after commitment_end_time
     * passes. Once the plan is changed, committed period is extended according to
     * commitment plan. Only applicable for ANNUAL and TRIAL commitments.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan renewal_plan = 8;</code>
     * @return int
     */
    public function getRenewalPlan()
    {
        return $this->renewal_plan;
    }

    /**
     * The plan this capacity commitment is converted to after commitment_end_time
     * passes. Once the plan is changed, committed period is extended according to
     * commitment plan. Only applicable for ANNUAL and TRIAL commitments.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan renewal_plan = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRenewalPlan($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigquery\Reservation\V1\CapacityCommitment_CommitmentPlan::class);
        $this->renewal_plan = $var;

        return $this;
    }

}

