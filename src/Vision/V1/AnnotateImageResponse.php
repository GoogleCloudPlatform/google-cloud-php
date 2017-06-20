<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to an image annotation request.
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\AnnotateImageResponse</code>
 */
class AnnotateImageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, face detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     */
    private $face_annotations;
    /**
     * If present, landmark detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     */
    private $landmark_annotations;
    /**
     * If present, logo detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     */
    private $logo_annotations;
    /**
     * If present, label detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     */
    private $label_annotations;
    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     */
    private $text_annotations;
    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     */
    private $full_text_annotation = null;
    /**
     * If present, safe-search annotation has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     */
    private $safe_search_annotation = null;
    /**
     * If present, image properties were extracted successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     */
    private $image_properties_annotation = null;
    /**
     * If present, crop hints have completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     */
    private $crop_hints_annotation = null;
    /**
     * If present, web detection has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     */
    private $web_detection = null;
    /**
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     */
    private $error = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * If present, face detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFaceAnnotations()
    {
        return $this->face_annotations;
    }

    /**
     * If present, face detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setFaceAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\FaceAnnotation::class);
        $this->face_annotations = $arr;

        return $this;
    }

    /**
     * If present, landmark detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLandmarkAnnotations()
    {
        return $this->landmark_annotations;
    }

    /**
     * If present, landmark detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setLandmarkAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->landmark_annotations = $arr;

        return $this;
    }

    /**
     * If present, logo detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogoAnnotations()
    {
        return $this->logo_annotations;
    }

    /**
     * If present, logo detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setLogoAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->logo_annotations = $arr;

        return $this;
    }

    /**
     * If present, label detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabelAnnotations()
    {
        return $this->label_annotations;
    }

    /**
     * If present, label detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setLabelAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->label_annotations = $arr;

        return $this;
    }

    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextAnnotations()
    {
        return $this->text_annotations;
    }

    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setTextAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->text_annotations = $arr;

        return $this;
    }

    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     * @return \Google\Cloud\Vision\V1\TextAnnotation
     */
    public function getFullTextAnnotation()
    {
        return $this->full_text_annotation;
    }

    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     * @param \Google\Cloud\Vision\V1\TextAnnotation $var
     */
    public function setFullTextAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation::class);
        $this->full_text_annotation = $var;

        return $this;
    }

    /**
     * If present, safe-search annotation has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     * @return \Google\Cloud\Vision\V1\SafeSearchAnnotation
     */
    public function getSafeSearchAnnotation()
    {
        return $this->safe_search_annotation;
    }

    /**
     * If present, safe-search annotation has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     * @param \Google\Cloud\Vision\V1\SafeSearchAnnotation $var
     */
    public function setSafeSearchAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\SafeSearchAnnotation::class);
        $this->safe_search_annotation = $var;

        return $this;
    }

    /**
     * If present, image properties were extracted successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     * @return \Google\Cloud\Vision\V1\ImageProperties
     */
    public function getImagePropertiesAnnotation()
    {
        return $this->image_properties_annotation;
    }

    /**
     * If present, image properties were extracted successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     * @param \Google\Cloud\Vision\V1\ImageProperties $var
     */
    public function setImagePropertiesAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ImageProperties::class);
        $this->image_properties_annotation = $var;

        return $this;
    }

    /**
     * If present, crop hints have completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     * @return \Google\Cloud\Vision\V1\CropHintsAnnotation
     */
    public function getCropHintsAnnotation()
    {
        return $this->crop_hints_annotation;
    }

    /**
     * If present, crop hints have completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     * @param \Google\Cloud\Vision\V1\CropHintsAnnotation $var
     */
    public function setCropHintsAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\CropHintsAnnotation::class);
        $this->crop_hints_annotation = $var;

        return $this;
    }

    /**
     * If present, web detection has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     * @return \Google\Cloud\Vision\V1\WebDetection
     */
    public function getWebDetection()
    {
        return $this->web_detection;
    }

    /**
     * If present, web detection has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     * @param \Google\Cloud\Vision\V1\WebDetection $var
     */
    public function setWebDetection(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\WebDetection::class);
        $this->web_detection = $var;

        return $this;
    }

    /**
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     * @return \Google\Rpc\Status
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     * @param \Google\Rpc\Status $var
     */
    public function setError(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

}

