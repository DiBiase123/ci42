//document.getElementById("finestra").value ="";

let finestra = document.getElementById("finestra");

function visualizza()
{
    console.log("pd");


    finestra.innerHTML= `

    <div class="container col violetto border border-info border-5 justify-content-between">
        <div class="text-end text-light" style="font-size:0.9em;";><i>Version 3.0</i></div>
            <!-- GUtter 2 colonn-->
            <div class="row gx background blue lighten-2 border border-white border-3 rounded p-2 ">
                <div class="c col-12 text-center p-2"> <!-- 1° Colonna -->
                        <h1 class="display-1 p-2" > Di Biase </h1>
                        <h2 class="display-2 text-white"> Giuliano </h2>
                        <div class="d text-uppercase animated fadeIn bounceIn " style=" font-weight: 400; animation-delay: 1s;">
                            <ul class="list-unstyled text-dark text-center " >
                                <li>Développeur Web & Web Mobile </li>
                                <li>Illustrateur & Animateur Multimédia</li>
                                <li>Graphiste publicitaire</li>
                            </ul>
                            <?php include_once('php/bottoni_social2.php') ?> 
                            <?php/* include_once('php/bottone_projetCV.php')*/ ?>

                            

                                
                        </div>

            <div >

        </div>     

    </div>
    




 

    <?php include_once('php/cv_according.php') ?> 

    `;
    
}

