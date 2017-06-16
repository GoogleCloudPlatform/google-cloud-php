<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents part of speech information for a token.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Language\V1beta2\PartOfSpeech</code>
 */
class PartOfSpeech extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The part of speech tag.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Tag tag = 1;</code>
     */
    private $tag = 0;
    /**
     * <pre>
     * The grammatical aspect.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Aspect aspect = 2;</code>
     */
    private $aspect = 0;
    /**
     * <pre>
     * The grammatical case.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Case case = 3;</code>
     */
    private $case = 0;
    /**
     * <pre>
     * The grammatical form.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Form form = 4;</code>
     */
    private $form = 0;
    /**
     * <pre>
     * The grammatical gender.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Gender gender = 5;</code>
     */
    private $gender = 0;
    /**
     * <pre>
     * The grammatical mood.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Mood mood = 6;</code>
     */
    private $mood = 0;
    /**
     * <pre>
     * The grammatical number.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Number number = 7;</code>
     */
    private $number = 0;
    /**
     * <pre>
     * The grammatical person.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Person person = 8;</code>
     */
    private $person = 0;
    /**
     * <pre>
     * The grammatical properness.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Proper proper = 9;</code>
     */
    private $proper = 0;
    /**
     * <pre>
     * The grammatical reciprocity.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Reciprocity reciprocity = 10;</code>
     */
    private $reciprocity = 0;
    /**
     * <pre>
     * The grammatical tense.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Tense tense = 11;</code>
     */
    private $tense = 0;
    /**
     * <pre>
     * The grammatical voice.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Voice voice = 12;</code>
     */
    private $voice = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The part of speech tag.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Tag tag = 1;</code>
     * @return int
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * <pre>
     * The part of speech tag.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Tag tag = 1;</code>
     * @param int $var
     */
    public function setTag($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Tag::class);
        $this->tag = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical aspect.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Aspect aspect = 2;</code>
     * @return int
     */
    public function getAspect()
    {
        return $this->aspect;
    }

    /**
     * <pre>
     * The grammatical aspect.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Aspect aspect = 2;</code>
     * @param int $var
     */
    public function setAspect($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Aspect::class);
        $this->aspect = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical case.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Case case = 3;</code>
     * @return int
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * <pre>
     * The grammatical case.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Case case = 3;</code>
     * @param int $var
     */
    public function setCase($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Case::class);
        $this->case = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical form.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Form form = 4;</code>
     * @return int
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * <pre>
     * The grammatical form.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Form form = 4;</code>
     * @param int $var
     */
    public function setForm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Form::class);
        $this->form = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical gender.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Gender gender = 5;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * <pre>
     * The grammatical gender.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Gender gender = 5;</code>
     * @param int $var
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical mood.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Mood mood = 6;</code>
     * @return int
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * <pre>
     * The grammatical mood.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Mood mood = 6;</code>
     * @param int $var
     */
    public function setMood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Mood::class);
        $this->mood = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical number.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Number number = 7;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * <pre>
     * The grammatical number.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Number number = 7;</code>
     * @param int $var
     */
    public function setNumber($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Number::class);
        $this->number = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical person.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Person person = 8;</code>
     * @return int
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * <pre>
     * The grammatical person.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Person person = 8;</code>
     * @param int $var
     */
    public function setPerson($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Person::class);
        $this->person = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical properness.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Proper proper = 9;</code>
     * @return int
     */
    public function getProper()
    {
        return $this->proper;
    }

    /**
     * <pre>
     * The grammatical properness.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Proper proper = 9;</code>
     * @param int $var
     */
    public function setProper($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Proper::class);
        $this->proper = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical reciprocity.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Reciprocity reciprocity = 10;</code>
     * @return int
     */
    public function getReciprocity()
    {
        return $this->reciprocity;
    }

    /**
     * <pre>
     * The grammatical reciprocity.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Reciprocity reciprocity = 10;</code>
     * @param int $var
     */
    public function setReciprocity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Reciprocity::class);
        $this->reciprocity = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical tense.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Tense tense = 11;</code>
     * @return int
     */
    public function getTense()
    {
        return $this->tense;
    }

    /**
     * <pre>
     * The grammatical tense.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Tense tense = 11;</code>
     * @param int $var
     */
    public function setTense($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Tense::class);
        $this->tense = $var;

        return $this;
    }

    /**
     * <pre>
     * The grammatical voice.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Voice voice = 12;</code>
     * @return int
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * <pre>
     * The grammatical voice.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta2.PartOfSpeech.Voice voice = 12;</code>
     * @param int $var
     */
    public function setVoice($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\PartOfSpeech_Voice::class);
        $this->voice = $var;

        return $this;
    }

}

