<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Jobs
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad0400a23676f6f676c652f636c6f75642f6461746170726f632f76312f" .
            "6a6f62732e70726f746f1218676f6f676c652e636c6f75642e6461746170" .
            "726f632e76311a17676f6f676c652f6170692f636c69656e742e70726f74" .
            "6f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70" .
            "726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f70657261" .
            "74696f6e732e70726f746f1a1b676f6f676c652f70726f746f6275662f65" .
            "6d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669" .
            "656c645f6d61736b2e70726f746f1a1f676f6f676c652f70726f746f6275" .
            "662f74696d657374616d702e70726f746f22c1020a0d4c6f6767696e6743" .
            "6f6e66696712570a116472697665725f6c6f675f6c6576656c7318022003" .
            "280b323c2e676f6f676c652e636c6f75642e6461746170726f632e76312e" .
            "4c6f6767696e67436f6e6669672e4472697665724c6f674c6576656c7345" .
            "6e7472791a650a144472697665724c6f674c6576656c73456e747279120b" .
            "0a036b6579180120012809123c0a0576616c756518022001280e322d2e67" .
            "6f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e" .
            "67436f6e6669672e4c6576656c3a02380122700a054c6576656c12150a11" .
            "4c4556454c5f554e535045434946494544100012070a03414c4c10011209" .
            "0a055452414345100212090a054445425547100312080a04494e464f1004" .
            "12080a045741524e100512090a054552524f52100612090a05464154414c" .
            "100712070a034f4646100822f1020a094861646f6f704a6f62121b0a116d" .
            "61696e5f6a61725f66696c655f757269180120012809480012140a0a6d61" .
            "696e5f636c617373180220012809480012110a0461726773180320032809" .
            "4203e04101121a0a0d6a61725f66696c655f757269731804200328094203" .
            "e0410112160a0966696c655f757269731805200328094203e0410112190a" .
            "0c617263686976655f757269731806200328094203e04101124c0a0a7072" .
            "6f7065727469657318072003280b32332e676f6f676c652e636c6f75642e" .
            "6461746170726f632e76312e4861646f6f704a6f622e50726f7065727469" .
            "6573456e7472794203e0410112440a0e6c6f6767696e675f636f6e666967" .
            "18082001280b32272e676f6f676c652e636c6f75642e6461746170726f63" .
            "2e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50726f70" .
            "657274696573456e747279120b0a036b6579180120012809120d0a057661" .
            "6c75651802200128093a02380142080a0664726976657222ef020a085370" .
            "61726b4a6f62121b0a116d61696e5f6a61725f66696c655f757269180120" .
            "012809480012140a0a6d61696e5f636c617373180220012809480012110a" .
            "04617267731803200328094203e04101121a0a0d6a61725f66696c655f75" .
            "7269731804200328094203e0410112160a0966696c655f75726973180520" .
            "0328094203e0410112190a0c617263686976655f75726973180620032809" .
            "4203e04101124b0a0a70726f7065727469657318072003280b32322e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e537061726b4a6f" .
            "622e50726f70657274696573456e7472794203e0410112440a0e6c6f6767" .
            "696e675f636f6e66696718082001280b32272e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e0" .
            "41011a310a0f50726f70657274696573456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128093a02380142080a06647269" .
            "76657222f8020a0a5079537061726b4a6f6212210a146d61696e5f707974" .
            "686f6e5f66696c655f7572691801200128094203e0410212110a04617267" .
            "731802200328094203e04101121d0a10707974686f6e5f66696c655f7572" .
            "69731803200328094203e04101121a0a0d6a61725f66696c655f75726973" .
            "1804200328094203e0410112160a0966696c655f75726973180520032809" .
            "4203e0410112190a0c617263686976655f757269731806200328094203e0" .
            "4101124d0a0a70726f7065727469657318072003280b32342e676f6f676c" .
            "652e636c6f75642e6461746170726f632e76312e5079537061726b4a6f62" .
            "2e50726f70657274696573456e7472794203e0410112440a0e6c6f676769" .
            "6e675f636f6e66696718082001280b32272e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e76312e4c6f6767696e67436f6e6669674203e041" .
            "011a310a0f50726f70657274696573456e747279120b0a036b6579180120" .
            "012809120d0a0576616c75651802200128093a02380122210a0951756572" .
            "794c69737412140a07717565726965731801200328094203e0410222b503" .
            "0a07486976654a6f6212180a0e71756572795f66696c655f757269180120" .
            "012809480012390a0a71756572795f6c69737418022001280b32232e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e51756572794c69" .
            "7374480012200a13636f6e74696e75655f6f6e5f6661696c757265180320" .
            "0128084203e0410112550a107363726970745f7661726961626c65731804" .
            "2003280b32362e676f6f676c652e636c6f75642e6461746170726f632e76" .
            "312e486976654a6f622e5363726970745661726961626c6573456e747279" .
            "4203e04101124a0a0a70726f7065727469657318052003280b32312e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e486976654a6f62" .
            "2e50726f70657274696573456e7472794203e04101121a0a0d6a61725f66" .
            "696c655f757269731806200328094203e041011a360a1453637269707456" .
            "61726961626c6573456e747279120b0a036b6579180120012809120d0a05" .
            "76616c75651802200128093a0238011a310a0f50726f7065727469657345" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28093a02380142090a077175657269657322e5030a0b537061726b53716c" .
            "4a6f6212180a0e71756572795f66696c655f757269180120012809480012" .
            "390a0a71756572795f6c69737418022001280b32232e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e76312e51756572794c69737448001259" .
            "0a107363726970745f7661726961626c657318032003280b323a2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e537061726b53716c" .
            "4a6f622e5363726970745661726961626c6573456e7472794203e0410112" .
            "4e0a0a70726f7065727469657318042003280b32352e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e76312e537061726b53716c4a6f622e50" .
            "726f70657274696573456e7472794203e04101121a0a0d6a61725f66696c" .
            "655f757269731838200328094203e0410112440a0e6c6f6767696e675f63" .
            "6f6e66696718062001280b32272e676f6f676c652e636c6f75642e646174" .
            "6170726f632e76312e4c6f6767696e67436f6e6669674203e041011a360a" .
            "145363726970745661726961626c6573456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128093a0238011a310a0f50726f" .
            "70657274696573456e747279120b0a036b6579180120012809120d0a0576" .
            "616c75651802200128093a02380142090a077175657269657322f8030a06" .
            "5069674a6f6212180a0e71756572795f66696c655f757269180120012809" .
            "480012390a0a71756572795f6c69737418022001280b32232e676f6f676c" .
            "652e636c6f75642e6461746170726f632e76312e51756572794c69737448" .
            "0012200a13636f6e74696e75655f6f6e5f6661696c757265180320012808" .
            "4203e0410112540a107363726970745f7661726961626c65731804200328" .
            "0b32352e676f6f676c652e636c6f75642e6461746170726f632e76312e50" .
            "69674a6f622e5363726970745661726961626c6573456e7472794203e041" .
            "0112490a0a70726f7065727469657318052003280b32302e676f6f676c65" .
            "2e636c6f75642e6461746170726f632e76312e5069674a6f622e50726f70" .
            "657274696573456e7472794203e04101121a0a0d6a61725f66696c655f75" .
            "7269731806200328094203e0410112440a0e6c6f6767696e675f636f6e66" .
            "696718072001280b32272e676f6f676c652e636c6f75642e646174617072" .
            "6f632e76312e4c6f6767696e67436f6e6669674203e041011a360a145363" .
            "726970745661726961626c6573456e747279120b0a036b65791801200128" .
            "09120d0a0576616c75651802200128093a0238011a310a0f50726f706572" .
            "74696573456e747279120b0a036b6579180120012809120d0a0576616c75" .
            "651802200128093a02380142090a077175657269657322b6020a09537061" .
            "726b524a6f62121c0a0f6d61696e5f725f66696c655f7572691801200128" .
            "094203e0410212110a04617267731802200328094203e0410112160a0966" .
            "696c655f757269731803200328094203e0410112190a0c61726368697665" .
            "5f757269731804200328094203e04101124c0a0a70726f70657274696573" .
            "18052003280b32332e676f6f676c652e636c6f75642e6461746170726f63" .
            "2e76312e537061726b524a6f622e50726f70657274696573456e74727942" .
            "03e0410112440a0e6c6f6767696e675f636f6e66696718062001280b3227" .
            "2e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767" .
            "696e67436f6e6669674203e041011a310a0f50726f70657274696573456e" .
            "747279120b0a036b6579180120012809120d0a0576616c75651802200128" .
            "093a023801228a030a0950726573746f4a6f6212180a0e71756572795f66" .
            "696c655f757269180120012809480012390a0a71756572795f6c69737418" .
            "022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e" .
            "76312e51756572794c697374480012200a13636f6e74696e75655f6f6e5f" .
            "6661696c7572651803200128084203e04101121a0a0d6f75747075745f66" .
            "6f726d61741804200128094203e0410112180a0b636c69656e745f746167" .
            "731805200328094203e04101124c0a0a70726f7065727469657318062003" .
            "280b32332e676f6f676c652e636c6f75642e6461746170726f632e76312e" .
            "50726573746f4a6f622e50726f70657274696573456e7472794203e04101" .
            "12440a0e6c6f6767696e675f636f6e66696718072001280b32272e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e6743" .
            "6f6e6669674203e041011a310a0f50726f70657274696573456e74727912" .
            "0b0a036b6579180120012809120d0a0576616c75651802200128093a0238" .
            "0142090a077175657269657322440a0c4a6f62506c6163656d656e741219" .
            "0a0c636c75737465725f6e616d651801200128094203e0410212190a0c63" .
            "6c75737465725f757569641802200128094203e0410322d9030a094a6f62" .
            "537461747573123d0a05737461746518012001280e32292e676f6f676c65" .
            "2e636c6f75642e6461746170726f632e76312e4a6f625374617475732e53" .
            "746174654203e0410312170a0764657461696c731802200128094206e041" .
            "03e0410112390a1073746174655f73746172745f74696d6518062001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203" .
            "e0410312430a08737562737461746518072001280e322c2e676f6f676c65" .
            "2e636c6f75642e6461746170726f632e76312e4a6f625374617475732e53" .
            "756273746174654203e0410322a9010a05537461746512150a1153544154" .
            "455f554e5350454349464945441000120b0a0750454e44494e471001120e" .
            "0a0a53455455505f444f4e451008120b0a0752554e4e494e47100212120a" .
            "0e43414e43454c5f50454e44494e47100312120a0e43414e43454c5f5354" .
            "41525445441007120d0a0943414e43454c4c4544100412080a04444f4e45" .
            "100512090a054552524f52100612130a0f415454454d50545f4641494c55" .
            "5245100922480a085375627374617465120f0a0b554e5350454349464945" .
            "441000120d0a095355424d49545445441001120a0a065155455545441002" .
            "12100a0c5354414c455f5354415455531003223c0a0c4a6f625265666572" .
            "656e636512170a0a70726f6a6563745f69641801200128094203e0410212" .
            "130a066a6f625f69641802200128094203e0410122a5020a0f5961726e41" .
            "70706c69636174696f6e12110a046e616d651801200128094203e0410212" .
            "430a05737461746518022001280e322f2e676f6f676c652e636c6f75642e" .
            "6461746170726f632e76312e5961726e4170706c69636174696f6e2e5374" .
            "6174654203e0410212150a0870726f67726573731803200128024203e041" .
            "0212190a0c747261636b696e675f75726c1804200128094203e041012287" .
            "010a05537461746512150a1153544154455f554e53504543494649454410" .
            "0012070a034e45571001120e0a0a4e45575f534156494e471002120d0a09" .
            "5355424d49545445441003120c0a0841434345505445441004120b0a0752" .
            "554e4e494e471005120c0a0846494e49534845441006120a0a064641494c" .
            "45441007120a0a064b494c4c4544100822ec080a034a6f62123e0a097265" .
            "666572656e636518012001280b32262e676f6f676c652e636c6f75642e64" .
            "61746170726f632e76312e4a6f625265666572656e63654203e04101123e" .
            "0a09706c6163656d656e7418022001280b32262e676f6f676c652e636c6f" .
            "75642e6461746170726f632e76312e4a6f62506c6163656d656e744203e0" .
            "4102123e0a0a6861646f6f705f6a6f6218032001280b32232e676f6f676c" .
            "652e636c6f75642e6461746170726f632e76312e4861646f6f704a6f6242" .
            "03e041014800123c0a09737061726b5f6a6f6218042001280b32222e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e537061726b4a6f" .
            "624203e04101480012400a0b7079737061726b5f6a6f6218052001280b32" .
            "242e676f6f676c652e636c6f75642e6461746170726f632e76312e507953" .
            "7061726b4a6f624203e041014800123a0a08686976655f6a6f6218062001" .
            "280b32212e676f6f676c652e636c6f75642e6461746170726f632e76312e" .
            "486976654a6f624203e04101480012380a077069675f6a6f621807200128" .
            "0b32202e676f6f676c652e636c6f75642e6461746170726f632e76312e50" .
            "69674a6f624203e041014800123f0a0b737061726b5f725f6a6f62181520" .
            "01280b32232e676f6f676c652e636c6f75642e6461746170726f632e7631" .
            "2e537061726b524a6f624203e04101480012430a0d737061726b5f73716c" .
            "5f6a6f62180c2001280b32252e676f6f676c652e636c6f75642e64617461" .
            "70726f632e76312e537061726b53716c4a6f624203e041014800123e0a0a" .
            "70726573746f5f6a6f6218172001280b32232e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e50726573746f4a6f624203e041014800" .
            "12380a0673746174757318082001280b32232e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e4a6f625374617475734203e041031240" .
            "0a0e7374617475735f686973746f7279180d2003280b32232e676f6f676c" .
            "652e636c6f75642e6461746170726f632e76312e4a6f6253746174757342" .
            "03e0410312490a117961726e5f6170706c69636174696f6e731809200328" .
            "0b32292e676f6f676c652e636c6f75642e6461746170726f632e76312e59" .
            "61726e4170706c69636174696f6e4203e0410312270a1a6472697665725f" .
            "6f75747075745f7265736f757263655f7572691811200128094203e04103" .
            "12250a186472697665725f636f6e74726f6c5f66696c65735f757269180f" .
            "200128094203e04103123e0a066c6162656c7318122003280b32292e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e4a6f622e4c6162" .
            "656c73456e7472794203e0410112400a0a7363686564756c696e67181420" .
            "01280b32272e676f6f676c652e636c6f75642e6461746170726f632e7631" .
            "2e4a6f625363686564756c696e674203e0410112150a086a6f625f757569" .
            "641816200128094203e041031a2d0a0b4c6162656c73456e747279120b0a" .
            "036b6579180120012809120d0a0576616c75651802200128093a02380142" .
            "0a0a08747970655f6a6f6222330a0d4a6f625363686564756c696e671222" .
            "0a156d61785f6661696c757265735f7065725f686f757218012001280542" .
            "03e04101228a010a105375626d69744a6f625265717565737412170a0a70" .
            "726f6a6563745f69641801200128094203e0410212130a06726567696f6e" .
            "1803200128094203e04102122f0a036a6f6218022001280b321d2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4a6f624203e04102" .
            "12170a0a726571756573745f69641804200128094203e0410122520a0d47" .
            "65744a6f625265717565737412170a0a70726f6a6563745f696418012001" .
            "28094203e0410212130a06726567696f6e1803200128094203e041021213" .
            "0a066a6f625f69641802200128094203e0410222b3020a0f4c6973744a6f" .
            "62735265717565737412170a0a70726f6a6563745f696418012001280942" .
            "03e0410212130a06726567696f6e1806200128094203e0410212160a0970" .
            "6167655f73697a651802200128054203e0410112170a0a706167655f746f" .
            "6b656e1803200128094203e0410112190a0c636c75737465725f6e616d65" .
            "1804200128094203e0410112590a116a6f625f73746174655f6d61746368" .
            "657218052001280e32392e676f6f676c652e636c6f75642e646174617072" .
            "6f632e76312e4c6973744a6f6273526571756573742e4a6f625374617465" .
            "4d6174636865724203e0410112130a0666696c7465721807200128094203" .
            "e0410122360a0f4a6f6253746174654d61746368657212070a03414c4c10" .
            "00120a0a064143544956451001120e0a0a4e4f4e5f414354495645100222" .
            "bc010a105570646174654a6f625265717565737412170a0a70726f6a6563" .
            "745f69641801200128094203e0410212130a06726567696f6e1802200128" .
            "094203e0410212130a066a6f625f69641803200128094203e04102122f0a" .
            "036a6f6218042001280b321d2e676f6f676c652e636c6f75642e64617461" .
            "70726f632e76312e4a6f624203e0410212340a0b7570646174655f6d6173" .
            "6b18052001280b321a2e676f6f676c652e70726f746f6275662e4669656c" .
            "644d61736b4203e0410222620a104c6973744a6f6273526573706f6e7365" .
            "12300a046a6f627318012003280b321d2e676f6f676c652e636c6f75642e" .
            "6461746170726f632e76312e4a6f624203e04103121c0a0f6e6578745f70" .
            "6167655f746f6b656e1802200128094203e0410122550a1043616e63656c" .
            "4a6f625265717565737412170a0a70726f6a6563745f6964180120012809" .
            "4203e0410212130a06726567696f6e1803200128094203e0410212130a06" .
            "6a6f625f69641802200128094203e0410222550a1044656c6574654a6f62" .
            "5265717565737412170a0a70726f6a6563745f69641801200128094203e0" .
            "410212130a06726567696f6e1803200128094203e0410212130a066a6f62" .
            "5f69641802200128094203e04102329b090a0d4a6f62436f6e74726f6c6c" .
            "657212b1010a095375626d69744a6f62122a2e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e5375626d69744a6f6252657175657374" .
            "1a1d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f" .
            "62225982d3e493023b22362f76312f70726f6a656374732f7b70726f6a65" .
            "63745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62733a73" .
            "75626d69743a012ada411570726f6a6563745f69642c726567696f6e2c6a" .
            "6f6212ad010a064765744a6f6212272e676f6f676c652e636c6f75642e64" .
            "61746170726f632e76312e4765744a6f62526571756573741a1d2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4a6f62225b82d3e4" .
            "93023a12382f76312f70726f6a656374732f7b70726f6a6563745f69647d" .
            "2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f6964" .
            "7dda411870726f6a6563745f69642c726567696f6e2c6a6f625f696412c9" .
            "010a084c6973744a6f627312292e676f6f676c652e636c6f75642e646174" .
            "6170726f632e76312e4c6973744a6f6273526571756573741a2a2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4c6973744a6f6273" .
            "526573706f6e7365226682d3e4930231122f2f76312f70726f6a65637473" .
            "2f7b70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d" .
            "2f6a6f6273da411170726f6a6563745f69642c726567696f6eda41187072" .
            "6f6a6563745f69642c726567696f6e2c66696c746572129d010a09557064" .
            "6174654a6f62122a2e676f6f676c652e636c6f75642e6461746170726f63" .
            "2e76312e5570646174654a6f62526571756573741a1d2e676f6f676c652e" .
            "636c6f75642e6461746170726f632e76312e4a6f62224582d3e493023f32" .
            "382f76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567" .
            "696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f69647d3a036a" .
            "6f6212bd010a0943616e63656c4a6f62122a2e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e43616e63656c4a6f6252657175657374" .
            "1a1d2e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f" .
            "62226582d3e4930244223f2f76312f70726f6a656374732f7b70726f6a65" .
            "63745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b" .
            "6a6f625f69647d3a63616e63656c3a012ada411870726f6a6563745f6964" .
            "2c726567696f6e2c6a6f625f696412ac010a0944656c6574654a6f62122a" .
            "2e676f6f676c652e636c6f75642e6461746170726f632e76312e44656c65" .
            "74654a6f62526571756573741a162e676f6f676c652e70726f746f627566" .
            "2e456d707479225b82d3e493023a2a382f76312f70726f6a656374732f7b" .
            "70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a" .
            "6f62732f7b6a6f625f69647dda411870726f6a6563745f69642c72656769" .
            "6f6e2c6a6f625f69641a4bca41176461746170726f632e676f6f676c6561" .
            "7069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c656170" .
            "69732e636f6d2f617574682f636c6f75642d706c6174666f726d426d0a1c" .
            "636f6d2e676f6f676c652e636c6f75642e6461746170726f632e76314209" .
            "4a6f627350726f746f50015a40676f6f676c652e676f6c616e672e6f7267" .
            "2f67656e70726f746f2f676f6f676c65617069732f636c6f75642f646174" .
            "6170726f632f76313b6461746170726f63620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

