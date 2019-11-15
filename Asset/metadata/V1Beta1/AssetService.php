<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/asset_service.proto

namespace GPBMetadata\Google\Cloud\Asset\V1Beta1;

class AssetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\Assets::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0a820e0a2e676f6f676c652f636c6f75642f61737365742f763162657461" .
            "312f61737365745f736572766963652e70726f746f121a676f6f676c652e" .
            "636c6f75642e61737365742e763162657461311a27676f6f676c652f636c" .
            "6f75642f61737365742f763162657461312f6173736574732e70726f746f" .
            "1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e" .
            "732e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d6573" .
            "74616d702e70726f746f22e9010a134578706f7274417373657473526571" .
            "75657374120e0a06706172656e74180120012809122d0a09726561645f74" .
            "696d6518022001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d7012130a0b61737365745f7479706573180320032809123d" .
            "0a0c636f6e74656e745f7479706518042001280e32272e676f6f676c652e" .
            "636c6f75642e61737365742e763162657461312e436f6e74656e74547970" .
            "65123f0a0d6f75747075745f636f6e66696718052001280b32282e676f6f" .
            "676c652e636c6f75642e61737365742e763162657461312e4f7574707574" .
            "436f6e6669672286010a144578706f7274417373657473526573706f6e73" .
            "65122d0a09726561645f74696d6518012001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d70123f0a0d6f75747075745f63" .
            "6f6e66696718022001280b32282e676f6f676c652e636c6f75642e617373" .
            "65742e763162657461312e4f7574707574436f6e66696722c4010a1c4261" .
            "746368476574417373657473486973746f727952657175657374120e0a06" .
            "706172656e7418012001280912130a0b61737365745f6e616d6573180220" .
            "032809123d0a0c636f6e74656e745f7479706518032001280e32272e676f" .
            "6f676c652e636c6f75642e61737365742e763162657461312e436f6e7465" .
            "6e745479706512400a10726561645f74696d655f77696e646f7718042001" .
            "280b32262e676f6f676c652e636c6f75642e61737365742e763162657461" .
            "312e54696d6557696e646f77225a0a1d4261746368476574417373657473" .
            "486973746f7279526573706f6e736512390a066173736574731801200328" .
            "0b32292e676f6f676c652e636c6f75642e61737365742e76316265746131" .
            "2e54656d706f72616c417373657422640a0c4f7574707574436f6e666967" .
            "12450a0f6763735f64657374696e6174696f6e18012001280b322a2e676f" .
            "6f676c652e636c6f75642e61737365742e763162657461312e4763734465" .
            "7374696e6174696f6e4800420d0a0b64657374696e6174696f6e222d0a0e" .
            "47637344657374696e6174696f6e120d0a03757269180120012809480042" .
            "0c0a0a6f626a6563745f7572692a490a0b436f6e74656e7454797065121c" .
            "0a18434f4e54454e545f545950455f554e5350454349464945441000120c" .
            "0a085245534f555243451001120e0a0a49414d5f504f4c49435910023291" .
            "040a0c41737365745365727669636512fa010a0c4578706f727441737365" .
            "7473122f2e676f6f676c652e636c6f75642e61737365742e763162657461" .
            "312e4578706f7274417373657473526571756573741a1d2e676f6f676c65" .
            "2e6c6f6e6772756e6e696e672e4f7065726174696f6e22990182d3e49302" .
            "920122292f763162657461312f7b706172656e743d70726f6a656374732f" .
            "2a7d3a6578706f72744173736574733a012a5a2d22282f76316265746131" .
            "2f7b706172656e743d666f6c646572732f2a7d3a6578706f727441737365" .
            "74733a012a5a33222e2f763162657461312f7b706172656e743d6f726761" .
            "6e697a6174696f6e732f2a7d3a6578706f72744173736574733a012a1283" .
            "020a154261746368476574417373657473486973746f727912382e676f6f" .
            "676c652e636c6f75642e61737365742e763162657461312e426174636847" .
            "6574417373657473486973746f7279526571756573741a392e676f6f676c" .
            "652e636c6f75642e61737365742e763162657461312e4261746368476574" .
            "417373657473486973746f7279526573706f6e7365227582d3e493026f12" .
            "322f763162657461312f7b706172656e743d70726f6a656374732f2a7d3a" .
            "6261746368476574417373657473486973746f72795a3912372f76316265" .
            "7461312f7b706172656e743d6f7267616e697a6174696f6e732f2a7d3a62" .
            "61746368476574417373657473486973746f727942b0010a1e636f6d2e67" .
            "6f6f676c652e636c6f75642e61737365742e763162657461314211417373" .
            "65745365727669636550726f746f50015a3f676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75" .
            "642f61737365742f763162657461313b6173736574aa021a476f6f676c65" .
            "2e436c6f75642e41737365742e56314265746131ca021a476f6f676c655c" .
            "436c6f75645c41737365745c56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

