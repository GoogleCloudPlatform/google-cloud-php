<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The only message returned to the client by `SyncRecognize`. It
 * contains the result as zero or more sequential `SpeechRecognitionResult`
 * messages.
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1beta1.SyncRecognizeResponse</code>
 */
class SyncRecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionResult results = 2;</code>
     */
    private $results;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionResult results = 2;</code>
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <pre>
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionResult results = 2;</code>
     */
    public function setResults(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1beta1\SpeechRecognitionResult::class);
        $this->results = $arr;

        return $this;
    }

}

