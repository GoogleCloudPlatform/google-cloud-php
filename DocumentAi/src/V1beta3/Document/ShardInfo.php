<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/document.proto

namespace Google\Cloud\DocumentAI\V1beta3\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For a large document, sharding may be performed to produce several
 * document shards. Each document shard contains this field to detail which
 * shard it is.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta3.Document.ShardInfo</code>
 */
class ShardInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The 0-based index of this shard.
     *
     * Generated from protobuf field <code>int64 shard_index = 1;</code>
     */
    private $shard_index = 0;
    /**
     * Total number of shards.
     *
     * Generated from protobuf field <code>int64 shard_count = 2;</code>
     */
    private $shard_count = 0;
    /**
     * The index of the first character in [Document.text][google.cloud.documentai.v1beta3.Document.text] in the overall
     * document global text.
     *
     * Generated from protobuf field <code>int64 text_offset = 3;</code>
     */
    private $text_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $shard_index
     *           The 0-based index of this shard.
     *     @type int|string $shard_count
     *           Total number of shards.
     *     @type int|string $text_offset
     *           The index of the first character in [Document.text][google.cloud.documentai.v1beta3.Document.text] in the overall
     *           document global text.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta3\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The 0-based index of this shard.
     *
     * Generated from protobuf field <code>int64 shard_index = 1;</code>
     * @return int|string
     */
    public function getShardIndex()
    {
        return $this->shard_index;
    }

    /**
     * The 0-based index of this shard.
     *
     * Generated from protobuf field <code>int64 shard_index = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setShardIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->shard_index = $var;

        return $this;
    }

    /**
     * Total number of shards.
     *
     * Generated from protobuf field <code>int64 shard_count = 2;</code>
     * @return int|string
     */
    public function getShardCount()
    {
        return $this->shard_count;
    }

    /**
     * Total number of shards.
     *
     * Generated from protobuf field <code>int64 shard_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setShardCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->shard_count = $var;

        return $this;
    }

    /**
     * The index of the first character in [Document.text][google.cloud.documentai.v1beta3.Document.text] in the overall
     * document global text.
     *
     * Generated from protobuf field <code>int64 text_offset = 3;</code>
     * @return int|string
     */
    public function getTextOffset()
    {
        return $this->text_offset;
    }

    /**
     * The index of the first character in [Document.text][google.cloud.documentai.v1beta3.Document.text] in the overall
     * document global text.
     *
     * Generated from protobuf field <code>int64 text_offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTextOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->text_offset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShardInfo::class, \Google\Cloud\DocumentAI\V1beta3\Document_ShardInfo::class);

