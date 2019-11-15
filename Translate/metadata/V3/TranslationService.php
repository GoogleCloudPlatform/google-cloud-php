<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace GPBMetadata\Google\Cloud\Translate\V3;

class TranslationService
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0ad73c0a33676f6f676c652f636c6f75642f7472616e736c6174652f7633" .
            "2f7472616e736c6174696f6e5f736572766963652e70726f746f121b676f" .
            "6f676c652e636c6f75642e7472616e736c6174696f6e2e76331a17676f6f" .
            "676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f61" .
            "70692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c" .
            "652f6170692f7265736f757263652e70726f746f1a23676f6f676c652f6c" .
            "6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1f67" .
            "6f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f" .
            "224e0a1b5472616e736c61746554657874476c6f7373617279436f6e6669" .
            "6712150a08676c6f73736172791801200128094203e0410212180a0b6967" .
            "6e6f72655f636173651802200128084203e0410122b5030a145472616e73" .
            "6c617465546578745265717565737412150a08636f6e74656e7473180120" .
            "0328094203e0410212160a096d696d655f747970651803200128094203e0" .
            "410112210a14736f757263655f6c616e67756167655f636f646518042001" .
            "28094203e0410112210a147461726765745f6c616e67756167655f636f64" .
            "651805200128094203e0410212390a06706172656e741808200128094229" .
            "e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e63" .
            "6f6d2f4c6f636174696f6e12120a056d6f64656c1806200128094203e041" .
            "0112560a0f676c6f73736172795f636f6e66696718072001280b32382e67" .
            "6f6f676c652e636c6f75642e7472616e736c6174696f6e2e76332e547261" .
            "6e736c61746554657874476c6f7373617279436f6e6669674203e0410112" .
            "520a066c6162656c73180a2003280b323d2e676f6f676c652e636c6f7564" .
            "2e7472616e736c6174696f6e2e76332e5472616e736c6174655465787452" .
            "6571756573742e4c6162656c73456e7472794203e041011a2d0a0b4c6162" .
            "656c73456e747279120b0a036b6579180120012809120d0a0576616c7565" .
            "1802200128093a02380122a0010a155472616e736c617465546578745265" .
            "73706f6e7365123e0a0c7472616e736c6174696f6e7318012003280b3228" .
            "2e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76332e54" .
            "72616e736c6174696f6e12470a15676c6f73736172795f7472616e736c61" .
            "74696f6e7318032003280b32282e676f6f676c652e636c6f75642e747261" .
            "6e736c6174696f6e2e76332e5472616e736c6174696f6e22a8010a0b5472" .
            "616e736c6174696f6e12170a0f7472616e736c617465645f746578741801" .
            "20012809120d0a056d6f64656c180220012809121e0a1664657465637465" .
            "645f6c616e67756167655f636f646518042001280912510a0f676c6f7373" .
            "6172795f636f6e66696718032001280b32382e676f6f676c652e636c6f75" .
            "642e7472616e736c6174696f6e2e76332e5472616e736c61746554657874" .
            "476c6f7373617279436f6e666967229f020a154465746563744c616e6775" .
            "6167655265717565737412390a06706172656e741805200128094229e041" .
            "02fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d" .
            "2f4c6f636174696f6e12120a056d6f64656c1804200128094203e0410112" .
            "110a07636f6e74656e74180120012809480012160a096d696d655f747970" .
            "651803200128094203e0410112530a066c6162656c7318062003280b323e" .
            "2e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76332e44" .
            "65746563744c616e6775616765526571756573742e4c6162656c73456e74" .
            "72794203e041011a2d0a0b4c6162656c73456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a02380142080a06736f" .
            "75726365223d0a1044657465637465644c616e677561676512150a0d6c61" .
            "6e67756167655f636f646518012001280912120a0a636f6e666964656e63" .
            "65180220012802225a0a164465746563744c616e6775616765526573706f" .
            "6e736512400a096c616e67756167657318012003280b322d2e676f6f676c" .
            "652e636c6f75642e7472616e736c6174696f6e2e76332e44657465637465" .
            "644c616e67756167652291010a1c476574537570706f727465644c616e67" .
            "75616765735265717565737412390a06706172656e741803200128094229" .
            "e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e63" .
            "6f6d2f4c6f636174696f6e12220a15646973706c61795f6c616e67756167" .
            "655f636f64651801200128094203e0410112120a056d6f64656c18022001" .
            "28094203e0410122570a12537570706f727465644c616e67756167657312" .
            "410a096c616e67756167657318012003280b322e2e676f6f676c652e636c" .
            "6f75642e7472616e736c6174696f6e2e76332e537570706f727465644c61" .
            "6e677561676522700a11537570706f727465644c616e677561676512150a" .
            "0d6c616e67756167655f636f646518012001280912140a0c646973706c61" .
            "795f6e616d6518022001280912160a0e737570706f72745f736f75726365" .
            "18032001280812160a0e737570706f72745f746172676574180420012808" .
            "221e0a09476373536f7572636512110a09696e7075745f75726918012001" .
            "2809226d0a0b496e707574436f6e66696712160a096d696d655f74797065" .
            "1801200128094203e04101123c0a0a6763735f736f757263651802200128" .
            "0b32262e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76" .
            "332e476373536f75726365480042080a06736f75726365222b0a0e476373" .
            "44657374696e6174696f6e12190a116f75747075745f7572695f70726566" .
            "697818012001280922650a0c4f7574707574436f6e66696712460a0f6763" .
            "735f64657374696e6174696f6e18012001280b322b2e676f6f676c652e63" .
            "6c6f75642e7472616e736c6174696f6e2e76332e47637344657374696e61" .
            "74696f6e4800420d0a0b64657374696e6174696f6e2288060a1942617463" .
            "685472616e736c617465546578745265717565737412390a06706172656e" .
            "741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f" .
            "676c65617069732e636f6d2f4c6f636174696f6e12210a14736f75726365" .
            "5f6c616e67756167655f636f64651802200128094203e0410212220a1574" .
            "61726765745f6c616e67756167655f636f6465731803200328094203e041" .
            "0212570a066d6f64656c7318042003280b32422e676f6f676c652e636c6f" .
            "75642e7472616e736c6174696f6e2e76332e42617463685472616e736c61" .
            "746554657874526571756573742e4d6f64656c73456e7472794203e04101" .
            "12440a0d696e7075745f636f6e6669677318052003280b32282e676f6f67" .
            "6c652e636c6f75642e7472616e736c6174696f6e2e76332e496e70757443" .
            "6f6e6669674203e0410212450a0d6f75747075745f636f6e666967180620" .
            "01280b32292e676f6f676c652e636c6f75642e7472616e736c6174696f6e" .
            "2e76332e4f7574707574436f6e6669674203e04102125f0a0a676c6f7373" .
            "617269657318072003280b32462e676f6f676c652e636c6f75642e747261" .
            "6e736c6174696f6e2e76332e42617463685472616e736c61746554657874" .
            "526571756573742e476c6f73736172696573456e7472794203e041011257" .
            "0a066c6162656c7318092003280b32422e676f6f676c652e636c6f75642e" .
            "7472616e736c6174696f6e2e76332e42617463685472616e736c61746554" .
            "657874526571756573742e4c6162656c73456e7472794203e041011a2d0a" .
            "0b4d6f64656c73456e747279120b0a036b6579180120012809120d0a0576" .
            "616c75651802200128093a0238011a6b0a0f476c6f73736172696573456e" .
            "747279120b0a036b657918012001280912470a0576616c75651802200128" .
            "0b32382e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76" .
            "332e5472616e736c61746554657874476c6f7373617279436f6e6669673a" .
            "0238011a2d0a0b4c6162656c73456e747279120b0a036b65791801200128" .
            "09120d0a0576616c75651802200128093a02380122ce020a164261746368" .
            "5472616e736c6174654d6574616461746112480a05737461746518012001" .
            "280e32392e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e" .
            "76332e42617463685472616e736c6174654d657461646174612e53746174" .
            "65121d0a157472616e736c617465645f6368617261637465727318022001" .
            "280312190a116661696c65645f6368617261637465727318032001280312" .
            "180a10746f74616c5f63686172616374657273180420012803122f0a0b73" .
            "75626d69745f74696d6518052001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d7022650a05537461746512150a11535441" .
            "54455f554e5350454349464945441000120b0a0752554e4e494e47100112" .
            "0d0a095355434345454445441002120a0a064641494c45441003120e0a0a" .
            "43414e43454c4c494e471004120d0a0943414e43454c4c4544100522cb01" .
            "0a1642617463685472616e736c617465526573706f6e736512180a10746f" .
            "74616c5f63686172616374657273180120012803121d0a157472616e736c" .
            "617465645f6368617261637465727318022001280312190a116661696c65" .
            "645f63686172616374657273180320012803122f0a0b7375626d69745f74" .
            "696d6518042001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d70122c0a08656e645f74696d6518052001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d70225d0a13476c6f" .
            "7373617279496e707574436f6e666967123c0a0a6763735f736f75726365" .
            "18012001280b32262e676f6f676c652e636c6f75642e7472616e736c6174" .
            "696f6e2e76332e476373536f75726365480042080a06736f7572636522fa" .
            "040a08476c6f7373617279120c0a046e616d65180120012809124f0a0d6c" .
            "616e67756167655f7061697218032001280b32362e676f6f676c652e636c" .
            "6f75642e7472616e736c6174696f6e2e76332e476c6f73736172792e4c61" .
            "6e6775616765436f646550616972480012540a126c616e67756167655f63" .
            "6f6465735f73657418042001280b32362e676f6f676c652e636c6f75642e" .
            "7472616e736c6174696f6e2e76332e476c6f73736172792e4c616e677561" .
            "6765436f646573536574480012460a0c696e7075745f636f6e6669671805" .
            "2001280b32302e676f6f676c652e636c6f75642e7472616e736c6174696f" .
            "6e2e76332e476c6f7373617279496e707574436f6e66696712180a0b656e" .
            "7472795f636f756e741806200128054203e0410312340a0b7375626d6974" .
            "5f74696d6518072001280b321a2e676f6f676c652e70726f746f6275662e" .
            "54696d657374616d704203e0410312310a08656e645f74696d6518082001" .
            "280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70" .
            "4203e041031a4e0a104c616e6775616765436f646550616972121c0a1473" .
            "6f757263655f6c616e67756167655f636f6465180120012809121c0a1474" .
            "61726765745f6c616e67756167655f636f64651802200128091a2a0a104c" .
            "616e6775616765436f64657353657412160a0e6c616e67756167655f636f" .
            "6465731801200328093a65ea41620a217472616e736c6174652e676f6f67" .
            "6c65617069732e636f6d2f476c6f7373617279123d70726f6a656374732f" .
            "7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d" .
            "2f676c6f737361726965732f7b676c6f73736172797d420b0a096c616e67" .
            "75616765732290010a15437265617465476c6f7373617279526571756573" .
            "7412390a06706172656e741801200128094229e04102fa41230a216c6f63" .
            "6174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e" .
            "123c0a08676c6f737361727918022001280b32252e676f6f676c652e636c" .
            "6f75642e7472616e736c6174696f6e2e76332e476c6f73736172794203e0" .
            "4102224d0a12476574476c6f73736172795265717565737412370a046e61" .
            "6d651801200128094229e04102fa41230a217472616e736c6174652e676f" .
            "6f676c65617069732e636f6d2f476c6f737361727922500a1544656c6574" .
            "65476c6f73736172795265717565737412370a046e616d65180120012809" .
            "4229e04102fa41230a217472616e736c6174652e676f6f676c6561706973" .
            "2e636f6d2f476c6f73736172792298010a154c697374476c6f7373617269" .
            "65735265717565737412390a06706172656e741801200128094229e04102" .
            "fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f" .
            "4c6f636174696f6e12160a09706167655f73697a651802200128054203e0" .
            "410112170a0a706167655f746f6b656e1803200128094203e0410112130a" .
            "0666696c7465721804200128094203e04101226c0a164c697374476c6f73" .
            "736172696573526573706f6e736512390a0a676c6f737361726965731801" .
            "2003280b32252e676f6f676c652e636c6f75642e7472616e736c6174696f" .
            "6e2e76332e476c6f737361727912170a0f6e6578745f706167655f746f6b" .
            "656e1802200128092288020a16437265617465476c6f73736172794d6574" .
            "6164617461120c0a046e616d6518012001280912480a0573746174651802" .
            "2001280e32392e676f6f676c652e636c6f75642e7472616e736c6174696f" .
            "6e2e76332e437265617465476c6f73736172794d657461646174612e5374" .
            "617465122f0a0b7375626d69745f74696d6518032001280b321a2e676f6f" .
            "676c652e70726f746f6275662e54696d657374616d7022650a0553746174" .
            "6512150a1153544154455f554e5350454349464945441000120b0a075255" .
            "4e4e494e471001120d0a095355434345454445441002120a0a064641494c" .
            "45441003120e0a0a43414e43454c4c494e471004120d0a0943414e43454c" .
            "4c454410052288020a1644656c657465476c6f73736172794d6574616461" .
            "7461120c0a046e616d6518012001280912480a0573746174651802200128" .
            "0e32392e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76" .
            "332e44656c657465476c6f73736172794d657461646174612e5374617465" .
            "122f0a0b7375626d69745f74696d6518032001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e54696d657374616d7022650a0553746174651215" .
            "0a1153544154455f554e5350454349464945441000120b0a0752554e4e49" .
            "4e471001120d0a095355434345454445441002120a0a064641494c454410" .
            "03120e0a0a43414e43454c4c494e471004120d0a0943414e43454c4c4544" .
            "10052285010a1644656c657465476c6f7373617279526573706f6e736512" .
            "0c0a046e616d65180120012809122f0a0b7375626d69745f74696d651802" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d70122c0a08656e645f74696d6518032001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d70328e100a125472616e736c61" .
            "74696f6e5365727669636512d4020a0d5472616e736c6174655465787412" .
            "312e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76332e" .
            "5472616e736c61746554657874526571756573741a322e676f6f676c652e" .
            "636c6f75642e7472616e736c6174696f6e2e76332e5472616e736c617465" .
            "54657874526573706f6e736522db0182d3e493026222312f76332f7b7061" .
            "72656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d3a74" .
            "72616e736c617465546578743a012a5a2a22252f76332f7b706172656e74" .
            "3d70726f6a656374732f2a7d3a7472616e736c617465546578743a012ada" .
            "4124706172656e742c7461726765745f6c616e67756167655f636f64652c" .
            "636f6e74656e7473da4149706172656e742c6d6f64656c2c6d696d655f74" .
            "7970652c736f757263655f6c616e67756167655f636f64652c7461726765" .
            "745f6c616e67756167655f636f64652c636f6e74656e74731287020a0e44" .
            "65746563744c616e677561676512322e676f6f676c652e636c6f75642e74" .
            "72616e736c6174696f6e2e76332e4465746563744c616e67756167655265" .
            "71756573741a332e676f6f676c652e636c6f75642e7472616e736c617469" .
            "6f6e2e76332e4465746563744c616e6775616765526573706f6e7365228b" .
            "0182d3e493026422322f76332f7b706172656e743d70726f6a656374732f" .
            "2a2f6c6f636174696f6e732f2a7d3a6465746563744c616e67756167653a" .
            "012a5a2b22262f76332f7b706172656e743d70726f6a656374732f2a7d3a" .
            "6465746563744c616e67756167653a012ada411e706172656e742c6d6f64" .
            "656c2c6d696d655f747970652c636f6e74656e741297020a154765745375" .
            "70706f727465644c616e67756167657312392e676f6f676c652e636c6f75" .
            "642e7472616e736c6174696f6e2e76332e476574537570706f727465644c" .
            "616e677561676573526571756573741a2f2e676f6f676c652e636c6f7564" .
            "2e7472616e736c6174696f6e2e76332e537570706f727465644c616e6775" .
            "6167657322910182d3e493026612362f76332f7b706172656e743d70726f" .
            "6a656374732f2a2f6c6f636174696f6e732f2a7d2f737570706f72746564" .
            "4c616e6775616765735a2c122a2f76332f7b706172656e743d70726f6a65" .
            "6374732f2a7d2f737570706f727465644c616e677561676573da41227061" .
            "72656e742c6d6f64656c2c646973706c61795f6c616e67756167655f636f" .
            "646512e1010a1242617463685472616e736c6174655465787412362e676f" .
            "6f676c652e636c6f75642e7472616e736c6174696f6e2e76332e42617463" .
            "685472616e736c61746554657874526571756573741a1d2e676f6f676c65" .
            "2e6c6f6e6772756e6e696e672e4f7065726174696f6e227482d3e493023b" .
            "22362f76332f7b706172656e743d70726f6a656374732f2a2f6c6f636174" .
            "696f6e732f2a7d3a62617463685472616e736c617465546578743a012aca" .
            "41300a1642617463685472616e736c617465526573706f6e736512164261" .
            "7463685472616e736c6174654d6574616461746112dc010a0e4372656174" .
            "65476c6f737361727912322e676f6f676c652e636c6f75642e7472616e73" .
            "6c6174696f6e2e76332e437265617465476c6f7373617279526571756573" .
            "741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572617469" .
            "6f6e227782d3e493023a222e2f76332f7b706172656e743d70726f6a6563" .
            "74732f2a2f6c6f636174696f6e732f2a7d2f676c6f737361726965733a08" .
            "676c6f7373617279da410f706172656e742c676c6f7373617279ca41220a" .
            "08476c6f73736172791216437265617465476c6f73736172794d65746164" .
            "61746112ba010a0e4c697374476c6f7373617269657312322e676f6f676c" .
            "652e636c6f75642e7472616e736c6174696f6e2e76332e4c697374476c6f" .
            "73736172696573526571756573741a332e676f6f676c652e636c6f75642e" .
            "7472616e736c6174696f6e2e76332e4c697374476c6f7373617269657352" .
            "6573706f6e7365223f82d3e4930230122e2f76332f7b706172656e743d70" .
            "726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f676c6f73736172" .
            "696573da4106706172656e7412a4010a0b476574476c6f7373617279122f" .
            "2e676f6f676c652e636c6f75642e7472616e736c6174696f6e2e76332e47" .
            "6574476c6f7373617279526571756573741a252e676f6f676c652e636c6f" .
            "75642e7472616e736c6174696f6e2e76332e476c6f7373617279223d82d3" .
            "e4930230122e2f76332f7b6e616d653d70726f6a656374732f2a2f6c6f63" .
            "6174696f6e732f2a2f676c6f737361726965732f2a7dda41046e616d6512" .
            "d5010a0e44656c657465476c6f737361727912322e676f6f676c652e636c" .
            "6f75642e7472616e736c6174696f6e2e76332e44656c657465476c6f7373" .
            "617279526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e" .
            "672e4f7065726174696f6e227082d3e49302302a2e2f76332f7b6e616d65" .
            "3d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f676c6f737361" .
            "726965732f2a7dda41046e616d65ca41300a1644656c657465476c6f7373" .
            "617279526573706f6e7365121644656c657465476c6f73736172794d6574" .
            "61646174611a7eca41187472616e736c6174652e676f6f676c6561706973" .
            "2e636f6dd2416068747470733a2f2f7777772e676f6f676c65617069732e" .
            "636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a" .
            "2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75" .
            "642d7472616e736c6174696f6e42d8010a1d636f6d2e676f6f676c652e63" .
            "6c6f75642e7472616e736c6174652e763342175472616e736c6174696f6e" .
            "5365727669636550726f746f50015a42676f6f676c652e676f6c616e672e" .
            "6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f" .
            "7472616e736c6174652f76333b7472616e736c617465f80101aa0219476f" .
            "6f676c652e436c6f75642e5472616e736c6174652e5633ca0219476f6f67" .
            "6c655c436c6f75645c5472616e736c6174655c5633ea021c476f6f676c65" .
            "3a3a436c6f75643a3a5472616e736c6174653a3a5633620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

