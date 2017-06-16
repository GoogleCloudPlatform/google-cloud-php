<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

/**
 * <pre>
 * The characteristic of a verb that expresses time flow during an event.
 * </pre>
 *
 * Protobuf enum <code>Google\Cloud\Language\V1beta2\PartOfSpeech\Aspect</code>
 */
class PartOfSpeech_Aspect
{
    /**
     * <pre>
     * Aspect is not applicable in the analyzed language or is not predicted.
     * </pre>
     *
     * <code>ASPECT_UNKNOWN = 0;</code>
     */
    const ASPECT_UNKNOWN = 0;
    /**
     * <pre>
     * Perfective
     * </pre>
     *
     * <code>PERFECTIVE = 1;</code>
     */
    const PERFECTIVE = 1;
    /**
     * <pre>
     * Imperfective
     * </pre>
     *
     * <code>IMPERFECTIVE = 2;</code>
     */
    const IMPERFECTIVE = 2;
    /**
     * <pre>
     * Progressive
     * </pre>
     *
     * <code>PROGRESSIVE = 3;</code>
     */
    const PROGRESSIVE = 3;
}

