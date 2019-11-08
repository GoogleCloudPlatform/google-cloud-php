<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/operations.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1\Dataset::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Model::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\ModelEvaluation::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\PredictionService::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Service::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adc120a27676f6f676c652f636c6f75642f6175746f6d6c2f76312f6f70" .
            "65726174696f6e732e70726f746f1216676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e76311a1f676f6f676c652f636c6f75642f6175746f6d6c2f" .
            "76312f696f2e70726f746f1a22676f6f676c652f636c6f75642f6175746f" .
            "6d6c2f76312f6d6f64656c2e70726f746f1a2d676f6f676c652f636c6f75" .
            "642f6175746f6d6c2f76312f6d6f64656c5f6576616c756174696f6e2e70" .
            "726f746f1a2f676f6f676c652f636c6f75642f6175746f6d6c2f76312f70" .
            "726564696374696f6e5f736572766963652e70726f746f1a24676f6f676c" .
            "652f636c6f75642f6175746f6d6c2f76312f736572766963652e70726f74" .
            "6f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f" .
            "1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e7072" .
            "6f746f1a17676f6f676c652f7270632f7374617475732e70726f746f1a1c" .
            "676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22c9" .
            "070a114f7065726174696f6e4d6574616461746112490a0e64656c657465" .
            "5f64657461696c7318082001280b322f2e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e76312e44656c6574654f7065726174696f6e4d65746164" .
            "617461480012540a146465706c6f795f6d6f64656c5f64657461696c7318" .
            "182001280b32342e676f6f676c652e636c6f75642e6175746f6d6c2e7631" .
            "2e4465706c6f794d6f64656c4f7065726174696f6e4d6574616461746148" .
            "0012580a16756e6465706c6f795f6d6f64656c5f64657461696c73181920" .
            "01280b32362e676f6f676c652e636c6f75642e6175746f6d6c2e76312e55" .
            "6e6465706c6f794d6f64656c4f7065726174696f6e4d6574616461746148" .
            "0012540a146372656174655f6d6f64656c5f64657461696c73180a200128" .
            "0b32342e676f6f676c652e636c6f75642e6175746f6d6c2e76312e437265" .
            "6174654d6f64656c4f7065726174696f6e4d65746164617461480012580a" .
            "166372656174655f646174617365745f64657461696c73181e2001280b32" .
            "362e676f6f676c652e636c6f75642e6175746f6d6c2e76312e4372656174" .
            "65446174617365744f7065726174696f6e4d65746164617461480012520a" .
            "13696d706f72745f646174615f64657461696c73180f2001280b32332e67" .
            "6f6f676c652e636c6f75642e6175746f6d6c2e76312e496d706f72744461" .
            "74614f7065726174696f6e4d65746164617461480012560a156261746368" .
            "5f707265646963745f64657461696c7318102001280b32352e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e76312e426174636850726564696374" .
            "4f7065726174696f6e4d65746164617461480012520a136578706f72745f" .
            "646174615f64657461696c7318152001280b32332e676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e76312e4578706f7274446174614f7065726174" .
            "696f6e4d65746164617461480012540a146578706f72745f6d6f64656c5f" .
            "64657461696c7318162001280b32342e676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e76312e4578706f72744d6f64656c4f7065726174696f6e4d" .
            "65746164617461480012180a1070726f67726573735f70657263656e7418" .
            "0d20012805122c0a107061727469616c5f6661696c757265731802200328" .
            "0b32122e676f6f676c652e7270632e537461747573122f0a0b6372656174" .
            "655f74696d6518032001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d70122f0a0b7570646174655f74696d651804200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7042" .
            "090a0764657461696c7322190a1744656c6574654f7065726174696f6e4d" .
            "65746164617461221e0a1c4465706c6f794d6f64656c4f7065726174696f" .
            "6e4d6574616461746122200a1e556e6465706c6f794d6f64656c4f706572" .
            "6174696f6e4d6574616461746122200a1e43726561746544617461736574" .
            "4f7065726174696f6e4d65746164617461221e0a1c4372656174654d6f64" .
            "656c4f7065726174696f6e4d65746164617461221d0a1b496d706f727444" .
            "6174614f7065726174696f6e4d6574616461746122c7010a1b4578706f72" .
            "74446174614f7065726174696f6e4d65746164617461125d0a0b6f757470" .
            "75745f696e666f18012001280b32482e676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e76312e4578706f7274446174614f7065726174696f6e4d65" .
            "7461646174612e4578706f7274446174614f7574707574496e666f1a490a" .
            "144578706f7274446174614f7574707574496e666f121e0a146763735f6f" .
            "75747075745f6469726563746f7279180120012809480042110a0f6f7574" .
            "7075745f6c6f636174696f6e2296020a1d4261746368507265646963744f" .
            "7065726174696f6e4d6574616461746112450a0c696e7075745f636f6e66" .
            "696718012001280b322f2e676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e76312e426174636850726564696374496e707574436f6e66696712610a" .
            "0b6f75747075745f696e666f18022001280b324c2e676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e76312e4261746368507265646963744f706572" .
            "6174696f6e4d657461646174612e4261746368507265646963744f757470" .
            "7574496e666f1a4b0a164261746368507265646963744f7574707574496e" .
            "666f121e0a146763735f6f75747075745f6469726563746f727918012001" .
            "2809480042110a0f6f75747075745f6c6f636174696f6e22b6010a1c4578" .
            "706f72744d6f64656c4f7065726174696f6e4d65746164617461125f0a0b" .
            "6f75747075745f696e666f18022001280b324a2e676f6f676c652e636c6f" .
            "75642e6175746f6d6c2e76312e4578706f72744d6f64656c4f7065726174" .
            "696f6e4d657461646174612e4578706f72744d6f64656c4f757470757449" .
            "6e666f1a350a154578706f72744d6f64656c4f7574707574496e666f121c" .
            "0a146763735f6f75747075745f6469726563746f727918012001280942aa" .
            "010a1a636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e763150" .
            "015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f" .
            "676f6f676c65617069732f636c6f75642f6175746f6d6c2f76313b617574" .
            "6f6d6caa0216476f6f676c652e436c6f75642e4175746f4d4c2e5631ca02" .
            "16476f6f676c655c436c6f75645c4175746f4d4c5c5631ea0219476f6f67" .
            "6c653a3a436c6f75643a3a4175746f4d4c3a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

