<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The only message returned to the client by `AsyncRecognize`. It contains the
 * result as zero or more sequential `SpeechRecognitionResult` messages. It is
 * included in the `result.response` field of the `Operation` returned by the
 * `GetOperation` call of the `google::longrunning::Operations` service.
 *
 * Protobuf type <code>Google\Cloud\Speech\V1beta1\AsyncRecognizeResponse</code>
 */
class AsyncRecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionResult results = 2;</code>
     */
    private $results;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionResult results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionResult results = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setResults(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1beta1\SpeechRecognitionResult::class);
        $this->results = $arr;

        return $this;
    }

}

