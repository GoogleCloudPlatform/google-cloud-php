<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instructs the speech recognizer how to process the audio content.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.InputAudioConfig</code>
 */
class InputAudioConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Audio encoding of the audio content to process.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AudioEncoding audio_encoding = 1;</code>
     */
    private $audio_encoding = 0;
    /**
     * Required. Sample rate (in Hertz) of the audio content sent in the query.
     * Refer to
     * [Cloud Speech API
     * documentation](https://cloud.google.com/speech-to-text/docs/basics) for
     * more details.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * Required. The language of the supplied audio. Dialogflow does not do
     * translations. See [Language
     * Support](https://cloud.google.com/dialogflow-enterprise/docs/reference/language)
     * for a list of the currently supported language codes. Note that queries in
     * the same session do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     */
    private $language_code = '';
    /**
     * Optional. The collection of phrase hints which are used to boost accuracy
     * of speech recognition.
     * Refer to
     * [Cloud Speech API
     * documentation](https://cloud.google.com/speech-to-text/docs/basics#phrase-hints)
     * for more details.
     *
     * Generated from protobuf field <code>repeated string phrase_hints = 4;</code>
     */
    private $phrase_hints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $audio_encoding
     *           Required. Audio encoding of the audio content to process.
     *     @type int $sample_rate_hertz
     *           Required. Sample rate (in Hertz) of the audio content sent in the query.
     *           Refer to
     *           [Cloud Speech API
     *           documentation](https://cloud.google.com/speech-to-text/docs/basics) for
     *           more details.
     *     @type string $language_code
     *           Required. The language of the supplied audio. Dialogflow does not do
     *           translations. See [Language
     *           Support](https://cloud.google.com/dialogflow-enterprise/docs/reference/language)
     *           for a list of the currently supported language codes. Note that queries in
     *           the same session do not necessarily need to specify the same language.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $phrase_hints
     *           Optional. The collection of phrase hints which are used to boost accuracy
     *           of speech recognition.
     *           Refer to
     *           [Cloud Speech API
     *           documentation](https://cloud.google.com/speech-to-text/docs/basics#phrase-hints)
     *           for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Audio encoding of the audio content to process.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AudioEncoding audio_encoding = 1;</code>
     * @return int
     */
    public function getAudioEncoding()
    {
        return $this->audio_encoding;
    }

    /**
     * Required. Audio encoding of the audio content to process.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AudioEncoding audio_encoding = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAudioEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\AudioEncoding::class);
        $this->audio_encoding = $var;

        return $this;
    }

    /**
     * Required. Sample rate (in Hertz) of the audio content sent in the query.
     * Refer to
     * [Cloud Speech API
     * documentation](https://cloud.google.com/speech-to-text/docs/basics) for
     * more details.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * Required. Sample rate (in Hertz) of the audio content sent in the query.
     * Refer to
     * [Cloud Speech API
     * documentation](https://cloud.google.com/speech-to-text/docs/basics) for
     * more details.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * Required. The language of the supplied audio. Dialogflow does not do
     * translations. See [Language
     * Support](https://cloud.google.com/dialogflow-enterprise/docs/reference/language)
     * for a list of the currently supported language codes. Note that queries in
     * the same session do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Required. The language of the supplied audio. Dialogflow does not do
     * translations. See [Language
     * Support](https://cloud.google.com/dialogflow-enterprise/docs/reference/language)
     * for a list of the currently supported language codes. Note that queries in
     * the same session do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. The collection of phrase hints which are used to boost accuracy
     * of speech recognition.
     * Refer to
     * [Cloud Speech API
     * documentation](https://cloud.google.com/speech-to-text/docs/basics#phrase-hints)
     * for more details.
     *
     * Generated from protobuf field <code>repeated string phrase_hints = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhraseHints()
    {
        return $this->phrase_hints;
    }

    /**
     * Optional. The collection of phrase hints which are used to boost accuracy
     * of speech recognition.
     * Refer to
     * [Cloud Speech API
     * documentation](https://cloud.google.com/speech-to-text/docs/basics#phrase-hints)
     * for more details.
     *
     * Generated from protobuf field <code>repeated string phrase_hints = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhraseHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->phrase_hints = $arr;

        return $this;
    }

}

