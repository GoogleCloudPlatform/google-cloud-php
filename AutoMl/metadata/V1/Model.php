<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/model.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class Model
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Image::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Text::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Translation::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9e0c0a22676f6f676c652f636c6f75642f6175746f6d6c2f76312f6d6f" .
            "64656c2e70726f746f1216676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e76311a22676f6f676c652f636c6f75642f6175746f6d6c2f76312f696d" .
            "6167652e70726f746f1a21676f6f676c652f636c6f75642f6175746f6d6c" .
            "2f76312f746578742e70726f746f1a28676f6f676c652f636c6f75642f61" .
            "75746f6d6c2f76312f7472616e736c6174696f6e2e70726f746f1a1f676f" .
            "6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a" .
            "1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22" .
            "fa080a054d6f64656c12560a1a7472616e736c6174696f6e5f6d6f64656c" .
            "5f6d65746164617461180f2001280b32302e676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e76312e5472616e736c6174696f6e4d6f64656c4d6574" .
            "6164617461480012670a23696d6167655f636c617373696669636174696f" .
            "6e5f6d6f64656c5f6d65746164617461180d2001280b32382e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e76312e496d616765436c6173736966" .
            "69636174696f6e4d6f64656c4d65746164617461480012650a2274657874" .
            "5f636c617373696669636174696f6e5f6d6f64656c5f6d65746164617461" .
            "180e2001280b32372e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "312e54657874436c617373696669636174696f6e4d6f64656c4d65746164" .
            "6174614800126a0a25696d6167655f6f626a6563745f646574656374696f" .
            "6e5f6d6f64656c5f6d6574616461746118142001280b32392e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e76312e496d6167654f626a65637444" .
            "6574656374696f6e4d6f64656c4d657461646174614800125d0a1e746578" .
            "745f65787472616374696f6e5f6d6f64656c5f6d65746164617461181320" .
            "01280b32332e676f6f676c652e636c6f75642e6175746f6d6c2e76312e54" .
            "65787445787472616374696f6e4d6f64656c4d657461646174614800125b" .
            "0a1d746578745f73656e74696d656e745f6d6f64656c5f6d657461646174" .
            "6118162001280b32322e676f6f676c652e636c6f75642e6175746f6d6c2e" .
            "76312e5465787453656e74696d656e744d6f64656c4d6574616461746148" .
            "00120c0a046e616d6518012001280912140a0c646973706c61795f6e616d" .
            "6518022001280912120a0a646174617365745f6964180320012809122f0a" .
            "0b6372656174655f74696d6518072001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d70122f0a0b7570646174655f74696d" .
            "65180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d7012470a106465706c6f796d656e745f73746174651808200128" .
            "0e322d2e676f6f676c652e636c6f75642e6175746f6d6c2e76312e4d6f64" .
            "656c2e4465706c6f796d656e745374617465120c0a0465746167180a2001" .
            "280912390a066c6162656c7318222003280b32292e676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e76312e4d6f64656c2e4c6162656c73456e7472" .
            "791a2d0a0b4c6162656c73456e747279120b0a036b657918012001280912" .
            "0d0a0576616c75651802200128093a02380122510a0f4465706c6f796d65" .
            "6e74537461746512200a1c4445504c4f594d454e545f53544154455f554e" .
            "5350454349464945441000120c0a084445504c4f5945441001120e0a0a55" .
            "4e4445504c4f59454410023a61ea415e0a1b6175746f6d6c2e676f6f676c" .
            "65617069732e636f6d2f4d6f64656c123f70726f6a656374732f7b70726f" .
            "6a6563745f69647d2f6c6f636174696f6e732f7b6c6f636174696f6e5f69" .
            "647d2f6d6f64656c732f7b6d6f64656c5f69647d42100a0e6d6f64656c5f" .
            "6d6574616461746142aa010a1a636f6d2e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e763150015a3c676f6f676c652e676f6c616e672e6f7267" .
            "2f67656e70726f746f2f676f6f676c65617069732f636c6f75642f617574" .
            "6f6d6c2f76313b6175746f6d6caa0216476f6f676c652e436c6f75642e41" .
            "75746f4d4c2e5631ca0216476f6f676c655c436c6f75645c4175746f4d4c" .
            "5c5631ea0219476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56" .
            "31620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

