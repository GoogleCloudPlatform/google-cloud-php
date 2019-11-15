<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/application_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class ApplicationService
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
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Application::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0aeb100a35676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f6170706c69636174696f6e5f736572766963652e70726f746f121b" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461311a1767" .
            "6f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c65" .
            "2f6170692f6669656c645f6265686176696f722e70726f746f1a2d676f6f" .
            "676c652f636c6f75642f74616c656e742f763462657461312f6170706c69" .
            "636174696f6e2e70726f746f1a28676f6f676c652f636c6f75642f74616c" .
            "656e742f763462657461312f636f6d6d6f6e2e70726f746f1a1b676f6f67" .
            "6c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c" .
            "652f70726f746f6275662f6669656c645f6d61736b2e70726f746f22730a" .
            "184372656174654170706c69636174696f6e5265717565737412130a0670" .
            "6172656e741801200128094203e0410212420a0b6170706c69636174696f" .
            "6e18022001280b32282e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e4170706c69636174696f6e4203e04102222a0a154765" .
            "744170706c69636174696f6e5265717565737412110a046e616d65180120" .
            "0128094203e04102228f010a185570646174654170706c69636174696f6e" .
            "5265717565737412420a0b6170706c69636174696f6e18012001280b3228" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e41" .
            "70706c69636174696f6e4203e04102122f0a0b7570646174655f6d61736b" .
            "18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c64" .
            "4d61736b222d0a1844656c6574654170706c69636174696f6e5265717565" .
            "737412110a046e616d651801200128094203e0410222550a174c69737441" .
            "70706c69636174696f6e735265717565737412130a06706172656e741801" .
            "200128094203e0410212120a0a706167655f746f6b656e18022001280912" .
            "110a09706167655f73697a6518032001280522b4010a184c697374417070" .
            "6c69636174696f6e73526573706f6e7365123e0a0c6170706c6963617469" .
            "6f6e7318012003280b32282e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e4170706c69636174696f6e12170a0f6e6578745f" .
            "706167655f746f6b656e180220012809123f0a086d657461646174611803" .
            "2001280b322d2e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e526573706f6e73654d6574616461746132c2080a124170706c" .
            "69636174696f6e5365727669636512bf010a114372656174654170706c69" .
            "636174696f6e12352e676f6f676c652e636c6f75642e74616c656e742e76" .
            "3462657461312e4372656174654170706c69636174696f6e526571756573" .
            "741a282e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e4170706c69636174696f6e224982d3e4930243223e2f763462657461" .
            "312f7b706172656e743d70726f6a656374732f2a2f74656e616e74732f2a" .
            "2f70726f66696c65732f2a7d2f6170706c69636174696f6e733a012a12b6" .
            "010a0e4765744170706c69636174696f6e12322e676f6f676c652e636c6f" .
            "75642e74616c656e742e763462657461312e4765744170706c6963617469" .
            "6f6e526571756573741a282e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e4170706c69636174696f6e224682d3e493024012" .
            "3e2f763462657461312f7b6e616d653d70726f6a656374732f2a2f74656e" .
            "616e74732f2a2f70726f66696c65732f2a2f6170706c69636174696f6e73" .
            "2f2a7d12cb010a115570646174654170706c69636174696f6e12352e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e55706461" .
            "74654170706c69636174696f6e526571756573741a282e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e4170706c6963617469" .
            "6f6e225582d3e493024f324a2f763462657461312f7b6170706c69636174" .
            "696f6e2e6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f" .
            "70726f66696c65732f2a2f6170706c69636174696f6e732f2a7d3a012a12" .
            "aa010a1144656c6574654170706c69636174696f6e12352e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e44656c6574654170" .
            "706c69636174696f6e526571756573741a162e676f6f676c652e70726f74" .
            "6f6275662e456d707479224682d3e49302402a3e2f763462657461312f7b" .
            "6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f70726f66" .
            "696c65732f2a2f6170706c69636174696f6e732f2a7d12c7010a104c6973" .
            "744170706c69636174696f6e7312342e676f6f676c652e636c6f75642e74" .
            "616c656e742e763462657461312e4c6973744170706c69636174696f6e73" .
            "526571756573741a352e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e4c6973744170706c69636174696f6e73526573706f6e" .
            "7365224682d3e4930240123e2f763462657461312f7b706172656e743d70" .
            "726f6a656374732f2a2f74656e616e74732f2a2f70726f66696c65732f2a" .
            "7d2f6170706c69636174696f6e731a6cca41136a6f62732e676f6f676c65" .
            "617069732e636f6dd2415368747470733a2f2f7777772e676f6f676c6561" .
            "7069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c6874" .
            "7470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f" .
            "6a6f62734285010a1f636f6d2e676f6f676c652e636c6f75642e74616c65" .
            "6e742e7634626574613142174170706c69636174696f6e53657276696365" .
            "50726f746f50015a41676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f636c6f75642f74616c656e742f" .
            "763462657461313b74616c656e74a20203435453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

