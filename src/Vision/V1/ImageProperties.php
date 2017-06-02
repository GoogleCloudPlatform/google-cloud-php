<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Stores image properties, such as dominant colors.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.ImageProperties</code>
 */
class ImageProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * If present, dominant colors completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.DominantColorsAnnotation dominant_colors = 1;</code>
     */
    private $dominant_colors = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * If present, dominant colors completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.DominantColorsAnnotation dominant_colors = 1;</code>
     */
    public function getDominantColors()
    {
        return $this->dominant_colors;
    }

    /**
     * <pre>
     * If present, dominant colors completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.DominantColorsAnnotation dominant_colors = 1;</code>
     */
    public function setDominantColors(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\DominantColorsAnnotation::class);
        $this->dominant_colors = $var;

        return $this;
    }

}

