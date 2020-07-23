<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment;

use UnexpectedValueException;

/**
 * Commitment plan defines the current committed period. Capacity commitment
 * cannot be deleted during it's committed period.
 *
 * Protobuf type <code>google.cloud.bigquery.reservation.v1.CapacityCommitment.CommitmentPlan</code>
 */
class CommitmentPlan
{
    /**
     * Invalid plan value. Requests with this value will be rejected with
     * error code `google.rpc.Code.INVALID_ARGUMENT`.
     *
     * Generated from protobuf enum <code>COMMITMENT_PLAN_UNSPECIFIED = 0;</code>
     */
    const COMMITMENT_PLAN_UNSPECIFIED = 0;
    /**
     * Flex commitments have committed period of 1 minute after becoming ACTIVE.
     * After that, they are not in a committed period anymore and can be removed
     * any time.
     *
     * Generated from protobuf enum <code>FLEX = 3;</code>
     */
    const FLEX = 3;
    /**
     * Trial commitments have a committed period of 182 days after becoming
     * ACTIVE. After that, they are converted to a new commitment based on the
     * `renewal_plan`. Default `renewal_plan` for Trial commitment is Flex so
     * that it can be deleted right after committed period ends.
     *
     * Generated from protobuf enum <code>TRIAL = 5;</code>
     */
    const TRIAL = 5;
    /**
     * Monthly commitments have a committed period of 30 days after becoming
     * ACTIVE. After that, they are not in a committed period anymore and can be
     * removed any time.
     *
     * Generated from protobuf enum <code>MONTHLY = 2;</code>
     */
    const MONTHLY = 2;
    /**
     * Annual commitments have a committed period of 365 days after becoming
     * ACTIVE. After that they are converted to a new commitment based on the
     * renewal_plan.
     *
     * Generated from protobuf enum <code>ANNUAL = 4;</code>
     */
    const ANNUAL = 4;

    private static $valueToName = [
        self::COMMITMENT_PLAN_UNSPECIFIED => 'COMMITMENT_PLAN_UNSPECIFIED',
        self::FLEX => 'FLEX',
        self::TRIAL => 'TRIAL',
        self::MONTHLY => 'MONTHLY',
        self::ANNUAL => 'ANNUAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommitmentPlan::class, \Google\Cloud\Bigquery\Reservation\V1\CapacityCommitment_CommitmentPlan::class);

