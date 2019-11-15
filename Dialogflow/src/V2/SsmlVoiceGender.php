<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace Google\Cloud\Dialogflow\V2;

use UnexpectedValueException;

/**
 * Gender of the voice as described in
 * [SSML voice element](https://www.w3.org/TR/speech-synthesis11/#edef_voice).
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.SsmlVoiceGender</code>
 */
class SsmlVoiceGender
{
    /**
     * An unspecified gender, which means that the client doesn't care which
     * gender the selected voice will have.
     *
     * Generated from protobuf enum <code>SSML_VOICE_GENDER_UNSPECIFIED = 0;</code>
     */
    const SSML_VOICE_GENDER_UNSPECIFIED = 0;
    /**
     * A male voice.
     *
     * Generated from protobuf enum <code>SSML_VOICE_GENDER_MALE = 1;</code>
     */
    const SSML_VOICE_GENDER_MALE = 1;
    /**
     * A female voice.
     *
     * Generated from protobuf enum <code>SSML_VOICE_GENDER_FEMALE = 2;</code>
     */
    const SSML_VOICE_GENDER_FEMALE = 2;
    /**
     * A gender-neutral voice.
     *
     * Generated from protobuf enum <code>SSML_VOICE_GENDER_NEUTRAL = 3;</code>
     */
    const SSML_VOICE_GENDER_NEUTRAL = 3;

    private static $valueToName = [
        self::SSML_VOICE_GENDER_UNSPECIFIED => 'SSML_VOICE_GENDER_UNSPECIFIED',
        self::SSML_VOICE_GENDER_MALE => 'SSML_VOICE_GENDER_MALE',
        self::SSML_VOICE_GENDER_FEMALE => 'SSML_VOICE_GENDER_FEMALE',
        self::SSML_VOICE_GENDER_NEUTRAL => 'SSML_VOICE_GENDER_NEUTRAL',
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

