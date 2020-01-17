<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A speech recognition result corresponding to a portion of the audio.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.SpeechTranscription</code>
 */
class SpeechTranscription extends \Google\Protobuf\Internal\Message
{
    /**
     * May contain one or more recognition hypotheses (up to the maximum specified
     * in `max_alternatives`).  These alternatives are ordered in terms of
     * accuracy, with the top (first) alternative being the most probable, as
     * ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    private $alternatives;
    /**
     * Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of
     * the language in this result. This language code was detected to have the
     * most likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $alternatives
     *           May contain one or more recognition hypotheses (up to the maximum specified
     *           in `max_alternatives`).  These alternatives are ordered in terms of
     *           accuracy, with the top (first) alternative being the most probable, as
     *           ranked by the recognizer.
     *     @type string $language_code
     *           Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of
     *           the language in this result. This language code was detected to have the
     *           most likelihood of being spoken in the audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * May contain one or more recognition hypotheses (up to the maximum specified
     * in `max_alternatives`).  These alternatives are ordered in terms of
     * accuracy, with the top (first) alternative being the most probable, as
     * ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }

    /**
     * May contain one or more recognition hypotheses (up to the maximum specified
     * in `max_alternatives`).  These alternatives are ordered in terms of
     * accuracy, with the top (first) alternative being the most probable, as
     * ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlternatives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\SpeechRecognitionAlternative::class);
        $this->alternatives = $arr;

        return $this;
    }

    /**
     * Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of
     * the language in this result. This language code was detected to have the
     * most likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Output only. The [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of
     * the language in this result. This language code was detected to have the
     * most likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

