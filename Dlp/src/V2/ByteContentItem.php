<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for bytes to inspect or redact.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ByteContentItem</code>
 */
class ByteContentItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem.BytesType type = 1;</code>
     */
    private $type = 0;
    /**
     * Content data to inspect or redact.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    private $data = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem.BytesType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem.BytesType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\ByteContentItem_BytesType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Content data to inspect or redact.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Content data to inspect or redact.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

