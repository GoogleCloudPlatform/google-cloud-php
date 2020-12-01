<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters of the raw disk image.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RawDisk</code>
 */
class RawDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * The format used to encode and transmit the block device, which should be TAR. This is just a container and transmission format and not a runtime format. Provided by the client when the disk image is created.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RawDisk.ContainerType container_type = 50373688;</code>
     */
    private $container_type = 0;
    /**
     * [Deprecated] This field is deprecated. An optional SHA1 checksum of the disk image before unpackaging provided by the client when the disk image is created.
     *
     * Generated from protobuf field <code>string sha1_checksum = 46008893;</code>
     */
    private $sha1_checksum = '';
    /**
     * The full Google Cloud Storage URL where the disk image is stored. You must provide either this property or the sourceDisk property but not both.
     *
     * Generated from protobuf field <code>string source = 177235995;</code>
     */
    private $source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $container_type
     *           The format used to encode and transmit the block device, which should be TAR. This is just a container and transmission format and not a runtime format. Provided by the client when the disk image is created.
     *     @type string $sha1_checksum
     *           [Deprecated] This field is deprecated. An optional SHA1 checksum of the disk image before unpackaging provided by the client when the disk image is created.
     *     @type string $source
     *           The full Google Cloud Storage URL where the disk image is stored. You must provide either this property or the sourceDisk property but not both.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The format used to encode and transmit the block device, which should be TAR. This is just a container and transmission format and not a runtime format. Provided by the client when the disk image is created.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RawDisk.ContainerType container_type = 50373688;</code>
     * @return int
     */
    public function getContainerType()
    {
        return $this->container_type;
    }

    /**
     * The format used to encode and transmit the block device, which should be TAR. This is just a container and transmission format and not a runtime format. Provided by the client when the disk image is created.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RawDisk.ContainerType container_type = 50373688;</code>
     * @param int $var
     * @return $this
     */
    public function setContainerType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\RawDisk\ContainerType::class);
        $this->container_type = $var;

        return $this;
    }

    /**
     * [Deprecated] This field is deprecated. An optional SHA1 checksum of the disk image before unpackaging provided by the client when the disk image is created.
     *
     * Generated from protobuf field <code>string sha1_checksum = 46008893;</code>
     * @return string
     */
    public function getSha1Checksum()
    {
        return $this->sha1_checksum;
    }

    /**
     * [Deprecated] This field is deprecated. An optional SHA1 checksum of the disk image before unpackaging provided by the client when the disk image is created.
     *
     * Generated from protobuf field <code>string sha1_checksum = 46008893;</code>
     * @param string $var
     * @return $this
     */
    public function setSha1Checksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha1_checksum = $var;

        return $this;
    }

    /**
     * The full Google Cloud Storage URL where the disk image is stored. You must provide either this property or the sourceDisk property but not both.
     *
     * Generated from protobuf field <code>string source = 177235995;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The full Google Cloud Storage URL where the disk image is stored. You must provide either this property or the sourceDisk property but not both.
     *
     * Generated from protobuf field <code>string source = 177235995;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}

