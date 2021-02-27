<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options defining a data set within Google Cloud Datastore.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DatastoreOptions</code>
 */
class DatastoreOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * A partition ID identifies a grouping of entities. The grouping is always
     * by project and namespace, however the namespace ID may be empty.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PartitionId partition_id = 1;</code>
     */
    private $partition_id = null;
    /**
     * The kind to process.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.KindExpression kind = 2;</code>
     */
    private $kind = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\PartitionId $partition_id
     *           A partition ID identifies a grouping of entities. The grouping is always
     *           by project and namespace, however the namespace ID may be empty.
     *     @type \Google\Cloud\Dlp\V2\KindExpression $kind
     *           The kind to process.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * A partition ID identifies a grouping of entities. The grouping is always
     * by project and namespace, however the namespace ID may be empty.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PartitionId partition_id = 1;</code>
     * @return \Google\Cloud\Dlp\V2\PartitionId|null
     */
    public function getPartitionId()
    {
        return isset($this->partition_id) ? $this->partition_id : null;
    }

    public function hasPartitionId()
    {
        return isset($this->partition_id);
    }

    public function clearPartitionId()
    {
        unset($this->partition_id);
    }

    /**
     * A partition ID identifies a grouping of entities. The grouping is always
     * by project and namespace, however the namespace ID may be empty.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PartitionId partition_id = 1;</code>
     * @param \Google\Cloud\Dlp\V2\PartitionId $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\PartitionId::class);
        $this->partition_id = $var;

        return $this;
    }

    /**
     * The kind to process.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.KindExpression kind = 2;</code>
     * @return \Google\Cloud\Dlp\V2\KindExpression|null
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : null;
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * The kind to process.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.KindExpression kind = 2;</code>
     * @param \Google\Cloud\Dlp\V2\KindExpression $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\KindExpression::class);
        $this->kind = $var;

        return $this;
    }

}

