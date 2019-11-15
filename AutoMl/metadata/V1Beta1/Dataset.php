<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/dataset.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Dataset
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
            "0ad20c0a29676f6f676c652f636c6f75642f6175746f6d6c2f7631626574" .
            "61312f646174617365742e70726f746f121b676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e763162657461311a28676f6f676c652f636c6f75642f" .
            "6175746f6d6c2f763162657461312f7461626c65732e70726f746f1a2667" .
            "6f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f746578" .
            "742e70726f746f1a2d676f6f676c652f636c6f75642f6175746f6d6c2f76" .
            "3162657461312f7472616e736c6174696f6e2e70726f746f1a27676f6f67" .
            "6c652f636c6f75642f6175746f6d6c2f763162657461312f766964656f2e" .
            "70726f746f1a1f676f6f676c652f70726f746f6275662f74696d65737461" .
            "6d702e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f" .
            "6e732e70726f746f22ee080a0744617461736574125f0a1c7472616e736c" .
            "6174696f6e5f646174617365745f6d6574616461746118172001280b3237" .
            "2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e54" .
            "72616e736c6174696f6e446174617365744d65746164617461480012700a" .
            "25696d6167655f636c617373696669636174696f6e5f646174617365745f" .
            "6d6574616461746118182001280b323f2e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e763162657461312e496d616765436c6173736966696361" .
            "74696f6e446174617365744d657461646174614800126e0a24746578745f" .
            "636c617373696669636174696f6e5f646174617365745f6d657461646174" .
            "6118192001280b323e2e676f6f676c652e636c6f75642e6175746f6d6c2e" .
            "763162657461312e54657874436c617373696669636174696f6e44617461" .
            "7365744d65746164617461480012730a27696d6167655f6f626a6563745f" .
            "646574656374696f6e5f646174617365745f6d65746164617461181a2001" .
            "280b32402e676f6f676c652e636c6f75642e6175746f6d6c2e7631626574" .
            "61312e496d6167654f626a656374446574656374696f6e44617461736574" .
            "4d65746164617461480012700a25766964656f5f636c6173736966696361" .
            "74696f6e5f646174617365745f6d65746164617461181f2001280b323f2e" .
            "676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5669" .
            "64656f436c617373696669636174696f6e446174617365744d6574616461" .
            "7461480012710a26766964656f5f6f626a6563745f747261636b696e675f" .
            "646174617365745f6d65746164617461181d2001280b323f2e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e566964656f4f62" .
            "6a656374547261636b696e67446174617365744d65746164617461480012" .
            "660a20746578745f65787472616374696f6e5f646174617365745f6d6574" .
            "6164617461181c2001280b323a2e676f6f676c652e636c6f75642e617574" .
            "6f6d6c2e763162657461312e5465787445787472616374696f6e44617461" .
            "7365744d65746164617461480012640a1f746578745f73656e74696d656e" .
            "745f646174617365745f6d65746164617461181e2001280b32392e676f6f" .
            "676c652e636c6f75642e6175746f6d6c2e763162657461312e5465787453" .
            "656e74696d656e74446174617365744d65746164617461480012550a1774" .
            "61626c65735f646174617365745f6d6574616461746118212001280b3232" .
            "2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e54" .
            "61626c6573446174617365744d657461646174614800120c0a046e616d65" .
            "18012001280912140a0c646973706c61795f6e616d651802200128091213" .
            "0a0b6465736372697074696f6e18032001280912150a0d6578616d706c65" .
            "5f636f756e74181520012805122f0a0b6372656174655f74696d65180e20" .
            "01280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d" .
            "70120c0a046574616718112001280942120a10646174617365745f6d6574" .
            "616461746142a5010a1f636f6d2e676f6f676c652e636c6f75642e617574" .
            "6f6d6c2e7631626574613150015a41676f6f676c652e676f6c616e672e6f" .
            "72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f61" .
            "75746f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c" .
            "436c6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a" .
            "3a436c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}

