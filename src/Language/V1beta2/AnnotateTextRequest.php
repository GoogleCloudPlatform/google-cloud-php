<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request message for the text annotation API, which can perform multiple
 * analysis types (sentiment, entities, and syntax) in one call.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Language\V1beta2\AnnotateTextRequest</code>
 */
class AnnotateTextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Input document.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.Document document = 1;</code>
     */
    private $document = null;
    /**
     * <pre>
     * The enabled features.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.AnnotateTextRequest.Features features = 2;</code>
     */
    private $features = null;
    /**
     * <pre>
     * The encoding type used by the API to calculate offsets.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 3;</code>
     */
    private $encoding_type = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Input document.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.Document document = 1;</code>
     * @return Google\Cloud\Language\V1beta2\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * <pre>
     * Input document.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.Document document = 1;</code>
     * @param Google\Cloud\Language\V1beta2\Document $var
     */
    public function setDocument(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * <pre>
     * The enabled features.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.AnnotateTextRequest.Features features = 2;</code>
     * @return Google\Cloud\Language\V1beta2\AnnotateTextRequest_Features
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * <pre>
     * The enabled features.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.AnnotateTextRequest.Features features = 2;</code>
     * @param Google\Cloud\Language\V1beta2\AnnotateTextRequest_Features $var
     */
    public function setFeatures(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\AnnotateTextRequest_Features::class);
        $this->features = $var;

        return $this;
    }

    /**
     * <pre>
     * The encoding type used by the API to calculate offsets.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 3;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * <pre>
     * The encoding type used by the API to calculate offsets.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 3;</code>
     * @param int $var
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

