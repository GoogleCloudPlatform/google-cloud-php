<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\SetMasterAuthRequest;

use UnexpectedValueException;

/**
 * Operation type: what type update to perform.
 *
 * Protobuf type <code>google.container.v1.SetMasterAuthRequest.Action</code>
 */
class Action
{
    /**
     * Operation is unknown and will error out.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Set the password to a user generated value.
     *
     * Generated from protobuf enum <code>SET_PASSWORD = 1;</code>
     */
    const SET_PASSWORD = 1;
    /**
     * Generate a new password and set it to that.
     *
     * Generated from protobuf enum <code>GENERATE_PASSWORD = 2;</code>
     */
    const GENERATE_PASSWORD = 2;
    /**
     * Set the username.  If an empty username is provided, basic authentication
     * is disabled for the cluster.  If a non-empty username is provided, basic
     * authentication is enabled, with either a provided password or a generated
     * one.
     *
     * Generated from protobuf enum <code>SET_USERNAME = 3;</code>
     */
    const SET_USERNAME = 3;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::SET_PASSWORD => 'SET_PASSWORD',
        self::GENERATE_PASSWORD => 'GENERATE_PASSWORD',
        self::SET_USERNAME => 'SET_USERNAME',
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
\class_alias(Action::class, \Google\Cloud\Container\V1\SetMasterAuthRequest_Action::class);

