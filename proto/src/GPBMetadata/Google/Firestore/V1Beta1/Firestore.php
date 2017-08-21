<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore.proto

namespace GPBMetadata\Google\Firestore\V1Beta1;

class Firestore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Common::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Document::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Query::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Write::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4350a28676f6f676c652f6669726573746f72652f763162657461312f" .
            "6669726573746f72652e70726f746f1218676f6f676c652e666972657374" .
            "6f72652e763162657461311a25676f6f676c652f6669726573746f72652f" .
            "763162657461312f636f6d6d6f6e2e70726f746f1a27676f6f676c652f66" .
            "69726573746f72652f763162657461312f646f63756d656e742e70726f74" .
            "6f1a24676f6f676c652f6669726573746f72652f763162657461312f7175" .
            "6572792e70726f746f1a24676f6f676c652f6669726573746f72652f7631" .
            "62657461312f77726974652e70726f746f1a1b676f6f676c652f70726f74" .
            "6f6275662f656d7074792e70726f746f1a1f676f6f676c652f70726f746f" .
            "6275662f74696d657374616d702e70726f746f1a17676f6f676c652f7270" .
            "632f7374617475732e70726f746f22b8010a12476574446f63756d656e74" .
            "52657175657374120c0a046e616d6518012001280912340a046d61736b18" .
            "022001280b32262e676f6f676c652e6669726573746f72652e7631626574" .
            "61312e446f63756d656e744d61736b12150a0b7472616e73616374696f6e" .
            "18032001280c4800122f0a09726561645f74696d6518052001280b321a2e" .
            "676f6f676c652e70726f746f6275662e54696d657374616d70480042160a" .
            "14636f6e73697374656e63795f73656c6563746f7222a2020a144c697374" .
            "446f63756d656e747352657175657374120e0a06706172656e7418012001" .
            "280912150a0d636f6c6c656374696f6e5f696418022001280912110a0970" .
            "6167655f73697a6518032001280512120a0a706167655f746f6b656e1804" .
            "2001280912100a086f726465725f627918062001280912340a046d61736b" .
            "18072001280b32262e676f6f676c652e6669726573746f72652e76316265" .
            "7461312e446f63756d656e744d61736b12150a0b7472616e73616374696f" .
            "6e18082001280c4800122f0a09726561645f74696d65180a2001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d7048001214" .
            "0a0c73686f775f6d697373696e67180c2001280842160a14636f6e736973" .
            "74656e63795f73656c6563746f7222670a154c697374446f63756d656e74" .
            "73526573706f6e736512350a09646f63756d656e747318012003280b3222" .
            "2e676f6f676c652e6669726573746f72652e763162657461312e446f6375" .
            "6d656e7412170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "bf010a15437265617465446f63756d656e7452657175657374120e0a0670" .
            "6172656e7418012001280912150a0d636f6c6c656374696f6e5f69641802" .
            "2001280912130a0b646f63756d656e745f696418032001280912340a0864" .
            "6f63756d656e7418042001280b32222e676f6f676c652e6669726573746f" .
            "72652e763162657461312e446f63756d656e7412340a046d61736b180520" .
            "01280b32262e676f6f676c652e6669726573746f72652e76316265746131" .
            "2e446f63756d656e744d61736b2282020a15557064617465446f63756d65" .
            "6e745265717565737412340a08646f63756d656e7418012001280b32222e" .
            "676f6f676c652e6669726573746f72652e763162657461312e446f63756d" .
            "656e74123b0a0b7570646174655f6d61736b18022001280b32262e676f6f" .
            "676c652e6669726573746f72652e763162657461312e446f63756d656e74" .
            "4d61736b12340a046d61736b18032001280b32262e676f6f676c652e6669" .
            "726573746f72652e763162657461312e446f63756d656e744d61736b1240" .
            "0a1063757272656e745f646f63756d656e7418042001280b32262e676f6f" .
            "676c652e6669726573746f72652e763162657461312e507265636f6e6469" .
            "74696f6e22670a1544656c657465446f63756d656e745265717565737412" .
            "0c0a046e616d6518012001280912400a1063757272656e745f646f63756d" .
            "656e7418022001280b32262e676f6f676c652e6669726573746f72652e76" .
            "3162657461312e507265636f6e646974696f6e229e020a18426174636847" .
            "6574446f63756d656e74735265717565737412100a086461746162617365" .
            "18012001280912110a09646f63756d656e747318022003280912340a046d" .
            "61736b18032001280b32262e676f6f676c652e6669726573746f72652e76" .
            "3162657461312e446f63756d656e744d61736b12150a0b7472616e736163" .
            "74696f6e18042001280c480012470a0f6e65775f7472616e73616374696f" .
            "6e18052001280b322c2e676f6f676c652e6669726573746f72652e763162" .
            "657461312e5472616e73616374696f6e4f7074696f6e734800122f0a0972" .
            "6561645f74696d6518072001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d70480042160a14636f6e73697374656e63795f" .
            "73656c6563746f7222b1010a194261746368476574446f63756d656e7473" .
            "526573706f6e736512330a05666f756e6418012001280b32222e676f6f67" .
            "6c652e6669726573746f72652e763162657461312e446f63756d656e7448" .
            "0012110a076d697373696e67180220012809480012130a0b7472616e7361" .
            "6374696f6e18032001280c122d0a09726561645f74696d6518042001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d704208" .
            "0a06726573756c74226a0a17426567696e5472616e73616374696f6e5265" .
            "717565737412100a086461746162617365180120012809123d0a076f7074" .
            "696f6e7318022001280b322c2e676f6f676c652e6669726573746f72652e" .
            "763162657461312e5472616e73616374696f6e4f7074696f6e73222f0a18" .
            "426567696e5472616e73616374696f6e526573706f6e736512130a0b7472" .
            "616e73616374696f6e18012001280c22670a0d436f6d6d69745265717565" .
            "737412100a086461746162617365180120012809122f0a06777269746573" .
            "18022003280b321f2e676f6f676c652e6669726573746f72652e76316265" .
            "7461312e577269746512130a0b7472616e73616374696f6e18032001280c" .
            "227f0a0e436f6d6d6974526573706f6e7365123c0a0d77726974655f7265" .
            "73756c747318012003280b32252e676f6f676c652e6669726573746f7265" .
            "2e763162657461312e5772697465526573756c74122f0a0b636f6d6d6974" .
            "5f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e" .
            "54696d657374616d7022380a0f526f6c6c6261636b526571756573741210" .
            "0a08646174616261736518012001280912130a0b7472616e73616374696f" .
            "6e18022001280c229f020a0f52756e517565727952657175657374120e0a" .
            "06706172656e7418012001280912450a10737472756374757265645f7175" .
            "65727918022001280b32292e676f6f676c652e6669726573746f72652e76" .
            "3162657461312e537472756374757265645175657279480012150a0b7472" .
            "616e73616374696f6e18052001280c480112470a0f6e65775f7472616e73" .
            "616374696f6e18062001280b322c2e676f6f676c652e6669726573746f72" .
            "652e763162657461312e5472616e73616374696f6e4f7074696f6e734801" .
            "122f0a09726561645f74696d6518072001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d704801420c0a0a71756572795f74" .
            "79706542160a14636f6e73697374656e63795f73656c6563746f7222a501" .
            "0a1052756e5175657279526573706f6e736512130a0b7472616e73616374" .
            "696f6e18022001280c12340a08646f63756d656e7418012001280b32222e" .
            "676f6f676c652e6669726573746f72652e763162657461312e446f63756d" .
            "656e74122d0a09726561645f74696d6518032001280b321a2e676f6f676c" .
            "652e70726f746f6275662e54696d657374616d7012170a0f736b69707065" .
            "645f726573756c7473180420012805227a0a0c5772697465526571756573" .
            "7412100a08646174616261736518012001280912110a0973747265616d5f" .
            "6964180220012809122f0a0677726974657318032003280b321f2e676f6f" .
            "676c652e6669726573746f72652e763162657461312e577269746512140a" .
            "0c73747265616d5f746f6b656e18042001280c22a7010a0d577269746552" .
            "6573706f6e736512110a0973747265616d5f696418012001280912140a0c" .
            "73747265616d5f746f6b656e18022001280c123c0a0d77726974655f7265" .
            "73756c747318032003280b32252e676f6f676c652e6669726573746f7265" .
            "2e763162657461312e5772697465526573756c74122f0a0b636f6d6d6974" .
            "5f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e" .
            "54696d657374616d702283010a0d4c697374656e5265717565737412100a" .
            "08646174616261736518012001280912360a0a6164645f74617267657418" .
            "022001280b32202e676f6f676c652e6669726573746f72652e7631626574" .
            "61312e546172676574480012170a0d72656d6f76655f7461726765741803" .
            "200128054800420f0a0d7461726765745f6368616e676522ee020a0e4c69" .
            "7374656e526573706f6e7365123f0a0d7461726765745f6368616e676518" .
            "022001280b32262e676f6f676c652e6669726573746f72652e7631626574" .
            "61312e5461726765744368616e6765480012430a0f646f63756d656e745f" .
            "6368616e676518032001280b32282e676f6f676c652e6669726573746f72" .
            "652e763162657461312e446f63756d656e744368616e6765480012430a0f" .
            "646f63756d656e745f64656c65746518042001280b32282e676f6f676c65" .
            "2e6669726573746f72652e763162657461312e446f63756d656e7444656c" .
            "657465480012430a0f646f63756d656e745f72656d6f766518062001280b" .
            "32282e676f6f676c652e6669726573746f72652e763162657461312e446f" .
            "63756d656e7452656d6f76654800123b0a0666696c74657218052001280b" .
            "32292e676f6f676c652e6669726573746f72652e763162657461312e4578" .
            "697374656e636546696c7465724800420f0a0d726573706f6e73655f7479" .
            "706522b0030a06546172676574123d0a05717565727918022001280b322c" .
            "2e676f6f676c652e6669726573746f72652e763162657461312e54617267" .
            "65742e5175657279546172676574480012450a09646f63756d656e747318" .
            "032001280b32302e676f6f676c652e6669726573746f72652e7631626574" .
            "61312e5461726765742e446f63756d656e7473546172676574480012160a" .
            "0c726573756d655f746f6b656e18042001280c4801122f0a09726561645f" .
            "74696d65180b2001280b321a2e676f6f676c652e70726f746f6275662e54" .
            "696d657374616d70480112110a097461726765745f696418052001280512" .
            "0c0a046f6e63651806200128081a240a0f446f63756d656e747354617267" .
            "657412110a09646f63756d656e74731802200328091a720a0b5175657279" .
            "546172676574120e0a06706172656e7418012001280912450a1073747275" .
            "6374757265645f717565727918022001280b32292e676f6f676c652e6669" .
            "726573746f72652e763162657461312e5374727563747572656451756572" .
            "794800420c0a0a71756572795f74797065420d0a0b7461726765745f7479" .
            "7065420d0a0b726573756d655f7479706522af020a0c5461726765744368" .
            "616e676512530a127461726765745f6368616e67655f7479706518012001" .
            "280e32372e676f6f676c652e6669726573746f72652e763162657461312e" .
            "5461726765744368616e67652e5461726765744368616e67655479706512" .
            "120a0a7461726765745f69647318022003280512210a0563617573651803" .
            "2001280b32122e676f6f676c652e7270632e53746174757312140a0c7265" .
            "73756d655f746f6b656e18042001280c122d0a09726561645f74696d6518" .
            "062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d70224e0a105461726765744368616e676554797065120d0a094e4f5f" .
            "4348414e4745100012070a034144441001120a0a0652454d4f5645100212" .
            "0b0a0743555252454e54100312090a055245534554100422510a184c6973" .
            "74436f6c6c656374696f6e49647352657175657374120e0a06706172656e" .
            "7418012001280912110a09706167655f73697a6518022001280512120a0a" .
            "706167655f746f6b656e180320012809224c0a194c697374436f6c6c6563" .
            "74696f6e496473526573706f6e736512160a0e636f6c6c656374696f6e5f" .
            "69647318012003280912170a0f6e6578745f706167655f746f6b656e1802" .
            "200128093298110a094669726573746f7265125f0a0b476574446f63756d" .
            "656e74122c2e676f6f676c652e6669726573746f72652e76316265746131" .
            "2e476574446f63756d656e74526571756573741a222e676f6f676c652e66" .
            "69726573746f72652e763162657461312e446f63756d656e7412700a0d4c" .
            "697374446f63756d656e7473122e2e676f6f676c652e6669726573746f72" .
            "652e763162657461312e4c697374446f63756d656e747352657175657374" .
            "1a2f2e676f6f676c652e6669726573746f72652e763162657461312e4c69" .
            "7374446f63756d656e7473526573706f6e736512be010a0e437265617465" .
            "446f63756d656e74122f2e676f6f676c652e6669726573746f72652e7631" .
            "62657461312e437265617465446f63756d656e74526571756573741a222e" .
            "676f6f676c652e6669726573746f72652e763162657461312e446f63756d" .
            "656e74225782d3e493025122452f763162657461312f7b706172656e743d" .
            "70726f6a656374732f2a2f6461746162617365732f2a2f646f63756d656e" .
            "74732f2a2a7d2f7b636f6c6c656374696f6e5f69647d3a08646f63756d65" .
            "6e7412b7010a0e557064617465446f63756d656e74122f2e676f6f676c65" .
            "2e6669726573746f72652e763162657461312e557064617465446f63756d" .
            "656e74526571756573741a222e676f6f676c652e6669726573746f72652e" .
            "763162657461312e446f63756d656e74225082d3e493024a323e2f763162" .
            "657461312f7b646f63756d656e742e6e616d653d70726f6a656374732f2a" .
            "2f6461746162617365732f2a2f646f63756d656e74732f2a2f2a2a7d3a08" .
            "646f63756d656e741298010a0e44656c657465446f63756d656e74122f2e" .
            "676f6f676c652e6669726573746f72652e763162657461312e44656c6574" .
            "65446f63756d656e74526571756573741a162e676f6f676c652e70726f74" .
            "6f6275662e456d707479223d82d3e49302372a352f763162657461312f7b" .
            "6e616d653d70726f6a656374732f2a2f6461746162617365732f2a2f646f" .
            "63756d656e74732f2a2f2a2a7d12c8010a114261746368476574446f6375" .
            "6d656e747312322e676f6f676c652e6669726573746f72652e7631626574" .
            "61312e4261746368476574446f63756d656e7473526571756573741a332e" .
            "676f6f676c652e6669726573746f72652e763162657461312e4261746368" .
            "476574446f63756d656e7473526573706f6e7365224882d3e4930242223d" .
            "2f763162657461312f7b64617461626173653d70726f6a656374732f2a2f" .
            "6461746162617365732f2a7d2f646f63756d656e74733a62617463684765" .
            "743a012a300112cb010a10426567696e5472616e73616374696f6e12312e" .
            "676f6f676c652e6669726573746f72652e763162657461312e426567696e" .
            "5472616e73616374696f6e526571756573741a322e676f6f676c652e6669" .
            "726573746f72652e763162657461312e426567696e5472616e7361637469" .
            "6f6e526573706f6e7365225082d3e493024a22452f763162657461312f7b" .
            "64617461626173653d70726f6a656374732f2a2f6461746162617365732f" .
            "2a7d2f646f63756d656e74733a626567696e5472616e73616374696f6e3a" .
            "012a12a3010a06436f6d6d697412272e676f6f676c652e6669726573746f" .
            "72652e763162657461312e436f6d6d6974526571756573741a282e676f6f" .
            "676c652e6669726573746f72652e763162657461312e436f6d6d69745265" .
            "73706f6e7365224682d3e4930240223b2f763162657461312f7b64617461" .
            "626173653d70726f6a656374732f2a2f6461746162617365732f2a7d2f64" .
            "6f63756d656e74733a636f6d6d69743a012a1297010a08526f6c6c626163" .
            "6b12292e676f6f676c652e6669726573746f72652e763162657461312e52" .
            "6f6c6c6261636b526571756573741a162e676f6f676c652e70726f746f62" .
            "75662e456d707479224882d3e4930242223d2f763162657461312f7b6461" .
            "7461626173653d70726f6a656374732f2a2f6461746162617365732f2a7d" .
            "2f646f63756d656e74733a726f6c6c6261636b3a012a12ab010a0852756e" .
            "517565727912292e676f6f676c652e6669726573746f72652e7631626574" .
            "61312e52756e5175657279526571756573741a2a2e676f6f676c652e6669" .
            "726573746f72652e763162657461312e52756e5175657279526573706f6e" .
            "7365224682d3e4930240223b2f763162657461312f7b706172656e743d70" .
            "726f6a656374732f2a2f6461746162617365732f2a2f646f63756d656e74" .
            "737d3a72756e51756572793a012a300112a3010a05577269746512262e67" .
            "6f6f676c652e6669726573746f72652e763162657461312e577269746552" .
            "6571756573741a272e676f6f676c652e6669726573746f72652e76316265" .
            "7461312e5772697465526573706f6e7365224582d3e493023f223a2f7631" .
            "62657461312f7b64617461626173653d70726f6a656374732f2a2f646174" .
            "6162617365732f2a7d2f646f63756d656e74733a77726974653a012a2801" .
            "300112a7010a064c697374656e12272e676f6f676c652e6669726573746f" .
            "72652e763162657461312e4c697374656e526571756573741a282e676f6f" .
            "676c652e6669726573746f72652e763162657461312e4c697374656e5265" .
            "73706f6e7365224682d3e4930240223b2f763162657461312f7b64617461" .
            "626173653d70726f6a656374732f2a2f6461746162617365732f2a7d2f64" .
            "6f63756d656e74733a6c697374656e3a012a2801300112ca010a114c6973" .
            "74436f6c6c656374696f6e49647312322e676f6f676c652e666972657374" .
            "6f72652e763162657461312e4c697374436f6c6c656374696f6e49647352" .
            "6571756573741a332e676f6f676c652e6669726573746f72652e76316265" .
            "7461312e4c697374436f6c6c656374696f6e496473526573706f6e736522" .
            "4c82d3e493024622442f763162657461312f7b706172656e743d70726f6a" .
            "656374732f2a2f6461746162617365732f2a2f646f63756d656e74737d3a" .
            "6c697374436f6c6c656374696f6e496473429b010a1c636f6d2e676f6f67" .
            "6c652e6669726573746f72652e76316265746131420e4669726573746f72" .
            "6550726f746f50015a41676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f6669726573746f72652f7631" .
            "62657461313b6669726573746f7265a2020447434653aa021e476f6f676c" .
            "652e436c6f75642e4669726573746f72652e56314265746131620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

