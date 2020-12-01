<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails;

use UnexpectedValueException;

/**
 * [Output Only] Action that managed instance group was executing on the instance when the error occurred. Possible values:
 *
 * Protobuf type <code>google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails.Action</code>
 */
class Action
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ACTION = 0;</code>
     */
    const UNDEFINED_ACTION = 0;
    /**
     * Generated from protobuf enum <code>ABANDONING = 119809357;</code>
     */
    const ABANDONING = 119809357;
    /**
     * Generated from protobuf enum <code>CREATING = 187129529;</code>
     */
    const CREATING = 187129529;
    /**
     * Generated from protobuf enum <code>CREATING_WITHOUT_RETRIES = 160408329;</code>
     */
    const CREATING_WITHOUT_RETRIES = 160408329;
    /**
     * Generated from protobuf enum <code>DELETING = 260166568;</code>
     */
    const DELETING = 260166568;
    /**
     * Generated from protobuf enum <code>NONE = 2402104;</code>
     */
    const NONE = 2402104;
    /**
     * Generated from protobuf enum <code>RECREATING = 18843116;</code>
     */
    const RECREATING = 18843116;
    /**
     * Generated from protobuf enum <code>REFRESHING = 163266343;</code>
     */
    const REFRESHING = 163266343;
    /**
     * Generated from protobuf enum <code>RESTARTING = 52098931;</code>
     */
    const RESTARTING = 52098931;
    /**
     * Generated from protobuf enum <code>VERIFYING = 16982185;</code>
     */
    const VERIFYING = 16982185;

    private static $valueToName = [
        self::UNDEFINED_ACTION => 'UNDEFINED_ACTION',
        self::ABANDONING => 'ABANDONING',
        self::CREATING => 'CREATING',
        self::CREATING_WITHOUT_RETRIES => 'CREATING_WITHOUT_RETRIES',
        self::DELETING => 'DELETING',
        self::NONE => 'NONE',
        self::RECREATING => 'RECREATING',
        self::REFRESHING => 'REFRESHING',
        self::RESTARTING => 'RESTARTING',
        self::VERIFYING => 'VERIFYING',
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


