<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use UnexpectedValueException;

/**
 * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] specifies how cryptographic operations are performed.
 * For more information, see [Protection levels]
 * (https://cloud.google.com/kms/docs/algorithms#protection_levels).
 *
 * Protobuf type <code>google.cloud.kms.v1.ProtectionLevel</code>
 */
class ProtectionLevel
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>PROTECTION_LEVEL_UNSPECIFIED = 0;</code>
     */
    const PROTECTION_LEVEL_UNSPECIFIED = 0;
    /**
     * Crypto operations are performed in software.
     *
     * Generated from protobuf enum <code>SOFTWARE = 1;</code>
     */
    const SOFTWARE = 1;
    /**
     * Crypto operations are performed in a Hardware Security Module.
     *
     * Generated from protobuf enum <code>HSM = 2;</code>
     */
    const HSM = 2;

    private static $valueToName = [
        self::PROTECTION_LEVEL_UNSPECIFIED => 'PROTECTION_LEVEL_UNSPECIFIED',
        self::SOFTWARE => 'SOFTWARE',
        self::HSM => 'HSM',
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

