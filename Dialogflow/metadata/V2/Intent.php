<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Intent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0ae6390a27676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "322f696e74656e742e70726f746f121a676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76321a2d676f6f676c652f636c6f75642f646961" .
            "6c6f67666c6f772f76322f617564696f5f636f6e6669672e70726f746f1a" .
            "28676f6f676c652f636c6f75642f6469616c6f67666c6f772f76322f636f" .
            "6e746578742e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e" .
            "672f6f7065726174696f6e732e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70" .
            "726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f7072" .
            "6f746f6275662f6669656c645f6d61736b2e70726f746f1a1c676f6f676c" .
            "652f70726f746f6275662f7374727563742e70726f746f1a17676f6f676c" .
            "652f6170692f636c69656e742e70726f746f228c210a06496e74656e7412" .
            "0c0a046e616d6518012001280912140a0c646973706c61795f6e616d6518" .
            "022001280912460a0d776562686f6f6b5f737461746518062001280e322f" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e" .
            "74656e742e576562686f6f6b537461746512100a087072696f7269747918" .
            "032001280512130a0b69735f66616c6c6261636b18042001280812130a0b" .
            "6d6c5f64697361626c6564181320012808121b0a13696e7075745f636f6e" .
            "746578745f6e616d6573180720032809120e0a066576656e747318082003" .
            "2809124b0a10747261696e696e675f7068726173657318092003280b3231" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e" .
            "74656e742e547261696e696e67506872617365120e0a06616374696f6e18" .
            "0a20012809123c0a0f6f75747075745f636f6e7465787473180b2003280b" .
            "32232e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e" .
            "436f6e7465787412160a0e72657365745f636f6e7465787473180c200128" .
            "0812400a0a706172616d6574657273180d2003280b322c2e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e5061" .
            "72616d65746572123c0a086d65737361676573180e2003280b322a2e676f" .
            "6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e" .
            "742e4d65737361676512570a1a64656661756c745f726573706f6e73655f" .
            "706c6174666f726d73180f2003280e32332e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e496e74656e742e4d6573736167652e" .
            "506c6174666f726d12210a19726f6f745f666f6c6c6f7775705f696e7465" .
            "6e745f6e616d6518102001280912230a1b706172656e745f666f6c6c6f77" .
            "75705f696e74656e745f6e616d6518112001280912530a14666f6c6c6f77" .
            "75705f696e74656e745f696e666f18122003280b32352e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e466f6c" .
            "6c6f777570496e74656e74496e666f1ad3020a0e547261696e696e675068" .
            "72617365120c0a046e616d6518012001280912440a047479706518022001" .
            "280e32362e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "322e496e74656e742e547261696e696e675068726173652e547970651245" .
            "0a05706172747318032003280b32362e676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76322e496e74656e742e547261696e696e675068" .
            "726173652e5061727412190a1174696d65735f61646465645f636f756e74" .
            "1804200128051a4e0a0450617274120c0a04746578741801200128091213" .
            "0a0b656e746974795f74797065180220012809120d0a05616c6961731803" .
            "2001280912140a0c757365725f646566696e6564180420012808223b0a04" .
            "5479706512140a10545950455f554e5350454349464945441000120b0a07" .
            "4558414d504c45100112100a0854454d504c41544510021a0208011aac01" .
            "0a09506172616d65746572120c0a046e616d6518012001280912140a0c64" .
            "6973706c61795f6e616d65180220012809120d0a0576616c756518032001" .
            "280912150a0d64656661756c745f76616c756518042001280912200a1865" .
            "6e746974795f747970655f646973706c61795f6e616d6518052001280912" .
            "110a096d616e6461746f7279180620012808120f0a0770726f6d70747318" .
            "0720032809120f0a0769735f6c6973741808200128081aaf150a074d6573" .
            "73616765123f0a047465787418012001280b322f2e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e76322e496e74656e742e4d65737361" .
            "67652e54657874480012410a05696d61676518022001280b32302e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e74" .
            "2e4d6573736167652e496d616765480012500a0d717569636b5f7265706c" .
            "69657318032001280b32372e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e76322e496e74656e742e4d6573736167652e517569636b52" .
            "65706c6965734800123f0a046361726418042001280b322f2e676f6f676c" .
            "652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e4d" .
            "6573736167652e436172644800122a0a077061796c6f616418052001280b" .
            "32172e676f6f676c652e70726f746f6275662e537472756374480012560a" .
            "1073696d706c655f726573706f6e73657318072001280b323a2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e" .
            "4d6573736167652e53696d706c65526573706f6e7365734800124a0a0a62" .
            "617369635f6361726418082001280b32342e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e496e74656e742e4d6573736167652e" .
            "4261736963436172644800124d0a0b73756767657374696f6e7318092001" .
            "280b32362e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "322e496e74656e742e4d6573736167652e53756767657374696f6e734800" .
            "125b0a136c696e6b5f6f75745f73756767657374696f6e180a2001280b32" .
            "3c2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e49" .
            "6e74656e742e4d6573736167652e4c696e6b4f757453756767657374696f" .
            "6e4800124c0a0b6c6973745f73656c656374180b2001280b32352e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e74" .
            "2e4d6573736167652e4c69737453656c656374480012540a0f6361726f75" .
            "73656c5f73656c656374180c2001280b32392e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e496e74656e742e4d657373616765" .
            "2e4361726f7573656c53656c656374480012450a08706c6174666f726d18" .
            "062001280e32332e676f6f676c652e636c6f75642e6469616c6f67666c6f" .
            "772e76322e496e74656e742e4d6573736167652e506c6174666f726d1a14" .
            "0a0454657874120c0a04746578741801200328091a360a05496d61676512" .
            "110a09696d6167655f757269180120012809121a0a126163636573736962" .
            "696c6974795f746578741802200128091a340a0c517569636b5265706c69" .
            "6573120d0a057469746c6518012001280912150a0d717569636b5f726570" .
            "6c6965731802200328091aad010a0443617264120d0a057469746c651801" .
            "2001280912100a087375627469746c6518022001280912110a09696d6167" .
            "655f75726918032001280912470a07627574746f6e7318042003280b3236" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e" .
            "74656e742e4d6573736167652e436172642e427574746f6e1a280a064275" .
            "74746f6e120c0a047465787418012001280912100a08706f73746261636b" .
            "1802200128091a4c0a0e53696d706c65526573706f6e736512160a0e7465" .
            "78745f746f5f737065656368180120012809120c0a0473736d6c18022001" .
            "280912140a0c646973706c61795f746578741803200128091a660a0f5369" .
            "6d706c65526573706f6e73657312530a1073696d706c655f726573706f6e" .
            "73657318012003280b32392e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e76322e496e74656e742e4d6573736167652e53696d706c65" .
            "526573706f6e73651aef020a09426173696343617264120d0a057469746c" .
            "6518012001280912100a087375627469746c6518022001280912160a0e66" .
            "6f726d61747465645f74657874180320012809123f0a05696d6167651804" .
            "2001280b32302e676f6f676c652e636c6f75642e6469616c6f67666c6f77" .
            "2e76322e496e74656e742e4d6573736167652e496d616765124c0a076275" .
            "74746f6e7318052003280b323b2e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e76322e496e74656e742e4d6573736167652e42617369" .
            "63436172642e427574746f6e1a99010a06427574746f6e120d0a05746974" .
            "6c6518012001280912620a0f6f70656e5f7572695f616374696f6e180220" .
            "01280b32492e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e496e74656e742e4d6573736167652e4261736963436172642e4275" .
            "74746f6e2e4f70656e557269416374696f6e1a1c0a0d4f70656e55726941" .
            "6374696f6e120b0a037572691801200128091a1b0a0a5375676765737469" .
            "6f6e120d0a057469746c651801200128091a590a0b53756767657374696f" .
            "6e73124a0a0b73756767657374696f6e7318012003280b32352e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e" .
            "4d6573736167652e53756767657374696f6e1a3a0a114c696e6b4f757453" .
            "756767657374696f6e12180a1064657374696e6174696f6e5f6e616d6518" .
            "0120012809120b0a037572691802200128091a9d020a0a4c69737453656c" .
            "656374120d0a057469746c6518012001280912490a056974656d73180220" .
            "03280b323a2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e496e74656e742e4d6573736167652e4c69737453656c6563742e49" .
            "74656d1ab4010a044974656d12470a04696e666f18012001280b32392e67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e7465" .
            "6e742e4d6573736167652e53656c6563744974656d496e666f120d0a0574" .
            "69746c6518022001280912130a0b6465736372697074696f6e1803200128" .
            "09123f0a05696d61676518042001280b32302e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e496e74656e742e4d657373616765" .
            "2e496d6167651a96020a0e4361726f7573656c53656c656374124d0a0569" .
            "74656d7318012003280b323e2e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e496e74656e742e4d6573736167652e4361726f75" .
            "73656c53656c6563742e4974656d1ab4010a044974656d12470a04696e66" .
            "6f18012001280b32392e676f6f676c652e636c6f75642e6469616c6f6766" .
            "6c6f772e76322e496e74656e742e4d6573736167652e53656c6563744974" .
            "656d496e666f120d0a057469746c6518022001280912130a0b6465736372" .
            "697074696f6e180320012809123f0a05696d61676518042001280b32302e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74" .
            "656e742e4d6573736167652e496d6167651a2f0a0e53656c656374497465" .
            "6d496e666f120b0a036b657918012001280912100a0873796e6f6e796d73" .
            "18022003280922a0010a08506c6174666f726d12180a14504c4154464f52" .
            "4d5f554e5350454349464945441000120c0a0846414345424f4f4b100112" .
            "090a05534c41434b1002120c0a0854454c454752414d100312070a034b49" .
            "4b100412090a05534b595045100512080a044c494e45100612090a055649" .
            "424552100712150a11414354494f4e535f4f4e5f474f4f474c4510081213" .
            "0a0f474f4f474c455f48414e474f555453100b42090a076d657373616765" .
            "1a570a12466f6c6c6f777570496e74656e74496e666f121c0a14666f6c6c" .
            "6f7775705f696e74656e745f6e616d6518012001280912230a1b70617265" .
            "6e745f666f6c6c6f7775705f696e74656e745f6e616d6518022001280922" .
            "740a0c576562686f6f6b5374617465121d0a19574542484f4f4b5f535441" .
            "54455f554e535045434946494544100012190a15574542484f4f4b5f5354" .
            "4154455f454e41424c45441001122a0a26574542484f4f4b5f5354415445" .
            "5f454e41424c45445f464f525f534c4f545f46494c4c494e471002229f01" .
            "0a124c697374496e74656e747352657175657374120e0a06706172656e74" .
            "18012001280912150a0d6c616e67756167655f636f646518022001280912" .
            "3b0a0b696e74656e745f7669657718032001280e32262e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e496e74656e7456696577" .
            "12110a09706167655f73697a6518042001280512120a0a706167655f746f" .
            "6b656e18052001280922630a134c697374496e74656e7473526573706f6e" .
            "736512330a07696e74656e747318012003280b32222e676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e76322e496e74656e7412170a0f6e" .
            "6578745f706167655f746f6b656e18022001280922740a10476574496e74" .
            "656e7452657175657374120c0a046e616d6518012001280912150a0d6c61" .
            "6e67756167655f636f6465180220012809123b0a0b696e74656e745f7669" .
            "657718032001280e32262e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e496e74656e745669657722ad010a1343726561746549" .
            "6e74656e7452657175657374120e0a06706172656e741801200128091232" .
            "0a06696e74656e7418022001280b32222e676f6f676c652e636c6f75642e" .
            "6469616c6f67666c6f772e76322e496e74656e7412150a0d6c616e677561" .
            "67655f636f6465180320012809123b0a0b696e74656e745f766965771804" .
            "2001280e32262e676f6f676c652e636c6f75642e6469616c6f67666c6f77" .
            "2e76322e496e74656e745669657722ce010a13557064617465496e74656e" .
            "745265717565737412320a06696e74656e7418012001280b32222e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e74" .
            "12150a0d6c616e67756167655f636f6465180220012809122f0a0b757064" .
            "6174655f6d61736b18032001280b321a2e676f6f676c652e70726f746f62" .
            "75662e4669656c644d61736b123b0a0b696e74656e745f76696577180420" .
            "01280e32262e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e496e74656e745669657722230a1344656c657465496e74656e7452" .
            "657175657374120c0a046e616d6518012001280922a4020a194261746368" .
            "557064617465496e74656e747352657175657374120e0a06706172656e74" .
            "180120012809121a0a10696e74656e745f62617463685f75726918022001" .
            "2809480012460a13696e74656e745f62617463685f696e6c696e65180320" .
            "01280b32272e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e496e74656e744261746368480012150a0d6c616e67756167655f63" .
            "6f6465180420012809122f0a0b7570646174655f6d61736b18052001280b" .
            "321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b123b" .
            "0a0b696e74656e745f7669657718062001280e32262e676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e76322e496e74656e745669657742" .
            "0e0a0c696e74656e745f626174636822510a1a4261746368557064617465" .
            "496e74656e7473526573706f6e736512330a07696e74656e747318012003" .
            "280b32222e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "322e496e74656e7422600a19426174636844656c657465496e74656e7473" .
            "52657175657374120e0a06706172656e7418012001280912330a07696e74" .
            "656e747318022003280b32222e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e496e74656e7422420a0b496e74656e7442617463" .
            "6812330a07696e74656e747318012003280b32222e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e76322e496e74656e742a3f0a0a496e" .
            "74656e7456696577121b0a17494e54454e545f564945575f554e53504543" .
            "4946494544100012140a10494e54454e545f564945575f46554c4c100132" .
            "d2090a07496e74656e7473129d010a0b4c697374496e74656e7473122e2e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e4c6973" .
            "74496e74656e7473526571756573741a2f2e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e4c697374496e74656e747352657370" .
            "6f6e7365222d82d3e493022712252f76322f7b706172656e743d70726f6a" .
            "656374732f2a2f6167656e747d2f696e74656e7473128c010a0947657449" .
            "6e74656e74122c2e676f6f676c652e636c6f75642e6469616c6f67666c6f" .
            "772e76322e476574496e74656e74526571756573741a222e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e496e74656e74222d82" .
            "d3e493022712252f76322f7b6e616d653d70726f6a656374732f2a2f6167" .
            "656e742f696e74656e74732f2a7d129a010a0c437265617465496e74656e" .
            "74122f2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632" .
            "2e437265617465496e74656e74526571756573741a222e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e496e74656e74223582d3" .
            "e493022f22252f76322f7b706172656e743d70726f6a656374732f2a2f61" .
            "67656e747d2f696e74656e74733a06696e74656e7412a1010a0c55706461" .
            "7465496e74656e74122f2e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e557064617465496e74656e74526571756573741a222e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74" .
            "656e74223c82d3e4930236322c2f76322f7b696e74656e742e6e616d653d" .
            "70726f6a656374732f2a2f6167656e742f696e74656e74732f2a7d3a0669" .
            "6e74656e741286010a0c44656c657465496e74656e74122f2e676f6f676c" .
            "652e636c6f75642e6469616c6f67666c6f772e76322e44656c657465496e" .
            "74656e74526571756573741a162e676f6f676c652e70726f746f6275662e" .
            "456d707479222d82d3e49302272a252f76322f7b6e616d653d70726f6a65" .
            "6374732f2a2f6167656e742f696e74656e74732f2a7d12a8010a12426174" .
            "6368557064617465496e74656e747312352e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e4261746368557064617465496e7465" .
            "6e7473526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e" .
            "672e4f7065726174696f6e223c82d3e493023622312f76322f7b70617265" .
            "6e743d70726f6a656374732f2a2f6167656e747d2f696e74656e74733a62" .
            "617463685570646174653a012a12a8010a12426174636844656c65746549" .
            "6e74656e747312352e676f6f676c652e636c6f75642e6469616c6f67666c" .
            "6f772e76322e426174636844656c657465496e74656e7473526571756573" .
            "741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572617469" .
            "6f6e223c82d3e493023622312f76322f7b706172656e743d70726f6a6563" .
            "74732f2a2f6167656e747d2f696e74656e74733a626174636844656c6574" .
            "653a012a1a78ca41196469616c6f67666c6f772e676f6f676c6561706973" .
            "2e636f6dd2415968747470733a2f2f7777772e676f6f676c65617069732e" .
            "636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a" .
            "2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6469616c" .
            "6f67666c6f77429a010a1e636f6d2e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e7632420b496e74656e7450726f746f50015a44676f" .
            "6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c" .
            "65617069732f636c6f75642f6469616c6f67666c6f772f76323b6469616c" .
            "6f67666c6f77f80101a202024446aa021a476f6f676c652e436c6f75642e" .
            "4469616c6f67666c6f772e5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

