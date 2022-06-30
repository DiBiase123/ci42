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
  <h1 class="display-2 text-white" style="text-shadow: black 2px 5px;"> Les Variables </h1>
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

   <div class="accordion" id="accordionVariables">

       <div class="accordion-item">
           <h2 class="accordion-header p-2" id="headingVariables">
               <button class="text-dark accordion-button note note-info shadow-lg rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVariables" aria-expanded="true" aria-controls="collapseVariables" style="background-color: #e1f6fc;">
                 <blockquote class=" justify-content-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                             <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                         </svg>
                      Les variables PHP sont automatiquement définies lors de leur premierèere utilisation.
                 </blockquote>
               </button>
           </h2>

           <div id="collapseVariables" class="accordion-collapse collapse show" aria-labelledby="headingVariables" data-bs-parent="#accordionVariables">
               <div class="accordion-body">
                 <blockquote class="justify-content-center ">
                     <h3> <span class="text-info "> Il n'ya pas d'istruction sếcifique pour créer un $variable. </span>  </h3> <br />

                     <div class="container px-4">
                         <div class="row gx-5">
                                 <div class="col">
                                     <div class="p-3 border bg-light">
                                       <table class="table border border-1 border-dark" id="variable"> <!-- VARIABLE RESULTAT -->

                                           <thead>
                                               <tr class="text-center bg-info">
                                                   <th scope="col">
                                                     <span class="text-white"> Déclarer un variable </span>
                                                   </th>
                                               </tr>

                                               <tbody>
                                                   <tr class="bg-light text-dark">
                                                       <td> Résultat <br /> <br />
                                                         <?php
                                                           // Initianliser una variable $nom
                                                           $nom= 'Olivier';
                                                           // Afficher la variable $nom
                                                           echo '$nom = ' , $nom , '<br />' ;
                                                           // Varible $nom modifie (type et valeur)
                                                           $nom='123';
                                                           echo '$nom =' , $nom , '<br />';
                                                         ?>
                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </thead>
                                       </table>
                                     </div>
                                 </div>

                                 <div class="col">
                                     <div class="p-3 border bg-light">
                                       <table class="table" id="variable"> <!-- VARIABLE CODE -->
                                           <thead>
                                               <tr class="bg-dark text-center">
                                                   <th scope="col"> <span class="text-white"> CODE </span>
                                                   </th>
                                               </tr>
                                           </thead>
                                               <tbody>
                                                       <td  style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                                                           <code class="text-white">
                                                               <p>
                                                                   &lt;?php </br>
                                                                   <span style="background-color: #6c757d"style="background-color: #6c757d"> // Initianliser una variable $nom </span>
                                                                       <br />
                                                                       $nom= 'Olivier';
                                                                       <br />
                                                                       <br />
                                                                       <span style="background-color: #6c757d"> // Afficher la variable $nom </span>
                                                                       <br />
                                                                       echo '$nom = ' , $nom , '&lt;br />';
                                                                       <br />
                                                                       <br />
                                                                       <span style="background-color: #6c757d"> // Afficher une variable non defini </span>
                                                                       <br />
                                                                       echo '$Nom = ' , $Nom;
                                                                       echo ' variable vide &lt;br />';
                                                                       <br />
                                                                       <br />
                                                                       <span style="background-color: #6c757d"> // Varible $nom modifie (type et valeur) </span>
                                                                       <br />
                                                                       $nom='123';
                                                                       <br />

                                                                       echo '$nom =' , $nom , '&lt;br />'; <br />
                                                                       ?>
                                                               </p>
                                                           </code>
                                                       </td>
                                               </tbody>
                                       </table>


                                     </div>
                                 </div>
                         </div>
                         <br />
                         <p class="text-dark"> Les variables PHP sono typées automatiquement; lors de chaque affectation d'une baleur à une variable, le type de la variable est automatiquement défini ou redéfini.
                          Une valeur peut être affectée à une variable grâce à l'operateur d'affectation  "<strong> = </strong>" </p>
                     </div>
                     <br />

                     <div class="container px-4">
                         <div class="row gx-5">
                             <div class="col">
                                 <div class="p-3 border bg-light">
                                     <table class="table  border border-1 border-black" id="dynamique_resultat"> <!-- Variable dynamique RESULTAT -->
                                         <thead>
                                             <tr class="bg-info text-white text-center">
                                                 <th scope="col" class="text-white"> Variables dynamique (ou variables variables)<br /> </th>
                                             </tr>
                                         </thead>

                                             <tbody>
                                                 <tr class="bg-light text-dark">
                                                     <td>
                                                         <?php
                                                             $une_variable = 10;
                                                             $nom_variable = 'une_variable';
                                                             echo '$une_variable = ', $une_variable , '<br />';
                                                             echo '$nom_variable = ', $nom_variable , '<br />';
                                                             echo '$$nom_variable = ' , $$nom_variable , '<br />'
                                                         ?>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                     </table>
                                 </div>
                             </div>

                             <div class="col">
                                 <div class="p-3 border bg-light">
                                     <table class="table" id="dynamique_code"> <!-- VARIABLE dynamique CODE -->
                                         <thead>
                                             <tr class="bg-black text-white text-center">
                                                 <th scope="col"> <span class="text-white"> CODE </span> </th>
                                             </tr>
                                         </thead>

                                         <tbody>
                                             <tr class="bg-light text-dark">
                                                 <td  style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                                                     <code class="text-white">
                                                         <p>
                                                             &lt;?php <br />
                                                             $une_variable = 10; <br />
                                                             $nom_variable = 'une_variable'; <br />
                                                             echo '$une_variable = ', $une_variable , ' &lt;br />'; <br />
                                                             echo '$nom_variable = ', $nom_variable , ' &lt;br />'; <br />
                                                             echo '$$nom_variable = ' , $$nom_variable , ' &lt;br />'; <br />
                                                             ?>
                                                         </p>
                                                     </code>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>

                             <br />
                             <p class="text-black"> Le principe consiste à employer une variable qui stocke le nom d'une autre variable et d'y faire référence ensuit avec une notation, du type <b> $$variable </b>
                             ou <b> ${variable}. </b> Evec cette notation, le <b> $variable </b> "intériour" est remplacé par la valeur de la variable <b> $variable(valeur </b> par exemple) qui est alors utilisée
                             comme nom de variable par le $ "extérieur".
                             </p>
                     </div>
                     <br /><br />
                     <p class="text-dark"> La porté d'une variable est le script dans lequel elle est défine. Une variable peut donc être définie dans une première sectionde code PHP et utilisée dans une autre section de code PHP du même script.
                     La durée de vie d'une variable est le temps de l'exécution du script. Lorsque le script se termine, les variables sont supprimées. Si le même script est appeleé plus tard, de nouvelle variables sont défines. </p>
                 </blockquote>
               </div>
           </div>

           <div class="accordion-item"> <!-- ACCORDIN CHAINE -->
               <h2 class="accordion-header p-2" id="headingChain">
                   <button class="text-dark accordion-button note note-info shadow-lg rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChaine" aria-expanded="false" aria-controls="collapseChaine" style="background-color: #e1f6fc;">
                     <blockquote class="justify-content-center">
                             <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                 <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                             </svg>
                         </span> Chaine de caractèrs <i>(string)</i>
                     </blockquote>
                   </button>
               </h2>

               <div id="collapseChaine" class="accordion-collapse collapse" aria-labelledby="headingChain" data-bs-parent="#accordionVariables">
                   <div class="accordion-body">

                     <blockquote class="justify-content-center">
                         <h3> <span class="text-info "> Pour afficher une chaîne sur plusierurs ligne dans le navigateur, in faut insérer una balise &lt;br /> </span>  </h3> <br />

                         <div class="container px-4"> <!-- FIRST ROW -->
                             <div class="row gx-5">
                                 <div class="col">
                                     <div class="p-3 border bg-light">
                                         <table class="table border border-1 border-black" id="chain_resultat"> <!-- CHAINE RESULTAT -->
                                             <thead>
                                                 <tr class="text-white text-center bg-info">
                                                     <th scope="col"> Example </th>
                                                 </tr>
                                             </thead>
                                                 <tbody>
                                                     <tr class="bg-light text-dark">
                                                         <td> Résultat <br /> <br />
                                                             <?php
                                                                 $chaine = '<p> Je m\'appelle Giuliano et j\'habite en France </p>';
                                                                 echo $chaine;

                                                                 $chaine ='<p> Je m\'appelle Giuliano <br />
                                                                     et j\'habite en France </p>';

                                                                     echo $chaine;
                                                                 ?>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                         </table>
                                     </div>
                                 </div>

                                 <div class="col">
                                     <div class="p-3 border bg-light">
                                         <table class="table text-white" id="chain_code"> <!-- CHAINE CODE -->
                                             <thead>
                                                 <tr class="bg-black text-center">
                                                     <th scope="col" > CODE</th>
                                                 </tr>
                                             </thead>
                                                 <tbody>
                                                     <td  style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                                                         <code class="text-white">
                                                             <p>
                                                                 &lt;?php <br />
                                                                 $chaine = 'Je m\'appelle Giuliano et j\'habite en France '; <br />
                                                                 echo $chaine;
                                                                 <br /><br />
                                                                 $chaine ='Je m\'appelle Giuliano &lt;br />
                                                                 et j\'habite en France';
                                                                 <br />
                                                                 echo $chaine;
                                                                 <br />
                                                                 ?>
                                                             </p>
                                                         </code>
                                                     </td>
                                                 </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <br />
                             <p class="text-center text-black"> Les guillemens présents dans une chaîne délimitée par des guillemets <br /> ou <br /> Les apostrophes présents dans une chaîne délimitée par des apostrophes <br />
                             <span class='text-uppercase bg-warning p-1 text-danger'><b> doivent être "échappés",</b> </span><br>
                             c'est-à-dire <strong> précédes du caractèere antislash (<span class="text-success">\</span>)</strong>
                             </p>
                         <br />

                         <div class="container px-4"> <!-- SECOND ROW -->
                             <div class="row gx-5">
                                 <div class="col">
                                     <div class="p-3 border bg-light">
                                         <table class="table border border-1 border-dark" id="chainvar_resultat"> <!-- CHAINEVAR_RESULTAT  -->
                                             <thead>
                                                 <tr class="bg-info  text-center">
                                                     <th scope="col">
                                                        <span class="text-white"> Chain avec la variable</span>
                                                      <span class="bg-primary text-white p-1 ">$nom </span>
                                                      </th>
                                                 </tr>
                                             </thead>
                                                 <tbody>
                                                     <td> Résultat <br /><br />
                                                         <?php
                                                             $nom = 'Topolino';
                                                             echo "Je m'appelle $nom. = C'est bien <br /> ";
                                                             echo 'Je m\'appelle $nom. = Ne marche pas<br /> ';
                                                             echo "\$nom = $nom <br />";
                                                         ?>
                                                     </td>
                                                 </tbody>
                                         </table>
                                     </div>
                                 </div>

                                 <div class="col">
                                     <div class="p-3 border">
                                         <table class="table" id="chainvar_code"> <!-- chainvar_code CODE -->
                                             <thead>
                                                 <tr class="bg-black text-center">
                                                     <th scope="col" >
                                                        <span class="text-white"> CODE </span>
                                                      </th>
                                                 </tr>
                                             </thead>
                                                 <tbody>
                                                   <td style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                                                         <code class="text-white">
                                                             <p>
                                                                 &lt;?php <br />
                                                                 $nom = 'Topolino'; <br />

                                                                 echo "Je m'appelle $nom. = C'est bien "; <br />
                                                                 echo 'Je m\'appelle $nom. = Ne marche pas'; <br />
                                                                 echo "\$nom = $nom "; <br />
                                                                 ?>
                                                             </p>
                                                         </code>
                                                     </td>
                                                 </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                             <br />
                                     <p class="text-black">
                                         Lorsqu'une chaîne est délimitée par des guillemets, tout séquence de caractères commençant par le signe $ est interpétée comme une variable et replacée per la valeur de la variable.
                                         Cette fonctionnalité, ne fonctionne pas avec les chaînes délimitées par des apostrophes.
                                     </p>
                         </div>

                         <br />
                         <br />

                         <div class="container px-4"> <!-- 3th ROW -->
                             <div class="row gx-5">
                                 <div class="col">
                                     <div class="p-3 border bg-light">
                                         <table class="table border border-1 border-black" id="pomme_resultat"> <!-- pomme_resultat -->
                                             <thead>
                                                 <tr class="bg-info text-center">
                                                     <th scope="col"> <span class="text-white"> Chain avec la variable</span><span class="bg-primary text-white p-1 ">$nom </span></th>
                                                 </tr>
                                             </thead>
                                                 <tbody>
                                                     <td> Résultat <br /> <br />
                                                       <?php
                                                       // $fruit= 'pomme';
                                                       //     echo "<br/>Une $fruit ne coute pas chere.<br />";
                                                       //    echo "Due {$fruit}s coutent deux fois plus cher.<br />"; // accepté
                                                       //   echo "Trois ${fruit}s coutent trois fois plus cher.<br />"; // accepté
                                                       //     echo "{\$fruit} = {{$fruit}}<br /><br />";
                                                       //     echo $nom[0],$nom{6},$nom{-2}.'<br />';
                                                       //     echo $fruit[0],$fruit{3}.'<br />';
                                                       ?>
                                                     </td>
                                                 </tbody>
                                         </table>
                                     </div>
                                 </div>

                                 <div class="col">
                                         <table class="table" id="pomme_code"> <!-- pomme_CODE -->
                                             <thead>
                                                 <tr class="bg-black text-center">
                                                     <th scope="col"> <span class="text-white"> CODE </span></th>
                                                 </tr>
                                             </thead>
                                                 <tbody>
                                                     <td style="background:  linear-gradient(145deg, rgba(2,0,36,1) 0%, rgba(102,1,63,0.7049020291710435) 55%);">
                                                         <code class="text-white">
                                                             <p>
                                                                 &lt;?php <br />
                                                                 $fruit= 'pomme'; </br>
                                                                 echo "Une $fruit ne coute pas chere."; </br>
                                                                 echo "Due {$fruit}s coutent deux fois plus cher."; <br />
                                                                 echo "Trois ${fruit}s coutent trois fois plus cher."; <br />
                                                                 echo "{\$fruit} = {{$fruit}}"; </br></br>

                                                                 echo $nom[0],$nom{6},$nom{-2}; <br />
                                                                 echo $fruit[0],$fruit{3}; <br />
                                                                 ?>
                                                             </p>
                                                         </code>
                                                     </td>
                                                 </tbody>
                                         </table>
                                 </div>
                             </div>
                                 <br />
                                 <p class="text-black">
                                     Sur cet exemple, le "s" du pluriel est interprété par PHP comme appartenant à la séquence de caractèers située derrièere le <strong> $ </strong> ;
                                     c'est donc la variable $fruits qui est reconnue et remplacée par sa valeur (vide puisique la variable n'a jamais été initialisée).
                                      <br/>                                      <br/>

                                     La solution consiste à delimiter le nom de la variable par des accolades sous la forme {$variable} ou ${variable}.
                                      <br/>                                      <br/>

                                     Avec cette syntaxe, pour que l'accolades soit conservée, il faut la doubler ({{$variable}}).
                                     Quoi qu'il en soit, une caccolade qui n'est pas précédée ou vuisvie d'un <strong> $ </strong> non échappe est laissée telle quelle.
                                 </p>

                         </div>
                     </blockquote>


                   </div>
               </div>
           </div>
           <br>
           <nav aria-label="..."><!-- MENU pagination EXAMPLE -->
             <ul class="pagination justify-content-start ">

               <li class="page-item disabled"  >
                 <a class="page-link " href="#" tabindex="-1">Previous</a>
               </li>

               <li class="page-item "  data-mdb-toggle="tooltip" title="Les Constantes">
                 <a class="page-link" href="<?//php echo view('Costantes.php'); ?>">1</a>
               </li>

               <li class="page-item active " aria-current="page" data-mdb-toggle="tooltip" title="Les Variables" >
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
