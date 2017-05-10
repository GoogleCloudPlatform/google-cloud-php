<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

/**
 * <pre>
 * Reciprocal features of a pronoun.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.language.v1beta2.PartOfSpeech.Reciprocity</code>
 */
class PartOfSpeech_Reciprocity
{
    /**
     * <pre>
     * Reciprocity is not applicable in the analyzed language or is not
     * predicted.
     * </pre>
     *
     * <code>RECIPROCITY_UNKNOWN = 0;</code>
     */
    const RECIPROCITY_UNKNOWN = 0;
    /**
     * <pre>
     * Reciprocal
     * </pre>
     *
     * <code>RECIPROCAL = 1;</code>
     */
    const RECIPROCAL = 1;
    /**
     * <pre>
     * Non-reciprocal
     * </pre>
     *
     * <code>NON_RECIPROCAL = 2;</code>
     */
    const NON_RECIPROCAL = 2;
}

