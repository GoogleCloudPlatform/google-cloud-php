<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Provides "hints" to the speech recognizer to favor specific words and phrases
 * in the results.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Speech\V1beta1\SpeechContext</code>
 */
class SpeechContext extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Optional* A list of strings containing words and phrases "hints" so that
     * the speech recognition is more likely to recognize them. This can be used
     * to improve the accuracy for specific words and phrases, for example, if
     * specific commands are typically spoken by the user. This can also be used
     * to add additional words to the vocabulary of the recognizer. See
     * [usage limits](https://cloud.google.com/speech/limits#content).
     * </pre>
     *
     * <code>repeated string phrases = 1;</code>
     */
    private $phrases;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Optional* A list of strings containing words and phrases "hints" so that
     * the speech recognition is more likely to recognize them. This can be used
     * to improve the accuracy for specific words and phrases, for example, if
     * specific commands are typically spoken by the user. This can also be used
     * to add additional words to the vocabulary of the recognizer. See
     * [usage limits](https://cloud.google.com/speech/limits#content).
     * </pre>
     *
     * <code>repeated string phrases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhrases()
    {
        return $this->phrases;
    }

    /**
     * <pre>
     * *Optional* A list of strings containing words and phrases "hints" so that
     * the speech recognition is more likely to recognize them. This can be used
     * to improve the accuracy for specific words and phrases, for example, if
     * specific commands are typically spoken by the user. This can also be used
     * to add additional words to the vocabulary of the recognizer. See
     * [usage limits](https://cloud.google.com/speech/limits#content).
     * </pre>
     *
     * <code>repeated string phrases = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setPhrases(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->phrases = $arr;

        return $this;
    }

}

