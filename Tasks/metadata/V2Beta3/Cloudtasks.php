<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta3;

class Cloudtasks
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Queue::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Task::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0aaa270a2b676f6f676c652f636c6f75642f7461736b732f763262657461" .
            "332f636c6f75647461736b732e70726f746f121a676f6f676c652e636c6f" .
            "75642e7461736b732e763262657461331a17676f6f676c652f6170692f63" .
            "6c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f" .
            "6265686176696f722e70726f746f1a19676f6f676c652f6170692f726573" .
            "6f757263652e70726f746f1a26676f6f676c652f636c6f75642f7461736b" .
            "732f763262657461332f71756575652e70726f746f1a25676f6f676c652f" .
            "636c6f75642f7461736b732f763262657461332f7461736b2e70726f746f" .
            "1a1e676f6f676c652f69616d2f76312f69616d5f706f6c6963792e70726f" .
            "746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e70726f746f" .
            "1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a" .
            "20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e7072" .
            "6f746f2283010a114c6973745175657565735265717565737412370a0670" .
            "6172656e741801200128094227e04102fa4121121f636c6f75647461736b" .
            "732e676f6f676c65617069732e636f6d2f5175657565120e0a0666696c74" .
            "657218022001280912110a09706167655f73697a6518032001280512120a" .
            "0a706167655f746f6b656e18042001280922600a124c6973745175657565" .
            "73526573706f6e736512310a0671756575657318012003280b32212e676f" .
            "6f676c652e636c6f75642e7461736b732e763262657461332e5175657565" .
            "12170a0f6e6578745f706167655f746f6b656e18022001280922480a0f47" .
            "657451756575655265717565737412350a046e616d651801200128094227" .
            "e04102fa41210a1f636c6f75647461736b732e676f6f676c65617069732e" .
            "636f6d2f51756575652284010a1243726561746551756575655265717565" .
            "737412370a06706172656e741801200128094227e04102fa4121121f636c" .
            "6f75647461736b732e676f6f676c65617069732e636f6d2f517565756512" .
            "350a05717565756518022001280b32212e676f6f676c652e636c6f75642e" .
            "7461736b732e763262657461332e51756575654203e04102227c0a125570" .
            "6461746551756575655265717565737412350a0571756575651801200128" .
            "0b32212e676f6f676c652e636c6f75642e7461736b732e76326265746133" .
            "2e51756575654203e04102122f0a0b7570646174655f6d61736b18022001" .
            "280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b" .
            "224b0a1244656c65746551756575655265717565737412350a046e616d65" .
            "1801200128094227e04102fa41210a1f636c6f75647461736b732e676f6f" .
            "676c65617069732e636f6d2f5175657565224a0a11507572676551756575" .
            "655265717565737412350a046e616d651801200128094227e04102fa4121" .
            "0a1f636c6f75647461736b732e676f6f676c65617069732e636f6d2f5175" .
            "657565224a0a11506175736551756575655265717565737412350a046e61" .
            "6d651801200128094227e04102fa41210a1f636c6f75647461736b732e67" .
            "6f6f676c65617069732e636f6d2f5175657565224b0a12526573756d6551" .
            "756575655265717565737412350a046e616d651801200128094227e04102" .
            "fa41210a1f636c6f75647461736b732e676f6f676c65617069732e636f6d" .
            "2f517565756522af010a104c6973745461736b735265717565737412360a" .
            "06706172656e741801200128094226e04102fa4120121e636c6f75647461" .
            "736b732e676f6f676c65617069732e636f6d2f5461736b123c0a0d726573" .
            "706f6e73655f7669657718022001280e32252e676f6f676c652e636c6f75" .
            "642e7461736b732e763262657461332e5461736b2e5669657712110a0970" .
            "6167655f73697a6518032001280512120a0a706167655f746f6b656e1804" .
            "20012809225d0a114c6973745461736b73526573706f6e7365122f0a0574" .
            "61736b7318012003280b32202e676f6f676c652e636c6f75642e7461736b" .
            "732e763262657461332e5461736b12170a0f6e6578745f706167655f746f" .
            "6b656e1802200128092284010a0e4765745461736b526571756573741234" .
            "0a046e616d651801200128094226e04102fa41200a1e636c6f7564746173" .
            "6b732e676f6f676c65617069732e636f6d2f5461736b123c0a0d72657370" .
            "6f6e73655f7669657718022001280e32252e676f6f676c652e636c6f7564" .
            "2e7461736b732e763262657461332e5461736b2e5669657722be010a1143" .
            "72656174655461736b5265717565737412360a06706172656e7418012001" .
            "28094226e04102fa4120121e636c6f75647461736b732e676f6f676c6561" .
            "7069732e636f6d2f5461736b12330a047461736b18022001280b32202e67" .
            "6f6f676c652e636c6f75642e7461736b732e763262657461332e5461736b" .
            "4203e04102123c0a0d726573706f6e73655f7669657718032001280e3225" .
            "2e676f6f676c652e636c6f75642e7461736b732e763262657461332e5461" .
            "736b2e5669657722490a1144656c6574655461736b526571756573741234" .
            "0a046e616d651801200128094226e04102fa41200a1e636c6f7564746173" .
            "6b732e676f6f676c65617069732e636f6d2f5461736b2284010a0e52756e" .
            "5461736b5265717565737412340a046e616d651801200128094226e04102" .
            "fa41200a1e636c6f75647461736b732e676f6f676c65617069732e636f6d" .
            "2f5461736b123c0a0d726573706f6e73655f7669657718022001280e3225" .
            "2e676f6f676c652e636c6f75642e7461736b732e763262657461332e5461" .
            "736b2e5669657732a5160a0a436c6f75645461736b7312ad010a0a4c6973" .
            "74517565756573122d2e676f6f676c652e636c6f75642e7461736b732e76" .
            "3262657461332e4c697374517565756573526571756573741a2e2e676f6f" .
            "676c652e636c6f75642e7461736b732e763262657461332e4c6973745175" .
            "65756573526573706f6e7365224082d3e4930231122f2f76326265746133" .
            "2f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f" .
            "2a7d2f717565756573da4106706172656e74129a010a0847657451756575" .
            "65122b2e676f6f676c652e636c6f75642e7461736b732e76326265746133" .
            "2e4765745175657565526571756573741a212e676f6f676c652e636c6f75" .
            "642e7461736b732e763262657461332e5175657565223e82d3e493023112" .
            "2f2f763262657461332f7b6e616d653d70726f6a656374732f2a2f6c6f63" .
            "6174696f6e732f2a2f7175657565732f2a7dda41046e616d6512af010a0b" .
            "4372656174655175657565122e2e676f6f676c652e636c6f75642e746173" .
            "6b732e763262657461332e4372656174655175657565526571756573741a" .
            "212e676f6f676c652e636c6f75642e7461736b732e763262657461332e51" .
            "75657565224d82d3e4930238222f2f763262657461332f7b706172656e74" .
            "3d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f7175657565" .
            "733a057175657565da410c706172656e742c717565756512ba010a0b5570" .
            "646174655175657565122e2e676f6f676c652e636c6f75642e7461736b73" .
            "2e763262657461332e5570646174655175657565526571756573741a212e" .
            "676f6f676c652e636c6f75642e7461736b732e763262657461332e517565" .
            "7565225882d3e493023e32352f763262657461332f7b71756575652e6e61" .
            "6d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f71756575" .
            "65732f2a7d3a057175657565da411171756575652c7570646174655f6d61" .
            "736b1295010a0b44656c6574655175657565122e2e676f6f676c652e636c" .
            "6f75642e7461736b732e763262657461332e44656c657465517565756552" .
            "6571756573741a162e676f6f676c652e70726f746f6275662e456d707479" .
            "223e82d3e49302312a2f2f763262657461332f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f7175657565732f2a7dda4104" .
            "6e616d6512a7010a0a50757267655175657565122d2e676f6f676c652e63" .
            "6c6f75642e7461736b732e763262657461332e5075726765517565756552" .
            "6571756573741a212e676f6f676c652e636c6f75642e7461736b732e7632" .
            "62657461332e5175657565224782d3e493023a22352f763262657461332f" .
            "7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f71" .
            "75657565732f2a7d3a70757267653a012ada41046e616d6512a7010a0a50" .
            "617573655175657565122d2e676f6f676c652e636c6f75642e7461736b73" .
            "2e763262657461332e50617573655175657565526571756573741a212e67" .
            "6f6f676c652e636c6f75642e7461736b732e763262657461332e51756575" .
            "65224782d3e493023a22352f763262657461332f7b6e616d653d70726f6a" .
            "656374732f2a2f6c6f636174696f6e732f2a2f7175657565732f2a7d3a70" .
            "617573653a012ada41046e616d6512aa010a0b526573756d655175657565" .
            "122e2e676f6f676c652e636c6f75642e7461736b732e763262657461332e" .
            "526573756d655175657565526571756573741a212e676f6f676c652e636c" .
            "6f75642e7461736b732e763262657461332e5175657565224882d3e49302" .
            "3b22362f763262657461332f7b6e616d653d70726f6a656374732f2a2f6c" .
            "6f636174696f6e732f2a2f7175657565732f2a7d3a726573756d653a012a" .
            "da41046e616d6512a1010a0c47657449616d506f6c69637912222e676f6f" .
            "676c652e69616d2e76312e47657449616d506f6c69637952657175657374" .
            "1a152e676f6f676c652e69616d2e76312e506f6c696379225682d3e49302" .
            "4522402f763262657461332f7b7265736f757263653d70726f6a65637473" .
            "2f2a2f6c6f636174696f6e732f2a2f7175657565732f2a7d3a6765744961" .
            "6d506f6c6963793a012ada41087265736f7572636512a8010a0c53657449" .
            "616d506f6c69637912222e676f6f676c652e69616d2e76312e5365744961" .
            "6d506f6c696379526571756573741a152e676f6f676c652e69616d2e7631" .
            "2e506f6c696379225d82d3e493024522402f763262657461332f7b726573" .
            "6f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f71" .
            "75657565732f2a7d3a73657449616d506f6c6963793a012ada410f726573" .
            "6f757263652c706f6c69637912d3010a125465737449616d5065726d6973" .
            "73696f6e7312282e676f6f676c652e69616d2e76312e5465737449616d50" .
            "65726d697373696f6e73526571756573741a292e676f6f676c652e69616d" .
            "2e76312e5465737449616d5065726d697373696f6e73526573706f6e7365" .
            "226882d3e493024b22462f763262657461332f7b7265736f757263653d70" .
            "726f6a656374732f2a2f6c6f636174696f6e732f2a2f7175657565732f2a" .
            "7d3a7465737449616d5065726d697373696f6e733a012ada41147265736f" .
            "757263652c7065726d697373696f6e7312b2010a094c6973745461736b73" .
            "122c2e676f6f676c652e636c6f75642e7461736b732e763262657461332e" .
            "4c6973745461736b73526571756573741a2d2e676f6f676c652e636c6f75" .
            "642e7461736b732e763262657461332e4c6973745461736b73526573706f" .
            "6e7365224882d3e493023912372f763262657461332f7b706172656e743d" .
            "70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7175657565732f" .
            "2a7d2f7461736b73da4106706172656e74129f010a074765745461736b12" .
            "2a2e676f6f676c652e636c6f75642e7461736b732e763262657461332e47" .
            "65745461736b526571756573741a202e676f6f676c652e636c6f75642e74" .
            "61736b732e763262657461332e5461736b224682d3e493023912372f7632" .
            "62657461332f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f" .
            "6e732f2a2f7175657565732f2a2f7461736b732f2a7dda41046e616d6512" .
            "af010a0a4372656174655461736b122d2e676f6f676c652e636c6f75642e" .
            "7461736b732e763262657461332e4372656174655461736b526571756573" .
            "741a202e676f6f676c652e636c6f75642e7461736b732e76326265746133" .
            "2e5461736b225082d3e493023c22372f763262657461332f7b706172656e" .
            "743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7175657565" .
            "732f2a7d2f7461736b733a012ada410b706172656e742c7461736b129b01" .
            "0a0a44656c6574655461736b122d2e676f6f676c652e636c6f75642e7461" .
            "736b732e763262657461332e44656c6574655461736b526571756573741a" .
            "162e676f6f676c652e70726f746f6275662e456d707479224682d3e49302" .
            "392a372f763262657461332f7b6e616d653d70726f6a656374732f2a2f6c" .
            "6f636174696f6e732f2a2f7175657565732f2a2f7461736b732f2a7dda41" .
            "046e616d6512a6010a0752756e5461736b122a2e676f6f676c652e636c6f" .
            "75642e7461736b732e763262657461332e52756e5461736b526571756573" .
            "741a202e676f6f676c652e636c6f75642e7461736b732e76326265746133" .
            "2e5461736b224d82d3e4930240223b2f763262657461332f7b6e616d653d" .
            "70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7175657565732f" .
            "2a2f7461736b732f2a7d3a72756e3a012ada41046e616d651a4dca411963" .
            "6c6f75647461736b732e676f6f676c65617069732e636f6dd2412e687474" .
            "70733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f63" .
            "6c6f75642d706c6174666f726d427c0a1e636f6d2e676f6f676c652e636c" .
            "6f75642e7461736b732e76326265746133420f436c6f75645461736b7350" .
            "726f746f50015a3f676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f636c6f75642f7461736b732f7632" .
            "62657461333b7461736b73a202055441534b53620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

