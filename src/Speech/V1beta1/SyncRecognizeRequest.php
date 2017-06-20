<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client for the `SyncRecognize` method.
 *
 * Protobuf type <code>Google\Cloud\Speech\V1beta1\SyncRecognizeRequest</code>
 */
class SyncRecognizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * *Required* Provides information to the recognizer that specifies how to
     * process the request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1beta1.RecognitionConfig config = 1;</code>
     */
    private $config = null;
    /**
     * *Required* The audio data to be recognized.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1beta1.RecognitionAudio audio = 2;</code>
     */
    private $audio = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * *Required* Provides information to the recognizer that specifies how to
     * process the request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1beta1.RecognitionConfig config = 1;</code>
     * @return \Google\Cloud\Speech\V1beta1\RecognitionConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * *Required* Provides information to the recognizer that specifies how to
     * process the request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1beta1.RecognitionConfig config = 1;</code>
     * @param \Google\Cloud\Speech\V1beta1\RecognitionConfig $var
     */
    public function setConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1beta1\RecognitionConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * *Required* The audio data to be recognized.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1beta1.RecognitionAudio audio = 2;</code>
     * @return \Google\Cloud\Speech\V1beta1\RecognitionAudio
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * *Required* The audio data to be recognized.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1beta1.RecognitionAudio audio = 2;</code>
     * @param \Google\Cloud\Speech\V1beta1\RecognitionAudio $var
     */
    public function setAudio(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1beta1\RecognitionAudio::class);
        $this->audio = $var;

        return $this;
    }

}

