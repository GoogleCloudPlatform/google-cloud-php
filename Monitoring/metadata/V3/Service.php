<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\CalendarPeriod::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae31b0a22676f6f676c652f6d6f6e69746f72696e672f76332f736572766963652e70726f746f1214676f6f676c652e6d6f6e69746f72696e672e76331a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a21676f6f676c652f747970652f63616c656e6461725f706572696f642e70726f746f2297070a0753657276696365120c0a046e616d6518012001280912140a0c646973706c61795f6e616d6518022001280912360a06637573746f6d18062001280b32242e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963652e437573746f6d4800123d0a0a6170705f656e67696e6518072001280b32272e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963652e417070456e67696e65480012470a0f636c6f75645f656e64706f696e747318082001280b322c2e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963652e436c6f7564456e64706f696e7473480012470a0d636c75737465725f697374696f18092001280b322a2e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963652e436c7573746572497374696f420218014800123d0a0a6d6573685f697374696f180a2001280b32272e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963652e4d657368497374696f4800123a0a0974656c656d65747279180d2001280b32272e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963652e54656c656d657472791a080a06437573746f6d1a1e0a09417070456e67696e6512110a096d6f64756c655f69641801200128091a210a0e436c6f7564456e64706f696e7473120f0a07736572766963651801200128091a6b0a0c436c7573746572497374696f12100a086c6f636174696f6e18012001280912140a0c636c75737465725f6e616d6518022001280912190a11736572766963655f6e616d65737061636518032001280912140a0c736572766963655f6e616d651804200128093a0218011a4e0a094d657368497374696f12100a086d6573685f75696418012001280912190a11736572766963655f6e616d65737061636518032001280912140a0c736572766963655f6e616d651804200128091a220a0954656c656d6574727912150a0d7265736f757263655f6e616d651801200128093aa701ea41a3010a216d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f53657276696365122570726f6a656374732f7b70726f6a6563747d2f73657276696365732f7b736572766963657d122f6f7267616e697a6174696f6e732f7b6f7267616e697a6174696f6e7d2f73657276696365732f7b736572766963657d1223666f6c646572732f7b666f6c6465727d2f73657276696365732f7b736572766963657d12012a420c0a0a6964656e7469666965722291050a15536572766963654c6576656c4f626a656374697665120c0a046e616d6518012001280912140a0c646973706c61795f6e616d65180b20012809124c0a17736572766963655f6c6576656c5f696e64696361746f7218032001280b322b2e676f6f676c652e6d6f6e69746f72696e672e76332e536572766963654c6576656c496e64696361746f72120c0a04676f616c18042001280112330a0e726f6c6c696e675f706572696f6418052001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e480012360a0f63616c656e6461725f706572696f6418062001280e321b2e676f6f676c652e747970652e43616c656e646172506572696f64480022340a045669657712140a10564945575f554e535045434946494544100012080a0446554c4c1002120c0a084558504c4943495410013aca02ea41c6020a2f6d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f536572766963654c6576656c4f626a656374697665125670726f6a656374732f7b70726f6a6563747d2f73657276696365732f7b736572766963657d2f736572766963654c6576656c4f626a656374697665732f7b736572766963655f6c6576656c5f6f626a6563746976657d12606f7267616e697a6174696f6e732f7b6f7267616e697a6174696f6e7d2f73657276696365732f7b736572766963657d2f736572766963654c6576656c4f626a656374697665732f7b736572766963655f6c6576656c5f6f626a6563746976657d1254666f6c646572732f7b666f6c6465727d2f73657276696365732f7b736572766963657d2f736572766963654c6576656c4f626a656374697665732f7b736572766963655f6c6576656c5f6f626a6563746976657d12012a200142080a06706572696f6422d4010a15536572766963654c6576656c496e64696361746f7212330a0962617369635f736c6918042001280b321e2e676f6f676c652e6d6f6e69746f72696e672e76332e4261736963536c694800123e0a0d726571756573745f626173656418012001280b32252e676f6f676c652e6d6f6e69746f72696e672e76332e526571756573744261736564536c694800123e0a0d77696e646f77735f626173656418022001280b32252e676f6f676c652e6d6f6e69746f72696e672e76332e57696e646f77734261736564536c69480042060a047479706522b6020a084261736963536c69120e0a066d6574686f6418072003280912100a086c6f636174696f6e180820032809120f0a0776657273696f6e180920032809124b0a0c617661696c6162696c69747918022001280b32332e676f6f676c652e6d6f6e69746f72696e672e76332e4261736963536c692e417661696c6162696c6974794372697465726961480012410a076c6174656e637918032001280b322e2e676f6f676c652e6d6f6e69746f72696e672e76332e4261736963536c692e4c6174656e6379437269746572696148001a160a14417661696c6162696c69747943726974657269611a3f0a0f4c6174656e63794372697465726961122c0a097468726573686f6c6418032001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420e0a0c736c695f637269746572696122210a0552616e6765120b0a036d696e180120012801120b0a036d617818022001280122a1010a0f526571756573744261736564536c6912410a10676f6f645f746f74616c5f726174696f18012001280b32252e676f6f676c652e6d6f6e69746f72696e672e76332e54696d65536572696573526174696f480012410a10646973747269627574696f6e5f63757418032001280b32252e676f6f676c652e6d6f6e69746f72696e672e76332e446973747269627574696f6e437574480042080a066d6574686f6422680a0f54696d65536572696573526174696f121b0a13676f6f645f736572766963655f66696c746572180420012809121a0a126261645f736572766963655f66696c746572180520012809121c0a14746f74616c5f736572766963655f66696c746572180620012809225a0a0f446973747269627574696f6e437574121b0a13646973747269627574696f6e5f66696c746572180420012809122a0a0572616e676518052001280b321b2e676f6f676c652e6d6f6e69746f72696e672e76332e52616e67652283050a0f57696e646f77734261736564536c6912200a16676f6f645f6261645f6d65747269635f66696c746572180520012809480012600a1a676f6f645f746f74616c5f726174696f5f7468726573686f6c6418022001280b323a2e676f6f676c652e6d6f6e69746f72696e672e76332e57696e646f77734261736564536c692e506572666f726d616e63655468726573686f6c64480012510a146d65747269635f6d65616e5f696e5f72616e676518062001280b32312e676f6f676c652e6d6f6e69746f72696e672e76332e57696e646f77734261736564536c692e4d657472696352616e6765480012500a136d65747269635f73756d5f696e5f72616e676518072001280b32312e676f6f676c652e6d6f6e69746f72696e672e76332e57696e646f77734261736564536c692e4d657472696352616e6765480012300a0d77696e646f775f706572696f6418042001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e1ab0010a14506572666f726d616e63655468726573686f6c64123c0a0b706572666f726d616e636518012001280b32252e676f6f676c652e6d6f6e69746f72696e672e76332e526571756573744261736564536c694800123f0a1562617369635f736c695f706572666f726d616e636518032001280b321e2e676f6f676c652e6d6f6e69746f72696e672e76332e4261736963536c69480012110a097468726573686f6c6418022001280142060a04747970651a4e0a0b4d657472696352616e676512130a0b74696d655f736572696573180120012809122a0a0572616e676518042001280b321b2e676f6f676c652e6d6f6e69746f72696e672e76332e52616e676542120a1077696e646f775f637269746572696f6e42ce010a18636f6d2e676f6f676c652e6d6f6e69746f72696e672e76334216536572766963654d6f6e69746f72696e6750726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6d6f6e69746f72696e672f76333b6d6f6e69746f72696e67aa021a476f6f676c652e436c6f75642e4d6f6e69746f72696e672e5633ca021a476f6f676c655c436c6f75645c4d6f6e69746f72696e675c5633ea021d476f6f676c653a3a436c6f75643a3a4d6f6e69746f72696e673a3a5633620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

