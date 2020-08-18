<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotation results for a single video.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.VideoAnnotationResults</code>
 */
class VideoAnnotationResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Video file location in
     * [Google Cloud Storage](https://cloud.google.com/storage/).
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     */
    private $input_uri = '';
    /**
     * Video segment on which the annotation is run.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 10;</code>
     */
    private $segment = null;
    /**
     * Topical label annotations on video level or user specified segment level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation segment_label_annotations = 2;</code>
     */
    private $segment_label_annotations;
    /**
     * Presence label annotations on video level or user specified segment level.
     * There is exactly one element for each unique label. Compared to the
     * existing topical `segment_label_annotations`, this field presents more
     * fine-grained, segment-level labels detected in video content and is made
     * available only when the client sets `LabelDetectionConfig.model` to
     * "builtin/latest" in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation segment_presence_label_annotations = 23;</code>
     */
    private $segment_presence_label_annotations;
    /**
     * Topical label annotations on shot level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation shot_label_annotations = 3;</code>
     */
    private $shot_label_annotations;
    /**
     * Presence label annotations on shot level. There is exactly one element for
     * each unique label. Compared to the existing topical
     * `shot_label_annotations`, this field presents more fine-grained, shot-level
     * labels detected in video content and is made available only when the client
     * sets `LabelDetectionConfig.model` to "builtin/latest" in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation shot_presence_label_annotations = 24;</code>
     */
    private $shot_presence_label_annotations;
    /**
     * Label annotations on frame level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation frame_label_annotations = 4;</code>
     */
    private $frame_label_annotations;
    /**
     * Face annotations. There is exactly one element for each unique face.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceAnnotation face_annotations = 5;</code>
     */
    private $face_annotations;
    /**
     * Shot annotations. Each shot is represented as a video segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment shot_annotations = 6;</code>
     */
    private $shot_annotations;
    /**
     * Explicit content annotation.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentAnnotation explicit_annotation = 7;</code>
     */
    private $explicit_annotation = null;
    /**
     * Speech transcription.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechTranscription speech_transcriptions = 11;</code>
     */
    private $speech_transcriptions;
    /**
     * OCR text detection and tracking.
     * Annotations for list of detected text snippets. Each will have list of
     * frame information associated with it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TextAnnotation text_annotations = 12;</code>
     */
    private $text_annotations;
    /**
     * Annotations for list of objects detected and tracked in video.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.ObjectTrackingAnnotation object_annotations = 14;</code>
     */
    private $object_annotations;
    /**
     * Annotations for list of logos detected, tracked and recognized in video.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LogoRecognitionAnnotation logo_recognition_annotations = 19;</code>
     */
    private $logo_recognition_annotations;
    /**
     * If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     * some videos may succeed and some may fail.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     */
    private $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_uri
     *           Video file location in
     *           [Google Cloud Storage](https://cloud.google.com/storage/).
     *     @type \Google\Cloud\VideoIntelligence\V1\VideoSegment $segment
     *           Video segment on which the annotation is run.
     *     @type \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $segment_label_annotations
     *           Topical label annotations on video level or user specified segment level.
     *           There is exactly one element for each unique label.
     *     @type \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $segment_presence_label_annotations
     *           Presence label annotations on video level or user specified segment level.
     *           There is exactly one element for each unique label. Compared to the
     *           existing topical `segment_label_annotations`, this field presents more
     *           fine-grained, segment-level labels detected in video content and is made
     *           available only when the client sets `LabelDetectionConfig.model` to
     *           "builtin/latest" in the request.
     *     @type \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $shot_label_annotations
     *           Topical label annotations on shot level.
     *           There is exactly one element for each unique label.
     *     @type \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $shot_presence_label_annotations
     *           Presence label annotations on shot level. There is exactly one element for
     *           each unique label. Compared to the existing topical
     *           `shot_label_annotations`, this field presents more fine-grained, shot-level
     *           labels detected in video content and is made available only when the client
     *           sets `LabelDetectionConfig.model` to "builtin/latest" in the request.
     *     @type \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $frame_label_annotations
     *           Label annotations on frame level.
     *           There is exactly one element for each unique label.
     *     @type \Google\Cloud\VideoIntelligence\V1\FaceAnnotation[]|\Google\Protobuf\Internal\RepeatedField $face_annotations
     *           Face annotations. There is exactly one element for each unique face.
     *     @type \Google\Cloud\VideoIntelligence\V1\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $shot_annotations
     *           Shot annotations. Each shot is represented as a video segment.
     *     @type \Google\Cloud\VideoIntelligence\V1\ExplicitContentAnnotation $explicit_annotation
     *           Explicit content annotation.
     *     @type \Google\Cloud\VideoIntelligence\V1\SpeechTranscription[]|\Google\Protobuf\Internal\RepeatedField $speech_transcriptions
     *           Speech transcription.
     *     @type \Google\Cloud\VideoIntelligence\V1\TextAnnotation[]|\Google\Protobuf\Internal\RepeatedField $text_annotations
     *           OCR text detection and tracking.
     *           Annotations for list of detected text snippets. Each will have list of
     *           frame information associated with it.
     *     @type \Google\Cloud\VideoIntelligence\V1\ObjectTrackingAnnotation[]|\Google\Protobuf\Internal\RepeatedField $object_annotations
     *           Annotations for list of objects detected and tracked in video.
     *     @type \Google\Cloud\VideoIntelligence\V1\LogoRecognitionAnnotation[]|\Google\Protobuf\Internal\RepeatedField $logo_recognition_annotations
     *           Annotations for list of logos detected, tracked and recognized in video.
     *     @type \Google\Rpc\Status $error
     *           If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     *           some videos may succeed and some may fail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Video file location in
     * [Google Cloud Storage](https://cloud.google.com/storage/).
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     * @return string
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * Video file location in
     * [Google Cloud Storage](https://cloud.google.com/storage/).
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;

        return $this;
    }

    /**
     * Video segment on which the annotation is run.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 10;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\VideoSegment
     */
    public function getSegment()
    {
        return isset($this->segment) ? $this->segment : null;
    }

    public function hasSegment()
    {
        return isset($this->segment);
    }

    public function clearSegment()
    {
        unset($this->segment);
    }

    /**
     * Video segment on which the annotation is run.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 10;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segment = $var;

        return $this;
    }

    /**
     * Topical label annotations on video level or user specified segment level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation segment_label_annotations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegmentLabelAnnotations()
    {
        return $this->segment_label_annotations;
    }

    /**
     * Topical label annotations on video level or user specified segment level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation segment_label_annotations = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegmentLabelAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\LabelAnnotation::class);
        $this->segment_label_annotations = $arr;

        return $this;
    }

    /**
     * Presence label annotations on video level or user specified segment level.
     * There is exactly one element for each unique label. Compared to the
     * existing topical `segment_label_annotations`, this field presents more
     * fine-grained, segment-level labels detected in video content and is made
     * available only when the client sets `LabelDetectionConfig.model` to
     * "builtin/latest" in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation segment_presence_label_annotations = 23;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegmentPresenceLabelAnnotations()
    {
        return $this->segment_presence_label_annotations;
    }

    /**
     * Presence label annotations on video level or user specified segment level.
     * There is exactly one element for each unique label. Compared to the
     * existing topical `segment_label_annotations`, this field presents more
     * fine-grained, segment-level labels detected in video content and is made
     * available only when the client sets `LabelDetectionConfig.model` to
     * "builtin/latest" in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation segment_presence_label_annotations = 23;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegmentPresenceLabelAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\LabelAnnotation::class);
        $this->segment_presence_label_annotations = $arr;

        return $this;
    }

    /**
     * Topical label annotations on shot level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation shot_label_annotations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShotLabelAnnotations()
    {
        return $this->shot_label_annotations;
    }

    /**
     * Topical label annotations on shot level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation shot_label_annotations = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShotLabelAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\LabelAnnotation::class);
        $this->shot_label_annotations = $arr;

        return $this;
    }

    /**
     * Presence label annotations on shot level. There is exactly one element for
     * each unique label. Compared to the existing topical
     * `shot_label_annotations`, this field presents more fine-grained, shot-level
     * labels detected in video content and is made available only when the client
     * sets `LabelDetectionConfig.model` to "builtin/latest" in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation shot_presence_label_annotations = 24;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShotPresenceLabelAnnotations()
    {
        return $this->shot_presence_label_annotations;
    }

    /**
     * Presence label annotations on shot level. There is exactly one element for
     * each unique label. Compared to the existing topical
     * `shot_label_annotations`, this field presents more fine-grained, shot-level
     * labels detected in video content and is made available only when the client
     * sets `LabelDetectionConfig.model` to "builtin/latest" in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation shot_presence_label_annotations = 24;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShotPresenceLabelAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\LabelAnnotation::class);
        $this->shot_presence_label_annotations = $arr;

        return $this;
    }

    /**
     * Label annotations on frame level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation frame_label_annotations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrameLabelAnnotations()
    {
        return $this->frame_label_annotations;
    }

    /**
     * Label annotations on frame level.
     * There is exactly one element for each unique label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LabelAnnotation frame_label_annotations = 4;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrameLabelAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\LabelAnnotation::class);
        $this->frame_label_annotations = $arr;

        return $this;
    }

    /**
     * Face annotations. There is exactly one element for each unique face.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceAnnotation face_annotations = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFaceAnnotations()
    {
        return $this->face_annotations;
    }

    /**
     * Face annotations. There is exactly one element for each unique face.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceAnnotation face_annotations = 5;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\FaceAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFaceAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\FaceAnnotation::class);
        $this->face_annotations = $arr;

        return $this;
    }

    /**
     * Shot annotations. Each shot is represented as a video segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment shot_annotations = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShotAnnotations()
    {
        return $this->shot_annotations;
    }

    /**
     * Shot annotations. Each shot is represented as a video segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment shot_annotations = 6;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShotAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->shot_annotations = $arr;

        return $this;
    }

    /**
     * Explicit content annotation.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentAnnotation explicit_annotation = 7;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\ExplicitContentAnnotation
     */
    public function getExplicitAnnotation()
    {
        return isset($this->explicit_annotation) ? $this->explicit_annotation : null;
    }

    public function hasExplicitAnnotation()
    {
        return isset($this->explicit_annotation);
    }

    public function clearExplicitAnnotation()
    {
        unset($this->explicit_annotation);
    }

    /**
     * Explicit content annotation.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentAnnotation explicit_annotation = 7;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ExplicitContentAnnotation $var
     * @return $this
     */
    public function setExplicitAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\ExplicitContentAnnotation::class);
        $this->explicit_annotation = $var;

        return $this;
    }

    /**
     * Speech transcription.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechTranscription speech_transcriptions = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechTranscriptions()
    {
        return $this->speech_transcriptions;
    }

    /**
     * Speech transcription.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechTranscription speech_transcriptions = 11;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\SpeechTranscription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechTranscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\SpeechTranscription::class);
        $this->speech_transcriptions = $arr;

        return $this;
    }

    /**
     * OCR text detection and tracking.
     * Annotations for list of detected text snippets. Each will have list of
     * frame information associated with it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TextAnnotation text_annotations = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextAnnotations()
    {
        return $this->text_annotations;
    }

    /**
     * OCR text detection and tracking.
     * Annotations for list of detected text snippets. Each will have list of
     * frame information associated with it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TextAnnotation text_annotations = 12;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\TextAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\TextAnnotation::class);
        $this->text_annotations = $arr;

        return $this;
    }

    /**
     * Annotations for list of objects detected and tracked in video.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.ObjectTrackingAnnotation object_annotations = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObjectAnnotations()
    {
        return $this->object_annotations;
    }

    /**
     * Annotations for list of objects detected and tracked in video.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.ObjectTrackingAnnotation object_annotations = 14;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ObjectTrackingAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObjectAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\ObjectTrackingAnnotation::class);
        $this->object_annotations = $arr;

        return $this;
    }

    /**
     * Annotations for list of logos detected, tracked and recognized in video.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LogoRecognitionAnnotation logo_recognition_annotations = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogoRecognitionAnnotations()
    {
        return $this->logo_recognition_annotations;
    }

    /**
     * Annotations for list of logos detected, tracked and recognized in video.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.LogoRecognitionAnnotation logo_recognition_annotations = 19;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LogoRecognitionAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogoRecognitionAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\LogoRecognitionAnnotation::class);
        $this->logo_recognition_annotations = $arr;

        return $this;
    }

    /**
     * If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     * some videos may succeed and some may fail.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     * @return \Google\Rpc\Status
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     * some videos may succeed and some may fail.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

}

