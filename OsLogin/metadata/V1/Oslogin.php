<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace GPBMetadata\Google\Cloud\Oslogin\V1;

class Oslogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0af5100a25676f6f676c652f636c6f75642f6f736c6f67696e2f76312f6f" .
            "736c6f67696e2e70726f746f1217676f6f676c652e636c6f75642e6f736c" .
            "6f67696e2e76311a28676f6f676c652f636c6f75642f6f736c6f67696e2f" .
            "636f6d6d6f6e2f636f6d6d6f6e2e70726f746f1a1b676f6f676c652f7072" .
            "6f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f" .
            "746f6275662f6669656c645f6d61736b2e70726f746f22a6020a0c4c6f67" .
            "696e50726f66696c65120c0a046e616d6518012001280912410a0e706f73" .
            "69785f6163636f756e747318022003280b32292e676f6f676c652e636c6f" .
            "75642e6f736c6f67696e2e636f6d6d6f6e2e506f7369784163636f756e74" .
            "12510a0f7373685f7075626c69635f6b65797318032003280b32382e676f" .
            "6f676c652e636c6f75642e6f736c6f67696e2e76312e4c6f67696e50726f" .
            "66696c652e5373685075626c69634b657973456e74727912110a09737573" .
            "70656e6465641804200128081a5f0a125373685075626c69634b65797345" .
            "6e747279120b0a036b657918012001280912380a0576616c756518022001" .
            "280b32292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d" .
            "6f6e2e5373685075626c69634b65793a02380122290a1944656c65746550" .
            "6f7369784163636f756e7452657175657374120c0a046e616d6518012001" .
            "280922290a1944656c6574655373685075626c69634b6579526571756573" .
            "74120c0a046e616d6518012001280922260a164765744c6f67696e50726f" .
            "66696c6552657175657374120c0a046e616d6518012001280922260a1647" .
            "65745373685075626c69634b657952657175657374120c0a046e616d6518" .
            "01200128092282010a19496d706f72745373685075626c69634b65795265" .
            "7175657374120e0a06706172656e7418012001280912410a0e7373685f70" .
            "75626c69635f6b657918022001280b32292e676f6f676c652e636c6f7564" .
            "2e6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b65791212" .
            "0a0a70726f6a6563745f6964180320012809225a0a1a496d706f72745373" .
            "685075626c69634b6579526573706f6e7365123c0a0d6c6f67696e5f7072" .
            "6f66696c6518012001280b32252e676f6f676c652e636c6f75642e6f736c" .
            "6f67696e2e76312e4c6f67696e50726f66696c65229d010a195570646174" .
            "655373685075626c69634b657952657175657374120c0a046e616d651801" .
            "2001280912410a0e7373685f7075626c69635f6b657918022001280b3229" .
            "2e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e53" .
            "73685075626c69634b6579122f0a0b7570646174655f6d61736b18032001" .
            "280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b" .
            "32cd070a0e4f734c6f67696e536572766963651287010a1244656c657465" .
            "506f7369784163636f756e7412322e676f6f676c652e636c6f75642e6f73" .
            "6c6f67696e2e76312e44656c657465506f7369784163636f756e74526571" .
            "756573741a162e676f6f676c652e70726f746f6275662e456d7074792225" .
            "82d3e493021f2a1d2f76312f7b6e616d653d75736572732f2a2f70726f6a" .
            "656374732f2a7d128c010a1244656c6574655373685075626c69634b6579" .
            "12322e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e44656c" .
            "6574655373685075626c69634b6579526571756573741a162e676f6f676c" .
            "652e70726f746f6275662e456d707479222a82d3e49302242a222f76312f" .
            "7b6e616d653d75736572732f2a2f7373685075626c69634b6579732f2a7d" .
            "1292010a0f4765744c6f67696e50726f66696c65122f2e676f6f676c652e" .
            "636c6f75642e6f736c6f67696e2e76312e4765744c6f67696e50726f6669" .
            "6c65526571756573741a252e676f6f676c652e636c6f75642e6f736c6f67" .
            "696e2e76312e4c6f67696e50726f66696c65222782d3e4930221121f2f76" .
            "312f7b6e616d653d75736572732f2a7d2f6c6f67696e50726f66696c6512" .
            "99010a0f4765745373685075626c69634b6579122f2e676f6f676c652e63" .
            "6c6f75642e6f736c6f67696e2e76312e4765745373685075626c69634b65" .
            "79526571756573741a292e676f6f676c652e636c6f75642e6f736c6f6769" .
            "6e2e636f6d6d6f6e2e5373685075626c69634b6579222a82d3e493022412" .
            "222f76312f7b6e616d653d75736572732f2a2f7373685075626c69634b65" .
            "79732f2a7d12be010a12496d706f72745373685075626c69634b65791232" .
            "2e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e496d706f72" .
            "745373685075626c69634b6579526571756573741a332e676f6f676c652e" .
            "636c6f75642e6f736c6f67696e2e76312e496d706f72745373685075626c" .
            "69634b6579526573706f6e7365223f82d3e493023922272f76312f7b7061" .
            "72656e743d75736572732f2a7d3a696d706f72745373685075626c69634b" .
            "65793a0e7373685f7075626c69635f6b657912af010a1255706461746553" .
            "73685075626c69634b657912322e676f6f676c652e636c6f75642e6f736c" .
            "6f67696e2e76312e5570646174655373685075626c69634b657952657175" .
            "6573741a292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d" .
            "6d6f6e2e5373685075626c69634b6579223a82d3e493023432222f76312f" .
            "7b6e616d653d75736572732f2a2f7373685075626c69634b6579732f2a7d" .
            "3a0e7373685f7075626c69635f6b657942a1010a1b636f6d2e676f6f676c" .
            "652e636c6f75642e6f736c6f67696e2e7631420c4f734c6f67696e50726f" .
            "746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f636c6f75642f6f736c6f67696e2f7631" .
            "3b6f736c6f67696eaa0217476f6f676c652e436c6f75642e4f734c6f6769" .
            "6e2e5631ca0217476f6f676c655c436c6f75645c4f734c6f67696e5c5631" .
            "620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

