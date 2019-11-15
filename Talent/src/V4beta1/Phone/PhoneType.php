<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1\Phone;

use UnexpectedValueException;

/**
 * Enum that represents the type of the telephone.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.Phone.PhoneType</code>
 */
class PhoneType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>PHONE_TYPE_UNSPECIFIED = 0;</code>
     */
    const PHONE_TYPE_UNSPECIFIED = 0;
    /**
     * A landline.
     *
     * Generated from protobuf enum <code>LANDLINE = 1;</code>
     */
    const LANDLINE = 1;
    /**
     * A mobile.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    const MOBILE = 2;
    /**
     * A fax.
     *
     * Generated from protobuf enum <code>FAX = 3;</code>
     */
    const FAX = 3;
    /**
     * A pager.
     *
     * Generated from protobuf enum <code>PAGER = 4;</code>
     */
    const PAGER = 4;
    /**
     * A TTY (test telephone) or TDD (telecommunication device for the deaf).
     *
     * Generated from protobuf enum <code>TTY_OR_TDD = 5;</code>
     */
    const TTY_OR_TDD = 5;
    /**
     * A voicemail.
     *
     * Generated from protobuf enum <code>VOICEMAIL = 6;</code>
     */
    const VOICEMAIL = 6;
    /**
     * A virtual telephone number is a number that can be routed to another
     * number and managed by the user via Web, SMS, IVR, and so on.  It is
     * associated with a particular person, and may be routed to either a MOBILE
     * or LANDLINE number. The [phone
     * usage][google.cloud.talent.v4beta1.ContactInfoUsage] should be set to
     * PERSONAL for these phone types. Some more information can be found here:
     * https://en.wikipedia.org/wiki/Personal_Numbers
     *
     * Generated from protobuf enum <code>VIRTUAL = 7;</code>
     */
    const VIRTUAL = 7;
    /**
     * Voice over IP numbers. This includes TSoIP (Telephony Service over IP).
     *
     * Generated from protobuf enum <code>VOIP = 8;</code>
     */
    const VOIP = 8;
    /**
     * In some regions (e.g. the USA), it is impossible to distinguish between
     * fixed-line and mobile numbers by looking at the phone number itself.
     *
     * Generated from protobuf enum <code>MOBILE_OR_LANDLINE = 9;</code>
     */
    const MOBILE_OR_LANDLINE = 9;

    private static $valueToName = [
        self::PHONE_TYPE_UNSPECIFIED => 'PHONE_TYPE_UNSPECIFIED',
        self::LANDLINE => 'LANDLINE',
        self::MOBILE => 'MOBILE',
        self::FAX => 'FAX',
        self::PAGER => 'PAGER',
        self::TTY_OR_TDD => 'TTY_OR_TDD',
        self::VOICEMAIL => 'VOICEMAIL',
        self::VIRTUAL => 'VIRTUAL',
        self::VOIP => 'VOIP',
        self::MOBILE_OR_LANDLINE => 'MOBILE_OR_LANDLINE',
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
\class_alias(PhoneType::class, \Google\Cloud\Talent\V4beta1\Phone_PhoneType::class);

