<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1\DataSource;

use UnexpectedValueException;

/**
 * The type of authorization needed for this data source.
 *
 * Protobuf type <code>google.cloud.bigquery.datatransfer.v1.DataSource.AuthorizationType</code>
 */
class AuthorizationType
{
    /**
     * Type unspecified.
     *
     * Generated from protobuf enum <code>AUTHORIZATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const AUTHORIZATION_TYPE_UNSPECIFIED = 0;
    /**
     * Use OAuth 2 authorization codes that can be exchanged
     * for a refresh token on the backend.
     *
     * Generated from protobuf enum <code>AUTHORIZATION_CODE = 1;</code>
     */
    const AUTHORIZATION_CODE = 1;
    /**
     * Return an authorization code for a given Google+ page that can then be
     * exchanged for a refresh token on the backend.
     *
     * Generated from protobuf enum <code>GOOGLE_PLUS_AUTHORIZATION_CODE = 2;</code>
     */
    const GOOGLE_PLUS_AUTHORIZATION_CODE = 2;

    private static $valueToName = [
        self::AUTHORIZATION_TYPE_UNSPECIFIED => 'AUTHORIZATION_TYPE_UNSPECIFIED',
        self::AUTHORIZATION_CODE => 'AUTHORIZATION_CODE',
        self::GOOGLE_PLUS_AUTHORIZATION_CODE => 'GOOGLE_PLUS_AUTHORIZATION_CODE',
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
\class_alias(AuthorizationType::class, \Google\Cloud\BigQuery\DataTransfer\V1\DataSource_AuthorizationType::class);

