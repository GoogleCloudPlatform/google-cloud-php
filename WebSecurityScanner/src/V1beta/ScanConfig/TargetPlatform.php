<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1beta\ScanConfig;

use UnexpectedValueException;

/**
 * Cloud platforms supported by Cloud Web Security Scanner.
 *
 * Protobuf type <code>google.cloud.websecurityscanner.v1beta.ScanConfig.TargetPlatform</code>
 */
class TargetPlatform
{
    /**
     * The target platform is unknown. Requests with this enum value will be
     * rejected with INVALID_ARGUMENT error.
     *
     * Generated from protobuf enum <code>TARGET_PLATFORM_UNSPECIFIED = 0;</code>
     */
    const TARGET_PLATFORM_UNSPECIFIED = 0;
    /**
     * Google App Engine service.
     *
     * Generated from protobuf enum <code>APP_ENGINE = 1;</code>
     */
    const APP_ENGINE = 1;
    /**
     * Google Compute Engine service.
     *
     * Generated from protobuf enum <code>COMPUTE = 2;</code>
     */
    const COMPUTE = 2;

    private static $valueToName = [
        self::TARGET_PLATFORM_UNSPECIFIED => 'TARGET_PLATFORM_UNSPECIFIED',
        self::APP_ENGINE => 'APP_ENGINE',
        self::COMPUTE => 'COMPUTE',
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
\class_alias(TargetPlatform::class, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig_TargetPlatform::class);

