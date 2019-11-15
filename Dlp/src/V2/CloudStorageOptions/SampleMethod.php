<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CloudStorageOptions;

use UnexpectedValueException;

/**
 * How to sample bytes if not all bytes are scanned. Meaningful only when used
 * in conjunction with bytes_limit_per_file. If not specified, scanning would
 * start from the top.
 *
 * Protobuf type <code>google.privacy.dlp.v2.CloudStorageOptions.SampleMethod</code>
 */
class SampleMethod
{
    /**
     * Generated from protobuf enum <code>SAMPLE_METHOD_UNSPECIFIED = 0;</code>
     */
    const SAMPLE_METHOD_UNSPECIFIED = 0;
    /**
     * Scan from the top (default).
     *
     * Generated from protobuf enum <code>TOP = 1;</code>
     */
    const TOP = 1;
    /**
     * For each file larger than bytes_limit_per_file, randomly pick the offset
     * to start scanning. The scanned bytes are contiguous.
     *
     * Generated from protobuf enum <code>RANDOM_START = 2;</code>
     */
    const RANDOM_START = 2;

    private static $valueToName = [
        self::SAMPLE_METHOD_UNSPECIFIED => 'SAMPLE_METHOD_UNSPECIFIED',
        self::TOP => 'TOP',
        self::RANDOM_START => 'RANDOM_START',
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
\class_alias(SampleMethod::class, \Google\Cloud\Dlp\V2\CloudStorageOptions_SampleMethod::class);

