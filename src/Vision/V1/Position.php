<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/geometry.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A 3D position in the image, used primarily for Face detection landmarks.
 * A valid Position must have both x and y coordinates.
 * The position coordinates are in the same scale as the original image.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\Position</code>
 */
class Position extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * X coordinate.
     * </pre>
     *
     * <code>float x = 1;</code>
     */
    private $x = 0.0;
    /**
     * <pre>
     * Y coordinate.
     * </pre>
     *
     * <code>float y = 2;</code>
     */
    private $y = 0.0;
    /**
     * <pre>
     * Z coordinate (or depth).
     * </pre>
     *
     * <code>float z = 3;</code>
     */
    private $z = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * X coordinate.
     * </pre>
     *
     * <code>float x = 1;</code>
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * <pre>
     * X coordinate.
     * </pre>
     *
     * <code>float x = 1;</code>
     * @param float $var
     */
    public function setX($var)
    {
        GPBUtil::checkFloat($var);
        $this->x = $var;

        return $this;
    }

    /**
     * <pre>
     * Y coordinate.
     * </pre>
     *
     * <code>float y = 2;</code>
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * <pre>
     * Y coordinate.
     * </pre>
     *
     * <code>float y = 2;</code>
     * @param float $var
     */
    public function setY($var)
    {
        GPBUtil::checkFloat($var);
        $this->y = $var;

        return $this;
    }

    /**
     * <pre>
     * Z coordinate (or depth).
     * </pre>
     *
     * <code>float z = 3;</code>
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * <pre>
     * Z coordinate (or depth).
     * </pre>
     *
     * <code>float z = 3;</code>
     * @param float $var
     */
    public function setZ($var)
    {
        GPBUtil::checkFloat($var);
        $this->z = $var;

        return $this;
    }

}

