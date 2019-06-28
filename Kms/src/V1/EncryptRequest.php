<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.EncryptRequest</code>
 */
final class EncryptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] or [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * to use for encryption.
     * If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server will use its
     * [primary version][google.cloud.kms.v1.CryptoKey.primary].
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The data to encrypt. Must be no larger than 64KiB.
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the plaintext must be no larger
     * than 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     * plaintext and additional_authenticated_data fields must be no larger than
     * 8KiB.
     *
     * Generated from protobuf field <code>bytes plaintext = 2;</code>
     */
    private $plaintext = '';
    /**
     * Optional data that, if specified, must also be provided during decryption
     * through [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the AAD must be no larger than
     * 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     * plaintext and additional_authenticated_data fields must be no larger than
     * 8KiB.
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3;</code>
     */
    private $additional_authenticated_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] or [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     *           to use for encryption.
     *           If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server will use its
     *           [primary version][google.cloud.kms.v1.CryptoKey.primary].
     *     @type string $plaintext
     *           Required. The data to encrypt. Must be no larger than 64KiB.
     *           The maximum size depends on the key version's
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     *           [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the plaintext must be no larger
     *           than 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     *           plaintext and additional_authenticated_data fields must be no larger than
     *           8KiB.
     *     @type string $additional_authenticated_data
     *           Optional data that, if specified, must also be provided during decryption
     *           through [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     *           The maximum size depends on the key version's
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     *           [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the AAD must be no larger than
     *           64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     *           plaintext and additional_authenticated_data fields must be no larger than
     *           8KiB.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] or [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * to use for encryption.
     * If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server will use its
     * [primary version][google.cloud.kms.v1.CryptoKey.primary].
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] or [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * to use for encryption.
     * If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server will use its
     * [primary version][google.cloud.kms.v1.CryptoKey.primary].
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The data to encrypt. Must be no larger than 64KiB.
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the plaintext must be no larger
     * than 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     * plaintext and additional_authenticated_data fields must be no larger than
     * 8KiB.
     *
     * Generated from protobuf field <code>bytes plaintext = 2;</code>
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }

    /**
     * Required. The data to encrypt. Must be no larger than 64KiB.
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the plaintext must be no larger
     * than 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     * plaintext and additional_authenticated_data fields must be no larger than
     * 8KiB.
     *
     * Generated from protobuf field <code>bytes plaintext = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaintext($var)
    {
        GPBUtil::checkString($var, False);
        $this->plaintext = $var;

        return $this;
    }

    /**
     * Optional data that, if specified, must also be provided during decryption
     * through [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the AAD must be no larger than
     * 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     * plaintext and additional_authenticated_data fields must be no larger than
     * 8KiB.
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3;</code>
     * @return string
     */
    public function getAdditionalAuthenticatedData()
    {
        return $this->additional_authenticated_data;
    }

    /**
     * Optional data that, if specified, must also be provided during decryption
     * through [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]. For
     * [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE] keys, the AAD must be no larger than
     * 64KiB. For [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of the
     * plaintext and additional_authenticated_data fields must be no larger than
     * 8KiB.
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalAuthenticatedData($var)
    {
        GPBUtil::checkString($var, False);
        $this->additional_authenticated_data = $var;

        return $this;
    }

}

