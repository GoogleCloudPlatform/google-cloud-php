<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1\Database;

use UnexpectedValueException;

/**
 * Indicates the current state of the database.
 *
 * Protobuf type <code>google.spanner.admin.database.v1.Database.State</code>
 */
class State
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The database is still being created. Operations on the database may fail
     * with `FAILED_PRECONDITION` in this state.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The database is fully created and ready for use.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
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
\class_alias(State::class, \Google\Cloud\Spanner\Admin\Database\V1\Database_State::class);

