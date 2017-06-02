<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Contains audio data in the encoding specified in the `RecognitionConfig`.
 * Either `content` or `uri` must be supplied. Supplying both or neither
 * returns [google.rpc.Code.INVALID_ARGUMENT][]. See
 * [audio limits](https://cloud.google.com/speech/limits#content).
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1.RecognitionAudio</code>
 */
class RecognitionAudio extends \Google\Protobuf\Internal\Message
{
    protected $audio_source;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The audio data bytes encoded as specified in
     * `RecognitionConfig`. Note: as with all bytes fields, protobuffers use a
     * pure binary representation, whereas JSON representations use base64.
     * </pre>
     *
     * <code>bytes content = 1;</code>
     */
    public function getContent()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * The audio data bytes encoded as specified in
     * `RecognitionConfig`. Note: as with all bytes fields, protobuffers use a
     * pure binary representation, whereas JSON representations use base64.
     * </pre>
     *
     * <code>bytes content = 1;</code>
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * <pre>
     * URI that points to a file that contains audio data bytes as specified in
     * `RecognitionConfig`. Currently, only Google Cloud Storage URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket_name/object_name` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][]). For more information, see
     * [Request URIs](https://cloud.google.com/storage/docs/reference-uris).
     * </pre>
     *
     * <code>string uri = 2;</code>
     */
    public function getUri()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * URI that points to a file that contains audio data bytes as specified in
     * `RecognitionConfig`. Currently, only Google Cloud Storage URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket_name/object_name` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][]). For more information, see
     * [Request URIs](https://cloud.google.com/storage/docs/reference-uris).
     * </pre>
     *
     * <code>string uri = 2;</code>
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    public function getAudioSource()
    {
        return $this->whichOneof("audio_source");
    }

}

