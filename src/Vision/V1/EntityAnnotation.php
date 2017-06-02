<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Set of detected entity features.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.EntityAnnotation</code>
 */
class EntityAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Opaque entity ID. Some IDs may be available in
     * [Google Knowledge Graph Search API](https://developers.google.com/knowledge-graph/).
     * </pre>
     *
     * <code>string mid = 1;</code>
     */
    private $mid = '';
    /**
     * <pre>
     * The language code for the locale in which the entity textual
     * `description` is expressed.
     * </pre>
     *
     * <code>string locale = 2;</code>
     */
    private $locale = '';
    /**
     * <pre>
     * Entity textual description, expressed in its `locale` language.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Overall score of the result. Range [0, 1].
     * </pre>
     *
     * <code>float score = 4;</code>
     */
    private $score = 0.0;
    /**
     * <pre>
     * The accuracy of the entity detection in an image.
     * For example, for an image in which the "Eiffel Tower" entity is detected,
     * this field represents the confidence that there is a tower in the query
     * image. Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 5;</code>
     */
    private $confidence = 0.0;
    /**
     * <pre>
     * The relevancy of the ICA (Image Content Annotation) label to the
     * image. For example, the relevancy of "tower" is likely higher to an image
     * containing the detected "Eiffel Tower" than to an image containing a
     * detected distant towering building, even though the confidence that
     * there is a tower in each image may be the same. Range [0, 1].
     * </pre>
     *
     * <code>float topicality = 6;</code>
     */
    private $topicality = 0.0;
    /**
     * <pre>
     * Image region to which this entity belongs. Currently not produced
     * for `LABEL_DETECTION` features. For `TEXT_DETECTION` (OCR), `boundingPoly`s
     * are produced for the entire text detected in an image region, followed by
     * `boundingPoly`s for each word within the detected text.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 7;</code>
     */
    private $bounding_poly = null;
    /**
     * <pre>
     * The location information for the detected entity. Multiple
     * `LocationInfo` elements can be present because one location may
     * indicate the location of the scene in the image, and another location
     * may indicate the location of the place where the image was taken.
     * Location information is usually present for landmarks.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.LocationInfo locations = 8;</code>
     */
    private $locations;
    /**
     * <pre>
     * Some entities may have optional user-supplied `Property` (name/value)
     * fields, such a score or string that qualifies the entity.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.Property properties = 9;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Opaque entity ID. Some IDs may be available in
     * [Google Knowledge Graph Search API](https://developers.google.com/knowledge-graph/).
     * </pre>
     *
     * <code>string mid = 1;</code>
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * <pre>
     * Opaque entity ID. Some IDs may be available in
     * [Google Knowledge Graph Search API](https://developers.google.com/knowledge-graph/).
     * </pre>
     *
     * <code>string mid = 1;</code>
     */
    public function setMid($var)
    {
        GPBUtil::checkString($var, True);
        $this->mid = $var;

        return $this;
    }

    /**
     * <pre>
     * The language code for the locale in which the entity textual
     * `description` is expressed.
     * </pre>
     *
     * <code>string locale = 2;</code>
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <pre>
     * The language code for the locale in which the entity textual
     * `description` is expressed.
     * </pre>
     *
     * <code>string locale = 2;</code>
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * <pre>
     * Entity textual description, expressed in its `locale` language.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Entity textual description, expressed in its `locale` language.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * <pre>
     * Overall score of the result. Range [0, 1].
     * </pre>
     *
     * <code>float score = 4;</code>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <pre>
     * Overall score of the result. Range [0, 1].
     * </pre>
     *
     * <code>float score = 4;</code>
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * <pre>
     * The accuracy of the entity detection in an image.
     * For example, for an image in which the "Eiffel Tower" entity is detected,
     * this field represents the confidence that there is a tower in the query
     * image. Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 5;</code>
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * <pre>
     * The accuracy of the entity detection in an image.
     * For example, for an image in which the "Eiffel Tower" entity is detected,
     * this field represents the confidence that there is a tower in the query
     * image. Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 5;</code>
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * <pre>
     * The relevancy of the ICA (Image Content Annotation) label to the
     * image. For example, the relevancy of "tower" is likely higher to an image
     * containing the detected "Eiffel Tower" than to an image containing a
     * detected distant towering building, even though the confidence that
     * there is a tower in each image may be the same. Range [0, 1].
     * </pre>
     *
     * <code>float topicality = 6;</code>
     */
    public function getTopicality()
    {
        return $this->topicality;
    }

    /**
     * <pre>
     * The relevancy of the ICA (Image Content Annotation) label to the
     * image. For example, the relevancy of "tower" is likely higher to an image
     * containing the detected "Eiffel Tower" than to an image containing a
     * detected distant towering building, even though the confidence that
     * there is a tower in each image may be the same. Range [0, 1].
     * </pre>
     *
     * <code>float topicality = 6;</code>
     */
    public function setTopicality($var)
    {
        GPBUtil::checkFloat($var);
        $this->topicality = $var;

        return $this;
    }

    /**
     * <pre>
     * Image region to which this entity belongs. Currently not produced
     * for `LABEL_DETECTION` features. For `TEXT_DETECTION` (OCR), `boundingPoly`s
     * are produced for the entire text detected in an image region, followed by
     * `boundingPoly`s for each word within the detected text.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 7;</code>
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * <pre>
     * Image region to which this entity belongs. Currently not produced
     * for `LABEL_DETECTION` features. For `TEXT_DETECTION` (OCR), `boundingPoly`s
     * are produced for the entire text detected in an image region, followed by
     * `boundingPoly`s for each word within the detected text.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 7;</code>
     */
    public function setBoundingPoly(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * <pre>
     * The location information for the detected entity. Multiple
     * `LocationInfo` elements can be present because one location may
     * indicate the location of the scene in the image, and another location
     * may indicate the location of the place where the image was taken.
     * Location information is usually present for landmarks.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.LocationInfo locations = 8;</code>
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * <pre>
     * The location information for the detected entity. Multiple
     * `LocationInfo` elements can be present because one location may
     * indicate the location of the scene in the image, and another location
     * may indicate the location of the place where the image was taken.
     * Location information is usually present for landmarks.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.LocationInfo locations = 8;</code>
     */
    public function setLocations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\LocationInfo::class);
        $this->locations = $arr;

        return $this;
    }

    /**
     * <pre>
     * Some entities may have optional user-supplied `Property` (name/value)
     * fields, such a score or string that qualifies the entity.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.Property properties = 9;</code>
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * <pre>
     * Some entities may have optional user-supplied `Property` (name/value)
     * fields, such a score or string that qualifies the entity.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.Property properties = 9;</code>
     */
    public function setProperties(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Property::class);
        $this->properties = $arr;

        return $this;
    }

}

