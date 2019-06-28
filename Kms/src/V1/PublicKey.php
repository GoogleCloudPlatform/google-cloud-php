<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The public key for a given [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Obtained via
 * [GetPublicKey][google.cloud.kms.v1.KeyManagementService.GetPublicKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.PublicKey</code>
 */
final class PublicKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The public key, encoded in PEM format. For more information, see the
     * [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     * [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     * [Textual Encoding of Subject Public Key Info]
     * (https://tools.ietf.org/html/rfc7468#section-13).
     *
     * Generated from protobuf field <code>string pem = 1;</code>
     */
    private $pem = '';
    /**
     * The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     * with this key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2;</code>
     */
    private $algorithm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pem
     *           The public key, encoded in PEM format. For more information, see the
     *           [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     *           [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     *           [Textual Encoding of Subject Public Key Info]
     *           (https://tools.ietf.org/html/rfc7468#section-13).
     *     @type int $algorithm
     *           The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     *           with this key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The public key, encoded in PEM format. For more information, see the
     * [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     * [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     * [Textual Encoding of Subject Public Key Info]
     * (https://tools.ietf.org/html/rfc7468#section-13).
     *
     * Generated from protobuf field <code>string pem = 1;</code>
     * @return string
     */
    public function getPem()
    {
        return $this->pem;
    }

    /**
     * The public key, encoded in PEM format. For more information, see the
     * [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     * [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     * [Textual Encoding of Subject Public Key Info]
     * (https://tools.ietf.org/html/rfc7468#section-13).
     *
     * Generated from protobuf field <code>string pem = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPem($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem = $var;

        return $this;
    }

    /**
     * The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     * with this key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     * with this key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\CryptoKeyVersion_CryptoKeyVersionAlgorithm::class);
        $this->algorithm = $var;

        return $this;
    }

}

