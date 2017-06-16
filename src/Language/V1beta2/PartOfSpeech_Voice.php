<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

/**
 * <pre>
 * The relationship between the action that a verb expresses and the
 * participants identified by its arguments.
 * </pre>
 *
 * Protobuf enum <code>Google\Cloud\Language\V1beta2\PartOfSpeech\Voice</code>
 */
class PartOfSpeech_Voice
{
    /**
     * <pre>
     * Voice is not applicable in the analyzed language or is not predicted.
     * </pre>
     *
     * <code>VOICE_UNKNOWN = 0;</code>
     */
    const VOICE_UNKNOWN = 0;
    /**
     * <pre>
     * Active
     * </pre>
     *
     * <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * <pre>
     * Causative
     * </pre>
     *
     * <code>CAUSATIVE = 2;</code>
     */
    const CAUSATIVE = 2;
    /**
     * <pre>
     * Passive
     * </pre>
     *
     * <code>PASSIVE = 3;</code>
     */
    const PASSIVE = 3;
}

