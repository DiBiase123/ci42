<div class="container px-2 border text-center border-3 rounded" style="background:  #00b8ea">
  <br>
    <h1 class="display-2 text-white" style="text-shadow: black 2px 5px;">  #JavaScript: Objets et tableaux ++++363333</h1>
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


      <div class="p-2 bg-light bg-gradient rounded">

  <p class="text-center text-secondary">Vous devez réaliser un programme permettant de gérer des animaux. </p>
  <div class="text-center">
    <button type="button" class=" btn btn-info btn-lg text-white" onclick="find()" >
      <input type="text" id="find" placeholder="Recercher ... " >

      <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg>
    </button>

    <div class="row g-2 text-center">
      <div class="col-6"><!--   PRIMA COLONNA -->
        <br>
        <button class="btn btn-info col-6-4 p-1" id="cane" onclick="seeChien()";>

          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
 <span class="visually-hidden">Loading...</span>
 <br>
          <img src="../ico/chien.png" alt="chien" width="35%" height="auto"></img><br>
          <h3 class="text-white"> Chien</h3>
        </button>

        <div class="col-6  mx-auto ">
          <button type="button" class="btn btn-success text-warning" onclick="addchien()"> +Ajouter</button>
        </div>
      </div>
      <div class="col-6"><!--   SECONDA COLONNA -->
        <br>
        <button class="btn btn-info col-6-4 p-1" id="gatto" onclick="seeChat()";>
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span class="visually-hidden">Loading...</span>
  <br>
          <img src="../ico/chat.png" alt="gatto" width="35%" height="auto" ></img><br>
          <h3 class="text-white"> Chat </h3>
        </button>

        <div class="col-6 mx-auto">
          <button type="button" class="btn btn-success text-warning" onclick="addchat()"> +Ajouter</button>
        </div>
      </div>
      <!-- SEZIONE VISUALIZZA -->
      <div class="col-6">
        <div class="p-3" id="seechien"></div>
      </div>
      <div class="col-6">
        <div class="p-3" id="see"></div>
      </div>
      <!--FINES SEZIONE VISUALIZZA -->
    </div>
  </div>
</div>

</div>

<script src="../js/ex2_moyen.js" type="text/javascript"> </script>
