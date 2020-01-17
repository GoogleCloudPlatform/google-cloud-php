<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotations related to one detected OCR text snippet. This will contain the
 * corresponding text, confidence value, and frame level information for each
 * detection.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.TextAnnotation</code>
 */
class TextAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The detected text.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';
    /**
     * All video segments where OCR detected text appears.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TextSegment segments = 2;</code>
     */
    private $segments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           The detected text.
     *     @type \Google\Cloud\VideoIntelligence\V1\TextSegment[]|\Google\Protobuf\Internal\RepeatedField $segments
     *           All video segments where OCR detected text appears.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * The detected text.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The detected text.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * All video segments where OCR detected text appears.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TextSegment segments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * All video segments where OCR detected text appears.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TextSegment segments = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\TextSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\TextSegment::class);
        $this->segments = $arr;

        return $this;
    }

}

