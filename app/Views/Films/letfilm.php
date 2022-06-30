<?= $this->extend('Layout/master_films') ?>
<?= $this->section('content') ?>

  <br/>
  <h1 class="display-1 text-info"><?=$monsuperfilm['titre']?></h1>

  <br/>


  <div class="row p-2 m-2 bg-light">
    <div class="col-12 col-md-4 "> <!-- COLONNA SX -->
      <img src="<?=$monsuperfilm["urlImage"]?>" alt="image_superfilm" style="width: 75%;">
    </div>

      <div class="col-12 col-md-8"> <!-- COLONNA DX -->
        <ul class="list-group text-start ">
          <li class="list-group-item list-group-item-primary">

            Titre:  <?=$monsuperfilm["titre"]?></li>

          <li class="list-group-item list-group-item-secondary">

            Année:  <?=$monsuperfilm["annee"]?></li>

          <li class="list-group-item list-group-item-success">

            ID Mes  <?=$monsuperfilm["idMes"]?></li>

          <li class="list-group-item list-group-item-danger">

            Genre :  <?=$monsuperfilm["genre"]?></li>

          <li class="list-group-item list-group-item-warning">

            Resume :  <?=$monsuperfilm["resume"]?></li>

          <li class="list-group-item list-group-item-info">
            CodPays :<?=$monsuperfilm["codePays"]?></li>

        </ul>
      </div>
</div>


<?= $this->endSection() ?>
