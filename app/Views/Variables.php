<h1> Variables </h1>

<div class="accordion" id="accordionVariables">

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingVariables">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVariables" aria-expanded="true" aria-controls="collapseVariables">
              <blockquote class="mint justify-content-center">
                  <span class="Cmint">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg>
                  </span>  Les variables PHP sont automatiquement définies lors de leur premierèere utilisation.
              </blockquote>
            </button>
        </h2>

        <div id="collapseVariables" class="accordion-collapse collapse show" aria-labelledby="headingVariables" data-bs-parent="#accordionVariables">
            <div class="accordion-body">
              <blockquote class="mint justify-content-center ">
                  <h3> <span class="text-info "> Il n'ya pas d'istruction sếcifique pour créer un $variable. </span>  </h3> <br />

                  <div class="container px-4">
                      <div class="row gx-5">
                              <div class="col">
                                  <div class="p-3 border bg-light">
                                    <table class="table" id="variable"> <!-- VARIABLE RESULTAT -->

                                        <thead>
                                            <tr class="bg-secondary text-center">
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
                                            <tr class="bg-secondary text-center">
                                                <th scope="col"> <span class="text-white"> CODE </span>
                                                </th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                    <td>
                                                        <code>
                                                            <p>
                                                                &lt;?php </br>
                                                                <span class="text-secondary"> // Initianliser una variable $nom </span>
                                                                    <br />
                                                                    $nom= 'Olivier';
                                                                    <br />
                                                                    <br />
                                                                    <span class="text-secondary"> // Afficher la variable $nom </span>
                                                                    <br />
                                                                    echo '$nom = ' , $nom , '&lt;br />';
                                                                    <br />
                                                                    <br />
                                                                    <span class="text-secondary"> // Afficher une variable non defini </span>
                                                                    <br />
                                                                    echo '$Nom = ' , $Nom;
                                                                    echo ' variable vide &lt;br />';
                                                                    <br />
                                                                    <br />
                                                                    <span class="text-secondary"> // Varible $nom modifie (type et valeur) </span>
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
                      <p> Les variables PHP sono typées automatiquement; lors de chaque affectation d'une baleur à une variable, le type de la variable est automatiquement défini ou redéfini.</p>
                      <p> Une valeur peut être affectée à une variable grâce à l'operateur d'affectation  "<strong> = </strong>" </p>
                  </div>
                  <br />

                  <div class="container px-4">
                      <div class="row gx-5">
                          <div class="col">
                              <div class="p-3 border bg-light">
                                  <table class="table" id="dynamique_resultat"> <!-- Variable dynamique RESULTAT -->
                                      <thead>
                                          <tr class="bg-secondary text-white text-center">
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
                                          <tr class="bg-secondary text-dark text-center">
                                              <th scope="col"> <span class="text-white"> CODE </span> </th>
                                          </tr>
                                      </thead>

                                      <tbody>
                                          <tr class="bg-light text-dark">
                                              <td>
                                                  <code>
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
                          <p> Le principe consiste à employer une variable qui stocke le nom d'une autre variable et d'y faire référence ensuit avec une notation, du type <b> $$variable </b>
                          ou <b> ${variable}. </b> Evec cette notation, le <b> $variable </b> "intériour" est remplacé par la valeur de la variable <b> $variable(valeur </b> par exemple) qui est alors utilisée
                          comme nom de variable par le $ "extérieur".
                          </p>
                  </div>
                  <br /><br />
                  <p> La porté d'une variable est le script dans lequel elle est défine. Une variable peut donc être définie dans une première sectionde code PHP et utilisée dans une autre section de code PHP du même script. </p>
                  <p> La durée de vie d'une variable est le temps de l'exécution du script. Lorsque le script se termine, les variables sont supprimées. Si le même script est appeleé plus tard, de nouvelle variables sont défines. </p>
              </blockquote>
            </div>
        </div>

        <div class="accordion-item"> <!-- ACCORDIN CHAINE -->
            <h2 class="accordion-header" id="headingChain">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChaine" aria-expanded="false" aria-controls="collapseChaine">
                  <blockquote class="due justify-content-center">
                      <span class="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>
                      </span> Chaine de caractèrs <i>(string)</i>
                  </blockquote>
                </button>
            </h2>

            <div id="collapseChaine" class="accordion-collapse collapse" aria-labelledby="headingChain" data-bs-parent="#accordionVariables">
                <div class="accordion-body">

                  <blockquote class="due justify-content-center">
                      <h3> <span class="text-info "> Pour afficher une chaîne sur plusierurs ligne dans le navigateur, in faut insérer una balise &lt;br /> </span>  </h3> <br />

                      <div class="container px-4"> <!-- FIRST ROW -->
                          <div class="row gx-5">
                              <div class="col">
                                  <div class="p-3 border bg-light">
                                      <table class="table" id="chain_resultat"> <!-- CHAINE RESULTAT -->
                                          <thead>
                                              <tr class="bg-secondary text-white text-center">
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
                                      <table class="table" id="chain_code"> <!-- CHAINE CODE -->
                                          <thead>
                                              <tr class="bg-secondary text-center">
                                                  <th scope="col"> <span class="text-white"> CODE </span> </th>
                                              </tr>
                                          </thead>
                                              <tbody>
                                                  <td>
                                                      <code>
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
                          <p class="text-center"> Les guillemens présents dans une chaîne délimitée par des guillemets <br /> ou <br /> Les apostrophes présents dans une chaîne délimitée par des apostrophes <br />
                          <span class='text-uppercase bg-warning '><b> doivent être "échappés",</b> </span><br>
                          c'est-à-dire <strong> précédes du caractèere antislash (<span class="text-success">\</span>)</strong>
                          </p>
                      <br />

                      <div class="container px-4"> <!-- SECOND ROW -->
                          <div class="row gx-5">
                              <div class="col">
                                  <div class="p-3 border bg-light">
                                      <table class="table" id="chainvar_resultat"> <!-- CHAINEVAR_RESULTAT  -->
                                          <thead>
                                              <tr class="bg-secondary text-center">
                                                  <th scope="col"> <span class="text-white"> Chain avec la variable</span> <span class="bg-info p-1 "> $nom </span></th>
                                              </tr>
                                          </thead>
                                              <tbody>
                                                  <td> Résultat <br /> <br />
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
                                  <div class="p-3 border bg-light">
                                      <table class="table" id="chainvar_code"> <!-- chainvar_code CODE -->
                                          <thead>
                                              <tr class="bg-secondary text-center">
                                                  <th scope="col"> <span class="text-white"> CODE </span></th>
                                              </tr>
                                          </thead>
                                              <tbody>
                                                  <td>
                                                      <code>
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
                                  <p>
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
                                      <table class="table" id="pomme_resultat"> <!-- pomme_resultat -->
                                          <thead>
                                              <tr class="bg-secondary text-center">
                                                  <th scope="col"> <span class="text-white"> Chain avec la variable</span> <span class="bg-info p-1 "> $nom </span></th>
                                              </tr>
                                          </thead>
                                              <tbody>
                                                  <td> Résultat <br /> <br />
                                                      <?php
                                                          $fruit= 'pomme';
                                                          echo "<br />Une $fruit ne coute pas chere.<br />";
                                                          echo "Due {$fruit}s coutent deux fois plus cher.<br />"; // accepté
                                                          echo "Trois ${fruit}s coutent trois fois plus cher.<br />"; // accepté
                                                          echo "{\$fruit} = {{$fruit}}<br /><br />";

                                                          echo $nom[0],$nom{6},$nom{-2}.'<br />';
                                                          echo $fruit[0],$fruit{3}.'<br />';
                                                      ?>
                                                  </td>
                                              </tbody>
                                      </table>
                                  </div>
                              </div>

                              <div class="col">
                                  <div class="p-3 border bg-light">
                                      <table class="table" id="pomme_code"> <!-- pomme_CODE -->
                                          <thead>
                                              <tr class="bg-secondary text-center">
                                                  <th scope="col"> <span class="text-white"> CODE </span></th>
                                              </tr>
                                          </thead>
                                              <tbody>
                                                  <td>
                                                      <code>
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
                          </div>
                              <br />
                              <p>
                                  Sur cet exemple, le "s" du pluriel est interprété par PHP comme appartenant à la séquence de caractèers située derrièere le <strong> $ </strong> ;
                                  c'est donc la variable $fruits qui est reconnue et remplacée par sa valeur (vide puisique la variable n'a jamais été initialisée).
                              </p>
                              <p>
                                  La solution consiste à delimiter le nom de la variable par des accolades sous la forme {$variable} ou ${variable}.
                              </p>
                              <p>
                                  Avec cette syntaxe, pour que l'accolades soit conservée, il faut la doubler ({{$variable}}).
                                  Quoi qu'il en soit, une caccolade qui n'est pas précédée ou vuisvie d'un <strong> $ </strong> non échappe est laissée telle quelle.

                              </p>

                      </div>
                  </blockquote>


                </div>
            </div>
        </div>
    </div>
</div>
