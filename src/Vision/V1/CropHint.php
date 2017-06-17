<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Single crop hint that is used to generate a new crop when serving an image.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\CropHint</code>
 */
class CropHint extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The bounding polygon for the crop region. The coordinates of the bounding
     * box are in the original image's scale, as returned in `ImageParams`.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     */
    private $bounding_poly = null;
    /**
     * <pre>
     * Confidence of this being a salient region.  Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;
    /**
     * <pre>
     * Fraction of importance of this salient region with respect to the original
     * image.
     * </pre>
     *
     * <code>float importance_fraction = 3;</code>
     */
    private $importance_fraction = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The bounding polygon for the crop region. The coordinates of the bounding
     * box are in the original image's scale, as returned in `ImageParams`.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * <pre>
     * The bounding polygon for the crop region. The coordinates of the bounding
     * box are in the original image's scale, as returned in `ImageParams`.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     */
    public function setBoundingPoly(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * <pre>
     * Confidence of this being a salient region.  Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * <pre>
     * Confidence of this being a salient region.  Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     * @param float $var
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * <pre>
     * Fraction of importance of this salient region with respect to the original
     * image.
     * </pre>
     *
     * <code>float importance_fraction = 3;</code>
     * @return float
     */
    public function getImportanceFraction()
    {
        return $this->importance_fraction;
    }

    /**
     * <pre>
     * Fraction of importance of this salient region with respect to the original
     * image.
     * </pre>
     *
     * <code>float importance_fraction = 3;</code>
     * @param float $var
     */
    public function setImportanceFraction($var)
    {
        GPBUtil::checkFloat($var);
        $this->importance_fraction = $var;

        return $this;
    }

}

