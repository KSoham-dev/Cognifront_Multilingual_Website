<?php 
include 'navbar.php';
$content = array (
    array ( "en" => "<h1>English</h1><p>Cognifront delivers industrial technology solutions to customers that include BOSCH, CEAT, and AutoDESK. Cognifront also develops excellent eTeaching Tools used by IIT Madras, IIT Guwahati, Don Bosco University, University of Oslo in Norway, IIT Bombay, IIT Patna, University of Nairobi in Kenya, NIT Surat and such 100+ institutions in India and abroad. Cognifront's innovative low cost IoT kit is used by 20+ institutions. Cognifront also offers certificate courses in Machine Learning, Deep Learning, IoT that are highly recognized in industry and have placed more than 250 students in academic year 2019-2024 at top companies that include Infosys, Cognizant, Zensar, Deloitte and TCS (Tata Consultancy Services)<p>",
            "mr" => "<h1>Marathi</h1><p> कॉग्निफ्रंट ग्राहकांना औद्योगिक तंत्रज्ञानाचे उपाय प्रदान करते ज्यामध्ये बॉश, सीएएटी आणि ऑटोडेस्क यांचा समावेश आहे. कॉग्निफ्रंट आयआयटी मद्रास, आयआयटी गुवाहाटी, डॉन बॉस्को विद्यापीठ, नॉर्वेमधील ओस्लो विद्यापीठ, आयआयटी बॉम्बे, आयआयटी पटना, केनियामधील नैरोबी विद्यापीठ, एनआयटी सुरत आणि भारतातील आणि परदेशातील अशा १००+ संस्थांमध्ये वापरले जाणारे उत्कृष्ट ई-टीचिंग टूल्स देखील विकसित करते. कॉग्निफ्रंटचे नाविन्यपूर्ण कमी किमतीचे आयओटी किट २०+ संस्था वापरतात. कॉग्निफ्रंट मशीन लर्निंग, डीप लर्निंग, आयओटी मधील प्रमाणपत्र अभ्यासक्रम देखील देते जे उद्योगात अत्यंत मान्यताप्राप्त आहेत आणि शैक्षणिक वर्ष २०१९-२०२४ मध्ये इन्फोसिस, कॉग्निझंट, झेंसर, डेलॉइट आणि टीसीएस (टाटा कन्सल्टन्सी सर्व्हिसेस) यासारख्या शीर्ष कंपन्यांमध्ये २५० हून अधिक विद्यार्थ्यांना नियुक्त केले आहे. </p>",
            "hi" => "<h1>Hindi</h1><p> कॉग्निफ़्रंट ग्राहकों को औद्योगिक प्रौद्योगिकी समाधान प्रदान करता है जिसमें BOSCH, CEAT और AutoDESK शामिल हैं। कॉग्निफ़्रंट बेहतरीन ई-शिक्षण उपकरण भी विकसित करता है जिसका उपयोग IIT मद्रास, IIT गुवाहाटी, डॉन बॉस्को विश्वविद्यालय, नॉर्वे में ओस्लो विश्वविद्यालय, IIT बॉम्बे, IIT पटना, केन्या में नैरोबी विश्वविद्यालय, NIT सूरत और भारत और विदेशों में ऐसे 100 से अधिक संस्थानों द्वारा किया जाता है। कॉग्निफ़्रंट की अभिनव कम लागत वाली IoT किट का उपयोग 20 से अधिक संस्थानों द्वारा किया जाता है। कॉग्निफ़्रंट मशीन लर्निंग, डीप लर्निंग, IoT में सर्टिफिकेट कोर्स भी प्रदान करता है जो उद्योग में अत्यधिक मान्यता प्राप्त हैं और शैक्षणिक वर्ष 2019-2024 में 250 से अधिक छात्रों को शीर्ष कंपनियों में रखा है जिनमें इंफोसिस, कॉग्निजेंट, ज़ेनसार, डेलोइट और टीसीएस (टाटा कंसल्टेंसी सर्विसेज) शामिल हैं</p>" )
);

function rendercontent ($id,$lang)
{
    global $content;
    if (isset($content[$id][$lang])) return $content[$id][$lang];
    else return "$id : $lang";
}
?>

<?=navbar()?>

<div class="container">
    <div class="row">
        <div class="col-12">
<?php
    $lang = "en";
    if (isset($_COOKIE["language"]))
        $lang = $_COOKIE["language"];
    echo rendercontent (0,$lang);
?>
        </div>
    </div>
</div>