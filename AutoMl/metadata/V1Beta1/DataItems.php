<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_items.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class DataItems
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Geometry::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextSegment::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0ad60f0a2c676f6f676c652f636c6f75642f6175746f6d6c2f7631626574" .
            "61312f646174615f6974656d732e70726f746f121b676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e763162657461311a2a676f6f676c652f636c6f" .
            "75642f6175746f6d6c2f763162657461312f67656f6d657472792e70726f" .
            "746f1a24676f6f676c652f636c6f75642f6175746f6d6c2f763162657461" .
            "312f696f2e70726f746f1a2e676f6f676c652f636c6f75642f6175746f6d" .
            "6c2f763162657461312f746578745f7365676d656e742e70726f746f1a19" .
            "676f6f676c652f70726f746f6275662f616e792e70726f746f1a1e676f6f" .
            "676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1c67" .
            "6f6f676c652f70726f746f6275662f7374727563742e70726f746f227f0a" .
            "05496d61676512150a0b696d6167655f627974657318012001280c480012" .
            "400a0c696e7075745f636f6e66696718062001280b32282e676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e763162657461312e496e707574436f6e" .
            "666967480012150a0d7468756d626e61696c5f7572691804200128094206" .
            "0a046461746122460a0b54657874536e6970706574120f0a07636f6e7465" .
            "6e7418012001280912110a096d696d655f7479706518022001280912130a" .
            "0b636f6e74656e745f75726918042001280922ef010a12446f63756d656e" .
            "7444696d656e73696f6e7312530a04756e697418012001280e32452e676f" .
            "6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f6375" .
            "6d656e7444696d656e73696f6e732e446f63756d656e7444696d656e7369" .
            "6f6e556e6974120d0a057769647468180220012802120e0a066865696768" .
            "7418032001280222650a15446f63756d656e7444696d656e73696f6e556e" .
            "697412270a23444f43554d454e545f44494d454e53494f4e5f554e49545f" .
            "554e535045434946494544100012080a04494e43481001120e0a0a43454e" .
            "54494d45544552100212090a05504f494e54100322f9050a08446f63756d" .
            "656e7412460a0c696e7075745f636f6e66696718012001280b32302e676f" .
            "6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f6375" .
            "6d656e74496e707574436f6e666967123f0a0d646f63756d656e745f7465" .
            "787418022001280b32282e676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e763162657461312e54657874536e6970706574123c0a066c61796f7574" .
            "18032003280b322c2e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "3162657461312e446f63756d656e742e4c61796f7574124c0a13646f6375" .
            "6d656e745f64696d656e73696f6e7318042001280b322f2e676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e74" .
            "44696d656e73696f6e7312120a0a706167655f636f756e74180520012805" .
            "1ac3030a064c61796f7574123e0a0c746578745f7365676d656e74180120" .
            "01280b32282e676f6f676c652e636c6f75642e6175746f6d6c2e76316265" .
            "7461312e546578745365676d656e7412130a0b706167655f6e756d626572" .
            "18022001280512400a0d626f756e64696e675f706f6c7918032001280b32" .
            "292e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e" .
            "426f756e64696e67506f6c7912570a11746578745f7365676d656e745f74" .
            "79706518042001280e323c2e676f6f676c652e636c6f75642e6175746f6d" .
            "6c2e763162657461312e446f63756d656e742e4c61796f75742e54657874" .
            "5365676d656e745479706522c8010a0f546578745365676d656e74547970" .
            "6512210a1d544558545f5345474d454e545f545950455f554e5350454349" .
            "46494544100012090a05544f4b454e1001120d0a09504152414752415048" .
            "1002120e0a0a464f524d5f4649454c44100312130a0f464f524d5f464945" .
            "4c445f4e414d45100412170a13464f524d5f4649454c445f434f4e54454e" .
            "5453100512090a055441424c45100612100a0c5441424c455f4845414445" .
            "521007120d0a095441424c455f524f571008120e0a0a5441424c455f4345" .
            "4c4c100922460a03526f7712170a0f636f6c756d6e5f737065635f696473" .
            "18022003280912260a0676616c75657318032003280b32162e676f6f676c" .
            "652e70726f746f6275662e56616c756522fe010a0e4578616d706c655061" .
            "796c6f616412330a05696d61676518012001280b32222e676f6f676c652e" .
            "636c6f75642e6175746f6d6c2e763162657461312e496d61676548001240" .
            "0a0c746578745f736e697070657418022001280b32282e676f6f676c652e" .
            "636c6f75642e6175746f6d6c2e763162657461312e54657874536e697070" .
            "6574480012390a08646f63756d656e7418042001280b32252e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e" .
            "744800122f0a03726f7718032001280b32202e676f6f676c652e636c6f75" .
            "642e6175746f6d6c2e763162657461312e526f77480042090a077061796c" .
            "6f616442a5010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d" .
            "6c2e7631626574613150015a41676f6f676c652e676f6c616e672e6f7267" .
            "2f67656e70726f746f2f676f6f676c65617069732f636c6f75642f617574" .
            "6f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c436c" .
            "6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a3a43" .
            "6c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

