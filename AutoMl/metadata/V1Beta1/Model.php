<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/model.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Model
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Image::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Tables::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Text::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Translation::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Video::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0ad40d0a27676f6f676c652f636c6f75642f6175746f6d6c2f7631626574" .
            "61312f6d6f64656c2e70726f746f121b676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e763162657461311a28676f6f676c652f636c6f75642f6175" .
            "746f6d6c2f763162657461312f7461626c65732e70726f746f1a26676f6f" .
            "676c652f636c6f75642f6175746f6d6c2f763162657461312f746578742e" .
            "70726f746f1a2d676f6f676c652f636c6f75642f6175746f6d6c2f763162" .
            "657461312f7472616e736c6174696f6e2e70726f746f1a27676f6f676c65" .
            "2f636c6f75642f6175746f6d6c2f763162657461312f766964656f2e7072" .
            "6f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d70" .
            "2e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e73" .
            "2e70726f746f22f2090a054d6f64656c125b0a1a7472616e736c6174696f" .
            "6e5f6d6f64656c5f6d65746164617461180f2001280b32352e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e5472616e736c61" .
            "74696f6e4d6f64656c4d657461646174614800126c0a23696d6167655f63" .
            "6c617373696669636174696f6e5f6d6f64656c5f6d65746164617461180d" .
            "2001280b323d2e676f6f676c652e636c6f75642e6175746f6d6c2e763162" .
            "657461312e496d616765436c617373696669636174696f6e4d6f64656c4d" .
            "657461646174614800126a0a22746578745f636c61737369666963617469" .
            "6f6e5f6d6f64656c5f6d65746164617461180e2001280b323c2e676f6f67" .
            "6c652e636c6f75642e6175746f6d6c2e763162657461312e54657874436c" .
            "617373696669636174696f6e4d6f64656c4d657461646174614800126f0a" .
            "25696d6167655f6f626a6563745f646574656374696f6e5f6d6f64656c5f" .
            "6d6574616461746118142001280b323e2e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e763162657461312e496d6167654f626a65637444657465" .
            "6374696f6e4d6f64656c4d657461646174614800126c0a23766964656f5f" .
            "636c617373696669636174696f6e5f6d6f64656c5f6d6574616461746118" .
            "172001280b323d2e676f6f676c652e636c6f75642e6175746f6d6c2e7631" .
            "62657461312e566964656f436c617373696669636174696f6e4d6f64656c" .
            "4d657461646174614800126d0a24766964656f5f6f626a6563745f747261" .
            "636b696e675f6d6f64656c5f6d6574616461746118152001280b323d2e67" .
            "6f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e566964" .
            "656f4f626a656374547261636b696e674d6f64656c4d6574616461746148" .
            "0012620a1e746578745f65787472616374696f6e5f6d6f64656c5f6d6574" .
            "616461746118132001280b32382e676f6f676c652e636c6f75642e617574" .
            "6f6d6c2e763162657461312e5465787445787472616374696f6e4d6f6465" .
            "6c4d65746164617461480012510a157461626c65735f6d6f64656c5f6d65" .
            "74616461746118182001280b32302e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e763162657461312e5461626c65734d6f64656c4d6574616461" .
            "7461480012600a1d746578745f73656e74696d656e745f6d6f64656c5f6d" .
            "6574616461746118162001280b32372e676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e763162657461312e5465787453656e74696d656e744d6f64" .
            "656c4d657461646174614800120c0a046e616d6518012001280912140a0c" .
            "646973706c61795f6e616d6518022001280912120a0a646174617365745f" .
            "6964180320012809122f0a0b6372656174655f74696d6518072001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d70122f0a" .
            "0b7570646174655f74696d65180b2001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d70124c0a106465706c6f796d656e74" .
            "5f737461746518082001280e32322e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e763162657461312e4d6f64656c2e4465706c6f796d656e7453" .
            "7461746522510a0f4465706c6f796d656e74537461746512200a1c444550" .
            "4c4f594d454e545f53544154455f554e5350454349464945441000120c0a" .
            "084445504c4f5945441001120e0a0a554e4445504c4f594544100242100a" .
            "0e6d6f64656c5f6d6574616461746142a5010a1f636f6d2e676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e7631626574613150015a41676f6f676c" .
            "652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c656170" .
            "69732f636c6f75642f6175746f6d6c2f763162657461313b6175746f6d6c" .
            "ca021b476f6f676c655c436c6f75645c4175746f4d6c5c56316265746131" .
            "ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56316265" .
            "746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

