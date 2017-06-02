<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A face annotation object contains the results of face detection.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.FaceAnnotation</code>
 */
class FaceAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The bounding polygon around the face. The coordinates of the bounding box
     * are in the original image's scale, as returned in `ImageParams`.
     * The bounding box is computed to "frame" the face in accordance with human
     * expectations. It is based on the landmarker results.
     * Note that one or more x and/or y coordinates may not be generated in the
     * `BoundingPoly` (the polygon will be unbounded) if only a partial face
     * appears in the image to be annotated.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     */
    private $bounding_poly = null;
    /**
     * <pre>
     * The `fd_bounding_poly` bounding polygon is tighter than the
     * `boundingPoly`, and encloses only the skin part of the face. Typically, it
     * is used to eliminate the face from any image analysis that detects the
     * "amount of skin" visible in an image. It is not based on the
     * landmarker results, only on the initial face detection, hence
     * the &lt;code&gt;fd&lt;/code&gt; (face detection) prefix.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly fd_bounding_poly = 2;</code>
     */
    private $fd_bounding_poly = null;
    /**
     * <pre>
     * Detected face landmarks.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.FaceAnnotation.Landmark landmarks = 3;</code>
     */
    private $landmarks;
    /**
     * <pre>
     * Roll angle, which indicates the amount of clockwise/anti-clockwise rotation
     * of the face relative to the image vertical about the axis perpendicular to
     * the face. Range [-180,180].
     * </pre>
     *
     * <code>float roll_angle = 4;</code>
     */
    private $roll_angle = 0.0;
    /**
     * <pre>
     * Yaw angle, which indicates the leftward/rightward angle that the face is
     * pointing relative to the vertical plane perpendicular to the image. Range
     * [-180,180].
     * </pre>
     *
     * <code>float pan_angle = 5;</code>
     */
    private $pan_angle = 0.0;
    /**
     * <pre>
     * Pitch angle, which indicates the upwards/downwards angle that the face is
     * pointing relative to the image's horizontal plane. Range [-180,180].
     * </pre>
     *
     * <code>float tilt_angle = 6;</code>
     */
    private $tilt_angle = 0.0;
    /**
     * <pre>
     * Detection confidence. Range [0, 1].
     * </pre>
     *
     * <code>float detection_confidence = 7;</code>
     */
    private $detection_confidence = 0.0;
    /**
     * <pre>
     * Face landmarking confidence. Range [0, 1].
     * </pre>
     *
     * <code>float landmarking_confidence = 8;</code>
     */
    private $landmarking_confidence = 0.0;
    /**
     * <pre>
     * Joy likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood joy_likelihood = 9;</code>
     */
    private $joy_likelihood = 0;
    /**
     * <pre>
     * Sorrow likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood sorrow_likelihood = 10;</code>
     */
    private $sorrow_likelihood = 0;
    /**
     * <pre>
     * Anger likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood anger_likelihood = 11;</code>
     */
    private $anger_likelihood = 0;
    /**
     * <pre>
     * Surprise likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood surprise_likelihood = 12;</code>
     */
    private $surprise_likelihood = 0;
    /**
     * <pre>
     * Under-exposed likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood under_exposed_likelihood = 13;</code>
     */
    private $under_exposed_likelihood = 0;
    /**
     * <pre>
     * Blurred likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood blurred_likelihood = 14;</code>
     */
    private $blurred_likelihood = 0;
    /**
     * <pre>
     * Headwear likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood headwear_likelihood = 15;</code>
     */
    private $headwear_likelihood = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The bounding polygon around the face. The coordinates of the bounding box
     * are in the original image's scale, as returned in `ImageParams`.
     * The bounding box is computed to "frame" the face in accordance with human
     * expectations. It is based on the landmarker results.
     * Note that one or more x and/or y coordinates may not be generated in the
     * `BoundingPoly` (the polygon will be unbounded) if only a partial face
     * appears in the image to be annotated.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * <pre>
     * The bounding polygon around the face. The coordinates of the bounding box
     * are in the original image's scale, as returned in `ImageParams`.
     * The bounding box is computed to "frame" the face in accordance with human
     * expectations. It is based on the landmarker results.
     * Note that one or more x and/or y coordinates may not be generated in the
     * `BoundingPoly` (the polygon will be unbounded) if only a partial face
     * appears in the image to be annotated.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     */
    public function setBoundingPoly(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * <pre>
     * The `fd_bounding_poly` bounding polygon is tighter than the
     * `boundingPoly`, and encloses only the skin part of the face. Typically, it
     * is used to eliminate the face from any image analysis that detects the
     * "amount of skin" visible in an image. It is not based on the
     * landmarker results, only on the initial face detection, hence
     * the &lt;code&gt;fd&lt;/code&gt; (face detection) prefix.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly fd_bounding_poly = 2;</code>
     */
    public function getFdBoundingPoly()
    {
        return $this->fd_bounding_poly;
    }

    /**
     * <pre>
     * The `fd_bounding_poly` bounding polygon is tighter than the
     * `boundingPoly`, and encloses only the skin part of the face. Typically, it
     * is used to eliminate the face from any image analysis that detects the
     * "amount of skin" visible in an image. It is not based on the
     * landmarker results, only on the initial face detection, hence
     * the &lt;code&gt;fd&lt;/code&gt; (face detection) prefix.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly fd_bounding_poly = 2;</code>
     */
    public function setFdBoundingPoly(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->fd_bounding_poly = $var;

        return $this;
    }

    /**
     * <pre>
     * Detected face landmarks.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.FaceAnnotation.Landmark landmarks = 3;</code>
     */
    public function getLandmarks()
    {
        return $this->landmarks;
    }

    /**
     * <pre>
     * Detected face landmarks.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.FaceAnnotation.Landmark landmarks = 3;</code>
     */
    public function setLandmarks(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\FaceAnnotation_Landmark::class);
        $this->landmarks = $arr;

        return $this;
    }

    /**
     * <pre>
     * Roll angle, which indicates the amount of clockwise/anti-clockwise rotation
     * of the face relative to the image vertical about the axis perpendicular to
     * the face. Range [-180,180].
     * </pre>
     *
     * <code>float roll_angle = 4;</code>
     */
    public function getRollAngle()
    {
        return $this->roll_angle;
    }

    /**
     * <pre>
     * Roll angle, which indicates the amount of clockwise/anti-clockwise rotation
     * of the face relative to the image vertical about the axis perpendicular to
     * the face. Range [-180,180].
     * </pre>
     *
     * <code>float roll_angle = 4;</code>
     */
    public function setRollAngle($var)
    {
        GPBUtil::checkFloat($var);
        $this->roll_angle = $var;

        return $this;
    }

    /**
     * <pre>
     * Yaw angle, which indicates the leftward/rightward angle that the face is
     * pointing relative to the vertical plane perpendicular to the image. Range
     * [-180,180].
     * </pre>
     *
     * <code>float pan_angle = 5;</code>
     */
    public function getPanAngle()
    {
        return $this->pan_angle;
    }

    /**
     * <pre>
     * Yaw angle, which indicates the leftward/rightward angle that the face is
     * pointing relative to the vertical plane perpendicular to the image. Range
     * [-180,180].
     * </pre>
     *
     * <code>float pan_angle = 5;</code>
     */
    public function setPanAngle($var)
    {
        GPBUtil::checkFloat($var);
        $this->pan_angle = $var;

        return $this;
    }

    /**
     * <pre>
     * Pitch angle, which indicates the upwards/downwards angle that the face is
     * pointing relative to the image's horizontal plane. Range [-180,180].
     * </pre>
     *
     * <code>float tilt_angle = 6;</code>
     */
    public function getTiltAngle()
    {
        return $this->tilt_angle;
    }

    /**
     * <pre>
     * Pitch angle, which indicates the upwards/downwards angle that the face is
     * pointing relative to the image's horizontal plane. Range [-180,180].
     * </pre>
     *
     * <code>float tilt_angle = 6;</code>
     */
    public function setTiltAngle($var)
    {
        GPBUtil::checkFloat($var);
        $this->tilt_angle = $var;

        return $this;
    }

    /**
     * <pre>
     * Detection confidence. Range [0, 1].
     * </pre>
     *
     * <code>float detection_confidence = 7;</code>
     */
    public function getDetectionConfidence()
    {
        return $this->detection_confidence;
    }

    /**
     * <pre>
     * Detection confidence. Range [0, 1].
     * </pre>
     *
     * <code>float detection_confidence = 7;</code>
     */
    public function setDetectionConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->detection_confidence = $var;

        return $this;
    }

    /**
     * <pre>
     * Face landmarking confidence. Range [0, 1].
     * </pre>
     *
     * <code>float landmarking_confidence = 8;</code>
     */
    public function getLandmarkingConfidence()
    {
        return $this->landmarking_confidence;
    }

    /**
     * <pre>
     * Face landmarking confidence. Range [0, 1].
     * </pre>
     *
     * <code>float landmarking_confidence = 8;</code>
     */
    public function setLandmarkingConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->landmarking_confidence = $var;

        return $this;
    }

    /**
     * <pre>
     * Joy likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood joy_likelihood = 9;</code>
     */
    public function getJoyLikelihood()
    {
        return $this->joy_likelihood;
    }

    /**
     * <pre>
     * Joy likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood joy_likelihood = 9;</code>
     */
    public function setJoyLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->joy_likelihood = $var;

        return $this;
    }

    /**
     * <pre>
     * Sorrow likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood sorrow_likelihood = 10;</code>
     */
    public function getSorrowLikelihood()
    {
        return $this->sorrow_likelihood;
    }

    /**
     * <pre>
     * Sorrow likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood sorrow_likelihood = 10;</code>
     */
    public function setSorrowLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->sorrow_likelihood = $var;

        return $this;
    }

    /**
     * <pre>
     * Anger likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood anger_likelihood = 11;</code>
     */
    public function getAngerLikelihood()
    {
        return $this->anger_likelihood;
    }

    /**
     * <pre>
     * Anger likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood anger_likelihood = 11;</code>
     */
    public function setAngerLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->anger_likelihood = $var;

        return $this;
    }

    /**
     * <pre>
     * Surprise likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood surprise_likelihood = 12;</code>
     */
    public function getSurpriseLikelihood()
    {
        return $this->surprise_likelihood;
    }

    /**
     * <pre>
     * Surprise likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood surprise_likelihood = 12;</code>
     */
    public function setSurpriseLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->surprise_likelihood = $var;

        return $this;
    }

    /**
     * <pre>
     * Under-exposed likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood under_exposed_likelihood = 13;</code>
     */
    public function getUnderExposedLikelihood()
    {
        return $this->under_exposed_likelihood;
    }

    /**
     * <pre>
     * Under-exposed likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood under_exposed_likelihood = 13;</code>
     */
    public function setUnderExposedLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->under_exposed_likelihood = $var;

        return $this;
    }

    /**
     * <pre>
     * Blurred likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood blurred_likelihood = 14;</code>
     */
    public function getBlurredLikelihood()
    {
        return $this->blurred_likelihood;
    }

    /**
     * <pre>
     * Blurred likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood blurred_likelihood = 14;</code>
     */
    public function setBlurredLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->blurred_likelihood = $var;

        return $this;
    }

    /**
     * <pre>
     * Headwear likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood headwear_likelihood = 15;</code>
     */
    public function getHeadwearLikelihood()
    {
        return $this->headwear_likelihood;
    }

    /**
     * <pre>
     * Headwear likelihood.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Likelihood headwear_likelihood = 15;</code>
     */
    public function setHeadwearLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->headwear_likelihood = $var;

        return $this;
    }

}

