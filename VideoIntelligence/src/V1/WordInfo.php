<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Word-specific information for recognized words. Word information is only
 * included in the response when certain request parameters are set, such
 * as `enable_word_time_offsets`.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.WordInfo</code>
 */
class WordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Time offset relative to the beginning of the audio, and
     * corresponding to the start of the spoken word. This field is only set if
     * `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     * experimental feature and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * Time offset relative to the beginning of the audio, and
     * corresponding to the end of the spoken word. This field is only set if
     * `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     * experimental feature and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     */
    protected $word = '';
    /**
     * Output only. The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative.
     * This field is not guaranteed to be accurate and users should not rely on it
     * to be always provided.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $confidence = 0.0;
    /**
     * Output only. A distinct integer value is assigned for every speaker within
     * the audio. This field specifies which one of those speakers was detected to
     * have spoken this word. Value ranges from 1 up to diarization_speaker_count,
     * and is only set if speaker diarization is enabled.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $speaker_tag = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_time
     *           Time offset relative to the beginning of the audio, and
     *           corresponding to the start of the spoken word. This field is only set if
     *           `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     *           experimental feature and the accuracy of the time offset can vary.
     *     @type \Google\Protobuf\Duration $end_time
     *           Time offset relative to the beginning of the audio, and
     *           corresponding to the end of the spoken word. This field is only set if
     *           `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     *           experimental feature and the accuracy of the time offset can vary.
     *     @type string $word
     *           The word corresponding to this set of information.
     *     @type float $confidence
     *           Output only. The confidence estimate between 0.0 and 1.0. A higher number
     *           indicates an estimated greater likelihood that the recognized words are
     *           correct. This field is set only for the top alternative.
     *           This field is not guaranteed to be accurate and users should not rely on it
     *           to be always provided.
     *           The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *     @type int $speaker_tag
     *           Output only. A distinct integer value is assigned for every speaker within
     *           the audio. This field specifies which one of those speakers was detected to
     *           have spoken this word. Value ranges from 1 up to diarization_speaker_count,
     *           and is only set if speaker diarization is enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Time offset relative to the beginning of the audio, and
     * corresponding to the start of the spoken word. This field is only set if
     * `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     * experimental feature and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Time offset relative to the beginning of the audio, and
     * corresponding to the start of the spoken word. This field is only set if
     * `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     * experimental feature and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Time offset relative to the beginning of the audio, and
     * corresponding to the end of the spoken word. This field is only set if
     * `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     * experimental feature and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Time offset relative to the beginning of the audio, and
     * corresponding to the end of the spoken word. This field is only set if
     * `enable_word_time_offsets=true` and only in the top hypothesis. This is an
     * experimental feature and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWord($var)
    {
        GPBUtil::checkString($var, True);
        $this->word = $var;

        return $this;
    }

    /**
     * Output only. The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative.
     * This field is not guaranteed to be accurate and users should not rely on it
     * to be always provided.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Output only. The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative.
     * This field is not guaranteed to be accurate and users should not rely on it
     * to be always provided.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. A distinct integer value is assigned for every speaker within
     * the audio. This field specifies which one of those speakers was detected to
     * have spoken this word. Value ranges from 1 up to diarization_speaker_count,
     * and is only set if speaker diarization is enabled.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpeakerTag()
    {
        return $this->speaker_tag;
    }

    /**
     * Output only. A distinct integer value is assigned for every speaker within
     * the audio. This field specifies which one of those speakers was detected to
     * have spoken this word. Value ranges from 1 up to diarization_speaker_count,
     * and is only set if speaker diarization is enabled.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpeakerTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->speaker_tag = $var;

        return $this;
    }

}

