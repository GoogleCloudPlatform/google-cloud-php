<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Label annotation.
 * </pre>
 *
 * Protobuf type <code>google.cloud.videointelligence.v1beta1.LabelAnnotation</code>
 */
class LabelAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Textual description, e.g. `Fixed-gear bicycle`.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Language code for `description` in BCP-47 format.
     * </pre>
     *
     * <code>string language_code = 2;</code>
     */
    private $language_code = '';
    /**
     * <pre>
     * Where the label was detected and with what confidence.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.LabelLocation locations = 3;</code>
     */
    private $locations;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Textual description, e.g. `Fixed-gear bicycle`.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Textual description, e.g. `Fixed-gear bicycle`.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * <pre>
     * Language code for `description` in BCP-47 format.
     * </pre>
     *
     * <code>string language_code = 2;</code>
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * <pre>
     * Language code for `description` in BCP-47 format.
     * </pre>
     *
     * <code>string language_code = 2;</code>
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * <pre>
     * Where the label was detected and with what confidence.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.LabelLocation locations = 3;</code>
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * <pre>
     * Where the label was detected and with what confidence.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.LabelLocation locations = 3;</code>
     */
    public function setLocations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta1\LabelLocation::class);
        $this->locations = $arr;

        return $this;
    }

}

