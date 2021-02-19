<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to detect user's intent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.DetectIntentRequest</code>
 */
class DetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session this query is sent to. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment (`Environment ID` might be referred to as
     * environment name at some places). If `User ID` is not specified, we are
     * using "-". It's up to the API caller to choose an appropriate `Session ID`
     * and `User Id`. They can be a random number or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     * For more information, see the [API interactions
     * guide](https://cloud.google.com/dialogflow/docs/api-overview).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/es/docs/agents-versions).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $session = '';
    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 2;</code>
     */
    private $query_params = null;
    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config
     *     which instructs the speech recognizer how to process the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $query_input = null;
    /**
     * Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 4;</code>
     */
    private $output_audio_config = null;
    /**
     * Mask for [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] indicating which settings in this
     * request-level config should override speech synthesizer settings defined at
     * agent-level.
     * If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] replaces the agent-level
     * config in its entirety.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask output_audio_config_mask = 7;</code>
     */
    private $output_audio_config_mask = null;
    /**
     * The natural language speech audio to be processed. This field
     * should be populated iff `query_input` is set to an input audio config.
     * A single request can contain up to 1 minute of speech audio data.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     */
    private $input_audio = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The name of the session this query is sent to. Format:
     *           `projects/<Project ID>/agent/sessions/<Session ID>`, or
     *           `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     *           ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     *           default 'draft' environment (`Environment ID` might be referred to as
     *           environment name at some places). If `User ID` is not specified, we are
     *           using "-". It's up to the API caller to choose an appropriate `Session ID`
     *           and `User Id`. They can be a random number or some type of user and session
     *           identifiers (preferably hashed). The length of the `Session ID` and
     *           `User ID` must not exceed 36 characters.
     *           For more information, see the [API interactions
     *           guide](https://cloud.google.com/dialogflow/docs/api-overview).
     *           Note: Always use agent versions for production traffic.
     *           See [Versions and
     *           environments](https://cloud.google.com/dialogflow/es/docs/agents-versions).
     *     @type \Google\Cloud\Dialogflow\V2\QueryParameters $query_params
     *           The parameters of this query.
     *     @type \Google\Cloud\Dialogflow\V2\QueryInput $query_input
     *           Required. The input specification. It can be set to:
     *           1.  an audio config
     *               which instructs the speech recognizer how to process the speech audio,
     *           2.  a conversational query in the form of text, or
     *           3.  an event that specifies which intent to trigger.
     *     @type \Google\Cloud\Dialogflow\V2\OutputAudioConfig $output_audio_config
     *           Instructs the speech synthesizer how to generate the output
     *           audio. If this field is not set and agent-level speech synthesizer is not
     *           configured, no output audio is generated.
     *     @type \Google\Protobuf\FieldMask $output_audio_config_mask
     *           Mask for [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] indicating which settings in this
     *           request-level config should override speech synthesizer settings defined at
     *           agent-level.
     *           If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] replaces the agent-level
     *           config in its entirety.
     *     @type string $input_audio
     *           The natural language speech audio to be processed. This field
     *           should be populated iff `query_input` is set to an input audio config.
     *           A single request can contain up to 1 minute of speech audio data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session this query is sent to. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment (`Environment ID` might be referred to as
     * environment name at some places). If `User ID` is not specified, we are
     * using "-". It's up to the API caller to choose an appropriate `Session ID`
     * and `User Id`. They can be a random number or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     * For more information, see the [API interactions
     * guide](https://cloud.google.com/dialogflow/docs/api-overview).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/es/docs/agents-versions).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session this query is sent to. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment (`Environment ID` might be referred to as
     * environment name at some places). If `User ID` is not specified, we are
     * using "-". It's up to the API caller to choose an appropriate `Session ID`
     * and `User Id`. They can be a random number or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     * For more information, see the [API interactions
     * guide](https://cloud.google.com/dialogflow/docs/api-overview).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/es/docs/agents-versions).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryParameters
     */
    public function getQueryParams()
    {
        return isset($this->query_params) ? $this->query_params : null;
    }

    public function hasQueryParams()
    {
        return isset($this->query_params);
    }

    public function clearQueryParams()
    {
        unset($this->query_params);
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config
     *     which instructs the speech recognizer how to process the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryInput
     */
    public function getQueryInput()
    {
        return isset($this->query_input) ? $this->query_input : null;
    }

    public function hasQueryInput()
    {
        return isset($this->query_input);
    }

    public function clearQueryInput()
    {
        unset($this->query_input);
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config
     *     which instructs the speech recognizer how to process the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\OutputAudioConfig
     */
    public function getOutputAudioConfig()
    {
        return isset($this->output_audio_config) ? $this->output_audio_config : null;
    }

    public function hasOutputAudioConfig()
    {
        return isset($this->output_audio_config);
    }

    public function clearOutputAudioConfig()
    {
        unset($this->output_audio_config);
    }

    /**
     * Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\OutputAudioConfig $var
     * @return $this
     */
    public function setOutputAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OutputAudioConfig::class);
        $this->output_audio_config = $var;

        return $this;
    }

    /**
     * Mask for [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] indicating which settings in this
     * request-level config should override speech synthesizer settings defined at
     * agent-level.
     * If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] replaces the agent-level
     * config in its entirety.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask output_audio_config_mask = 7;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getOutputAudioConfigMask()
    {
        return isset($this->output_audio_config_mask) ? $this->output_audio_config_mask : null;
    }

    public function hasOutputAudioConfigMask()
    {
        return isset($this->output_audio_config_mask);
    }

    public function clearOutputAudioConfigMask()
    {
        unset($this->output_audio_config_mask);
    }

    /**
     * Mask for [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] indicating which settings in this
     * request-level config should override speech synthesizer settings defined at
     * agent-level.
     * If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.DetectIntentRequest.output_audio_config] replaces the agent-level
     * config in its entirety.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask output_audio_config_mask = 7;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setOutputAudioConfigMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->output_audio_config_mask = $var;

        return $this;
    }

    /**
     * The natural language speech audio to be processed. This field
     * should be populated iff `query_input` is set to an input audio config.
     * A single request can contain up to 1 minute of speech audio data.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     * @return string
     */
    public function getInputAudio()
    {
        return $this->input_audio;
    }

    /**
     * The natural language speech audio to be processed. This field
     * should be populated iff `query_input` is set to an input audio config.
     * A single request can contain up to 1 minute of speech audio data.
     *
     * Generated from protobuf field <code>bytes input_audio = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInputAudio($var)
    {
        GPBUtil::checkString($var, False);
        $this->input_audio = $var;

        return $this;
    }

}

