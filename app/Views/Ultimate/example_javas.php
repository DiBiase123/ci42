<div class="container px-2 border text-center border-3 rounded" style="background:  #00b8ea">
  <br>
    <h1 class="display-2 text-white" style="text-shadow: black 2px 5px;"> Examples JavaScript </h1>
    <!--Waves Container-->
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">

        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
      </svg>

      <div class="p-2 bg-light bg-gradient text-start my-auto ">
       <button class="btn btn-primary bg-warning " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
          MENU &nbsp;
          <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-list border border-2 border-white rounded  align-self-center  animate__animated animate__rotateIn " viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
    <!--Waves end-->
  </div>


    <!-- OFFCANVAS START -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header border border-right border-3 border-primary " style="background: #2bbbab;">

        <!-- START MOD -->
        <button type="button" class="btn btn-primary bg-primary">
            <a href="https://noframe.dev.accatone.net/assistants/giuliano.di-biase/ci4/public/index.php/Ultimate">
              <p class="text-white fw-bolder fs-2 text-center " >CHAR-ID
                <span class="badge bg-info p-2 text-dark fs-5 text-center" >.1.0.1</span>
              </p>
           </a>
           </button>
        <!-- FINE MOD -->
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
        Examples JavaScript


      <div class="offcanvas-body bg-info">
        <ul class="list-unstyled ps-0">
          <li class="mb-1">

            <div class="collapse show list-group text-start" id="exercice_js-collapse"  role="tablist">
                <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#ex1" role="tab"><span class="text-secondary" style="font-size: 0.8em;">#1 - </span>Inverser les valeurs de deux variables </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex2" role="tab"><span style="color:#6c757d; font-size: 0.8em;"> #2 - </span>Afficher des variables</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex3" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#3 - </span>Puissance de 2 </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex4" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#4 - </span>Saisir des données  </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex5" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#5 - </span>Table de multiplication </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex6" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#6 - </span>Saisie d’un chiﬀre et vériﬁcation de sa valeur </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex7" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#7 - </span>Modul 3  </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex8" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#8 - </span>Vériﬁer mot  </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex9" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#9 - </span>Aﬃcher Objet  </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex10" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#10 - </span>Saisie d’un Objet </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex11" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#11 - </span>Modifier DOM  </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex12" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#12 - </span>Ajouter une couleur au inputs </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex13" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#13 - </span>Nombre de clics </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex14" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#14 - </span>Table de moltiplication dans le navigateur </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex15" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#15 - </span>Pile ou Face </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex17" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#17 - </span>Forcer la saisie d’un chiffre </a>
                  <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex16" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#16 - </span>Nombre aléatoire </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex18" role="tab"><span style="color:#6c757d; font-size: 0.8em;">#18 - </span>Additionner des valeurs d’un tableau </a>

            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="tab-content bg-white">
      <br>

      <?php echo view('Ultimate/pane_exercice'); ?>
  
    </div>

<br>

    </div>


<script src="../js/exercice_js.js"> </script>
