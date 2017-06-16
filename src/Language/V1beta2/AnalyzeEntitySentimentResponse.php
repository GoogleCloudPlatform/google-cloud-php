<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The entity-level sentiment analysis response message.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Language\V1beta2\AnalyzeEntitySentimentResponse</code>
 */
class AnalyzeEntitySentimentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The recognized entities in the input document with associated sentiments.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Entity entities = 1;</code>
     */
    private $entities;
    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 2;</code>
     */
    private $language = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The recognized entities in the input document with associated sentiments.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Entity entities = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * <pre>
     * The recognized entities in the input document with associated sentiments.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Entity entities = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setEntities(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta2\Entity::class);
        $this->entities = $arr;

        return $this;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 2;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 2;</code>
     * @param string $var
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

}

