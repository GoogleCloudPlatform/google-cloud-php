<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1beta1/webrisk.proto

namespace GPBMetadata\Google\Cloud\Webrisk\V1Beta1;

class Webrisk
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0abe180a2a676f6f676c652f636c6f75642f7765627269736b2f76316265" .
            "7461312f7765627269736b2e70726f746f121c676f6f676c652e636c6f75" .
            "642e7765627269736b2e763162657461311a1f676f6f676c652f70726f74" .
            "6f6275662f74696d657374616d702e70726f746f22e8020a1c436f6d7075" .
            "74655468726561744c6973744469666652657175657374123d0a0b746872" .
            "6561745f7479706518012001280e32282e676f6f676c652e636c6f75642e" .
            "7765627269736b2e763162657461312e5468726561745479706512150a0d" .
            "76657273696f6e5f746f6b656e18022001280c125b0a0b636f6e73747261" .
            "696e747318032001280b32462e676f6f676c652e636c6f75642e77656272" .
            "69736b2e763162657461312e436f6d707574655468726561744c69737444" .
            "696666526571756573742e436f6e73747261696e74731a94010a0b436f6e" .
            "73747261696e747312180a106d61785f646966665f656e74726965731801" .
            "20012805121c0a146d61785f64617461626173655f656e74726965731802" .
            "20012805124d0a16737570706f727465645f636f6d7072657373696f6e73" .
            "18032003280e322d2e676f6f676c652e636c6f75642e7765627269736b2e" .
            "763162657461312e436f6d7072657373696f6e54797065229a040a1d436f" .
            "6d707574655468726561744c69737444696666526573706f6e7365125f0a" .
            "0d726573706f6e73655f7479706518042001280e32482e676f6f676c652e" .
            "636c6f75642e7765627269736b2e763162657461312e436f6d7075746554" .
            "68726561744c69737444696666526573706f6e73652e526573706f6e7365" .
            "5479706512450a096164646974696f6e7318052001280b32322e676f6f67" .
            "6c652e636c6f75642e7765627269736b2e763162657461312e5468726561" .
            "74456e7472794164646974696f6e7312430a0872656d6f76616c73180620" .
            "01280b32312e676f6f676c652e636c6f75642e7765627269736b2e763162" .
            "657461312e546872656174456e74727952656d6f76616c7312190a116e65" .
            "775f76657273696f6e5f746f6b656e18072001280c12560a08636865636b" .
            "73756d18082001280b32442e676f6f676c652e636c6f75642e7765627269" .
            "736b2e763162657461312e436f6d707574655468726561744c6973744469" .
            "6666526573706f6e73652e436865636b73756d12390a157265636f6d6d65" .
            "6e6465645f6e6578745f6469666618022001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d701a1a0a08436865636b73756d" .
            "120e0a0673686132353618012001280c22420a0c526573706f6e73655479" .
            "7065121d0a19524553504f4e53455f545950455f554e5350454349464945" .
            "44100012080a0444494646100112090a055245534554100222600a115365" .
            "617263685572697352657175657374120b0a03757269180120012809123e" .
            "0a0c7468726561745f747970657318022003280e32282e676f6f676c652e" .
            "636c6f75642e7765627269736b2e763162657461312e5468726561745479" .
            "706522de010a1253656172636855726973526573706f6e7365124a0a0674" .
            "687265617418012001280b323a2e676f6f676c652e636c6f75642e776562" .
            "7269736b2e763162657461312e53656172636855726973526573706f6e73" .
            "652e5468726561745572691a7c0a09546872656174557269123e0a0c7468" .
            "726561745f747970657318012003280e32282e676f6f676c652e636c6f75" .
            "642e7765627269736b2e763162657461312e54687265617454797065122f" .
            "0a0b6578706972655f74696d6518022001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d70226a0a13536561726368486173" .
            "6865735265717565737412130a0b686173685f7072656669781801200128" .
            "0c123e0a0c7468726561745f747970657318022003280e32282e676f6f67" .
            "6c652e636c6f75642e7765627269736b2e763162657461312e5468726561" .
            "745479706522ae020a14536561726368486173686573526573706f6e7365" .
            "124e0a077468726561747318012003280b323d2e676f6f676c652e636c6f" .
            "75642e7765627269736b2e763162657461312e5365617263684861736865" .
            "73526573706f6e73652e5468726561744861736812380a146e6567617469" .
            "76655f6578706972655f74696d6518022001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d701a8b010a0a54687265617448" .
            "617368123e0a0c7468726561745f747970657318012003280e32282e676f" .
            "6f676c652e636c6f75642e7765627269736b2e763162657461312e546872" .
            "65617454797065120c0a046861736818022001280c122f0a0b6578706972" .
            "655f74696d6518032001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d702299010a14546872656174456e74727941646469" .
            "74696f6e73123b0a0a7261775f68617368657318012003280b32272e676f" .
            "6f676c652e636c6f75642e7765627269736b2e763162657461312e526177" .
            "48617368657312440a0b726963655f68617368657318022001280b322f2e" .
            "676f6f676c652e636c6f75642e7765627269736b2e763162657461312e52" .
            "69636544656c7461456e636f64696e67229b010a13546872656174456e74" .
            "727952656d6f76616c73123d0a0b7261775f696e64696365731801200128" .
            "0b32282e676f6f676c652e636c6f75642e7765627269736b2e7631626574" .
            "61312e526177496e646963657312450a0c726963655f696e646963657318" .
            "022001280b322f2e676f6f676c652e636c6f75642e7765627269736b2e76" .
            "3162657461312e5269636544656c7461456e636f64696e67221d0a0a5261" .
            "77496e6469636573120f0a07696e646963657318012003280522340a0952" .
            "617748617368657312130a0b7072656669785f73697a6518012001280512" .
            "120a0a7261775f68617368657318022001280c226b0a115269636544656c" .
            "7461456e636f64696e6712130a0b66697273745f76616c75651801200128" .
            "0312160a0e726963655f706172616d6574657218022001280512130a0b65" .
            "6e7472795f636f756e7418032001280512140a0c656e636f6465645f6461" .
            "746118042001280c2a650a0a54687265617454797065121b0a1754485245" .
            "41545f545950455f554e5350454349464945441000120b0a074d414c5741" .
            "5245100112160a12534f4349414c5f454e47494e454552494e4710021215" .
            "0a11554e57414e5445445f534f46545741524510032a460a0f436f6d7072" .
            "657373696f6e5479706512200a1c434f4d5052455353494f4e5f54595045" .
            "5f554e535045434946494544100012070a03524157100112080a04524943" .
            "45100232fc030a155765625269736b536572766963655631426574613112" .
            "ba010a15436f6d707574655468726561744c69737444696666123a2e676f" .
            "6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d" .
            "707574655468726561744c69737444696666526571756573741a3b2e676f" .
            "6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d" .
            "707574655468726561744c69737444696666526573706f6e7365222882d3" .
            "e493022212202f763162657461312f7468726561744c697374733a636f6d" .
            "7075746544696666128d010a0a53656172636855726973122f2e676f6f67" .
            "6c652e636c6f75642e7765627269736b2e763162657461312e5365617263" .
            "6855726973526571756573741a302e676f6f676c652e636c6f75642e7765" .
            "627269736b2e763162657461312e53656172636855726973526573706f6e" .
            "7365221c82d3e493021612142f763162657461312f757269733a73656172" .
            "63681295010a0c53656172636848617368657312312e676f6f676c652e63" .
            "6c6f75642e7765627269736b2e763162657461312e536561726368486173" .
            "686573526571756573741a322e676f6f676c652e636c6f75642e77656272" .
            "69736b2e763162657461312e536561726368486173686573526573706f6e" .
            "7365221e82d3e493021812162f763162657461312f6861736865733a7365" .
            "6172636842b6010a1a636f6d2e676f6f676c652e7765627269736b2e7631" .
            "6265746131420c5765625269736b50726f746f50015a43676f6f676c652e" .
            "676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561706973" .
            "2f636c6f75642f7765627269736b2f763162657461313b7765627269736b" .
            "a2020447435752aa021c476f6f676c652e436c6f75642e5765625269736b" .
            "2e56314265746131ca021c476f6f676c655c436c6f75645c576562526973" .
            "6b5c56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

