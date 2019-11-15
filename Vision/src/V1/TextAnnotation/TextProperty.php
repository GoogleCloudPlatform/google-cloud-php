<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1\TextAnnotation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information detected on the structural component.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.TextAnnotation.TextProperty</code>
 */
class TextProperty extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.TextAnnotation.DetectedLanguage detected_languages = 1;</code>
     */
    private $detected_languages;
    /**
     * Detected start or end of a text segment.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.DetectedBreak detected_break = 2;</code>
     */
    private $detected_break = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\TextAnnotation\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     *     @type \Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak $detected_break
     *           Detected start or end of a text segment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.TextAnnotation.DetectedLanguage detected_languages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedLanguages()
    {
        return $this->detected_languages;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.TextAnnotation.DetectedLanguage detected_languages = 1;</code>
     * @param \Google\Cloud\Vision\V1\TextAnnotation\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\TextAnnotation\DetectedLanguage::class);
        $this->detected_languages = $arr;

        return $this;
    }

    /**
     * Detected start or end of a text segment.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.DetectedBreak detected_break = 2;</code>
     * @return \Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak
     */
    public function getDetectedBreak()
    {
        return $this->detected_break;
    }

    /**
     * Detected start or end of a text segment.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.DetectedBreak detected_break = 2;</code>
     * @param \Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak $var
     * @return $this
     */
    public function setDetectedBreak($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation_DetectedBreak::class);
        $this->detected_break = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(TextProperty::class, \Google\Cloud\Vision\V1\TextAnnotation_TextProperty::class);

