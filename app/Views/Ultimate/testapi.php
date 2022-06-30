
    <br />
    <div class="text-center p-2 bg-light bg-gradient rounded align-items-center" >
      <h1 class="titre"> Meteo Appli
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-thermometer-sun text-primary" viewBox="0 0 16 16">
          <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585A1.5 1.5 0 0 1 5 12.5z"/>
          <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zm4.243 1.757a.5.5 0 0 1 0 .707l-.707.708a.5.5 0 1 1-.708-.708l.708-.707a.5.5 0 0 1 .707 0zM8 5.5a.5.5 0 0 1 .5-.5 3 3 0 1 1 0 6 .5.5 0 0 1 0-1 2 2 0 0 0 0-4 .5.5 0 0 1-.5-.5zM12.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-1a.5.5 0 0 1-.5-.5zm-1.172 2.828a.5.5 0 0 1 .708 0l.707.708a.5.5 0 0 1-.707.707l-.708-.707a.5.5 0 0 1 0-.708zM8.5 12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5z"/>
        </svg>
      </h1>
        <pre> Choisir la ville : </pre>
        <!-- <input class="open" type="text" id="rechercer">-->

        <!-- NUOVO -->
        <div class="dropdown">
          <input class="open" type="text" id="rechercer"></input>

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Cerca
            </button>
            <ul class="dropdown-menu" aria-labelledby="rechercer">
              <li><a class="dropdown-item" href="#">Risultato1</a></li>
              <li><a class="dropdown-item" href="#">Risultato2</a></li>
            </ul>
        </div>
        <!-- FINE -->
      <br/>


    </div>

        <div class="row p-2">
        <!--  <div class="col"></div> COLONNA SX -->
          <div class="col"><!-- COLONNA CENTRALE -->
            <div class="card " style="width: 18rem;">
              <p class="text-success m-2 " id="resultat" style="font-size:12px">data </p>
              <h3 class="titre m-1 text-center text-capitalize" id="resultat1"> CITTA ,  country </h3>
              <p id="resultat5" class="text-center" style="font-weight: 600;"> descrizione </p>

                <div class="card-body">
                    <p class="text-center align-middle" style="font-weight: 100; font-size: 35px" id="resultat2">icona , temperatura ° C </p>

                    <li class="list-unstyled" id="resultat3" style="font-size: 12px"> Vento </li>
                    <li class="list-unstyled" id="resultat4" style="font-size: 12px"> Umidita </li>

                    <br>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
          </div>
        <!-- COLONNA DX -->



        </div>

        <div  id="map" >
        <script src="../js/api.js"> </script>
