<style>
  .waves {
    position:relative;
    width: 100%;
    height:15vh;
    margin-bottom:-7px; /*Fix for safari gap*/
    min-height:100px;
    max-height:150px;
  }

  .content {
    position:relative;
    height:20vh;
    text-align:center;
    background-color: white;
  }

  /* Animation */

  .parallax > use {
    animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
  }
  .parallax > use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
  }
  .parallax > use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
  }
  .parallax > use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
  }
  .parallax > use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
  }
  @keyframes move-forever {
    0% {
     transform: translate3d(-90px,0,0);
    }
    100% {
      transform: translate3d(85px,0,0);
    }
  }
  /*Shrinking for mobile*/
  @media (max-width: 768px) {
    .waves {
      height:40px;
      min-height:40px;
    }
    .content {
      height:30vh;
    }

  }
</style>

<div class="container px-2 border text-center border-3 " style="background:  #00b8ea">
<br>
  <h1 class="display-2 text-white" style="text-shadow: black 2px 5px;"> Les Constantes </h1>
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
   <!--Waves end-->

   <div class="accordion " id="accordionCostantes">
     <!-- accordion ITEM 1 -->
     <div class="accordion-item ">
       <h2 class="accordion-header p-2" id="headingDEFINE">
           <button class="text-dark accordion-button note note-info shadow-lg rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDEFINE" aria-expanded="true" aria-controls="collapseDEFINE" style="background-color: #e1f6fc;">
               <blockquote class="justify-content-center ">
                       <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning float-start p-1" viewBox="0 0 16 16">
                           <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                       </svg>
                   Définir une constante avec <span class="text-primary"><b> #define </b></span> (dont le nom est par defaut sensible à la casse)
               </blockquote>
           </button>
       </h2>
        <!-- COLLAPSE DEFINE -->
        <div id="collapseDEFINE" class="accordion-collapse collapse show" aria-labelledby="headingDEFINE" data-bs-parent="#accordionCostantes">
          <div class="accordion-body">
            <blockquote class="justify-content-center">
             <table class="table" id="define"> <!-- DEFINE -->
               <thead>
                 <tr class="text-white" style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                   <th scope="col text-start"><span class="text-warning">&lt;?php </span> <span class="text-info"> define</span>('CONSTANTE' , 'valeur de COSTANTE'); <span class="text-warning">?&gt;</span>  </th>
                       <?php define( 'CONSTANTE' , 'valeur de COSTANTE' ); ?>
                   </th>
                 </tr>
                   <tbody>
                     <tr class="bg-light  text-dark">
                        <td class="text-center">
                          <?php echo 'Résultat <br />
                                <span class="text-dark"><b>CONSTANTE = ', CONSTANTE ,'</b></span><br />';
                                ?>
                        </td>
                      </tr>
                   </tbody>
               </thead>
             </table>


               <h5> <em><u> Utilisation d'une expressione complexe </em></u></h5>

             <table class="table" id=" DEFINE complexe"> <!-- DEFINE complexe -->
               <thead>
                 <tr class="text-white" style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                   <th scope="col">
                     <p>
                     <span class="text-warning">&lt;?php</span>
                     <span class="text-info"> define </span> ('ENCORE_UNE_CONSTANTE',SHA1(uniqid(rand())));
                     <span class="text-warning"> ?&gt; </span> </p>
                     <?php //define('ENCORE_UNE_CONSTANTE',SHA1(uniqid(rand()))); ?>

                   </th>

                 </tr>
                   <tbody>
                     <tr class="bg-light  text-dark">
                        <td class="text-center">
                        <!--<?php //echo 'Résultat <br/><b>ENCORE_UNE_CONSTANTE = ' , ENCORE_UNE_CONSTANTE, '</b><br />';?> -->
                        </td>
                      </tr>
                   </tbody>
               </thead>
             </table>

              <br>
              <br>
               <p>La fonction <strong class="text-primary"> define </strong>
                  permet de définir une constante.<br />
                  Une costante est une zone mémoire identifiée par un nom qui contient une valeur lisible mais
                  <strong> NON MODIFIABLE </strong>
                  dans le programme.
                  <br />
                  Une fois créé, une costante n'est plus modifiable, ni per un nouvel appel à <strong class="text-primary"> define </strong> , ni par un affectation directe.

                  La valeur de la costante peut être définie à l'aide d'une expression qui utilise des valeurs
                  <strong> "LiTtérAls°, </strong>
                  des <strong class="text-primary"> COSTANTES, </strong>
                  des <strong class="text-success"> $variables, </strong>
                  des opérateurs (<strong> ++ -- && !- </strong>) ou des appels
                  de <strong class="text-primary">fonctions() </strong>

                  Traditionnellment, le noms des costantes son définis en majuscles et la <strong > portée d'une costante  </strong>
                  est le script dans lequel elle est définie, peut donc être définie dans une première section de code PHP et utilisée dans une autre section de code PHP du même script.
                </p>
            </blockquote>
          </div>
        </div>

      <!-- accordion ITEM 2 -->
      <div class="accordion-item">
         <h2 class="accordion-header p-2" id="headingCONST">
             <button class="text-dark accordion-button note note-info shadow-lg rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCONST" aria-expanded="false" aria-controls="collapseCONST" style="background-color: #e1f6fc;">
                 <blockquote class="justify-content-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning float-start p-1" viewBox="0 0 16 16">
                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                         </svg>
                   Définir une constante avec <span class="text-primary"><b>#const </b></span>(depuis 5.3)
                 </blockquote>
             </button>
         </h2>
         <!-- COLLAPSE CONST -->
         <div id="collapseCONST" class="accordion-collapse collapse" aria-labelledby="headingCONST" data-bs-parent="#accordionCostantes">
             <div class="accordion-body">
                 <blockquote class="due justify-content-center">
                     <table class="table" id="const"> <!-- CONST -->
                         <thead>
                             <tr class="text-white" style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);" >
                                 <th scope="col">
                                   <span class="text-warning">&lt;?php </span>
                                   <span class="text-info"> const</span> UNE_AUTRE_CONSTANTE =  'PHP 7.0';
                                   <span class="text-warning">?></span>  </th>
                                 <?php const UNE_AUTRE_CONSTANTE =  'PHP 7.0'; ?>
                             </tr>
                             <tbody>
                                 <tr class="bg-light text-dark text-center">
                                     <td>  <?php echo 'Résultat <br />
                                     <span class="text-dark"><b>UNE_AUTRE_CONSTANTE = ', UNE_AUTRE_CONSTANTE ,'</b></span><br />'; ?></td>
                                 </tr>
                             </tbody>
                         </thead>
                     </table>

                     <table class="table" id="const"> <!-- CONST complexe -->
                             <thead> <h6 class="text-success p-2" style="background:#dee2e6"> Utilisation d'une expressione complexe</h6>
                                 <tr class="text-white" style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                                     <th scope="col" class="text-white">
                                          <span class="text-warning">&lt;?php</span> <span class="text-info"> const </span> UNE_DERNIER_CONSTANTE = UNE_AUTRE_CONSTANTE . ' (nouveau) ' ; <span class="text-warning"> ?> </span>
                                             <?php const UNE_DERNIER_CONSTANTE = UNE_AUTRE_CONSTANTE . ' (nouveau) ' ;?>
                                     </th>
                                 </tr>
                             </thead>
                                 <tbody>
                                     <tr class="bg-light text-center text-dark">
                                         <td>
                                             <?php echo 'Résultat <br />
                                                     <b>UNE_DERNIER_CONSTANTE = ' , UNE_DERNIER_CONSTANTE, '</b><br />';
                                             ?>
                                         </td>
                                     </tr>
                                 </tbody>
                     </table>

                 </blockquote>
             </div>
         </div>
         <br>
      </div>

      <br>
      <nav aria-label="..."><!-- MENU pagination EXAMPLE -->
        <ul class="pagination justify-content-start ">

          <li class="page-item disabled"  >
            <a class="page-link " href="#" tabindex="-1"  aria-disabled="true">Previous</a>
          </li>

          <li class="page-item active" aria-current="page" data-mdb-toggle="tooltip" title="Les Constantes">
            <a class="page-link" href="#">1</a>
          </li>

          <li class="page-item ">
            <a class="page-link" href="#">2</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>

        </ul>
      </nav><!-- END MENU pagination EXAMPLE -->

   </div>
      </div>

<br>
 </div>
