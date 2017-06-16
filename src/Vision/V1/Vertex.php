<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/geometry.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A vertex represents a 2D point in the image.
 * NOTE: the vertex coordinates are in the same scale as the original image.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\Vertex</code>
 */
class Vertex extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * X coordinate.
     * </pre>
     *
     * <code>int32 x = 1;</code>
     */
    private $x = 0;
    /**
     * <pre>
     * Y coordinate.
     * </pre>
     *
     * <code>int32 y = 2;</code>
     */
    private $y = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * X coordinate.
     * </pre>
     *
     * <code>int32 x = 1;</code>
     * @return int
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
     * <code>int32 x = 1;</code>
     * @param int $var
     */
    public function setX($var)
    {
        GPBUtil::checkInt32($var);
        $this->x = $var;

        return $this;
    }

    /**
     * <pre>
     * Y coordinate.
     * </pre>
     *
     * <code>int32 y = 2;</code>
     * @return int
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
     * <code>int32 y = 2;</code>
     * @param int $var
     */
    public function setY($var)
    {
        GPBUtil::checkInt32($var);
        $this->y = $var;

        return $this;
    }

}

