<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Video context and/or feature-specific parameters.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Videointelligence\V1beta1\VideoContext</code>
 */
class VideoContext extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video
     * is treated as a single segment.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment segments = 1;</code>
     */
    private $segments;
    /**
     * <pre>
     * If label detection has been requested, what labels should be detected
     * in addition to video-level labels or segment-level labels. If unspecified,
     * defaults to `SHOT_MODE`.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.LabelDetectionMode label_detection_mode = 2;</code>
     */
    private $label_detection_mode = 0;
    /**
     * <pre>
     * Whether the video has been shot from a stationary (i.e. non-moving) camera.
     * When set to true, might improve detection accuracy for moving objects.
     * </pre>
     *
     * <code>bool stationary_camera = 3;</code>
     */
    private $stationary_camera = false;
    /**
     * <pre>
     * Model to use for label detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string label_detection_model = 4;</code>
     */
    private $label_detection_model = '';
    /**
     * <pre>
     * Model to use for face detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string face_detection_model = 5;</code>
     */
    private $face_detection_model = '';
    /**
     * <pre>
     * Model to use for shot change detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string shot_change_detection_model = 6;</code>
     */
    private $shot_change_detection_model = '';
    /**
     * <pre>
     * Model to use for safe search detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string safe_search_detection_model = 7;</code>
     */
    private $safe_search_detection_model = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video
     * is treated as a single segment.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment segments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * <pre>
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video
     * is treated as a single segment.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment segments = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setSegments(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta1\VideoSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * <pre>
     * If label detection has been requested, what labels should be detected
     * in addition to video-level labels or segment-level labels. If unspecified,
     * defaults to `SHOT_MODE`.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.LabelDetectionMode label_detection_mode = 2;</code>
     * @return int
     */
    public function getLabelDetectionMode()
    {
        return $this->label_detection_mode;
    }

    /**
     * <pre>
     * If label detection has been requested, what labels should be detected
     * in addition to video-level labels or segment-level labels. If unspecified,
     * defaults to `SHOT_MODE`.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.LabelDetectionMode label_detection_mode = 2;</code>
     * @param int $var
     */
    public function setLabelDetectionMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\LabelDetectionMode::class);
        $this->label_detection_mode = $var;

        return $this;
    }

    /**
     * <pre>
     * Whether the video has been shot from a stationary (i.e. non-moving) camera.
     * When set to true, might improve detection accuracy for moving objects.
     * </pre>
     *
     * <code>bool stationary_camera = 3;</code>
     * @return bool
     */
    public function getStationaryCamera()
    {
        return $this->stationary_camera;
    }

    /**
     * <pre>
     * Whether the video has been shot from a stationary (i.e. non-moving) camera.
     * When set to true, might improve detection accuracy for moving objects.
     * </pre>
     *
     * <code>bool stationary_camera = 3;</code>
     * @param bool $var
     */
    public function setStationaryCamera($var)
    {
        GPBUtil::checkBool($var);
        $this->stationary_camera = $var;

        return $this;
    }

    /**
     * <pre>
     * Model to use for label detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string label_detection_model = 4;</code>
     * @return string
     */
    public function getLabelDetectionModel()
    {
        return $this->label_detection_model;
    }

    /**
     * <pre>
     * Model to use for label detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string label_detection_model = 4;</code>
     * @param string $var
     */
    public function setLabelDetectionModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_detection_model = $var;

        return $this;
    }

    /**
     * <pre>
     * Model to use for face detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string face_detection_model = 5;</code>
     * @return string
     */
    public function getFaceDetectionModel()
    {
        return $this->face_detection_model;
    }

    /**
     * <pre>
     * Model to use for face detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string face_detection_model = 5;</code>
     * @param string $var
     */
    public function setFaceDetectionModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->face_detection_model = $var;

        return $this;
    }

    /**
     * <pre>
     * Model to use for shot change detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string shot_change_detection_model = 6;</code>
     * @return string
     */
    public function getShotChangeDetectionModel()
    {
        return $this->shot_change_detection_model;
    }

    /**
     * <pre>
     * Model to use for shot change detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string shot_change_detection_model = 6;</code>
     * @param string $var
     */
    public function setShotChangeDetectionModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->shot_change_detection_model = $var;

        return $this;
    }

    /**
     * <pre>
     * Model to use for safe search detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string safe_search_detection_model = 7;</code>
     * @return string
     */
    public function getSafeSearchDetectionModel()
    {
        return $this->safe_search_detection_model;
    }

    /**
     * <pre>
     * Model to use for safe search detection.
     * Supported values: "latest" and "stable" (the default).
     * </pre>
     *
     * <code>string safe_search_detection_model = 7;</code>
     * @param string $var
     */
    public function setSafeSearchDetectionModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->safe_search_detection_model = $var;

        return $this;
    }

}

