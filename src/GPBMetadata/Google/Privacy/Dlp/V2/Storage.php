<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace GPBMetadata\Google\Privacy\Dlp\V2;

class Storage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a92190a23676f6f676c652f707269766163792f646c702f76322f73746f" .
            "726167652e70726f746f1215676f6f676c652e707269766163792e646c70" .
            "2e76321a1f676f6f676c652f70726f746f6275662f74696d657374616d70" .
            "2e70726f746f22180a08496e666f54797065120c0a046e616d6518012001" .
            "28092296090a0e437573746f6d496e666f5479706512320a09696e666f5f" .
            "7479706518012001280b321f2e676f6f676c652e707269766163792e646c" .
            "702e76322e496e666f5479706512350a0a6c696b656c69686f6f64180620" .
            "01280e32212e676f6f676c652e707269766163792e646c702e76322e4c69" .
            "6b656c69686f6f6412460a0a64696374696f6e61727918022001280b3230" .
            "2e676f6f676c652e707269766163792e646c702e76322e437573746f6d49" .
            "6e666f547970652e44696374696f6e6172794800123c0a05726567657818" .
            "032001280b322b2e676f6f676c652e707269766163792e646c702e76322e" .
            "437573746f6d496e666f547970652e52656765784800124d0a0e73757272" .
            "6f676174655f7479706518042001280b32332e676f6f676c652e70726976" .
            "6163792e646c702e76322e437573746f6d496e666f547970652e53757272" .
            "6f67617465547970654800124c0a0f646574656374696f6e5f72756c6573" .
            "18072003280b32332e676f6f676c652e707269766163792e646c702e7632" .
            "2e437573746f6d496e666f547970652e446574656374696f6e52756c651a" .
            "81010a0a44696374696f6e617279124e0a09776f72645f6c697374180120" .
            "01280b32392e676f6f676c652e707269766163792e646c702e76322e4375" .
            "73746f6d496e666f547970652e44696374696f6e6172792e576f72644c69" .
            "737448001a190a08576f72644c697374120d0a05776f7264731801200328" .
            "0942080a06736f757263651a180a055265676578120f0a07706174746572" .
            "6e1801200128091a0f0a0d537572726f67617465547970651abe040a0d44" .
            "6574656374696f6e52756c6512570a0c686f74776f72645f72756c651801" .
            "2001280b323f2e676f6f676c652e707269766163792e646c702e76322e43" .
            "7573746f6d496e666f547970652e446574656374696f6e52756c652e486f" .
            "74776f726452756c6548001a380a0950726f78696d69747912150a0d7769" .
            "6e646f775f6265666f726518012001280512140a0c77696e646f775f6166" .
            "7465721802200128051a82010a144c696b656c69686f6f6441646a757374" .
            "6d656e74123d0a1066697865645f6c696b656c69686f6f6418012001280e" .
            "32212e676f6f676c652e707269766163792e646c702e76322e4c696b656c" .
            "69686f6f644800121d0a1372656c61746976655f6c696b656c69686f6f64" .
            "1802200128054800420c0a0a61646a7573746d656e741a8c020a0b486f74" .
            "776f726452756c6512420a0d686f74776f72645f72656765781801200128" .
            "0b322b2e676f6f676c652e707269766163792e646c702e76322e43757374" .
            "6f6d496e666f547970652e526567657812500a0970726f78696d69747918" .
            "022001280b323d2e676f6f676c652e707269766163792e646c702e76322e" .
            "437573746f6d496e666f547970652e446574656374696f6e52756c652e50" .
            "726f78696d69747912670a156c696b656c69686f6f645f61646a7573746d" .
            "656e7418032001280b32482e676f6f676c652e707269766163792e646c70" .
            "2e76322e437573746f6d496e666f547970652e446574656374696f6e5275" .
            "6c652e4c696b656c69686f6f6441646a7573746d656e7442060a04747970" .
            "6542060a047479706522170a074669656c644964120c0a046e616d651801" .
            "2001280922370a0b506172746974696f6e496412120a0a70726f6a656374" .
            "5f696418022001280912140a0c6e616d6573706163655f69641804200128" .
            "09221e0a0e4b696e6445787072657373696f6e120c0a046e616d65180120" .
            "0128092281010a104461746173746f72654f7074696f6e7312380a0c7061" .
            "72746974696f6e5f696418012001280b32222e676f6f676c652e70726976" .
            "6163792e646c702e76322e506172746974696f6e496412330a046b696e64" .
            "18022001280b32252e676f6f676c652e707269766163792e646c702e7632" .
            "2e4b696e6445787072657373696f6e2291010a13436c6f756453746f7261" .
            "67654f7074696f6e7312440a0866696c655f73657418012001280b32322e" .
            "676f6f676c652e707269766163792e646c702e76322e436c6f756453746f" .
            "726167654f7074696f6e732e46696c65536574121c0a1462797465735f6c" .
            "696d69745f7065725f66696c651804200128031a160a0746696c65536574" .
            "120b0a0375726c180120012809228c010a0f42696751756572794f707469" .
            "6f6e73123d0a0f7461626c655f7265666572656e636518012001280b3224" .
            "2e676f6f676c652e707269766163792e646c702e76322e42696751756572" .
            "795461626c65123a0a126964656e74696679696e675f6669656c64731802" .
            "2003280b321e2e676f6f676c652e707269766163792e646c702e76322e46" .
            "69656c644964229a040a0d53746f72616765436f6e66696712440a116461" .
            "746173746f72655f6f7074696f6e7318022001280b32272e676f6f676c65" .
            "2e707269766163792e646c702e76322e4461746173746f72654f7074696f" .
            "6e734800124b0a15636c6f75645f73746f726167655f6f7074696f6e7318" .
            "032001280b322a2e676f6f676c652e707269766163792e646c702e76322e" .
            "436c6f756453746f726167654f7074696f6e73480012430a116269675f71" .
            "756572795f6f7074696f6e7318042001280b32262e676f6f676c652e7072" .
            "69766163792e646c702e76322e42696751756572794f7074696f6e734800" .
            "124c0a0f74696d657370616e5f636f6e66696718062001280b32332e676f" .
            "6f676c652e707269766163792e646c702e76322e53746f72616765436f6e" .
            "6669672e54696d657370616e436f6e6669671ada010a0e54696d65737061" .
            "6e436f6e666967122e0a0a73746172745f74696d6518012001280b321a2e" .
            "676f6f676c652e70726f746f6275662e54696d657374616d70122c0a0865" .
            "6e645f74696d6518022001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d7012370a0f74696d657374616d705f6669656c64" .
            "18032001280b321e2e676f6f676c652e707269766163792e646c702e7632" .
            "2e4669656c64496412310a29656e61626c655f6175746f5f706f70756c61" .
            "74696f6e5f6f665f74696d657370616e5f636f6e66696718042001280842" .
            "060a047479706522600a0b42696751756572794b6579123d0a0f7461626c" .
            "655f7265666572656e636518012001280b32242e676f6f676c652e707269" .
            "766163792e646c702e76322e42696751756572795461626c6512120a0a72" .
            "6f775f6e756d626572180220012803223e0a0c4461746173746f72654b65" .
            "79122e0a0a656e746974795f6b657918012001280b321a2e676f6f676c65" .
            "2e707269766163792e646c702e76322e4b657922bb010a034b657912380a" .
            "0c706172746974696f6e5f696418012001280b32222e676f6f676c652e70" .
            "7269766163792e646c702e76322e506172746974696f6e496412340a0470" .
            "61746818022003280b32262e676f6f676c652e707269766163792e646c70" .
            "2e76322e4b65792e50617468456c656d656e741a440a0b50617468456c65" .
            "6d656e74120c0a046b696e64180120012809120c0a026964180220012803" .
            "4800120e0a046e616d65180320012809480042090a0769645f7479706522" .
            "8e010a095265636f72644b6579123c0a0d6461746173746f72655f6b6579" .
            "18022001280b32232e676f6f676c652e707269766163792e646c702e7632" .
            "2e4461746173746f72654b65794800123b0a0d6269675f71756572795f6b" .
            "657918032001280b32222e676f6f676c652e707269766163792e646c702e" .
            "76322e42696751756572794b6579480042060a047479706522490a0d4269" .
            "6751756572795461626c6512120a0a70726f6a6563745f69641801200128" .
            "0912120a0a646174617365745f696418022001280912100a087461626c65" .
            "5f69641803200128092a740a0a4c696b656c69686f6f64121a0a164c494b" .
            "454c49484f4f445f554e535045434946494544100012110a0d564552595f" .
            "554e4c494b454c591001120c0a08554e4c494b454c591002120c0a08504f" .
            "535349424c451003120a0a064c494b454c591004120f0a0b564552595f4c" .
            "494b454c591005428f010a19636f6d2e676f6f676c652e70726976616379" .
            "2e646c702e7632420a446c7053746f7261676550015a38676f6f676c652e" .
            "676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561706973" .
            "2f707269766163792f646c702f76323b646c70aa0213476f6f676c652e43" .
            "6c6f75642e446c702e5632ca0213476f6f676c655c436c6f75645c446c70" .
            "5c5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

