const language_sel = document.getElementById('langSel');
    const country_sel = document.getElementById('countrySel');
    const langDropName = document.getElementById('langDropName');
    const countryDropName = document.getElementById('countryDropName');
    let cookies = document.cookie.split(';');
    let country = cookies.find((item) => item.includes('country'));
    let language = cookies.find((item) => item.includes('language'));

    let countriesUpdt = countries["Results"];

    for (let i in countriesUpdt){
        let li = document.createElement('li');
        let a = document.createElement('a');
        a.setAttribute('class', 'dropdown-item');
        a.setAttribute('href', '#');
        a.innerHTML = `<img src="assets/country-squared/${i.toLowerCase()}.svg" height="15" id="countryImg">`;
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
        if (country) {
            country = country.substring(9);
            countryDropName.innerHTML = `<img src="assets/country-squared/${country.toLowerCase()}.svg" height="15" id="countryImg"><span class="country-name">${country}</span>`;
        }

        if (language) {
            let language_code = language.split('=')[1];
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
                let countryName = e.target.innerHTML.replace(/<img[^>]*>/, '').trim();
                console.log(countryName);
                
                for (let i in countriesUpdt){    
                    if(countriesUpdt[i].Name === countryName ){                       
                        setCookie('country', i, 30);
                    }
                }
                
               location.reload();
            });
        });
        language_sel.querySelectorAll('a').forEach((item) => {
            item.addEventListener('click', (e) => {
                for (let i in languages){
                  
                    if (languages[i]["name"] == e.target.innerHTML){
                        console.log(languages[i]["code"]);
                        setCookie('language', languages[i]["code"], 30);
                    }
                }
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