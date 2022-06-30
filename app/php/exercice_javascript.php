    <div class="p-2 m-2 bg-light bg-gradient rounded" >
      <h1 class="text-ceter"> Les Variables </h1>
        <h2 class="text-left"> Exercice 1: Inverser les valeurs de deux variables</h2>
          <pre>À partir des variables suivantes faire en sorte d’inverser leur valeur:
            var a = 1; var b = 5; </pre>
            <form method="get" name="ex1">
            <label for="ex1">Cliquez sur "Start ->" pour commencer :</label>
            <br />
            <input type="button"  class="btn btn-primary" id="ex1" value="Start ->" name="ex1" onclick="getEx1()">
            <section id="sectionex1"></br> </section>

          <hr>
          <!-- EXERCICE 2 -->
          <h2 class="text-left"> Exercice 2: Afficher des variables</h2>
            <pre>À partir des variables suivantes :nom = toto; age = 30; homme = true; </pre>
            <input type="button" class="btn btn-primary" id="send" value="Start ->" name="utent" onclick="getVar()">
          <hr>

          <!-- EXERCICE 3 -->
          <h2 class="text-left"> Exercice 3 : Puissance de 2 </h2>
            <pre> Réaliser un programme permettant à l’utilisateur de saisir la puissance de 2 qu’il souhaite afficher. </pre><br>
              <form method="get" name="puissance2" id="puissance2">
                <label for="">Cliquez sur "Start ->" pour commencer :</label></br>
                <input type="button" class="btn btn-primary" id="send" value="Start ->" name="fill"  onclick="getParam()">
              </form>
            <hr>

            <!-- EXERCICE 4 -->
            <h2 class="text-left"> Exercice 4</h2>
              <pre>Vous devez réaliser un programme permettant de saisir le nom, le prénom et l’âge d’un utilisateur </pre>
              <form method="get" name="utent" id="utent">
                <label for="utent">Cliquez sur "Start ->" pour commencer :</label></br>
                <input type="button" class="btn btn-primary" id="send" value="Start ->" name="utent" onclick="getUtent()">
              </form>

              <hr><!-- EXERCICE 5 -->
              <h2 class="text-left"> Exercice 5</h2>
                <pre>Boucle for et while  - À partir d’un nombre saisi au clavier, aﬃcher sa table de multiplication (les 10 premiers nombres)</pre>

                <form method="get" name="tabmult" id="tabmult">
                  <label for="tabmult">Cliquez sur "Start ->" pour commencer :</label></br>
                  <input type="button" class="btn btn-primary" id="tabmult" value="Start ->" name="tabmult" onclick="getTabmult()">
                </form>


                <hr><!-- EXERCICE 6 -->


                <h2 class="text-left"> Exercice 6 - Saisie d’un chiﬀre et vériﬁcation de sa valeur</h2>
            <pre>Permettre à l’utilisateur de réaliser une saisie clavier. Si la saisie n’est pas un chiﬀre, l’utilisateur doit recommencer.</pre>
                <form name="Veri" method="get" focus>
                Saisir :
                    <input id="saisirNom" type="text" name="saisirNom" placeholder="Saisir nombre" pattern="\d{1,9}" maxlength="15" required><span class="validity"></span><br/>
                    <br/>
                    <input type="button"  class="btn btn-primary" id="verif" value="Envoyer ->" name="verif" onclick="getCheckform()">
                    <input type="reset" class="btn btn-warning" name="">
                </form>

            <hr> <!-- EXERCICE 7 -->

            <h2 class="text-left"> Exercice 7 </h2>
            <p>Réaliser une fonction qui permet de vérifier si un chiffre passé en paramètre est divisible par 3 et si c’est le cas, afficher le résultat de l’opération.</p>

            <form method="get" name="modul" id="modul">
              <label for="modul">Cliquez sur "Start ->" pour commencer :</label></br>
              <input type="button"  class="btn btn-primary" id="modul" value="Start ->" name="modul" onclick="getModul()">
            </form>


            <hr> <!-- EXERCICE 8 -->
            <h2 class="text-left"> Exercice 8 </h2>
            <pre>Vériﬁer si un mot contient moins de 8 caractères</pre>

            <form method="get" name="caractères" id="caractères">
              <label for="caractères">Cliquez sur "Start ->" pour commencer :</label></br>
              <input type="button"  class="btn btn-primary" id="caractères" value="Start ->" name="caractères" onclick="getChar()">
            </form>

            <hr> <!-- EXERCICE 9 -->
            <h2 class="text-left"> Exercice 9 </h2>
            <pre>Aﬃcher les informations d’un objet</pre>

            <form method="get" name="infobjet" id="infobjet">
              <label for="infobjet">Cliquez sur "Start ->" pour commencer :</label></br>
              <input type="button"  class="btn btn-primary" id="infobjet" value="Start ->" name="infobjet" onclick="getInfobjet()">
            </form>

            <hr> <!-- EXERCICE 10 -->
            <h2 class="text-left"> Exercice 10 </h2>
            <pre>Permettre la saisie des informations d’un objet</pre>

            <label for="infobjet">Cliquez sur "Start ->" pour commencer :</label></br>
            <input type="button"  class="btn btn-primary" id="infobjet" value="Start ->" name="infobjet" onclick="getPersonagge()">


                    <hr> <!-- EXERCICE 11 -->
            <h2 class="text-left"> Exercice 11 </h2>
            <pre>Compléter votre script pour modiﬁer le contenu de la balise div pour aﬃcher “ Bonjour Resurgence”</pre>

            <div id="change\bon"> "Hello Résurgence” </div>

            <form method="get" name="modbalis" id="modbalis">
              <input type="button"  class="btn btn-primary" id="modbalis" value="Start ->" name="modbalis"  onclick="getModbalis()">

            </form>


            <hr> <!-- EXERCICE 12 -->
            <h2 class="text-left"> Exercice 12 </h2>
            <pre>Compléter votre script pour ajouter une couleur au inputs</pre>

            <div id="colorinput">
            <form  method="get" >
              <label for="colornom" >Nom</label>
              <input type="text" id="colornom" onchange="checkFilled();">

              <label for="colorprenom"> Prenom</label>
              <input type="text" id="colorprenom" onchange="checkFilled();">
            </form>


            <hr> <!-- EXERCICE 13 -->
            <h2 class="text-left"> Exercice 13 </h2>
            <pre>Aﬃcher le nombre de clics sur un bouton</pre>


            <div> Cliquer sur le bouton pour incrémenter !</div>
            <p>Vous avez cliquez <b id='nb'>0</b> fois </p>
            <form >
            <input type="button" class="btn btn-primary" onclick="incrementer()" value=" incrementer !" />
            <input type="button" class="btn btn-primary" onclick="incrementer10()" value=" incrementer +10!" />
            <input type="reset"  class="btn btn-primary"  onclick="azzerer()"  >
                  </form>


                  <hr> <!-- EXERCICE 14 -->
            <h2 class="text-left"> Exercice 14 </h2>
            <pre>Aﬃcher la table de trois dans le navigateur</pre>

            <form method="get" name="tabmult" id="tabmult">
              <label for="tabmult">Cliquez sur "Start ->" pour commencer :</label></br>
              <input type="button"  class="btn btn-primary" id="tabmult" value="Start ->" name="tabmult" onclick="getTabmult1()">
              <section id="masection">  <br/>    </section>
            </form>

            <hr> <!-- EXERCICE 15 -->
            <h2 class="text-left"> Exercice 15 </h2>
              <pre>Compléter le script pour aﬃcher au hasard pile ou face dans la div.</pre>
                <div >
                  <form>
                    <label for="Pile">Pile </label>
                      <input type="radio" name="Pile" value="Pile">
                    <label for="Face">Face</label>
                      <input type="radio" name="Pile" value="Face">
                      <input type="button"  class="btn btn-primary" onclick="funzionelati();" value="Choix">
                      <input type="text" id="text" name="text">
                      <input type="reset">
                  </form>
                </div>

              <section id="pilesection">  </section>


            <hr> <!-- EXERCICE 16 -->
            <h2 class="text-left"> Exercice 16 </h2>
            <pre>Faire un programme qui choisit un nombre aléatoire entre 0 et 20</pre>

            <form method="get" name="aléatoire" id="aléatoire">
              <input type="button" class="btn btn-primary" id="aléatoire" value="Start ->" name="aléatoire" onclick="getPile()">
            </form>

            <hr> <!-- EXERCICE 17 -->
            <h2 class="text-left"> Exercice 17 - Forcer la saisie d’un chiffre </h2>
            <pre>Faire un programme qui force la saisie du chiffre 3, tant que ce chiffre n’est pas saisi, le programme recommence sa demande</pre>

            <form method="get" name="aléatoire" id="aléatoire">
              <input type="button"  class="btn btn-primary" id="aléatoire" value="Start ->" name="aléatoire" onclick="getTroi()">
            </form>

            <hr> <!-- EXERCICE 18 -->
            <h2 class="text-left"> Exercice 18 - Additionner des valeurs d’un tableau</h2>
            <pre>À partir du tableau suivant, additionner les valeurs si elles sont paires
            var tab = [2, 6, 10, 3, 8, 7, 20];</pre>

            <form method="get" name="additionner" id="additionner">
              <input type="button"  class="btn btn-primary" id="additionner" value="Start ->" name="additionner" onclick="getAdditionner()">
            </form>

            <section id="additionner"> </section>

               <script src="./js/exercice_js.js"> </script>
              <!--<link rel="stylesheet" type="text/css" href="./css/style.css"> -->

    </div>
