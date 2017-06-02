<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The entity analysis request message.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1beta2.AnalyzeEntitiesRequest</code>
 */
class AnalyzeEntitiesRequest extends \Google\Protobuf\Internal\Message
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
     * The encoding type used by the API to calculate offsets.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
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
     */
    public function setDocument(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * <pre>
     * The encoding type used by the API to calculate offsets.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
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
     * <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

