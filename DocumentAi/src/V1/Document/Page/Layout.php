<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Visual element describing a layout unit on a page.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Layout</code>
 */
class Layout extends \Google\Protobuf\Internal\Message
{
    /**
     * Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     */
    private $text_anchor = null;
    /**
     * Confidence of the current [Layout][google.cloud.documentai.v1.Document.Page.Layout] within context of the object this
     * layout is for. e.g. confidence can be for a single token, a table,
     * a visual element, etc. depending on context. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;
    /**
     * The bounding polygon for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BoundingPoly bounding_poly = 3;</code>
     */
    private $bounding_poly = null;
    /**
     * Detected orientation for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout.Orientation orientation = 4;</code>
     */
    private $orientation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\TextAnchor $text_anchor
     *           Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *     @type float $confidence
     *           Confidence of the current [Layout][google.cloud.documentai.v1.Document.Page.Layout] within context of the object this
     *           layout is for. e.g. confidence can be for a single token, a table,
     *           a visual element, etc. depending on context. Range [0, 1].
     *     @type \Google\Cloud\DocumentAI\V1\BoundingPoly $bounding_poly
     *           The bounding polygon for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *     @type int $orientation
     *           Detected orientation for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\TextAnchor|null
     */
    public function getTextAnchor()
    {
        return isset($this->text_anchor) ? $this->text_anchor : null;
    }

    public function hasTextAnchor()
    {
        return isset($this->text_anchor);
    }

    public function clearTextAnchor()
    {
        unset($this->text_anchor);
    }

    /**
     * Text anchor indexing into the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\TextAnchor $var
     * @return $this
     */
    public function setTextAnchor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\TextAnchor::class);
        $this->text_anchor = $var;

        return $this;
    }

    /**
     * Confidence of the current [Layout][google.cloud.documentai.v1.Document.Page.Layout] within context of the object this
     * layout is for. e.g. confidence can be for a single token, a table,
     * a visual element, etc. depending on context. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence of the current [Layout][google.cloud.documentai.v1.Document.Page.Layout] within context of the object this
     * layout is for. e.g. confidence can be for a single token, a table,
     * a visual element, etc. depending on context. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * The bounding polygon for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BoundingPoly bounding_poly = 3;</code>
     * @return \Google\Cloud\DocumentAI\V1\BoundingPoly|null
     */
    public function getBoundingPoly()
    {
        return isset($this->bounding_poly) ? $this->bounding_poly : null;
    }

    public function hasBoundingPoly()
    {
        return isset($this->bounding_poly);
    }

    public function clearBoundingPoly()
    {
        unset($this->bounding_poly);
    }

    /**
     * The bounding polygon for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BoundingPoly bounding_poly = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * Detected orientation for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout.Orientation orientation = 4;</code>
     * @return int
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Detected orientation for the [Layout][google.cloud.documentai.v1.Document.Page.Layout].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout.Orientation orientation = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOrientation($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout\Orientation::class);
        $this->orientation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Layout::class, \Google\Cloud\DocumentAI\V1\Document_Page_Layout::class);

