<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Cloud\Debugger\V2\StatusMessage;

use UnexpectedValueException;

/**
 * Enumerates references to which the message applies.
 *
 * Protobuf type <code>google.devtools.clouddebugger.v2.StatusMessage.Reference</code>
 */
class Reference
{
    /**
     * Status doesn't refer to any particular input.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Status applies to the breakpoint and is related to its location.
     *
     * Generated from protobuf enum <code>BREAKPOINT_SOURCE_LOCATION = 3;</code>
     */
    const BREAKPOINT_SOURCE_LOCATION = 3;
    /**
     * Status applies to the breakpoint and is related to its condition.
     *
     * Generated from protobuf enum <code>BREAKPOINT_CONDITION = 4;</code>
     */
    const BREAKPOINT_CONDITION = 4;
    /**
     * Status applies to the breakpoint and is related to its expressions.
     *
     * Generated from protobuf enum <code>BREAKPOINT_EXPRESSION = 7;</code>
     */
    const BREAKPOINT_EXPRESSION = 7;
    /**
     * Status applies to the breakpoint and is related to its age.
     *
     * Generated from protobuf enum <code>BREAKPOINT_AGE = 8;</code>
     */
    const BREAKPOINT_AGE = 8;
    /**
     * Status applies to the entire variable.
     *
     * Generated from protobuf enum <code>VARIABLE_NAME = 5;</code>
     */
    const VARIABLE_NAME = 5;
    /**
     * Status applies to variable value (variable name is valid).
     *
     * Generated from protobuf enum <code>VARIABLE_VALUE = 6;</code>
     */
    const VARIABLE_VALUE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::BREAKPOINT_SOURCE_LOCATION => 'BREAKPOINT_SOURCE_LOCATION',
        self::BREAKPOINT_CONDITION => 'BREAKPOINT_CONDITION',
        self::BREAKPOINT_EXPRESSION => 'BREAKPOINT_EXPRESSION',
        self::BREAKPOINT_AGE => 'BREAKPOINT_AGE',
        self::VARIABLE_NAME => 'VARIABLE_NAME',
        self::VARIABLE_VALUE => 'VARIABLE_VALUE',
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
\class_alias(Reference::class, \Google\Cloud\Debugger\V2\StatusMessage_Reference::class);

