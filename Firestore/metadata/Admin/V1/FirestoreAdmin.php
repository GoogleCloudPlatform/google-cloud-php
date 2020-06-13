<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace GPBMetadata\Google\Firestore\Admin\V1;

class FirestoreAdmin
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
        \GPBMetadata\Google\Firestore\Admin\V1\Field::initOnce();
        \GPBMetadata\Google\Firestore\Admin\V1\Index::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab41e0a2f676f6f676c652f6669726573746f72652f61646d696e2f76312f6669726573746f72655f61646d696e2e70726f746f1219676f6f676c652e6669726573746f72652e61646d696e2e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a25676f6f676c652f6669726573746f72652f61646d696e2f76312f6669656c642e70726f746f1a25676f6f676c652f6669726573746f72652f61646d696e2f76312f696e6465782e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f228c010a12437265617465496e6465785265717565737412400a06706172656e741801200128094230e04102fa412a0a286669726573746f72652e676f6f676c65617069732e636f6d2f436f6c6c656374696f6e47726f757012340a05696e64657818022001280b32202e676f6f676c652e6669726573746f72652e61646d696e2e76312e496e6465784203e04102228d010a124c697374496e64657865735265717565737412400a06706172656e741801200128094230e04102fa412a0a286669726573746f72652e676f6f676c65617069732e636f6d2f436f6c6c656374696f6e47726f7570120e0a0666696c74657218022001280912110a09706167655f73697a6518032001280512120a0a706167655f746f6b656e18042001280922610a134c697374496e6465786573526573706f6e736512310a07696e646578657318012003280b32202e676f6f676c652e6669726573746f72652e61646d696e2e76312e496e64657812170a0f6e6578745f706167655f746f6b656e18022001280922470a0f476574496e6465785265717565737412340a046e616d651801200128094226e04102fa41200a1e6669726573746f72652e676f6f676c65617069732e636f6d2f496e646578224a0a1244656c657465496e6465785265717565737412340a046e616d651801200128094226e04102fa41200a1e6669726573746f72652e676f6f676c65617069732e636f6d2f496e646578227b0a125570646174654669656c645265717565737412340a056669656c6418012001280b32202e676f6f676c652e6669726573746f72652e61646d696e2e76312e4669656c644203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22470a0f4765744669656c645265717565737412340a046e616d651801200128094226e04102fa41200a1e6669726573746f72652e676f6f676c65617069732e636f6d2f4669656c64228c010a114c6973744669656c64735265717565737412400a06706172656e741801200128094230e04102fa412a0a286669726573746f72652e676f6f676c65617069732e636f6d2f436f6c6c656374696f6e47726f7570120e0a0666696c74657218022001280912110a09706167655f73697a6518032001280512120a0a706167655f746f6b656e180420012809225f0a124c6973744669656c6473526573706f6e736512300a066669656c647318012003280b32202e676f6f676c652e6669726573746f72652e61646d696e2e76312e4669656c6412170a0f6e6578745f706167655f746f6b656e1802200128092284010a164578706f7274446f63756d656e74735265717565737412370a046e616d651801200128094229e04102fa41230a216669726573746f72652e676f6f676c65617069732e636f6d2f446174616261736512160a0e636f6c6c656374696f6e5f69647318022003280912190a116f75747075745f7572695f7072656669781803200128092283010a16496d706f7274446f63756d656e74735265717565737412370a046e616d651801200128094229e04102fa41230a216669726573746f72652e676f6f676c65617069732e636f6d2f446174616261736512160a0e636f6c6c656374696f6e5f69647318022003280912180a10696e7075745f7572695f70726566697818032001280932f50e0a0e4669726573746f726541646d696e12db010a0b437265617465496e646578122d2e676f6f676c652e6669726573746f72652e61646d696e2e76312e437265617465496e646578526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227e82d3e4930247223e2f76312f7b706172656e743d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a7d2f696e64657865733a05696e646578da410c706172656e742c696e646578ca411f0a05496e6465781216496e6465784f7065726174696f6e4d6574616461746112bd010a0b4c697374496e6465786573122d2e676f6f676c652e6669726573746f72652e61646d696e2e76312e4c697374496e6465786573526571756573741a2e2e676f6f676c652e6669726573746f72652e61646d696e2e76312e4c697374496e6465786573526573706f6e7365224f82d3e4930240123e2f76312f7b706172656e743d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a7d2f696e6465786573da4106706172656e7412a7010a08476574496e646578122a2e676f6f676c652e6669726573746f72652e61646d696e2e76312e476574496e646578526571756573741a202e676f6f676c652e6669726573746f72652e61646d696e2e76312e496e646578224d82d3e4930240123e2f76312f7b6e616d653d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a2f696e64657865732f2a7dda41046e616d6512a3010a0b44656c657465496e646578122d2e676f6f676c652e6669726573746f72652e61646d696e2e76312e44656c657465496e646578526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224d82d3e49302402a3e2f76312f7b6e616d653d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a2f696e64657865732f2a7dda41046e616d6512a6010a084765744669656c64122a2e676f6f676c652e6669726573746f72652e61646d696e2e76312e4765744669656c64526571756573741a202e676f6f676c652e6669726573746f72652e61646d696e2e76312e4669656c64224c82d3e493023f123d2f76312f7b6e616d653d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a2f6669656c64732f2a7dda41046e616d6512d9010a0b5570646174654669656c64122d2e676f6f676c652e6669726573746f72652e61646d696e2e76312e5570646174654669656c64526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227c82d3e493024c32432f76312f7b6669656c642e6e616d653d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a2f6669656c64732f2a7d3a056669656c64da41056669656c64ca411f0a054669656c6412164669656c644f7065726174696f6e4d6574616461746112b9010a0a4c6973744669656c6473122c2e676f6f676c652e6669726573746f72652e61646d696e2e76312e4c6973744669656c6473526571756573741a2d2e676f6f676c652e6669726573746f72652e61646d696e2e76312e4c6973744669656c6473526573706f6e7365224e82d3e493023f123d2f76312f7b706172656e743d70726f6a656374732f2a2f6461746162617365732f2a2f636f6c6c656374696f6e47726f7570732f2a7d2f6669656c6473da4106706172656e7412dd010a0f4578706f7274446f63756d656e747312312e676f6f676c652e6669726573746f72652e61646d696e2e76312e4578706f7274446f63756d656e7473526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227882d3e493023622312f76312f7b6e616d653d70726f6a656374732f2a2f6461746162617365732f2a7d3a6578706f7274446f63756d656e74733a012ada41046e616d65ca41320a174578706f7274446f63756d656e7473526573706f6e736512174578706f7274446f63756d656e74734d6574616461746112db010a0f496d706f7274446f63756d656e747312312e676f6f676c652e6669726573746f72652e61646d696e2e76312e496d706f7274446f63756d656e7473526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227682d3e493023622312f76312f7b6e616d653d70726f6a656374732f2a2f6461746162617365732f2a7d3a696d706f7274446f63756d656e74733a012ada41046e616d65ca41300a15676f6f676c652e70726f746f6275662e456d7074791217496d706f7274446f63756d656e74734d657461646174611a76ca41186669726573746f72652e676f6f676c65617069732e636f6dd2415868747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6461746173746f72654284030a1d636f6d2e676f6f676c652e6669726573746f72652e61646d696e2e763142134669726573746f726541646d696e50726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6669726573746f72652f61646d696e2f76313b61646d696ea2020447434653aa021f476f6f676c652e436c6f75642e4669726573746f72652e41646d696e2e5631ca021f476f6f676c655c436c6f75645c4669726573746f72655c41646d696e5c5631ea414c0a216669726573746f72652e676f6f676c65617069732e636f6d2f4461746162617365122770726f6a656374732f7b70726f6a6563747d2f6461746162617365732f7b64617461626173657dea41710a286669726573746f72652e676f6f676c65617069732e636f6d2f436f6c6c656374696f6e47726f7570124570726f6a656374732f7b70726f6a6563747d2f6461746162617365732f7b64617461626173657d2f636f6c6c656374696f6e47726f7570732f7b636f6c6c656374696f6e7d620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

