<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/document_understanding.proto

namespace Google\Cloud\DocumentAI\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A hint for a table bounding box on the page for table parsing.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.TableBoundHint</code>
 */
class TableBoundHint extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Page number for multi-paged inputs this hint applies to. If not
     * provided, this hint will apply to all pages by default. This value is
     * 1-based.
     *
     * Generated from protobuf field <code>int32 page_number = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_number = 0;
    /**
     * Bounding box hint for a table on this page. The coordinates must be
     * normalized to [0,1] and the bounding box must be an axis-aligned rectangle.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.BoundingPoly bounding_box = 2;</code>
     */
    private $bounding_box = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_number
     *           Optional. Page number for multi-paged inputs this hint applies to. If not
     *           provided, this hint will apply to all pages by default. This value is
     *           1-based.
     *     @type \Google\Cloud\DocumentAI\V1beta2\BoundingPoly $bounding_box
     *           Bounding box hint for a table on this page. The coordinates must be
     *           normalized to [0,1] and the bounding box must be an axis-aligned rectangle.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\DocumentUnderstanding::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Page number for multi-paged inputs this hint applies to. If not
     * provided, this hint will apply to all pages by default. This value is
     * 1-based.
     *
     * Generated from protobuf field <code>int32 page_number = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * Optional. Page number for multi-paged inputs this hint applies to. If not
     * provided, this hint will apply to all pages by default. This value is
     * 1-based.
     *
     * Generated from protobuf field <code>int32 page_number = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_number = $var;

        return $this;
    }

    /**
     * Bounding box hint for a table on this page. The coordinates must be
     * normalized to [0,1] and the bounding box must be an axis-aligned rectangle.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.BoundingPoly bounding_box = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1beta2\BoundingPoly|null
     */
    public function getBoundingBox()
    {
        return isset($this->bounding_box) ? $this->bounding_box : null;
    }

    public function hasBoundingBox()
    {
        return isset($this->bounding_box);
    }

    public function clearBoundingBox()
    {
        unset($this->bounding_box);
    }

    /**
     * Bounding box hint for a table on this page. The coordinates must be
     * normalized to [0,1] and the bounding box must be an axis-aligned rectangle.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.BoundingPoly bounding_box = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1beta2\BoundingPoly $var
     * @return $this
     */
    public function setBoundingBox($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta2\BoundingPoly::class);
        $this->bounding_box = $var;

        return $this;
    }

}

