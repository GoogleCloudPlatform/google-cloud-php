<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Characters to skip when doing deidentification of a value. These will be left
 * alone and skipped.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CharsToIgnore</code>
 */
final class CharsToIgnore extends \Google\Protobuf\Internal\Message
{
    protected $characters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $characters_to_skip
     *     @type int $common_characters_to_ignore
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string characters_to_skip = 1;</code>
     * @return string
     */
    public function getCharactersToSkip()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>string characters_to_skip = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCharactersToSkip($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CharsToIgnore.CommonCharsToIgnore common_characters_to_ignore = 2;</code>
     * @return int
     */
    public function getCommonCharactersToIgnore()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CharsToIgnore.CommonCharsToIgnore common_characters_to_ignore = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCommonCharactersToIgnore($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\CharsToIgnore_CommonCharsToIgnore::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCharacters()
    {
        return $this->whichOneof("characters");
    }

}

