<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace GPBMetadata\Google\Pubsub\V1;

class Pubsub
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
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aef520a1d676f6f676c652f7075627375622f76312f7075627375622e70726f746f1210676f6f676c652e7075627375622e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f223b0a144d65737361676553746f72616765506f6c69637912230a1b616c6c6f7765645f70657273697374656e63655f726567696f6e7318012003280922b2020a05546f70696312110a046e616d651801200128094203e0410212330a066c6162656c7318022003280b32232e676f6f676c652e7075627375622e76312e546f7069632e4c6162656c73456e74727912460a166d6573736167655f73746f726167655f706f6c69637918032001280b32262e676f6f676c652e7075627375622e76312e4d65737361676553746f72616765506f6c69637912140a0c6b6d735f6b65795f6e616d651805200128091a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238013a54ea41510a1b7075627375622e676f6f676c65617069732e636f6d2f546f706963122170726f6a656374732f7b70726f6a6563747d2f746f706963732f7b746f7069637d120f5f64656c657465642d746f7069635f22f1010a0d5075627375624d657373616765120c0a046461746118012001280c12430a0a6174747269627574657318022003280b322f2e676f6f676c652e7075627375622e76312e5075627375624d6573736167652e41747472696275746573456e74727912120a0a6d6573736167655f696418032001280912300a0c7075626c6973685f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012140a0c6f72646572696e675f6b65791805200128091a310a0f41747472696275746573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122450a0f476574546f7069635265717565737412320a05746f7069631801200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f70696322770a12557064617465546f70696352657175657374122b0a05746f70696318012001280b32172e676f6f676c652e7075627375622e76312e546f7069634203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e04102227c0a0e5075626c6973685265717565737412320a05746f7069631801200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f70696312360a086d6573736167657318022003280b321f2e676f6f676c652e7075627375622e76312e5075627375624d6573736167654203e0410222260a0f5075626c697368526573706f6e736512130a0b6d6573736167655f6964731801200328092280010a114c697374546f706963735265717565737412440a0770726f6a6563741801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e18032001280922560a124c697374546f70696373526573706f6e736512270a06746f7069637318012003280b32172e676f6f676c652e7075627375622e76312e546f70696312170a0f6e6578745f706167655f746f6b656e180220012809227a0a1d4c697374546f706963537562736372697074696f6e735265717565737412320a05746f7069631801200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f70696312110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e18032001280922790a1e4c697374546f706963537562736372697074696f6e73526573706f6e7365123e0a0d737562736372697074696f6e731801200328094227fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e12170a0f6e6578745f706167655f746f6b656e18022001280922760a194c697374546f706963536e617073686f74735265717565737412320a05746f7069631801200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f70696312110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e18032001280922480a1a4c697374546f706963536e617073686f7473526573706f6e736512110a09736e617073686f747318012003280912170a0f6e6578745f706167655f746f6b656e18022001280922480a1244656c657465546f7069635265717565737412320a05746f7069631801200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f70696322560a19446574616368537562736372697074696f6e5265717565737412390a0c737562736372697074696f6e1801200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f706963221c0a1a446574616368537562736372697074696f6e526573706f6e736522ae050a0c537562736372697074696f6e12110a046e616d651801200128094203e0410212320a05746f7069631802200128094223e04102fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f70696312310a0b707573685f636f6e66696718042001280b321c2e676f6f676c652e7075627375622e76312e50757368436f6e666967121c0a1461636b5f646561646c696e655f7365636f6e6473180520012805121d0a1572657461696e5f61636b65645f6d65737361676573180720012808123d0a1a6d6573736167655f726574656e74696f6e5f6475726174696f6e18082001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e123a0a066c6162656c7318092003280b322a2e676f6f676c652e7075627375622e76312e537562736372697074696f6e2e4c6162656c73456e747279121f0a17656e61626c655f6d6573736167655f6f72646572696e67180a20012808123d0a1165787069726174696f6e5f706f6c696379180b2001280b32222e676f6f676c652e7075627375622e76312e45787069726174696f6e506f6c696379120e0a0666696c746572180c20012809123e0a12646561645f6c65747465725f706f6c696379180d2001280b32222e676f6f676c652e7075627375622e76312e446561644c6574746572506f6c69637912330a0c72657472795f706f6c696379180e2001280b321d2e676f6f676c652e7075627375622e76312e5265747279506f6c6963791a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238013a58ea41550a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e122f70726f6a656374732f7b70726f6a6563747d2f737562736372697074696f6e732f7b737562736372697074696f6e7d22750a0b5265747279506f6c69637912320a0f6d696e696d756d5f6261636b6f666618012001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e12320a0f6d6178696d756d5f6261636b6f666618022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e224c0a10446561644c6574746572506f6c69637912190a11646561645f6c65747465725f746f706963180120012809121d0a156d61785f64656c69766572795f617474656d707473180220012805223a0a1045787069726174696f6e506f6c69637912260a0374746c18012001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e22ad020a0a50757368436f6e66696712150a0d707573685f656e64706f696e7418012001280912400a0a6174747269627574657318022003280b322c2e676f6f676c652e7075627375622e76312e50757368436f6e6669672e41747472696275746573456e747279123c0a0a6f6964635f746f6b656e18032001280b32262e676f6f676c652e7075627375622e76312e50757368436f6e6669672e4f696463546f6b656e48001a3c0a094f696463546f6b656e121d0a15736572766963655f6163636f756e745f656d61696c18012001280912100a0861756469656e63651802200128091a310a0f41747472696275746573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380142170a1561757468656e7469636174696f6e5f6d6574686f64226d0a0f52656365697665644d657373616765120e0a0661636b5f696418012001280912300a076d65737361676518022001280b321f2e676f6f676c652e7075627375622e76312e5075627375624d65737361676512180a1064656c69766572795f617474656d7074180320012805225a0a16476574537562736372697074696f6e5265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e228c010a19557064617465537562736372697074696f6e5265717565737412390a0c737562736372697074696f6e18012001280b321e2e676f6f676c652e7075627375622e76312e537562736372697074696f6e4203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e041022287010a184c697374537562736372697074696f6e735265717565737412440a0770726f6a6563741801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e180320012809226b0a194c697374537562736372697074696f6e73526573706f6e736512350a0d737562736372697074696f6e7318012003280b321e2e676f6f676c652e7075627375622e76312e537562736372697074696f6e12170a0f6e6578745f706167655f746f6b656e180220012809225d0a1944656c657465537562736372697074696f6e5265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e2293010a174d6f6469667950757368436f6e6669675265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e12360a0b707573685f636f6e66696718022001280b321c2e676f6f676c652e7075627375622e76312e50757368436f6e6669674203e04102228d010a0b50756c6c5265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e12210a1272657475726e5f696d6d6564696174656c7918022001280842051801e0410112190a0c6d61785f6d657373616765731803200128054203e04102224c0a0c50756c6c526573706f6e7365123c0a1172656365697665645f6d6573736167657318012003280b32212e676f6f676c652e7075627375622e76312e52656365697665644d6573736167652295010a184d6f6469667941636b446561646c696e655265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e12140a0761636b5f6964731804200328094203e0410212210a1461636b5f646561646c696e655f7365636f6e64731803200128054203e04102226c0a1241636b6e6f776c656467655265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e12140a0761636b5f6964731802200328094203e0410222e8010a1453747265616d696e6750756c6c5265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e120f0a0761636b5f696473180220032809121f0a176d6f646966795f646561646c696e655f7365636f6e6473180320032805121f0a176d6f646966795f646561646c696e655f61636b5f69647318042003280912280a1b73747265616d5f61636b5f646561646c696e655f7365636f6e64731805200128054203e0410212110a09636c69656e745f696418062001280922550a1553747265616d696e6750756c6c526573706f6e7365123c0a1172656365697665645f6d6573736167657318012003280b32212e676f6f676c652e7075627375622e76312e52656365697665644d6573736167652283020a15437265617465536e617073686f745265717565737412340a046e616d651801200128094226e04102fa41200a1e7075627375622e676f6f676c65617069732e636f6d2f536e617073686f7412400a0c737562736372697074696f6e180220012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e12430a066c6162656c7318032003280b32332e676f6f676c652e7075627375622e76312e437265617465536e617073686f74526571756573742e4c6162656c73456e7472791a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238012280010a15557064617465536e617073686f745265717565737412310a08736e617073686f7418012001280b321a2e676f6f676c652e7075627375622e76312e536e617073686f744203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e0410222af020a08536e617073686f74120c0a046e616d65180120012809122f0a05746f7069631802200128094220fa411d0a1b7075627375622e676f6f676c65617069732e636f6d2f546f706963122f0a0b6578706972655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012360a066c6162656c7318042003280b32262e676f6f676c652e7075627375622e76312e536e617073686f742e4c6162656c73456e7472791a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238013a4cea41490a1e7075627375622e676f6f676c65617069732e636f6d2f536e617073686f74122770726f6a656374732f7b70726f6a6563747d2f736e617073686f74732f7b736e617073686f747d224e0a12476574536e617073686f745265717565737412380a08736e617073686f741801200128094226e04102fa41200a1e7075627375622e676f6f676c65617069732e636f6d2f536e617073686f742283010a144c697374536e617073686f74735265717565737412440a0770726f6a6563741801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e180320012809225f0a154c697374536e617073686f7473526573706f6e7365122d0a09736e617073686f747318012003280b321a2e676f6f676c652e7075627375622e76312e536e617073686f7412170a0f6e6578745f706167655f746f6b656e18022001280922510a1544656c657465536e617073686f745265717565737412380a08736e617073686f741801200128094226e04102fa41200a1e7075627375622e676f6f676c65617069732e636f6d2f536e617073686f7422be010a0b5365656b5265717565737412400a0c737562736372697074696f6e180120012809422ae04102fa41240a227075627375622e676f6f676c65617069732e636f6d2f537562736372697074696f6e122a0a0474696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70480012370a08736e617073686f741803200128094223fa41200a1e7075627375622e676f6f676c65617069732e636f6d2f536e617073686f74480042080a06746172676574220e0a0c5365656b526573706f6e736532a30b0a095075626c697368657212710a0b437265617465546f70696312172e676f6f676c652e7075627375622e76312e546f7069631a172e676f6f676c652e7075627375622e76312e546f706963223082d3e49302231a1e2f76312f7b6e616d653d70726f6a656374732f2a2f746f706963732f2a7d3a012ada41046e616d65127d0a0b557064617465546f70696312242e676f6f676c652e7075627375622e76312e557064617465546f706963526571756573741a172e676f6f676c652e7075627375622e76312e546f706963222f82d3e493022932242f76312f7b746f7069632e6e616d653d70726f6a656374732f2a2f746f706963732f2a7d3a012a1293010a075075626c69736812202e676f6f676c652e7075627375622e76312e5075626c697368526571756573741a212e676f6f676c652e7075627375622e76312e5075626c697368526573706f6e7365224382d3e493022c22272f76312f7b746f7069633d70726f6a656374732f2a2f746f706963732f2a7d3a7075626c6973683a012ada410e746f7069632c6d6573736167657312770a08476574546f70696312212e676f6f676c652e7075627375622e76312e476574546f706963526571756573741a172e676f6f676c652e7075627375622e76312e546f706963222f82d3e4930221121f2f76312f7b746f7069633d70726f6a656374732f2a2f746f706963732f2a7dda4105746f706963128a010a0a4c697374546f7069637312232e676f6f676c652e7075627375622e76312e4c697374546f70696373526571756573741a242e676f6f676c652e7075627375622e76312e4c697374546f70696373526573706f6e7365223182d3e4930221121f2f76312f7b70726f6a6563743d70726f6a656374732f2a7d2f746f70696373da410770726f6a65637412ba010a164c697374546f706963537562736372697074696f6e73122f2e676f6f676c652e7075627375622e76312e4c697374546f706963537562736372697074696f6e73526571756573741a302e676f6f676c652e7075627375622e76312e4c697374546f706963537562736372697074696f6e73526573706f6e7365223d82d3e493022f122d2f76312f7b746f7069633d70726f6a656374732f2a2f746f706963732f2a7d2f737562736372697074696f6e73da4105746f70696312aa010a124c697374546f706963536e617073686f7473122b2e676f6f676c652e7075627375622e76312e4c697374546f706963536e617073686f7473526571756573741a2c2e676f6f676c652e7075627375622e76312e4c697374546f706963536e617073686f7473526573706f6e7365223982d3e493022b12292f76312f7b746f7069633d70726f6a656374732f2a2f746f706963732f2a7d2f736e617073686f7473da4105746f706963127c0a0b44656c657465546f70696312242e676f6f676c652e7075627375622e76312e44656c657465546f706963526571756573741a162e676f6f676c652e70726f746f6275662e456d707479222f82d3e49302212a1f2f76312f7b746f7069633d70726f6a656374732f2a2f746f706963732f2a7dda4105746f70696312ad010a12446574616368537562736372697074696f6e122b2e676f6f676c652e7075627375622e76312e446574616368537562736372697074696f6e526571756573741a2c2e676f6f676c652e7075627375622e76312e446574616368537562736372697074696f6e526573706f6e7365223c82d3e493023622342f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a6465746163681a70ca41157075627375622e676f6f676c65617069732e636f6dd2415568747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f7075627375623283150a0a5375627363726962657212b4010a12437265617465537562736372697074696f6e121e2e676f6f676c652e7075627375622e76312e537562736372697074696f6e1a1e2e676f6f676c652e7075627375622e76312e537562736372697074696f6e225e82d3e493022a1a252f76312f7b6e616d653d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a012ada412b6e616d652c746f7069632c707573685f636f6e6669672c61636b5f646561646c696e655f7365636f6e647312a1010a0f476574537562736372697074696f6e12282e676f6f676c652e7075627375622e76312e476574537562736372697074696f6e526571756573741a1e2e676f6f676c652e7075627375622e76312e537562736372697074696f6e224482d3e493022f122d2f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7dda410c737562736372697074696f6e12a0010a12557064617465537562736372697074696f6e122b2e676f6f676c652e7075627375622e76312e557064617465537562736372697074696f6e526571756573741a1e2e676f6f676c652e7075627375622e76312e537562736372697074696f6e223d82d3e493023732322f76312f7b737562736372697074696f6e2e6e616d653d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a012a12a6010a114c697374537562736372697074696f6e73122a2e676f6f676c652e7075627375622e76312e4c697374537562736372697074696f6e73526571756573741a2b2e676f6f676c652e7075627375622e76312e4c697374537562736372697074696f6e73526573706f6e7365223882d3e493022812262f76312f7b70726f6a6563743d70726f6a656374732f2a7d2f737562736372697074696f6e73da410770726f6a656374129f010a1244656c657465537562736372697074696f6e122b2e676f6f676c652e7075627375622e76312e44656c657465537562736372697074696f6e526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224482d3e493022f2a2d2f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7dda410c737562736372697074696f6e12cf010a114d6f6469667941636b446561646c696e65122a2e676f6f676c652e7075627375622e76312e4d6f6469667941636b446561646c696e65526571756573741a162e676f6f676c652e70726f746f6275662e456d707479227682d3e4930244223f2f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a6d6f6469667941636b446561646c696e653a012ada4129737562736372697074696f6e2c61636b5f6964732c61636b5f646561646c696e655f7365636f6e647312a8010a0b41636b6e6f776c6564676512242e676f6f676c652e7075627375622e76312e41636b6e6f776c65646765526571756573741a162e676f6f676c652e70726f746f6275662e456d707479225b82d3e493023e22392f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a61636b6e6f776c656467653a012ada4114737562736372697074696f6e2c61636b5f69647312b3010a0450756c6c121d2e676f6f676c652e7075627375622e76312e50756c6c526571756573741a1e2e676f6f676c652e7075627375622e76312e50756c6c526573706f6e7365226c82d3e493023722322f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a70756c6c3a012ada412c737562736372697074696f6e2c72657475726e5f696d6d6564696174656c792c6d61785f6d6573736167657312660a0d53747265616d696e6750756c6c12262e676f6f676c652e7075627375622e76312e53747265616d696e6750756c6c526571756573741a272e676f6f676c652e7075627375622e76312e53747265616d696e6750756c6c526573706f6e736522002801300112bb010a104d6f6469667950757368436f6e66696712292e676f6f676c652e7075627375622e76312e4d6f6469667950757368436f6e666967526571756573741a162e676f6f676c652e70726f746f6275662e456d707479226482d3e4930243223e2f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a6d6f6469667950757368436f6e6669673a012ada4118737562736372697074696f6e2c707573685f636f6e6669671289010a0b476574536e617073686f7412242e676f6f676c652e7075627375622e76312e476574536e617073686f74526571756573741a1a2e676f6f676c652e7075627375622e76312e536e617073686f74223882d3e493022712252f76312f7b736e617073686f743d70726f6a656374732f2a2f736e617073686f74732f2a7dda4108736e617073686f741296010a0d4c697374536e617073686f747312262e676f6f676c652e7075627375622e76312e4c697374536e617073686f7473526571756573741a272e676f6f676c652e7075627375622e76312e4c697374536e617073686f7473526573706f6e7365223482d3e493022412222f76312f7b70726f6a6563743d70726f6a656374732f2a7d2f736e617073686f7473da410770726f6a6563741297010a0e437265617465536e617073686f7412272e676f6f676c652e7075627375622e76312e437265617465536e617073686f74526571756573741a1a2e676f6f676c652e7075627375622e76312e536e617073686f74224082d3e49302261a212f76312f7b6e616d653d70726f6a656374732f2a2f736e617073686f74732f2a7d3a012ada41116e616d652c737562736372697074696f6e128c010a0e557064617465536e617073686f7412272e676f6f676c652e7075627375622e76312e557064617465536e617073686f74526571756573741a1a2e676f6f676c652e7075627375622e76312e536e617073686f74223582d3e493022f322a2f76312f7b736e617073686f742e6e616d653d70726f6a656374732f2a2f736e617073686f74732f2a7d3a012a128b010a0e44656c657465536e617073686f7412272e676f6f676c652e7075627375622e76312e44656c657465536e617073686f74526571756573741a162e676f6f676c652e70726f746f6275662e456d707479223882d3e49302272a252f76312f7b736e617073686f743d70726f6a656374732f2a2f736e617073686f74732f2a7dda4108736e617073686f741284010a045365656b121d2e676f6f676c652e7075627375622e76312e5365656b526571756573741a1e2e676f6f676c652e7075627375622e76312e5365656b526573706f6e7365223d82d3e493023722322f76312f7b737562736372697074696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a7365656b3a012a1a70ca41157075627375622e676f6f676c65617069732e636f6dd2415568747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f70756273756242ae010a14636f6d2e676f6f676c652e7075627375622e7631420b50756273756250726f746f50015a36676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f7075627375622f76313b707562737562f80101aa0216476f6f676c652e436c6f75642e5075625375622e5631ca0216476f6f676c655c436c6f75645c5075625375625c5631ea0219476f6f676c653a3a436c6f75643a3a5075625375623a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

