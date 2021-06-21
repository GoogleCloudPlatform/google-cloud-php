<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/document.proto

namespace Google\Cloud\DocumentAI\V1beta2\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Label attaches schema information and/or other metadata to segments within
 * a [Document][google.cloud.documentai.v1beta2.Document]. Multiple [Label][google.cloud.documentai.v1beta2.Document.Label]s on a single field can denote either
 * different labels, different instances of the same label created at
 * different times, or some combination of both.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.Document.Label</code>
 */
class Label extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the label.
     * When the label is generated from AutoML Text Classification model, this
     * field represents the name of the category.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Confidence score between 0 and 1 for label assignment.
     *
     * Generated from protobuf field <code>float confidence = 3;</code>
     */
    private $confidence = 0.0;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $automl_model
     *           Label is generated AutoML model. This field stores the full resource
     *           name of the AutoML model.
     *           Format:
     *           `projects/{project-id}/locations/{location-id}/models/{model-id}`
     *     @type string $name
     *           Name of the label.
     *           When the label is generated from AutoML Text Classification model, this
     *           field represents the name of the category.
     *     @type float $confidence
     *           Confidence score between 0 and 1 for label assignment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Label is generated AutoML model. This field stores the full resource
     * name of the AutoML model.
     * Format:
     * `projects/{project-id}/locations/{location-id}/models/{model-id}`
     *
     * Generated from protobuf field <code>string automl_model = 2;</code>
     * @return string
     */
    public function getAutomlModel()
    {
        return $this->readOneof(2);
    }

    public function hasAutomlModel()
    {
        return $this->hasOneof(2);
    }

    /**
     * Label is generated AutoML model. This field stores the full resource
     * name of the AutoML model.
     * Format:
     * `projects/{project-id}/locations/{location-id}/models/{model-id}`
     *
     * Generated from protobuf field <code>string automl_model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAutomlModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Name of the label.
     * When the label is generated from AutoML Text Classification model, this
     * field represents the name of the category.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the label.
     * When the label is generated from AutoML Text Classification model, this
     * field represents the name of the category.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Confidence score between 0 and 1 for label assignment.
     *
     * Generated from protobuf field <code>float confidence = 3;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence score between 0 and 1 for label assignment.
     *
     * Generated from protobuf field <code>float confidence = 3;</code>
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
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Label::class, \Google\Cloud\DocumentAI\V1beta2\Document_Label::class);

