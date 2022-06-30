  <!-- EXERCICE 1 // OK -->
  <h2 class="text-primary"><strong><em>Inverser les valeurs de deux variables</strong></em></h2>
    <p class="text-secondary">À partir des variables suivantes faire en sorte d’inverser leur valeur:</p>
    <p class="text-dark"> var a = 1; <br> var b = 5; </p>
    <form method="get" name="ex1">
      <label for="ex1">Cliquez sur "Start ->" pour commencer :</label>
      <br />
      <input type="button"  class="btn btn-primary" id="ex1" value="Start ->" name="ex1" onclick="getEx1()"></input>
    </form>
    <section id="sectionex1"></br> </section>
    <br>
    <br>

  <!-- EXERCICE 2 // OK -->
  <h2 class="text-left text-primary"><strong><em>  Afficher des variables</strong></em></h2>
    <p class="text-secondary">À partir des variables suivantes :nom = toto; age = 30; homme = true; </p>
    <input type="button" class="btn btn-primary" id="send" value="Start ->" name="utent" onclick="getVar()"></input>
    <br/>
    <br/>
    <br/>

  <!-- EXERCICE 3 // OK -->
  <h2 class="text-left text-primary"><strong><em> Puissance de 2 </strong></em></h2>
    <p class="text-secondary"> Réaliser un programme permettant à l’utilisateur de saisir la puissance de 2 qu’il souhaite afficher. </p>
      <form method="get" name="puissance2" id="puissance2">
        <input type="button" class="btn btn-primary" id="send" value="Start ->" name="fill"  onclick="getParam()">
      </form>
      <br>
      <br>

  <!-- EXERCICE 4 // OK -->
  <h2 class="text-left text-primary"><strong><em> Saisir des données </strong></em></h2>
    <p class="text-secondary">Vous devez réaliser un programme permettant de saisir le nom, le prénom et l’âge d’un utilisateur </p>
      <form method="get" name="utent" id="utent">
        <input type="button" class="btn btn-primary" id="send" value="Start ->" name="utent" onclick="getUtent()"></input>
      </form>
      <br>
      <br>

  <!-- EXERCICE 5 // OK -->
  <h2 class="text-left text-primary"><strong><em> Table de multiplication </strong></em></h2>
    <p class="text-secondary">Boucle for et while  - À partir d’un nombre saisi au clavier, aﬃcher sa table de multiplication (les 10 premiers nombres)</p>
    <form method="get" name="tabmult" id="tabmult">
      <input type="button" class="btn btn-primary" id="tabmult" value="Start ->" name="tabmult" onclick="getTabmult()"></input>
    </form>
    <br>
    <br>

  <!-- EXERCICE 6 // OK -->
  <h2 class="text-left text-primary"><strong><em> Saisie d’un chiﬀre et vériﬁcation de sa valeur </strong></em></h2>
    <p class="text-secondary">Permettre à l’utilisateur de réaliser une saisie clavier. Si la saisie n’est pas un chiﬀre, l’utilisateur doit recommencer.</p>
    <form name="Veri" method="get" focus>
    Saisir :
        <input id="saisirNom" type="text" name="saisirNom" placeholder="Saisir nombre" pattern="\d{1,9}" maxlength="15" required autofocus>
          <span class="validity"></span></input><br/>
        <br/>
        <input type="button"  class="btn btn-primary" id="verif" value="Envoyer ->" name="verif" onclick="getCheckform()" autofocus></input>
        <input type="reset" class="btn btn-warning" name=""></input>
    </form>
    <br>
    <br>

  <!-- EXERCICE 7 // OK -->
  <h2 class="text-left text-primary"><strong><em> Modul 3 </strong></em></h2>
    <p class="text-secondary">Réaliser une fonction qui permet de vérifier si un chiffre passé en paramètre est divisible par 3 et si c’est le cas, afficher le résultat de l’opération.</p>
    <form method="get" name="modul" id="modul">
      <input type="button"  class="btn btn-primary" id="modul" value="Start ->" name="modul" onclick="getModul()">
    </form>
    <br>
    <br>

  <!-- EXERCICE 8 // OK -->
  <h2 class="text-left text-primary"><strong><em> Vériﬁer mot </strong></em></h2>
    <p class="text-secondary">Vériﬁer si un mot contient moins de 8 caractères</p>
    <form method="get" name="caractères" id="caractères">
      <input type="button"  class="btn btn-primary" id="caractères" value="Start ->" name="caractères" onclick="getChar()"></input>
    </form>
    <br>
    <br>

  <!-- EXERCICE 9 // OK -->
  <h2 class="text-primary"><strong><em>Aﬃcher Objet </strong></em></h2>
    <p class="text-secondary">Aﬃcher les informations d’un objet</p>
    <form method="get" name="infobjet" id="infobjet">
      <input type="button"  class="btn btn-primary" id="infobjet" value="Start ->" name="infobjet" onclick="getInfobjet()"></input>
    </form>
    <br>
    <br>

  <!-- EXERCICE 10 // OK -->
  <h2 class="text-primary"><strong><em> Saisie d’un Objet </strong></em></h2>
    <p class="text-secondary"> Permettre la saisie des informations d’un objet</p>
    <input type="button"  class="btn btn-primary" id="infobjet" value="Start ->" name="infobjet" onclick="getPersonagge()"></input>
    <br/>
    <br/>

  <!-- EXERCICE 11 // OK -->
  <h2 class="text-primary"><strong><em> Modifier DOM </strong></em></h2>
    <p class="text-secondary"> Compléter votre script pour modiﬁer le contenu de la balise div pour aﬃcher “ Bonjour Resurgence”</p>
      <div id="change\bon" class="text-center"> "Hello </div>
      <form method="get" name="modbalis" id="modbalis">
        <input type="button"  class="btn btn-primary" id="modbalis" value="Start ->" name="modbalis"  onclick="getModbalis()"></input>
      </form>
      <br/>
      <br/>

  <!-- EXERCICE 12 // OK -->
  <h2 class="text-primary"><strong><em> Ajouter une <span class="text-success"> couleur </span> au inputs </strong></em></h2>
    <p class="text-secondary">Compléter votre script pour ajouter une couleur au inputs</p>

    <div id="colorinput">
      <form  method="get" >
        <ul class="text-center">

          <li>
            <label for="colornom" >Nom</label>
            <input type="text" id="colornom" onchange="checkFilled();"></input>
          </li>

          <li>
            <label for="colorprenom"> Prenom</label>
            <input type="text" id="colorprenom" onchange="checkFilled();"></input>
          </li>

        </ul>
      </form>
    </div>
    <br/>
    <br/>

  <!-- EXERCICE 13 // OK -->
  <h2 class="text-primary"><strong><em> Nombre de clics </strong></em></h2>
    <p class="text-secondary">Aﬃcher le nombre de clics sur un bouton</p>

      <h5 class="text-secondary"> Cliquer sur le bouton pour incrémenter !</h5>
        <p>Vous avez cliquez <b class="fs-3 text-danger" id='nb'> 0 </b> fois </p>
        <form >
          <input type="button" class="btn btn-primary" onclick="incrementer()" value=" incrementer !" /> </input>
          <input type="button" class="btn btn-primary" onclick="incrementer10()" value=" incrementer +10!" /> </input>
          <input type="reset"  class="btn btn-primary"  onclick="azzerer()"  > </input>
        </form>
        <br/>
        <br/>

  <!-- EXERCICE 14 // OK -->
  <h2 class="text-primary"><strong><em> Table de moltiplication dans le navigateur  </strong></em></h2>
    <p class="text-secondary">Aﬃcher la table de moltiplication dans le navigateur</p>

    <form method="get" name="tabmult" id="tabmult">
      <input type="button"  class="btn btn-primary" id="tabmult" value="Start ->" name="tabmult" onclick="getTabmult1()"></input>
      <section id="masection">  <br/>    </section>
    </form>
    <br/>
    <br/>

  <!-- EXERCICE 15 // OK-->
  <h2 class="text-primary"><strong><em> Pile ou Face </strong></em></h2>
    <p class="text-secondary">Compléter le script pour aﬃcher au hasard pile ou face dans la div.</p>
      <div >
        <form>
            <label for="Pile">Pile </label>
            <input type="radio" name="Pile" value="Pile"> </input>

            <label for="Face">Face</label>
            <input type="radio" name="Pile" value="Face"></input>
            <input type="button" class="btn btn-primary" onclick="funzionelati();" value="Choix"></input>

            <input type="text" id="text" name="text"></input>
            <input type="reset"></input>
        </form>
      </div>

    <section id="pilesection">  </section>
    <br/>
    <br/>

  <!-- EXERCICE 16 // OK-->
  <h2 class="text-primary"><strong><em> Nombre aléatoire </strong></em></h2>
    <p class="text-secondary">Faire un programme qui choisit un nombre aléatoire entre 0 et 20</p>

    <form method="get" name="aléatoire" id="aléatoire">
      <input type="button" class="btn btn-primary" id="aléatoire" value="Start ->" name="aléatoire" onclick="getPile()"></input>
    </form>
    <br/>
    <br/>

  <!-- EXERCICE 17 // OK -->
  <h2 class="text-primary"><strong><em> Forcer la saisie d’un chiffre </strong></em></h2>
    <p class="text-secondary">Faire un programme qui force la saisie du chiffre 3, tant que ce chiffre n’est pas saisi, le programme recommence sa demande </p>

    <form method="get" name="aléatoire" id="aléatoire">
      <input type="button"  class="btn btn-primary" id="aléatoire" value="Start ->" name="aléatoire" onclick="getTroi()"></input>
    </form>
    <br/>
    <br/>

  <!-- EXERCICE 18 +++++ AGGIUSTARE QUERYSELECT +++++++ -->
  <h2 class="text-primary"><strong><em> Additionner des valeurs d’un tableau </strong></em></h2>
    <p class="text-secondary">À partir du tableau suivant, additionner les valeurs si elles sont paires <br><br/> var tab = [2, 6, 10, 3, 8, 7, 20];</p>

    <form method="get" name="additionner" id="additionner">
      <input type="button"  class="btn btn-primary" id="additionner" value="Start ->" name="additionner" onclick="getAdditionner()"></input>
    </form>

    <section id="additionner"> </section>

    <script src="../js/exercice_js.js"> </script>
