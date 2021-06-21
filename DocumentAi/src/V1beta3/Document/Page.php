<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/document.proto

namespace Google\Cloud\DocumentAI\V1beta3\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A page in a [Document][google.cloud.documentai.v1beta3.Document].
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta3.Document.Page</code>
 */
class Page extends \Google\Protobuf\Internal\Message
{
    /**
     * 1-based index for current [Page][google.cloud.documentai.v1beta3.Document.Page] in a parent [Document][google.cloud.documentai.v1beta3.Document].
     * Useful when a page is taken out of a [Document][google.cloud.documentai.v1beta3.Document] for individual
     * processing.
     *
     * Generated from protobuf field <code>int32 page_number = 1;</code>
     */
    private $page_number = 0;
    /**
     * Rendered image for this page. This image is preprocessed to remove any
     * skew, rotation, and distortions such that the annotation bounding boxes
     * can be upright and axis-aligned.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Image image = 13;</code>
     */
    private $image = null;
    /**
     * Transformation matrices that were applied to the original document image
     * to produce [Page.image][google.cloud.documentai.v1beta3.Document.Page.image].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Matrix transforms = 14;</code>
     */
    private $transforms;
    /**
     * Physical dimension of the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Dimension dimension = 2;</code>
     */
    private $dimension = null;
    /**
     * [Layout][google.cloud.documentai.v1beta3.Document.Page.Layout] for the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Layout layout = 3;</code>
     */
    private $layout = null;
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.DetectedLanguage detected_languages = 4;</code>
     */
    private $detected_languages;
    /**
     * A list of visually detected text blocks on the page.
     * A block has a set of lines (collected into paragraphs) that have a common
     * line-spacing and orientation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Block blocks = 5;</code>
     */
    private $blocks;
    /**
     * A list of visually detected text paragraphs on the page.
     * A collection of lines that a human would perceive as a paragraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Paragraph paragraphs = 6;</code>
     */
    private $paragraphs;
    /**
     * A list of visually detected text lines on the page.
     * A collection of tokens that a human would perceive as a line.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Line lines = 7;</code>
     */
    private $lines;
    /**
     * A list of visually detected tokens on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Token tokens = 8;</code>
     */
    private $tokens;
    /**
     * A list of detected non-text visual elements e.g. checkbox,
     * signature etc. on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.VisualElement visual_elements = 9;</code>
     */
    private $visual_elements;
    /**
     * A list of visually detected tables on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Table tables = 10;</code>
     */
    private $tables;
    /**
     * A list of visually detected form fields on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.FormField form_fields = 11;</code>
     */
    private $form_fields;
    /**
     * The history of this page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Provenance provenance = 16;</code>
     */
    private $provenance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_number
     *           1-based index for current [Page][google.cloud.documentai.v1beta3.Document.Page] in a parent [Document][google.cloud.documentai.v1beta3.Document].
     *           Useful when a page is taken out of a [Document][google.cloud.documentai.v1beta3.Document] for individual
     *           processing.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Image $image
     *           Rendered image for this page. This image is preprocessed to remove any
     *           skew, rotation, and distortions such that the annotation bounding boxes
     *           can be upright and axis-aligned.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Matrix[]|\Google\Protobuf\Internal\RepeatedField $transforms
     *           Transformation matrices that were applied to the original document image
     *           to produce [Page.image][google.cloud.documentai.v1beta3.Document.Page.image].
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Dimension $dimension
     *           Physical dimension of the page.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Layout $layout
     *           [Layout][google.cloud.documentai.v1beta3.Document.Page.Layout] for the page.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Block[]|\Google\Protobuf\Internal\RepeatedField $blocks
     *           A list of visually detected text blocks on the page.
     *           A block has a set of lines (collected into paragraphs) that have a common
     *           line-spacing and orientation.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Paragraph[]|\Google\Protobuf\Internal\RepeatedField $paragraphs
     *           A list of visually detected text paragraphs on the page.
     *           A collection of lines that a human would perceive as a paragraph.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Line[]|\Google\Protobuf\Internal\RepeatedField $lines
     *           A list of visually detected text lines on the page.
     *           A collection of tokens that a human would perceive as a line.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Token[]|\Google\Protobuf\Internal\RepeatedField $tokens
     *           A list of visually detected tokens on the page.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\VisualElement[]|\Google\Protobuf\Internal\RepeatedField $visual_elements
     *           A list of detected non-text visual elements e.g. checkbox,
     *           signature etc. on the page.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\Table[]|\Google\Protobuf\Internal\RepeatedField $tables
     *           A list of visually detected tables on the page.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Page\FormField[]|\Google\Protobuf\Internal\RepeatedField $form_fields
     *           A list of visually detected form fields on the page.
     *     @type \Google\Cloud\DocumentAI\V1beta3\Document\Provenance $provenance
     *           The history of this page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta3\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * 1-based index for current [Page][google.cloud.documentai.v1beta3.Document.Page] in a parent [Document][google.cloud.documentai.v1beta3.Document].
     * Useful when a page is taken out of a [Document][google.cloud.documentai.v1beta3.Document] for individual
     * processing.
     *
     * Generated from protobuf field <code>int32 page_number = 1;</code>
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * 1-based index for current [Page][google.cloud.documentai.v1beta3.Document.Page] in a parent [Document][google.cloud.documentai.v1beta3.Document].
     * Useful when a page is taken out of a [Document][google.cloud.documentai.v1beta3.Document] for individual
     * processing.
     *
     * Generated from protobuf field <code>int32 page_number = 1;</code>
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
     * Rendered image for this page. This image is preprocessed to remove any
     * skew, rotation, and distortions such that the annotation bounding boxes
     * can be upright and axis-aligned.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Image image = 13;</code>
     * @return \Google\Cloud\DocumentAI\V1beta3\Document\Page\Image|null
     */
    public function getImage()
    {
        return isset($this->image) ? $this->image : null;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Rendered image for this page. This image is preprocessed to remove any
     * skew, rotation, and distortions such that the annotation bounding boxes
     * can be upright and axis-aligned.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Image image = 13;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * Transformation matrices that were applied to the original document image
     * to produce [Page.image][google.cloud.documentai.v1beta3.Document.Page.image].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Matrix transforms = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Transformation matrices that were applied to the original document image
     * to produce [Page.image][google.cloud.documentai.v1beta3.Document.Page.image].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Matrix transforms = 14;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Matrix[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Matrix::class);
        $this->transforms = $arr;

        return $this;
    }

