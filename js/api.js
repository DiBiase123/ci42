let input = document.getElementById("rechercer");
input.addEventListener("input" , (e) => {
    e.preventDefault();
    let ville = e.target.value;
    recupVille(ville);
});
    
    
async function recupVille (ville)
{
    console.log(ville);

    L.mapquest.key = 'WMOF3ZkxJe3nkhQMZyP6F3kLMeZep9pd';
    const apikey = `b0ee246d5cac4353e979054d92553d44`;
    const unite = 'metric';

    const baseUrl = `https://api.openweathermap.org/data/2.5/weather?q=${ville}&appid=${apikey}&units=${unite}`;



    console.log(ville)

    try {
        let donnée = await fetch (baseUrl);
        if (! donnée.ok) {
            throw new Error(donnée.status);
        }
        else
        {
       
            let data = await donnée.json();
            console.log(data);

            var x = data.coord.lat;
            var y = data.coord.lon;
         
         

              let affichée = document.getElementById("resultat");//Date
              let affichée1 = document.getElementById("resultat1");//Ville + Coun
              let affichée2 = document.getElementById("resultat2");//ICONA + TEMP
              let affichée3 = document.getElementById("resultat3");//WIND
              let affichée4 = document.getElementById("resultat4");//Umidita
              let affichée5 = document.getElementById("resultat5");//Description
          
              
                var d = new Date();
                affichée.innerHTML = (d.toDateString() + " " + d.getHours() + ":" + d.getUTCMinutes());
                affichée1.innerHTML = (ville + ", " + data.sys.country );
                affichée2.innerHTML = (" ");
                affichée3.innerHTML = ("Vent : " + data.wind.speed + " m/s" + "<br/>");
                affichée4.innerHTML = ("Humidité : " + data.main.humidity + "%");

                  if (data.weather[0].icon === "04d" || data.weather[0].icon === "03d" || data.weather[0].icon === "02n" || data.weather[0].icon === "02d") // cloud *  nuvola
                  {
                    affichée2.innerHTML+=
                      (`
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-cloud text-primary" viewBox="0 0 16 16">
                        <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                      `+ " " + data.main.feels_like + "°C");
                  }
                  if (data.weather[0].icon === "03n"|| data.weather[0].icon === "04n") // cloud * doppia nuvola
                  {
                    affichée2.innerHTML+=
                      (`
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-clouds text-primary" viewBox="0 0 16 16">
                        <path d="M16 7.5a2.5 2.5 0 0 1-1.456 2.272 3.513 3.513 0 0 0-.65-.824 1.5 1.5 0 0 0-.789-2.896.5.5 0 0 1-.627-.421 3 3 0 0 0-5.22-1.625 5.587 5.587 0 0 0-1.276.088 4.002 4.002 0 0 1 7.392.91A2.5 2.5 0 0 1 16 7.5z"/>
                        <path d="M7 5a4.5 4.5 0 0 1 4.473 4h.027a2.5 2.5 0 0 1 0 5H3a3 3 0 0 1-.247-5.99A4.502 4.502 0 0 1 7 5zm3.5 4.5a3.5 3.5 0 0 0-6.89-.873.5.5 0 0 1-.51.375A2 2 0 1 0 3 13h8.5a1.5 1.5 0 1 0-.376-2.953.5.5 0 0 1-.624-.492V9.5z"/>
                        </svg>
                      `+ " " + data.main.feels_like + "°C");
                  }
                if (data.weather[0].icon === "10d" || data.weather[0].icon === "10n" )// rain
                  {
                    affichée2.innerHTML+= (`
                    <svg xmlns="http://www.w3.org/2000/svg"width="2em" height="2em" fill="currentColor" class="bi bi-cloud-rain" viewBox="0 0 16 16">
                    <path d="M4.158 12.025a.5.5 0 0 1 .316.633l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.317zm3 0a.5.5 0 0 1 .316.633l-1 3a.5.5 0 0 1-.948-.316l1-3a.5.5 0 0 1 .632-.317zm3 0a.5.5 0 0 1 .316.633l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.317zm3 0a.5.5 0 0 1 .316.633l-1 3a.5.5 0 1 1-.948-.316l1-3a.5.5 0 0 1 .632-.317zm.247-6.998a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 11H13a3 3 0 0 0 .405-5.973zM8.5 2a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1 0 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4.002 4.002 0 0 1 8.5 2z"/>
                    </svg>`+ " " + data.main.feels_like + "°C");
                  }
                  if (data.weather[0].icon === "01n" || data.weather[0].icon === "01d" ) // clear sky
                  {
                    affichée2.innerHTML+= (`<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-brightness-high text-warning" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                    </svg>` + " " + data.main.feels_like + "°C");
                  }
                  if (data.weather[0].icon === "50d") // clear sky
                  {
                    affichée2.innerHTML+= (`<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-cloud-sun text-primary" viewBox="0 0 16 16">
                    <path d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8zm4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"/>
                    <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                    </svg>`+ " " + data.main.feels_like + "°C");
                  }
                  affichée5.innerHTML = (data.weather[0].main + ", " + data.weather[0].description );
                affichée3.innerHTML+= ("Longitude = \n" + data.coord.lon+ "</br>");
                affichée3.innerHTML+= ("Latitude = \n" + data.coord.lat+ " </br>");
             

        }/*var map =new L.mapquest.map('map',  {
          center: [x,y],
          layers: L.mapquest.tileLayer('map'),
          zoom: 12
        });*/

        var map = new mqgl.Map('map', 'apikey', 
        {
          
          center: [y,x],
          zoom: 12,
          pitch: 60,
          bearing: 0,
          controls:
          {
            navigation :
                 {
                   enabled:false
                 }
          }

        }
        
        )
        map.load( () => {
          map.icons.add({ lng: y, lat: x}, 'marker-sm.png');
        });

    } catch (e) {
        if(e){
           Error ();
            console.log(e);
        }

       
    }
}


