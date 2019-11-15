<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/data_items.proto

namespace Google\Cloud\AutoMl\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the layout information of a
 * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in the
 * document.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.Document.Layout</code>
 */
class Layout extends \Google\Protobuf\Internal\Message
{
    /**
     * Text Segment that represents a segment in
     * [document_text][google.cloud.automl.v1.Document.document_text].
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSegment text_segment = 1;</code>
     */
    private $text_segment = null;
    /**
     * Page number of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * the original document, starts from 1.
     *
     * Generated from protobuf field <code>int32 page_number = 2;</code>
     */
    private $page_number = 0;
    /**
     * The position of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * the page. Contains exactly 4
     * [normalized_vertices][google.cloud.automl.v1.BoundingPoly.normalized_vertices]
     * and they are connected by edges in the order provided, which will
     * represent a rectangle parallel to the frame. The
     * [NormalizedVertex-s][google.cloud.automl.v1.NormalizedVertex] are
     * relative to the page.
     * Coordinates are based on top-left as point (0,0).
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BoundingPoly bounding_poly = 3;</code>
     */
    private $bounding_poly = null;
    /**
     * The type of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Document.Layout.TextSegmentType text_segment_type = 4;</code>
     */
    private $text_segment_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\TextSegment $text_segment
     *           Text Segment that represents a segment in
     *           [document_text][google.cloud.automl.v1.Document.document_text].
     *     @type int $page_number
     *           Page number of the
     *           [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     *           the original document, starts from 1.
     *     @type \Google\Cloud\AutoMl\V1\BoundingPoly $bounding_poly
     *           The position of the
     *           [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     *           the page. Contains exactly 4
     *           [normalized_vertices][google.cloud.automl.v1.BoundingPoly.normalized_vertices]
     *           and they are connected by edges in the order provided, which will
     *           represent a rectangle parallel to the frame. The
     *           [NormalizedVertex-s][google.cloud.automl.v1.NormalizedVertex] are
     *           relative to the page.
     *           Coordinates are based on top-left as point (0,0).
     *     @type int $text_segment_type
     *           The type of the
     *           [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     *           document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\DataItems::initOnce();
        parent::__construct($data);
    }

    /**
     * Text Segment that represents a segment in
     * [document_text][google.cloud.automl.v1.Document.document_text].
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSegment text_segment = 1;</code>
     * @return \Google\Cloud\AutoMl\V1\TextSegment
     */
    public function getTextSegment()
    {
        return $this->text_segment;
    }

    /**
     * Text Segment that represents a segment in
     * [document_text][google.cloud.automl.v1.Document.document_text].
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSegment text_segment = 1;</code>
     * @param \Google\Cloud\AutoMl\V1\TextSegment $var
     * @return $this
     */
    public function setTextSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TextSegment::class);
        $this->text_segment = $var;

        return $this;
    }

    /**
     * Page number of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * the original document, starts from 1.
     *
     * Generated from protobuf field <code>int32 page_number = 2;</code>
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * Page number of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * the original document, starts from 1.
     *
     * Generated from protobuf field <code>int32 page_number = 2;</code>
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
     * The position of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * the page. Contains exactly 4
     * [normalized_vertices][google.cloud.automl.v1.BoundingPoly.normalized_vertices]
     * and they are connected by edges in the order provided, which will
     * represent a rectangle parallel to the frame. The
     * [NormalizedVertex-s][google.cloud.automl.v1.NormalizedVertex] are
     * relative to the page.
     * Coordinates are based on top-left as point (0,0).
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BoundingPoly bounding_poly = 3;</code>
     * @return \Google\Cloud\AutoMl\V1\BoundingPoly
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * The position of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * the page. Contains exactly 4
     * [normalized_vertices][google.cloud.automl.v1.BoundingPoly.normalized_vertices]
     * and they are connected by edges in the order provided, which will
     * represent a rectangle parallel to the frame. The
     * [NormalizedVertex-s][google.cloud.automl.v1.NormalizedVertex] are
     * relative to the page.
     * Coordinates are based on top-left as point (0,0).
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BoundingPoly bounding_poly = 3;</code>
     * @param \Google\Cloud\AutoMl\V1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * The type of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Document.Layout.TextSegmentType text_segment_type = 4;</code>
     * @return int
     */
    public function getTextSegmentType()
    {
        return $this->text_segment_type;
    }

    /**
     * The type of the
     * [text_segment][google.cloud.automl.v1.Document.Layout.text_segment] in
     * document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Document.Layout.TextSegmentType text_segment_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTextSegmentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AutoMl\V1\Document_Layout_TextSegmentType::class);
        $this->text_segment_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Layout::class, \Google\Cloud\AutoMl\V1\Document_Layout::class);

