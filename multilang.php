<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MultiLang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #7effe1, #897eff, #888eff, #897eff, #7effe1);
            padding:30px;
        }
        
        h1 {
            
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <br>
    <div style="text-align: center;">
        <?php
        $content = array (
        
        array ( // 0
        "en" => "<h1>English</h1><p>Cognifront delivers industrial technology solutions to customers that include BOSCH, CEAT, and AutoDESK. Cognifront also develops excellent eTeaching Tools used by IIT Madras, IIT Guwahati, Don Bosco University, University of Oslo in Norway, IIT Bombay, IIT Patna, University of Nairobi in Kenya, NIT Surat and such 100+ institutions in India and abroad. Cognifront's innovative low cost IoT kit is used by 20+ institutions. Cognifront also offers certificate courses in Machine Learning, Deep Learning, IoT that are highly recognized in industry and have placed more than 250 students in academic year 2019-2024 at top companies that include Infosys, Cognizant, Zensar, Deloitte and TCS (Tata Consultancy Services)<p>",
        "mr" => "<h1>मराठी</h1><p> कॉग्निफ्रंट ग्राहकांना औद्योगिक तंत्रज्ञानाचे उपाय प्रदान करते ज्यामध्ये बॉश, सीएएटी आणि ऑटोडेस्क यांचा समावेश आहे. कॉग्निफ्रंट आयआयटी मद्रास, आयआयटी गुवाहाटी, डॉन बॉस्को विद्यापीठ, नॉर्वेमधील ओस्लो विद्यापीठ, आयआयटी बॉम्बे, आयआयटी पटना, केनियामधील नैरोबी विद्यापीठ, एनआयटी सुरत आणि भारतातील आणि परदेशातील अशा १००+ संस्थांमध्ये वापरले जाणारे उत्कृष्ट ई-टीचिंग टूल्स देखील विकसित करते. कॉग्निफ्रंटचे नाविन्यपूर्ण कमी किमतीचे आयओटी किट २०+ संस्था वापरतात. कॉग्निफ्रंट मशीन लर्निंग, डीप लर्निंग, आयओटी मधील प्रमाणपत्र अभ्यासक्रम देखील देते जे उद्योगात अत्यंत मान्यताप्राप्त आहेत आणि शैक्षणिक वर्ष २०१९-२०२४ मध्ये इन्फोसिस, कॉग्निझंट, झेंसर, डेलॉइट आणि टीसीएस (टाटा कन्सल्टन्सी सर्व्हिसेस) यासारख्या शीर्ष कंपन्यांमध्ये २५० हून अधिक विद्यार्थ्यांना नियुक्त केले आहे. </p>",
        "hi" => "<h1>हिंदी</h1><p> कॉग्निफ़्रंट ग्राहकों को औद्योगिक प्रौद्योगिकी समाधान प्रदान करता है जिसमें BOSCH, CEAT और AutoDESK शामिल हैं। कॉग्निफ़्रंट बेहतरीन ई-शिक्षण उपकरण भी विकसित करता है जिसका उपयोग IIT मद्रास, IIT गुवाहाटी, डॉन बॉस्को विश्वविद्यालय, नॉर्वे में ओस्लो विश्वविद्यालय, IIT बॉम्बे, IIT पटना, केन्या में नैरोबी विश्वविद्यालय, NIT सूरत और भारत और विदेशों में ऐसे 100 से अधिक संस्थानों द्वारा किया जाता है। कॉग्निफ़्रंट की अभिनव कम लागत वाली IoT किट का उपयोग 20 से अधिक संस्थानों द्वारा किया जाता है। कॉग्निफ़्रंट मशीन लर्निंग, डीप लर्निंग, IoT में सर्टिफिकेट कोर्स भी प्रदान करता है जो उद्योग में अत्यधिक मान्यता प्राप्त हैं और शैक्षणिक वर्ष 2019-2024 में 250 से अधिक छात्रों को शीर्ष कंपनियों में रखा है जिनमें इंफोसिस, कॉग्निजेंट, ज़ेनसार, डेलोइट और टीसीएस (टाटा कंसल्टेंसी सर्विसेज) शामिल हैं</p>" ),
    
    
        array ( // 1
        "en" => "<h1>Ambitious Bharat fuelled by Powerful Tools</h1><p>Cognifront delivers industrial technology solutions to customers that include BOSCH, CEAT, and AutoDESK. Cognifront also develops excellent eTeaching Tools used by IIT Madras, IIT Guwahati, Don Bosco University, University of Oslo in Norway, IIT Bombay, IIT Patna, University of Nairobi in Kenya, NIT Surat and such 100+ institutions in India and abroad. Cognifront's innovative low cost IoT kit is used by 20+ institutions. Cognifront also offers certificate courses in Machine Learning, Deep Learning, IoT that are highly recognized in industry and have placed more than 250 students in academic year 2019-2024 at top companies that include Infosys, Cognizant, Zensar, Deloitte and TCS (Tata Consultancy Services)<p>",
        "mr" => "<h1>नव्या महत्वाकांक्षी भारतासाठी जबरदस्त टूल्स</h1><p> कॉग्निफ्रंट ग्राहकांना औद्योगिक तंत्रज्ञानाचे उपाय प्रदान करते ज्यामध्ये बॉश, सीएएटी आणि ऑटोडेस्क यांचा समावेश आहे. कॉग्निफ्रंट आयआयटी मद्रास, आयआयटी गुवाहाटी, डॉन बॉस्को विद्यापीठ, नॉर्वेमधील ओस्लो विद्यापीठ, आयआयटी बॉम्बे, आयआयटी पटना, केनियामधील नैरोबी विद्यापीठ, एनआयटी सुरत आणि भारतातील आणि परदेशातील अशा १००+ संस्थांमध्ये वापरले जाणारे उत्कृष्ट ई-टीचिंग टूल्स देखील विकसित करते. कॉग्निफ्रंटचे नाविन्यपूर्ण कमी किमतीचे आयओटी किट २०+ संस्था वापरतात. कॉग्निफ्रंट मशीन लर्निंग, डीप लर्निंग, आयओटी मधील प्रमाणपत्र अभ्यासक्रम देखील देते जे उद्योगात अत्यंत मान्यताप्राप्त आहेत आणि शैक्षणिक वर्ष २०१९-२०२४ मध्ये इन्फोसिस, कॉग्निझंट, झेंसर, डेलॉइट आणि टीसीएस (टाटा कन्सल्टन्सी सर्व्हिसेस) यासारख्या शीर्ष कंपन्यांमध्ये २५० हून अधिक विद्यार्थ्यांना नियुक्त केले आहे. </p>",
        "hi" => "<h1>नए महत्वाकांक्षी भारत के लिए जबरदस्त टूल्स</h1><p> कॉग्निफ़्रंट ग्राहकों को औद्योगिक प्रौद्योगिकी समाधान प्रदान करता है जिसमें BOSCH, CEAT और AutoDESK शामिल हैं। कॉग्निफ़्रंट बेहतरीन ई-शिक्षण उपकरण भी विकसित करता है जिसका उपयोग IIT मद्रास, IIT गुवाहाटी, डॉन बॉस्को विश्वविद्यालय, नॉर्वे में ओस्लो विश्वविद्यालय, IIT बॉम्बे, IIT पटना, केन्या में नैरोबी विश्वविद्यालय, NIT सूरत और भारत और विदेशों में ऐसे 100 से अधिक संस्थानों द्वारा किया जाता है। कॉग्निफ़्रंट की अभिनव कम लागत वाली IoT किट का उपयोग 20 से अधिक संस्थानों द्वारा किया जाता है। कॉग्निफ़्रंट मशीन लर्निंग, डीप लर्निंग, IoT में सर्टिफिकेट कोर्स भी प्रदान करता है जो उद्योग में अत्यधिक मान्यता प्राप्त हैं और शैक्षणिक वर्ष 2019-2024 में 250 से अधिक छात्रों को शीर्ष कंपनियों में रखा है जिनमें इंफोसिस, कॉग्निजेंट, ज़ेनसार, डेलोइट और टीसीएस (टाटा कंसल्टेंसी सर्विसेज) शामिल हैं</p>" ),
        
        array ( // 2
        "en" => "<h1>Students</h1>",
        "mr" => "<h1>विद्यार्थी</h1>",
        "hi" => "<h1>विद्यार्थी</h1>"),
        
        array ( // 3
        "en" => "<h1>Teachers</h1>")
        
        );
    
        function rendercontent ($id,$lang)
        {
            global $content;
            if (isset($content[$id][$lang])) echo $content[$id][$lang];
            else echo $content[$id]["en"];
        }
    
        rendercontent (0,$_GET['lang']);
        rendercontent (1,$_GET['lang']);
        rendercontent (2,$_GET['lang']);
        rendercontent (3,$_GET['lang']);
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php rendercontent (0,$_GET['lang']); ?>
            </div>
            <div class="col-4">
                <?php rendercontent (1,$_GET['lang']); ?>
            </div>
            <div class="col-4">
                <?php rendercontent (2,$_GET['lang']); ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>