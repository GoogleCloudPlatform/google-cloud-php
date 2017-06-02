<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A face-specific landmark (for example, a face feature).
 * Landmark positions may fall outside the bounds of the image
 * if the face is near one or more edges of the image.
 * Therefore it is NOT guaranteed that `0 &lt;= x &lt; width` or
 * `0 &lt;= y &lt; height`.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.FaceAnnotation.Landmark</code>
 */
class FaceAnnotation_Landmark extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Face landmark type.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.FaceAnnotation.Landmark.Type type = 3;</code>
     */
    private $type = 0;
    /**
     * <pre>
     * Face landmark position.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Position position = 4;</code>
     */
    private $position = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Face landmark type.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.FaceAnnotation.Landmark.Type type = 3;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * Face landmark type.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.FaceAnnotation.Landmark.Type type = 3;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\FaceAnnotation_Landmark_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * <pre>
     * Face landmark position.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Position position = 4;</code>
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * <pre>
     * Face landmark position.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Position position = 4;</code>
     */
    public function setPosition(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\Position::class);
        $this->position = $var;

        return $this;
    }

}

