<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ultimate CHAR ID .1.0.1</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/cv.css" rel="stylesheet"/>
	<!-- <link rel="stylesheet" href="css/style.css" > -->



	<link rel="shortcut icon" type="image/png" href="ico/favicon.ico"/>
  <!-- BOOTSTRAP5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <div class="row p-2 m-2 bg-light">
    <div class="col-12 col-md-4 "> <!-- COLONNA SX -->

      <div class="accordion" id="accordionExample">
        <!-- BOOTSTRAP5+PHP PHP -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              BOOTSTRAP5/JS/CSS + PHP + MYSQL
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" id="myTab" role="boot">
              <li class="nav-item" role="boot">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="boot">
                  <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button" role="tab" aria-controls="log" aria-selected="false">SIGN IN</button>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- COURS PHP -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Cours PHP
            </button>
          </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab1" role="presentation">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Les Costantes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="variables-tab" data-bs-toggle="tab" data-bs-target="#variables" type="button" role="tab" aria-controls="variables" aria-selected="false">Les Variables</button>
                  </li>
                </ul>

              </div>
            </div>
        </div>
        <!-- FINE COURS PHP -->

        <!-- JAVASCRIPT -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              JavaScript Exemple
            </button>
          </h2>

          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="exercice-tab" data-bs-toggle="tab" data-bs-target="#exercice" type="button" role="tab" aria-controls="exercice" aria-selected="false">Exercice</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tableau</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Objets et tableaux </button>
                </li>



                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="apitest-tab" data-bs-toggle="tab" data-bs-target="#apitest" type="button" role="tab" aria-controls="apitest" aria-selected="false">API METEO</button>
                </li>
              </ul>

            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="col-12 col-md-8"> <!-- COLONNA DX -->

      <!-- Tab panes -->
        <div class="tab-content">
        <div class="tab-pane" id="log" role="tabpanel" aria-labelledby="log-tab">SIGN IN<?//php include_once('./php/ex3.php'); ?></div>

        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">Tableau<?php echo view('ex1_moyen'); ?></div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">Oject & tableaux<?php echo view('ex2_moyen'); ?></div>
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">COSTANTES<?php echo view('Costantes'); ?></div>
				<div class="tab-pane" id="variables" role="tabpanel" aria-labelledby="variables-tab">VARIABLES<?php echo view ('Variables'); ?></div>
				<div class="tab-pane" id="exercice" role="tabpanel" aria-labelledby="exercice-tab">Exercice JS<?php echo view('Exercice_javascript'); ?></div>


        <div class="tab-pane" id="apitest" role="tabpanel" aria-labelledby="apitest-tab">API METEO<?php echo view('testapi.php'); ?></div>


				<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"> HOME <?php echo view('cvresponsive'); ?></div>



      </div>

    </div>

      <p class="text-center">
      <!-- ICONA ANIMATA -->
      <svg version="1.1" class="img-fluid " fill="none" width="300" height="300" stroke="#000" ;
                                                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                                  <defs>

                                                      <path id="r1">
                                                          <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite"/>
                                                          <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin"/>
                                                      </path>

                                                      <path id="r2">
                                                          <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
                                                          <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
                                                      </path>

                                                      <path id="r3">
                                                          <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
                                                          <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
                                                      </path>

                                                      <path id="r4">
                                                          <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
                                                          <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
                                                      </path>

                                                      <path id="r5">
                                                          <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
                                                          <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
                                                      </path>

                                                      <path id="r6">
                                                          <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
                                                          <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
                                                      </path>

                                                  </defs>

                                                  <use xlink:href="#r1"/>
                                                  <use xlink:href="#r1" transform="rotate(60 160 160)"/>
                                                  <use xlink:href="#r1" transform="rotate(120 160 160)"/>
                                                  <use xlink:href="#r1" transform="rotate(180 160 160)"/>
                                                  <use xlink:href="#r1" transform="rotate(240 160 160)"/>
                                                  <use xlink:href="#r1" transform="rotate(300 160 160)"/>
                                                  <use xlink:href="#r2" transform="rotate(30 160 160)"/>
                                                  <use xlink:href="#r2" transform="rotate(90 160 160)"/>
                                                  <use xlink:href="#r2" transform="rotate(150 160 160)"/>
                                                  <use xlink:href="#r2" transform="rotate(210 160 160)"/>
                                                  <use xlink:href="#r2" transform="rotate(270 160 160)"/>
                                                  <use xlink:href="#r2" transform="rotate(330 160 160)"/>
                                                  <use xlink:href="#r3"/>
                                                  <use xlink:href="#r3" transform="rotate(60 160 160)"/>
                                                  <use xlink:href="#r3" transform="rotate(120 160 160)"/>
                                                  <use xlink:href="#r3" transform="rotate(180 160 160)"/>
                                                  <use xlink:href="#r3" transform="rotate(240 160 160)"/>
                                                  <use xlink:href="#r3" transform="rotate(300 160 160)"/>
                                                  <use xlink:href="#r4" transform="rotate(30 160 160)"/>
                                                  <use xlink:href="#r4" transform="rotate(90 160 160)"/>
                                                  <use xlink:href="#r4" transform="rotate(150 160 160)"/>
                                                  <use xlink:href="#r4" transform="rotate(210 160 160)"/>
                                                  <use xlink:href="#r4" transform="rotate(270 160 160)"/>
                                                  <use xlink:href="#r4" transform="rotate(330 160 160)"/>
                                                  <use xlink:href="#r5"/>
                                                  <use xlink:href="#r5" transform="rotate(60 160 160)"/>
                                                  <use xlink:href="#r5" transform="rotate(120 160 160)"/>
                                                  <use xlink:href="#r5" transform="rotate(180 160 160)"/>
                                                  <use xlink:href="#r5" transform="rotate(240 160 160)"/>
                                                  <use xlink:href="#r5" transform="rotate(300 160 160)"/>
                                                  <use xlink:href="#r6" transform="rotate(30 160 160)"/>
                                                  <use xlink:href="#r6" transform="rotate(90 160 160)"/>
                                                  <use xlink:href="#r6" transform="rotate(150 160 160)"/>
                                                  <use xlink:href="#r6" transform="rotate(210 160 160)"/>
                                                  <use xlink:href="#r6" transform="rotate(270 160 160)"/>
                                                  <use xlink:href="#r6" transform="rotate(330 160 160)"/>

                                              </svg>                </p>




  </div>


                                              <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>









</body>
</html>
