<div class="container px-2 border text-center border-3 rounded" style="background:  #00b8ea">
  <br>
  <h1 class="display-2 text-white" style="text-shadow: black 2px 5px;"> Tableau </h1>
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

   <div class="p-2 bg-light bg-gradient rounded">
     <br>
     <p class="text-secondary text-center">Vous devez créer un programme permettant de compléter un tableau de chiﬀres. Lorsque l’on saisit un chiﬀre, il est écrit directement à la bonne place aﬁn de de conserver un tableau trié. </p>

     <div class="container col-10 text-center">
        <ul class="list-unstyled text-center ">
          <li>A = Ajouter un chiffre</li>
          <li>B = Afficher le tableau</li>
          <li>C = Trie le tableau + ASC</li>
          <li>D = Trie le tableau - DES</li>
        </ul>
      </div>

      <label class="label" for="Faire votre choix">Quels est votre choix ?</label>
      <br>
       <input class="m-1" type="text" id="valeur" placeholder="Faire votre choix.." autofocus > </input>
       <button class="btn btn-primary m-1" onclick="submit()">Envoyer</button>
       <button class="btn btn-warning m-1" onclick="supprimer()">Effacer</button>
       <br/>

     <section ><br />
       <p class="text-white bg-secondary" id="ajouter"> </p>
     </section>
   </div>
   <br>

 </div>
 <br>




<script src="../js/ex1_moyen.js"> </script>
