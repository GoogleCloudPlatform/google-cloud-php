<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class ProfileService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Histogram::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0aa6190a31676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f70726f66696c655f736572766963652e70726f746f121b676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461311a17676f6f676c" .
            "652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f617069" .
            "2f6669656c645f6265686176696f722e70726f746f1a28676f6f676c652f" .
            "636c6f75642f74616c656e742f763462657461312f636f6d6d6f6e2e7072" .
            "6f746f1a29676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f66696c746572732e70726f746f1a2b676f6f676c652f636c6f7564" .
            "2f74616c656e742f763462657461312f686973746f6772616d2e70726f74" .
            "6f1a29676f6f676c652f636c6f75642f74616c656e742f76346265746131" .
            "2f70726f66696c652e70726f746f1a19676f6f676c652f70726f746f6275" .
            "662f616e792e70726f746f1a1b676f6f676c652f70726f746f6275662f65" .
            "6d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669" .
            "656c645f6d61736b2e70726f746f2290010a134c69737450726f66696c65" .
            "735265717565737412130a06706172656e741801200128094203e0410212" .
            "0e0a0666696c74657218052001280912120a0a706167655f746f6b656e18" .
            "022001280912110a09706167655f73697a65180320012805122d0a097265" .
            "61645f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275" .
            "662e4669656c644d61736b22670a144c69737450726f66696c6573526573" .
            "706f6e736512360a0870726f66696c657318012003280b32242e676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461312e50726f66696c" .
            "6512170a0f6e6578745f706167655f746f6b656e18022001280922670a14" .
            "43726561746550726f66696c655265717565737412130a06706172656e74" .
            "1801200128094203e04102123a0a0770726f66696c6518022001280b3224" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e50" .
            "726f66696c654203e0410222260a1147657450726f66696c655265717565" .
            "737412110a046e616d651801200128094203e041022283010a1455706461" .
            "746550726f66696c6552657175657374123a0a0770726f66696c65180120" .
            "01280b32242e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e50726f66696c654203e04102122f0a0b7570646174655f6d6173" .
            "6b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c" .
            "644d61736b22290a1444656c65746550726f66696c655265717565737412" .
            "110a046e616d651801200128094203e0410222bd030a1553656172636850" .
            "726f66696c65735265717565737412130a06706172656e74180120012809" .
            "4203e04102124b0a10726571756573745f6d657461646174611802200128" .
            "0b322c2e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e526571756573744d657461646174614203e0410212400a0d70726f66" .
            "696c655f717565727918032001280b32292e676f6f676c652e636c6f7564" .
            "2e74616c656e742e763462657461312e50726f66696c6551756572791211" .
            "0a09706167655f73697a6518042001280512120a0a706167655f746f6b65" .
            "6e180520012809120e0a066f6666736574180620012805121b0a13646973" .
            "61626c655f7370656c6c5f636865636b18072001280812100a086f726465" .
            "725f6279180820012809121b0a13636173655f73656e7369746976655f73" .
            "6f727418092001280812460a11686973746f6772616d5f71756572696573" .
            "180a2003280b322b2e676f6f676c652e636c6f75642e74616c656e742e76" .
            "3462657461312e486973746f6772616d517565727912150a0d726573756c" .
            "745f7365745f6964180c20012809121e0a167374726963745f6b6579776f" .
            "7264735f736561726368180d200128082293030a1653656172636850726f" .
            "66696c6573526573706f6e7365121c0a14657374696d617465645f746f74" .
            "616c5f73697a6518012001280312490a107370656c6c5f636f7272656374" .
            "696f6e18022001280b322f2e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e5370656c6c696e67436f7272656374696f6e123f" .
            "0a086d6574616461746118032001280b322d2e676f6f676c652e636c6f75" .
            "642e74616c656e742e763462657461312e526573706f6e73654d65746164" .
            "61746112170a0f6e6578745f706167655f746f6b656e1804200128091252" .
            "0a17686973746f6772616d5f71756572795f726573756c74731805200328" .
            "0b32312e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e486973746f6772616d5175657279526573756c74124b0a1373756d6d" .
            "6172697a65645f70726f66696c657318062003280b322e2e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e53756d6d6172697a" .
            "656450726f66696c6512150a0d726573756c745f7365745f696418072001" .
            "28092282010a1153756d6d6172697a656450726f66696c6512360a087072" .
            "6f66696c657318012003280b32242e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e50726f66696c6512350a0773756d6d6172" .
            "7918022001280b32242e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e50726f66696c6532ed080a0e50726f66696c65536572" .
            "7669636512ac010a0c4c69737450726f66696c657312302e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e4c69737450726f66" .
            "696c6573526571756573741a312e676f6f676c652e636c6f75642e74616c" .
            "656e742e763462657461312e4c69737450726f66696c6573526573706f6e" .
            "7365223782d3e4930231122f2f763462657461312f7b706172656e743d70" .
            "726f6a656374732f2a2f74656e616e74732f2a7d2f70726f66696c657312" .
            "a4010a0d43726561746550726f66696c6512312e676f6f676c652e636c6f" .
            "75642e74616c656e742e763462657461312e43726561746550726f66696c" .
            "65526571756573741a242e676f6f676c652e636c6f75642e74616c656e74" .
            "2e763462657461312e50726f66696c65223a82d3e4930234222f2f763462" .
            "657461312f7b706172656e743d70726f6a656374732f2a2f74656e616e74" .
            "732f2a7d2f70726f66696c65733a012a129b010a0a47657450726f66696c" .
            "65122e2e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e47657450726f66696c65526571756573741a242e676f6f676c652e63" .
            "6c6f75642e74616c656e742e763462657461312e50726f66696c65223782" .
            "d3e4930231122f2f763462657461312f7b6e616d653d70726f6a65637473" .
            "2f2a2f74656e616e74732f2a2f70726f66696c65732f2a7d12ac010a0d55" .
            "706461746550726f66696c6512312e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e55706461746550726f66696c6552657175" .
            "6573741a242e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e50726f66696c65224282d3e493023c32372f763462657461312f" .
            "7b70726f66696c652e6e616d653d70726f6a656374732f2a2f74656e616e" .
            "74732f2a2f70726f66696c65732f2a7d3a012a1293010a0d44656c657465" .
            "50726f66696c6512312e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e44656c65746550726f66696c65526571756573741a16" .
            "2e676f6f676c652e70726f746f6275662e456d707479223782d3e4930231" .
            "2a2f2f763462657461312f7b6e616d653d70726f6a656374732f2a2f7465" .
            "6e616e74732f2a2f70726f66696c65732f2a7d12b3010a0e536561726368" .
            "50726f66696c657312322e676f6f676c652e636c6f75642e74616c656e74" .
            "2e763462657461312e53656172636850726f66696c657352657175657374" .
            "1a332e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e53656172636850726f66696c6573526573706f6e7365223882d3e49302" .
            "32222d2f763462657461312f7b706172656e743d70726f6a656374732f2a" .
            "2f74656e616e74732f2a7d3a7365617263683a012a1a6cca41136a6f6273" .
            "2e676f6f676c65617069732e636f6dd2415368747470733a2f2f7777772e" .
            "676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174" .
            "666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f" .
            "6d2f617574682f6a6f62734281010a1f636f6d2e676f6f676c652e636c6f" .
            "75642e74616c656e742e76346265746131421350726f66696c6553657276" .
            "69636550726f746f50015a41676f6f676c652e676f6c616e672e6f72672f" .
            "67656e70726f746f2f676f6f676c65617069732f636c6f75642f74616c65" .
            "6e742f763462657461313b74616c656e74a20203435453620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}

