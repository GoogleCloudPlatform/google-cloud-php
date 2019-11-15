<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/target.proto

namespace Google\Cloud\Tasks\V2beta2;

use UnexpectedValueException;

/**
 * The HTTP method used to execute the task.
 *
 * Protobuf type <code>google.cloud.tasks.v2beta2.HttpMethod</code>
 */
class HttpMethod
{
    /**
     * HTTP method unspecified
     *
     * Generated from protobuf enum <code>HTTP_METHOD_UNSPECIFIED = 0;</code>
     */
    const HTTP_METHOD_UNSPECIFIED = 0;
    /**
     * HTTP POST
     *
     * Generated from protobuf enum <code>POST = 1;</code>
     */
    const POST = 1;
    /**
     * HTTP GET
     *
     * Generated from protobuf enum <code>GET = 2;</code>
     */
    const GET = 2;
    /**
     * HTTP HEAD
     *
     * Generated from protobuf enum <code>HEAD = 3;</code>
     */
    const HEAD = 3;
    /**
     * HTTP PUT
     *
     * Generated from protobuf enum <code>PUT = 4;</code>
     */
    const PUT = 4;
    /**
     * HTTP DELETE
     *
     * Generated from protobuf enum <code>DELETE = 5;</code>
     */
    const DELETE = 5;

    private static $valueToName = [
        self::HTTP_METHOD_UNSPECIFIED => 'HTTP_METHOD_UNSPECIFIED',
        self::POST => 'POST',
        self::GET => 'GET',
        self::HEAD => 'HEAD',
        self::PUT => 'PUT',
        self::DELETE => 'DELETE',
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

