<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use UnexpectedValueException;

/**
 * Parts of the APIs which use certain infoTypes.
 *
 * Protobuf type <code>google.privacy.dlp.v2.InfoTypeSupportedBy</code>
 */
class InfoTypeSupportedBy
{
    /**
     * Generated from protobuf enum <code>ENUM_TYPE_UNSPECIFIED = 0;</code>
     */
    const ENUM_TYPE_UNSPECIFIED = 0;
    /**
     * Supported by the inspect operations.
     *
     * Generated from protobuf enum <code>INSPECT = 1;</code>
     */
    const INSPECT = 1;
    /**
     * Supported by the risk analysis operations.
     *
     * Generated from protobuf enum <code>RISK_ANALYSIS = 2;</code>
     */
    const RISK_ANALYSIS = 2;

    private static $valueToName = [
        self::ENUM_TYPE_UNSPECIFIED => 'ENUM_TYPE_UNSPECIFIED',
        self::INSPECT => 'INSPECT',
        self::RISK_ANALYSIS => 'RISK_ANALYSIS',
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

