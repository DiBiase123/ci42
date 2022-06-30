<script>
  var firstTabEl = document.querySelector('#myTab a:last-child')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background: #00b8ea;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
      <a href="/" class="d-flex align-items-center">
        <button type="button" class=" bg-primary">
          <a href="https://noframe.dev.accatone.net/assistants/giuliano.di-biase/ci4/public/index.php/Ultimate">
            <!--	<img height="44" title="Chari ID Logo" alt="logo CHAR" src="# "> -->
            <p class="text-white fw-bolder fs-2 text-center " >CHAR-ID
              <span class="badge bg-info p-2 text-dark fs-5 text-center" >.1.0.1</span>
            </p>
         </a>
        </button>
      </a>
    </h5>
    <button type="button" class="btn-close btn-close-warning " data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
</div>

<div class="offcanvas-body bg-white">
  <ul class="list-unstyled ps-0">
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        Examples JavaScript
      </button>
      <div class="collapse show list-group text-start" id="exercice_js-collapse"  role="tablist">
        <!--  <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#home" role="tab">Home</a> -->
          <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#ex1" role="tab">#1 - Inverser les valeurs de deux variables </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex2" role="tab">#2 - Afficher des variables</a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex3" role="tab">#3 - Puissance de 2 </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex4" role="tab">#4 - Saisir des données  </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex5" role="tab">#5 - Table de multiplication </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex6" role="tab">#6 - Saisie d’un chiﬀre et vériﬁcation de sa valeur </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex7" role="tab">#7 - Modul 3  </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex8" role="tab">#8 - Vériﬁer mot  </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex9" role="tab">#9 - Aﬃcher Objet  </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex10" role="tab">#10 - Saisie d’un Objet </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex11" role="tab">#11 - Modifier DOM  </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex12" role="tab">#12 - <span class="text-info"> Ajouter une couleur au inputs </span> </a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex13" role="tab">#13 - <span class="text-info"> Nombre de clics </span></a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex14" role="tab">#14 - <span class="text-info"> Table de moltiplication dans le navigateur  </span></a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex15" role="tab">#15 - <span class="text-info"> Pile ou Face </span></a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex16" role="tab">#16 - <span class="text-info"> Nombre aléatoire </span></a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex17" role="tab">#17 - <span class="text-info"> Forcer la saisie d’un chiffre </span></a>
          <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#ex18" role="tab">#18 - <span class="text-info"> Additionner des valeurs d’un tableau </span></a>
      </div>
    </li>
  </ul>
</div>
