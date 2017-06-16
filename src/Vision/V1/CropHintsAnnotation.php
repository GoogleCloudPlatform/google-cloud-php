<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Set of crop hints that are used to generate new crops when serving images.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\CropHintsAnnotation</code>
 */
class CropHintsAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .google.cloud.vision.v1.CropHint crop_hints = 1;</code>
     */
    private $crop_hints;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .google.cloud.vision.v1.CropHint crop_hints = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCropHints()
    {
        return $this->crop_hints;
    }

    /**
     * <code>repeated .google.cloud.vision.v1.CropHint crop_hints = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setCropHints(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\CropHint::class);
        $this->crop_hints = $arr;

        return $this;
    }

}

