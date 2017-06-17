<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Face location.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Videointelligence\V1beta1\FaceLocation</code>
 */
class FaceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Bounding box in a frame.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.BoundingBox bounding_box = 1;</code>
     */
    private $bounding_box = null;
    /**
     * <pre>
     * Video time offset in microseconds.
     * </pre>
     *
     * <code>int64 time_offset = 2;</code>
     */
    private $time_offset = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Bounding box in a frame.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.BoundingBox bounding_box = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta1\BoundingBox
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * <pre>
     * Bounding box in a frame.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.BoundingBox bounding_box = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta1\BoundingBox $var
     */
    public function setBoundingBox(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta1\BoundingBox::class);
        $this->bounding_box = $var;

        return $this;
    }

    /**
     * <pre>
     * Video time offset in microseconds.
     * </pre>
     *
     * <code>int64 time_offset = 2;</code>
     * @return int|string
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    /**
     * <pre>
     * Video time offset in microseconds.
     * </pre>
     *
     * <code>int64 time_offset = 2;</code>
     * @param int|string $var
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_offset = $var;

        return $this;
    }

}

