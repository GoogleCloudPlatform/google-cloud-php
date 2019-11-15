<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2\ClusterStatus;

use UnexpectedValueException;

/**
 * The cluster substate.
 *
 * Protobuf type <code>google.cloud.dataproc.v1beta2.ClusterStatus.Substate</code>
 */
class Substate
{
    /**
     * The cluster substate is unknown.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The cluster is known to be in an unhealthy state
     * (for example, critical daemons are not running or HDFS capacity is
     * exhausted).
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>UNHEALTHY = 1;</code>
     */
    const UNHEALTHY = 1;
    /**
     * The agent-reported status is out of date (may occur if
     * Cloud Dataproc loses communication with Agent).
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>STALE_STATUS = 2;</code>
     */
    const STALE_STATUS = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNHEALTHY => 'UNHEALTHY',
        self::STALE_STATUS => 'STALE_STATUS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (!\defined($const)) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return \constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Substate::class, \Google\Cloud\Dataproc\V1beta2\ClusterStatus_Substate::class);

