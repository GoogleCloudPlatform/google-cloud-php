<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace GPBMetadata\Google\Firestore\V1;

class Write
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Firestore\V1\Common::initOnce();
        \GPBMetadata\Google\Firestore\V1\Document::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8b0e0a1f676f6f676c652f6669726573746f72652f76312f77726974652e70726f746f1213676f6f676c652e6669726573746f72652e76311a22676f6f676c652f6669726573746f72652f76312f646f63756d656e742e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22db020a055772697465122f0a0675706461746518012001280b321d2e676f6f676c652e6669726573746f72652e76312e446f63756d656e74480012100a0664656c6574651802200128094800123b0a097472616e73666f726d18062001280b32262e676f6f676c652e6669726573746f72652e76312e446f63756d656e745472616e73666f726d480012360a0b7570646174655f6d61736b18032001280b32212e676f6f676c652e6669726573746f72652e76312e446f63756d656e744d61736b12500a117570646174655f7472616e73666f726d7318072003280b32352e676f6f676c652e6669726573746f72652e76312e446f63756d656e745472616e73666f726d2e4669656c645472616e73666f726d123b0a1063757272656e745f646f63756d656e7418042001280b32212e676f6f676c652e6669726573746f72652e76312e507265636f6e646974696f6e420b0a096f7065726174696f6e22e5040a11446f63756d656e745472616e73666f726d12100a08646f63756d656e74180120012809124f0a106669656c645f7472616e73666f726d7318022003280b32352e676f6f676c652e6669726573746f72652e76312e446f63756d656e745472616e73666f726d2e4669656c645472616e73666f726d1aec030a0e4669656c645472616e73666f726d12120a0a6669656c645f7061746818012001280912600a137365745f746f5f7365727665725f76616c756518022001280e32412e676f6f676c652e6669726573746f72652e76312e446f63756d656e745472616e73666f726d2e4669656c645472616e73666f726d2e53657276657256616c75654800122f0a09696e6372656d656e7418032001280b321a2e676f6f676c652e6669726573746f72652e76312e56616c75654800122d0a076d6178696d756d18042001280b321a2e676f6f676c652e6669726573746f72652e76312e56616c75654800122d0a076d696e696d756d18052001280b321a2e676f6f676c652e6669726573746f72652e76312e56616c7565480012420a17617070656e645f6d697373696e675f656c656d656e747318062001280b321f2e676f6f676c652e6669726573746f72652e76312e417272617956616c7565480012400a1572656d6f76655f616c6c5f66726f6d5f617272617918072001280b321f2e676f6f676c652e6669726573746f72652e76312e417272617956616c75654800223d0a0b53657276657256616c7565121c0a185345525645525f56414c55455f554e535045434946494544100012100a0c524551554553545f54494d45100142100a0e7472616e73666f726d5f7479706522750a0b5772697465526573756c74122f0a0b7570646174655f74696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012350a117472616e73666f726d5f726573756c747318022003280b321a2e676f6f676c652e6669726573746f72652e76312e56616c756522710a0e446f63756d656e744368616e6765122f0a08646f63756d656e7418012001280b321d2e676f6f676c652e6669726573746f72652e76312e446f63756d656e7412120a0a7461726765745f696473180520032805121a0a1272656d6f7665645f7461726765745f696473180620032805226d0a0e446f63756d656e7444656c65746512100a08646f63756d656e74180120012809121a0a1272656d6f7665645f7461726765745f696473180620032805122d0a09726561645f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70226d0a0e446f63756d656e7452656d6f766512100a08646f63756d656e74180120012809121a0a1272656d6f7665645f7461726765745f696473180220032805122d0a09726561645f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022330a0f4578697374656e636546696c74657212110a097461726765745f6964180120012805120d0a05636f756e7418022001280542a4010a17636f6d2e676f6f676c652e6669726573746f72652e7631420a577269746550726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6669726573746f72652f76313b6669726573746f7265a2020447434653aa0219476f6f676c652e436c6f75642e4669726573746f72652e5631ca0219476f6f676c655c436c6f75645c4669726573746f72655c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

