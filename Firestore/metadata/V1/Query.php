<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace GPBMetadata\Google\Firestore\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Firestore\V1\Document::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc110a1f676f6f676c652f6669726573746f72652f76312f7175657279" .
            "2e70726f746f1213676f6f676c652e6669726573746f72652e76311a2267" .
            "6f6f676c652f6669726573746f72652f76312f646f63756d656e742e7072" .
            "6f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e" .
            "70726f746f22da0e0a0f537472756374757265645175657279123f0a0673" .
            "656c65637418012001280b322f2e676f6f676c652e6669726573746f7265" .
            "2e76312e5374727563747572656451756572792e50726f6a656374696f6e" .
            "12450a0466726f6d18022003280b32372e676f6f676c652e666972657374" .
            "6f72652e76312e5374727563747572656451756572792e436f6c6c656374" .
            "696f6e53656c6563746f72123a0a05776865726518032001280b322b2e67" .
            "6f6f676c652e6669726573746f72652e76312e5374727563747572656451" .
            "756572792e46696c746572123c0a086f726465725f627918042003280b32" .
            "2a2e676f6f676c652e6669726573746f72652e76312e5374727563747572" .
            "656451756572792e4f72646572122d0a0873746172745f61741807200128" .
            "0b321b2e676f6f676c652e6669726573746f72652e76312e437572736f72" .
            "122b0a06656e645f617418082001280b321b2e676f6f676c652e66697265" .
            "73746f72652e76312e437572736f72120e0a066f66667365741806200128" .
            "05122a0a056c696d697418052001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74333256616c75651a440a12436f6c6c656374696f6e53" .
            "656c6563746f7212150a0d636f6c6c656374696f6e5f6964180220012809" .
            "12170a0f616c6c5f64657363656e64616e74731803200128081afd010a06" .
            "46696c74657212500a10636f6d706f736974655f66696c74657218012001" .
            "280b32342e676f6f676c652e6669726573746f72652e76312e5374727563" .
            "747572656451756572792e436f6d706f7369746546696c74657248001248" .
            "0a0c6669656c645f66696c74657218022001280b32302e676f6f676c652e" .
            "6669726573746f72652e76312e5374727563747572656451756572792e46" .
            "69656c6446696c746572480012480a0c756e6172795f66696c7465721803" .
            "2001280b32302e676f6f676c652e6669726573746f72652e76312e537472" .
            "7563747572656451756572792e556e61727946696c7465724800420d0a0b" .
            "66696c7465725f747970651ac9010a0f436f6d706f7369746546696c7465" .
            "7212490a026f7018012001280e323d2e676f6f676c652e6669726573746f" .
            "72652e76312e5374727563747572656451756572792e436f6d706f736974" .
            "6546696c7465722e4f70657261746f72123c0a0766696c74657273180220" .
            "03280b322b2e676f6f676c652e6669726573746f72652e76312e53747275" .
            "63747572656451756572792e46696c746572222d0a084f70657261746f72" .
            "12180a144f50455241544f525f554e535045434946494544100012070a03" .
            "414e4410011add020a0b4669656c6446696c74657212420a056669656c64" .
            "18012001280b32332e676f6f676c652e6669726573746f72652e76312e53" .
            "74727563747572656451756572792e4669656c645265666572656e636512" .
            "450a026f7018022001280e32392e676f6f676c652e6669726573746f7265" .
            "2e76312e5374727563747572656451756572792e4669656c6446696c7465" .
            "722e4f70657261746f7212290a0576616c756518032001280b321a2e676f" .
            "6f676c652e6669726573746f72652e76312e56616c75652297010a084f70" .
            "657261746f7212180a144f50455241544f525f554e535045434946494544" .
            "1000120d0a094c4553535f5448414e100112160a124c4553535f5448414e" .
            "5f4f525f455155414c100212100a0c475245415445525f5448414e100312" .
            "190a15475245415445525f5448414e5f4f525f455155414c100412090a05" .
            "455155414c100512120a0e41525241595f434f4e5441494e5310071ae901" .
            "0a0b556e61727946696c74657212450a026f7018012001280e32392e676f" .
            "6f676c652e6669726573746f72652e76312e537472756374757265645175" .
            "6572792e556e61727946696c7465722e4f70657261746f7212440a056669" .
            "656c6418022001280b32332e676f6f676c652e6669726573746f72652e76" .
            "312e5374727563747572656451756572792e4669656c645265666572656e" .
            "63654800223d0a084f70657261746f7212180a144f50455241544f525f55" .
            "4e5350454349464945441000120a0a0649535f4e414e1002120b0a074953" .
            "5f4e554c4c1003420e0a0c6f706572616e645f747970651a8e010a054f72" .
            "64657212420a056669656c6418012001280b32332e676f6f676c652e6669" .
            "726573746f72652e76312e5374727563747572656451756572792e466965" .
            "6c645265666572656e636512410a09646972656374696f6e18022001280e" .
            "322e2e676f6f676c652e6669726573746f72652e76312e53747275637475" .
            "72656451756572792e446972656374696f6e1a240a0e4669656c64526566" .
            "6572656e636512120a0a6669656c645f706174681802200128091a510a0a" .
            "50726f6a656374696f6e12430a066669656c647318022003280b32332e67" .
            "6f6f676c652e6669726573746f72652e76312e5374727563747572656451" .
            "756572792e4669656c645265666572656e636522450a0944697265637469" .
            "6f6e12190a15444952454354494f4e5f554e535045434946494544100012" .
            "0d0a09415343454e44494e471001120e0a0a44455343454e44494e471002" .
            "22440a06437572736f72122a0a0676616c75657318012003280b321a2e67" .
            "6f6f676c652e6669726573746f72652e76312e56616c7565120e0a066265" .
            "666f726518022001280842a4010a17636f6d2e676f6f676c652e66697265" .
            "73746f72652e7631420a517565727950726f746f50015a3c676f6f676c65" .
            "2e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069" .
            "732f6669726573746f72652f76313b6669726573746f7265a20204474346" .
            "53aa0219476f6f676c652e436c6f75642e4669726573746f72652e5631ca" .
            "0219476f6f676c655c436c6f75645c4669726573746f72655c5631620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}

