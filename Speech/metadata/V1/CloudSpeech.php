<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace GPBMetadata\Google\Cloud\Speech\V1;

class CloudSpeech
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(\hex2bin(
            "0a87240a29676f6f676c652f636c6f75642f7370656563682f76312f636c" .
            "6f75645f7370656563682e70726f746f1216676f6f676c652e636c6f7564" .
            "2e7370656563682e76311a23676f6f676c652f6c6f6e6772756e6e696e67" .
            "2f6f7065726174696f6e732e70726f746f1a1e676f6f676c652f70726f74" .
            "6f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f7072" .
            "6f746f6275662f74696d657374616d702e70726f746f1a17676f6f676c65" .
            "2f7270632f7374617475732e70726f746f2286010a105265636f676e697a" .
            "655265717565737412390a06636f6e66696718012001280b32292e676f6f" .
            "676c652e636c6f75642e7370656563682e76312e5265636f676e6974696f" .
            "6e436f6e66696712370a05617564696f18022001280b32282e676f6f676c" .
            "652e636c6f75642e7370656563682e76312e5265636f676e6974696f6e41" .
            "7564696f2291010a1b4c6f6e6752756e6e696e675265636f676e697a6552" .
            "65717565737412390a06636f6e66696718012001280b32292e676f6f676c" .
            "652e636c6f75642e7370656563682e76312e5265636f676e6974696f6e43" .
            "6f6e66696712370a05617564696f18022001280b32282e676f6f676c652e" .
            "636c6f75642e7370656563682e76312e5265636f676e6974696f6e417564" .
            "696f2299010a1953747265616d696e675265636f676e697a655265717565" .
            "7374124e0a1073747265616d696e675f636f6e66696718012001280b3232" .
            "2e676f6f676c652e636c6f75642e7370656563682e76312e53747265616d" .
            "696e675265636f676e6974696f6e436f6e666967480012170a0d61756469" .
            "6f5f636f6e74656e7418022001280c480042130a1173747265616d696e67" .
            "5f72657175657374228a010a1a53747265616d696e675265636f676e6974" .
            "696f6e436f6e66696712390a06636f6e66696718012001280b32292e676f" .
            "6f676c652e636c6f75642e7370656563682e76312e5265636f676e697469" .
            "6f6e436f6e66696712180a1073696e676c655f7574746572616e63651802" .
            "2001280812170a0f696e746572696d5f726573756c747318032001280822" .
            "da050a115265636f676e6974696f6e436f6e66696712490a08656e636f64" .
            "696e6718012001280e32372e676f6f676c652e636c6f75642e7370656563" .
            "682e76312e5265636f676e6974696f6e436f6e6669672e417564696f456e" .
            "636f64696e6712190a1173616d706c655f726174655f686572747a180220" .
            "012805121b0a13617564696f5f6368616e6e656c5f636f756e7418072001" .
            "2805122f0a27656e61626c655f73657061726174655f7265636f676e6974" .
            "696f6e5f7065725f6368616e6e656c180c2001280812150a0d6c616e6775" .
            "6167655f636f646518032001280912180a106d61785f616c7465726e6174" .
            "6976657318042001280512180a1070726f66616e6974795f66696c746572" .
            "180520012808123e0a0f7370656563685f636f6e74657874731806200328" .
            "0b32252e676f6f676c652e636c6f75642e7370656563682e76312e537065" .
            "656368436f6e7465787412200a18656e61626c655f776f72645f74696d65" .
            "5f6f66667365747318082001280812240a1c656e61626c655f6175746f6d" .
            "617469635f70756e6374756174696f6e180b20012808124c0a1264696172" .
            "697a6174696f6e5f636f6e66696718132001280b32302e676f6f676c652e" .
            "636c6f75642e7370656563682e76312e537065616b657244696172697a61" .
            "74696f6e436f6e666967123d0a086d6574616461746118092001280b322b" .
            "2e676f6f676c652e636c6f75642e7370656563682e76312e5265636f676e" .
            "6974696f6e4d65746164617461120d0a056d6f64656c180d200128091214" .
            "0a0c7573655f656e68616e636564180e20012808228b010a0d417564696f" .
            "456e636f64696e6712180a14454e434f44494e475f554e53504543494649" .
            "45441000120c0a084c494e4541523136100112080a04464c414310021209" .
            "0a054d554c4157100312070a03414d521004120a0a06414d525f57421005" .
            "120c0a084f47475f4f5055531006121a0a1653504545585f574954485f48" .
            "45414445525f4259544510072289010a18537065616b657244696172697a" .
            "6174696f6e436f6e66696712220a1a656e61626c655f737065616b65725f" .
            "64696172697a6174696f6e18012001280812190a116d696e5f737065616b" .
            "65725f636f756e7418022001280512190a116d61785f737065616b65725f" .
            "636f756e7418032001280512130a0b737065616b65725f74616718052001" .
            "280522a0080a135265636f676e6974696f6e4d6574616461746112550a10" .
            "696e746572616374696f6e5f7479706518012001280e323b2e676f6f676c" .
            "652e636c6f75642e7370656563682e76312e5265636f676e6974696f6e4d" .
            "657461646174612e496e746572616374696f6e5479706512240a1c696e64" .
            "75737472795f6e616963735f636f64655f6f665f617564696f1803200128" .
            "0d125b0a136d6963726f70686f6e655f64697374616e636518042001280e" .
            "323e2e676f6f676c652e636c6f75642e7370656563682e76312e5265636f" .
            "676e6974696f6e4d657461646174612e4d6963726f70686f6e6544697374" .
            "616e6365125a0a136f726967696e616c5f6d656469615f74797065180520" .
            "01280e323d2e676f6f676c652e636c6f75642e7370656563682e76312e52" .
            "65636f676e6974696f6e4d657461646174612e4f726967696e616c4d6564" .
            "696154797065125e0a157265636f7264696e675f6465766963655f747970" .
            "6518062001280e323f2e676f6f676c652e636c6f75642e7370656563682e" .
            "76312e5265636f676e6974696f6e4d657461646174612e5265636f726469" .
            "6e6744657669636554797065121d0a157265636f7264696e675f64657669" .
            "63655f6e616d65180720012809121a0a126f726967696e616c5f6d696d65" .
            "5f7479706518082001280912130a0b617564696f5f746f706963180a2001" .
            "280922c5010a0f496e746572616374696f6e5479706512200a1c494e5445" .
            "52414354494f4e5f545950455f554e5350454349464945441000120e0a0a" .
            "44495343555353494f4e100112100a0c50524553454e544154494f4e1002" .
            "120e0a0a50484f4e455f43414c4c1003120d0a09564f4943454d41494c10" .
            "04121b0a1750524f46455353494f4e414c4c595f50524f44554345441005" .
            "12100a0c564f4943455f534541524348100612110a0d564f4943455f434f" .
            "4d4d414e441007120d0a09444943544154494f4e100822640a124d696372" .
            "6f70686f6e6544697374616e636512230a1f4d4943524f50484f4e455f44" .
            "495354414e43455f554e5350454349464945441000120d0a094e45415246" .
            "49454c441001120c0a084d49444649454c441002120c0a08464152464945" .
            "4c441003224e0a114f726967696e616c4d656469615479706512230a1f4f" .
            "524947494e414c5f4d454449415f545950455f554e535045434946494544" .
            "100012090a05415544494f100112090a05564944454f100222a4010a1352" .
            "65636f7264696e674465766963655479706512250a215245434f5244494e" .
            "475f4445564943455f545950455f554e5350454349464945441000120e0a" .
            "0a534d41525450484f4e45100112060a0250431002120e0a0a50484f4e45" .
            "5f4c494e451003120b0a0756454849434c45100412180a144f544845525f" .
            "4f5554444f4f525f444556494345100512170a134f544845525f494e444f" .
            "4f525f444556494345100622200a0d537065656368436f6e74657874120f" .
            "0a077068726173657318012003280922440a105265636f676e6974696f6e" .
            "417564696f12110a07636f6e74656e7418012001280c4800120d0a037572" .
            "691802200128094800420e0a0c617564696f5f736f7572636522550a1152" .
            "65636f676e697a65526573706f6e736512400a07726573756c7473180220" .
            "03280b322f2e676f6f676c652e636c6f75642e7370656563682e76312e53" .
            "70656563685265636f676e6974696f6e526573756c7422600a1c4c6f6e67" .
            "52756e6e696e675265636f676e697a65526573706f6e736512400a077265" .
            "73756c747318022003280b322f2e676f6f676c652e636c6f75642e737065" .
            "6563682e76312e5370656563685265636f676e6974696f6e526573756c74" .
            "229e010a1c4c6f6e6752756e6e696e675265636f676e697a654d65746164" .
            "61746112180a1070726f67726573735f70657263656e7418012001280512" .
            "2e0a0a73746172745f74696d6518022001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012340a106c6173745f75706461" .
            "74655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d7022b1020a1a53747265616d696e675265636f67" .
            "6e697a65526573706f6e736512210a056572726f7218012001280b32122e" .
            "676f6f676c652e7270632e53746174757312430a07726573756c74731802" .
            "2003280b32322e676f6f676c652e636c6f75642e7370656563682e76312e" .
            "53747265616d696e675265636f676e6974696f6e526573756c74125d0a11" .
            "7370656563685f6576656e745f7479706518042001280e32422e676f6f67" .
            "6c652e636c6f75642e7370656563682e76312e53747265616d696e675265" .
            "636f676e697a65526573706f6e73652e5370656563684576656e74547970" .
            "65224c0a0f5370656563684576656e7454797065121c0a18535045454348" .
            "5f4556454e545f554e5350454349464945441000121b0a17454e445f4f46" .
            "5f53494e474c455f5554544552414e4345100122ed010a1a53747265616d" .
            "696e675265636f676e6974696f6e526573756c74124a0a0c616c7465726e" .
            "61746976657318012003280b32342e676f6f676c652e636c6f75642e7370" .
            "656563682e76312e5370656563685265636f676e6974696f6e416c746572" .
            "6e617469766512100a0869735f66696e616c18022001280812110a097374" .
            "6162696c69747918032001280212320a0f726573756c745f656e645f7469" .
            "6d6518042001280b32192e676f6f676c652e70726f746f6275662e447572" .
            "6174696f6e12130a0b6368616e6e656c5f74616718052001280512150a0d" .
            "6c616e67756167655f636f6465180620012809227a0a1753706565636852" .
            "65636f676e6974696f6e526573756c74124a0a0c616c7465726e61746976" .
            "657318012003280b32342e676f6f676c652e636c6f75642e737065656368" .
            "2e76312e5370656563685265636f676e6974696f6e416c7465726e617469" .
            "766512130a0b6368616e6e656c5f74616718022001280522770a1c537065" .
            "6563685265636f676e6974696f6e416c7465726e617469766512120a0a74" .
            "72616e73637269707418012001280912120a0a636f6e666964656e636518" .
            "0220012802122f0a05776f72647318032003280b32202e676f6f676c652e" .
            "636c6f75642e7370656563682e76312e576f7264496e666f22740a08576f" .
            "7264496e666f122d0a0a73746172745f74696d6518012001280b32192e67" .
            "6f6f676c652e70726f746f6275662e4475726174696f6e122b0a08656e64" .
            "5f74696d6518022001280b32192e676f6f676c652e70726f746f6275662e" .
            "4475726174696f6e120c0a04776f726418032001280932a9030a06537065" .
            "6563681281010a095265636f676e697a6512282e676f6f676c652e636c6f" .
            "75642e7370656563682e76312e5265636f676e697a65526571756573741a" .
            "292e676f6f676c652e636c6f75642e7370656563682e76312e5265636f67" .
            "6e697a65526573706f6e7365221f82d3e493021922142f76312f73706565" .
            "63683a7265636f676e697a653a012a1296010a144c6f6e6752756e6e696e" .
            "675265636f676e697a6512332e676f6f676c652e636c6f75642e73706565" .
            "63682e76312e4c6f6e6752756e6e696e675265636f676e697a6552657175" .
            "6573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f70657261" .
            "74696f6e222a82d3e4930224221f2f76312f7370656563683a6c6f6e6772" .
            "756e6e696e677265636f676e697a653a012a1281010a1253747265616d69" .
            "6e675265636f676e697a6512312e676f6f676c652e636c6f75642e737065" .
            "6563682e76312e53747265616d696e675265636f676e697a655265717565" .
            "73741a322e676f6f676c652e636c6f75642e7370656563682e76312e5374" .
            "7265616d696e675265636f676e697a65526573706f6e7365220028013001" .
            "426c0a1a636f6d2e676f6f676c652e636c6f75642e7370656563682e7631" .
            "420b53706565636850726f746f50015a3c676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f7564" .
            "2f7370656563682f76313b737065656368f80101620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

