<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/log_entry.proto

namespace GPBMetadata\Google\Logging\V2;

class LogEntry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Logging\Type\HttpRequest::initOnce();
        \GPBMetadata\Google\Logging\Type\LogSeverity::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8b0d0a21676f6f676c652f6c6f6767696e672f76322f6c6f675f656e74" .
            "72792e70726f746f1211676f6f676c652e6c6f6767696e672e76321a2367" .
            "6f6f676c652f6170692f6d6f6e69746f7265645f7265736f757263652e70" .
            "726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f74" .
            "6f1a26676f6f676c652f6c6f6767696e672f747970652f687474705f7265" .
            "71756573742e70726f746f1a26676f6f676c652f6c6f6767696e672f7479" .
            "70652f6c6f675f73657665726974792e70726f746f1a19676f6f676c652f" .
            "70726f746f6275662f616e792e70726f746f1a1c676f6f676c652f70726f" .
            "746f6275662f7374727563742e70726f746f1a1f676f6f676c652f70726f" .
            "746f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f" .
            "7270632f7374617475732e70726f746f1a1c676f6f676c652f6170692f61" .
            "6e6e6f746174696f6e732e70726f746f22d2070a084c6f67456e74727912" .
            "150a086c6f675f6e616d65180c200128094203e0410212340a087265736f" .
            "7572636518082001280b321d2e676f6f676c652e6170692e4d6f6e69746f" .
            "7265645265736f757263654203e04102122d0a0d70726f746f5f7061796c" .
            "6f616418022001280b32142e676f6f676c652e70726f746f6275662e416e" .
            "79480012160a0c746578745f7061796c6f61641803200128094800122f0a" .
            "0c6a736f6e5f7061796c6f616418062001280b32172e676f6f676c652e70" .
            "726f746f6275662e537472756374480012320a0974696d657374616d7018" .
            "092001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d704203e04101123a0a11726563656976655f74696d657374616d7018" .
            "182001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d704203e0410312370a087365766572697479180a2001280e32202e67" .
            "6f6f676c652e6c6f6767696e672e747970652e4c6f675365766572697479" .
            "4203e0410112160a09696e736572745f69641804200128094203e0410112" .
            "3b0a0c687474705f7265717565737418072001280b32202e676f6f676c65" .
            "2e6c6f6767696e672e747970652e48747470526571756573744203e04101" .
            "123c0a066c6162656c73180b2003280b32272e676f6f676c652e6c6f6767" .
            "696e672e76322e4c6f67456e7472792e4c6162656c73456e7472794203e0" .
            "4101123c0a096f7065726174696f6e180f2001280b32242e676f6f676c65" .
            "2e6c6f6767696e672e76322e4c6f67456e7472794f7065726174696f6e42" .
            "03e0410112120a0574726163651816200128094203e0410112140a077370" .
            "616e5f6964181b200128094203e04101121a0a0d74726163655f73616d70" .
            "6c6564181e200128084203e0410112470a0f736f757263655f6c6f636174" .
            "696f6e18172001280b32292e676f6f676c652e6c6f6767696e672e76322e" .
            "4c6f67456e747279536f757263654c6f636174696f6e4203e041011a2d0a" .
            "0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576" .
            "616c75651802200128093a0238013abd01ea41b9010a1a6c6f6767696e67" .
            "2e676f6f676c65617069732e636f6d2f4c6f67121d70726f6a656374732f" .
            "7b70726f6a6563747d2f6c6f67732f7b6c6f677d12276f7267616e697a61" .
            "74696f6e732f7b6f7267616e697a6174696f6e7d2f6c6f67732f7b6c6f67" .
            "7d121b666f6c646572732f7b666f6c6465727d2f6c6f67732f7b6c6f677d" .
            "122c62696c6c696e674163636f756e74732f7b62696c6c696e675f616363" .
            "6f756e747d2f6c6f67732f7b6c6f677d1a086c6f675f6e616d6542090a07" .
            "7061796c6f616422620a114c6f67456e7472794f7065726174696f6e120f" .
            "0a0269641801200128094203e0410112150a0870726f6475636572180220" .
            "0128094203e0410112120a0566697273741803200128084203e041011211" .
            "0a046c6173741804200128084203e0410122550a164c6f67456e74727953" .
            "6f757263654c6f636174696f6e12110a0466696c651801200128094203e0" .
            "410112110a046c696e651802200128034203e0410112150a0866756e6374" .
            "696f6e1803200128094203e041014299010a15636f6d2e676f6f676c652e" .
            "6c6f6767696e672e7632420d4c6f67456e74727950726f746f50015a3867" .
            "6f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f67" .
            "6c65617069732f6c6f6767696e672f76323b6c6f6767696e67f80101aa02" .
            "17476f6f676c652e436c6f75642e4c6f6767696e672e5632ca0217476f6f" .
            "676c655c436c6f75645c4c6f6767696e675c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