    /**
     * Physical dimension of the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Dimension dimension = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1beta3\Document\Page\Dimension|null
     */
    public function getDimension()
    {
        return isset($this->dimension) ? $this->dimension : null;
    }

    public function hasDimension()
    {
        return isset($this->dimension);
    }

    public function clearDimension()
    {
        unset($this->dimension);
    }

    /**
     * Physical dimension of the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Dimension dimension = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Dimension $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Dimension::class);
        $this->dimension = $var;

        return $this;
    }

    /**
     * [Layout][google.cloud.documentai.v1beta3.Document.Page.Layout] for the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Layout layout = 3;</code>
     * @return \Google\Cloud\DocumentAI\V1beta3\Document\Page\Layout|null
     */
    public function getLayout()
    {
        return isset($this->layout) ? $this->layout : null;
    }

    public function hasLayout()
    {
        return isset($this->layout);
    }

    public function clearLayout()
    {
        unset($this->layout);
    }

    /**
     * [Layout][google.cloud.documentai.v1beta3.Document.Page.Layout] for the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Page.Layout layout = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Layout $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Layout::class);
        $this->layout = $var;

        return $this;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.DetectedLanguage detected_languages = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedLanguages()
    {
        return $this->detected_languages;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.DetectedLanguage detected_languages = 4;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\DetectedLanguage::class);
        $this->detected_languages = $arr;

        return $this;
    }

    /**
     * A list of visually detected text blocks on the page.
     * A block has a set of lines (collected into paragraphs) that have a common
     * line-spacing and orientation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Block blocks = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * A list of visually detected text blocks on the page.
     * A block has a set of lines (collected into paragraphs) that have a common
     * line-spacing and orientation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Block blocks = 5;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Block[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Block::class);
        $this->blocks = $arr;

        return $this;
    }

    /**
     * A list of visually detected text paragraphs on the page.
     * A collection of lines that a human would perceive as a paragraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Paragraph paragraphs = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }

    /**
     * A list of visually detected text paragraphs on the page.
     * A collection of lines that a human would perceive as a paragraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Paragraph paragraphs = 6;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Paragraph[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParagraphs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Paragraph::class);
        $this->paragraphs = $arr;

        return $this;
    }

    /**
     * A list of visually detected text lines on the page.
     * A collection of tokens that a human would perceive as a line.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Line lines = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * A list of visually detected text lines on the page.
     * A collection of tokens that a human would perceive as a line.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Line lines = 7;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Line[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Line::class);
        $this->lines = $arr;

        return $this;
    }

    /**
     * A list of visually detected tokens on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Token tokens = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * A list of visually detected tokens on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Token tokens = 8;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Token[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTokens($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Token::class);
        $this->tokens = $arr;

        return $this;
    }

    /**
     * A list of detected non-text visual elements e.g. checkbox,
     * signature etc. on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.VisualElement visual_elements = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVisualElements()
    {
        return $this->visual_elements;
    }

    /**
     * A list of detected non-text visual elements e.g. checkbox,
     * signature etc. on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.VisualElement visual_elements = 9;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\VisualElement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVisualElements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\VisualElement::class);
        $this->visual_elements = $arr;

        return $this;
    }

    /**
     * A list of visually detected tables on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Table tables = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * A list of visually detected tables on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.Table tables = 10;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\Table[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\Table::class);
        $this->tables = $arr;

        return $this;
    }

    /**
     * A list of visually detected form fields on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.FormField form_fields = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFormFields()
    {
        return $this->form_fields;
    }

    /**
     * A list of visually detected form fields on the page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Document.Page.FormField form_fields = 11;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Page\FormField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFormFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Document\Page\FormField::class);
        $this->form_fields = $arr;

        return $this;
    }

    /**
     * The history of this page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Provenance provenance = 16;</code>
     * @return \Google\Cloud\DocumentAI\V1beta3\Document\Provenance|null
     */
    public function getProvenance()
    {
        return isset($this->provenance) ? $this->provenance : null;
    }

    public function hasProvenance()
    {
        return isset($this->provenance);
    }

    public function clearProvenance()
    {
        unset($this->provenance);
    }

    /**
     * The history of this page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.Provenance provenance = 16;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Document\Provenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta3\Document\Provenance::class);
        $this->provenance = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Page::class, \Google\Cloud\DocumentAI\V1beta3\Document_Page::class);

