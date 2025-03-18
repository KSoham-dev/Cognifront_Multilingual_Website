<?php
function navbar(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .dropdown-menu {
            max-height: 400px;
            overflow-y: auto;
        }
        #countryImg {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="assets\cognifront-logo-transparent.png" alt="logo" height="20"/>
              </a>
              <div class="d-flex">
                <div class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="langDropName">
                      English
                    </a>
                    <ul class="dropdown-menu" id="langSel">
                    </ul>
                </div>
                <div class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="countryDropName">
                        <img src="assets/country-squared/in.svg" height="16" style="margin-right: 10px;"> India
                    </a>
                    <ul class="dropdown-menu" id="countrySel">
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Link 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</body>
<script src="assets/lang.js"></script>
<script src="assets/countries.js"></script>
<script>
    const language_sel = document.getElementById('langSel');
    const country_sel = document.getElementById('countrySel');
    const langDropName = document.getElementById('langDropName');
    const countryDropName = document.getElementById('countryDropName');
    let cookies = document.cookie.split(';');
    let country = cookies.find((item) => item.includes('country'));
    let language = cookies.find((item) => item.includes('language'));

    let countriesUpdt = countries["Results"]
    console.log(countriesUpdt)
    for (let i in countriesUpdt){
        let li = document.createElement('li');
        let a = document.createElement('a');
        a.setAttribute('class', 'dropdown-item');
        a.setAttribute('href', '#');
        a.innerHTML = `<img src="assets/country-squared/${i.toLowerCase()}.svg" height="16" id="countryImg">`;
        a.innerHTML += countriesUpdt[i].Name;
        li.appendChild(a);
        country_sel.appendChild(li);
    }
    for (let i in languages){
        let li = document.createElement('li');
        let a = document.createElement('a');
        a.setAttribute('class', 'dropdown-item');
        a.setAttribute('href', '#');
        a.innerHTML = languages[i].name
        li.appendChild(a);
        language_sel.appendChild(li);
    }

    document.addEventListener("DOMContentLoaded", function() {
        console.log(cookies)
        if (country) {
            country = country.substring(9);
            countryDropName.innerHTML = country;
            console.log(country);
        }

        if (language) {
            language_code = language.split('=')[1];
            for (let i in languages){
                console.log(language_code)
                if (languages[i]["code"] == language_code){
                    language = languages[i]["name"];
                }
            }
            langDropName.innerHTML = language_code.toUpperCase();
        }


        country_sel.querySelectorAll('a').forEach((item) => {
            item.addEventListener('click', (e) => {
                console.log(e.target.innerHTML);
                countryDropName.innerHTML = e.target.innerHTML;
                
                setCookie('country', e.target.innerHTML, 30);
                location.reload();
            });
        });
        language_sel.querySelectorAll('a').forEach((item) => {
            item.addEventListener('click', (e) => {
                // console.log(e.target.innerHTML);
                langDropName.innerHTML = e.target.innerHTML;
                for (let i in languages){
                    // console.log(i,languages[i]["name"], e.target.innerHTML);
                    if (languages[i]["name"] == e.target.innerHTML){
                        console.log(languages[i]["code"]);
                        setCookie('language', languages[i]["code"], 30);
                    }
                }
                // setCookie('language', e.target.innerHTML, 30);
                location.reload();
            });
        });
    });

    function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
</script>
</html>

<?php 
    }
?>