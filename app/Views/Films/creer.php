<?= $this->extend('Layout/master_films') ?>
<?= $this->section('content') ?>

<?php echo form_open('Films/creer'); ?>

<div class="p-2 m-2 col-lx-sm ">
  <h1 class="text-warning shadow display-1">

    <svg xmlns="http://www.w3.org/2000/svg" width="1em"  fill="currentColor" class="bi bi-film text-dark p-1 m-1" viewBox="0 0 16 16">
      <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="0.8em" height="0.8em" fill="currentColor" class="bi bi-plus text-success" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    <b> <em> Ajouter Film </b></em></h1>
      <div class="row justify-content-center">

        <div class="container col-10">
          <div class="row g-3">
            <div class="col-4-4">
              <div class="p-1 border shadow " style="background: #90e6b3";>
                <label for="ControlInput1" class="form-label "><em> Titre: </em></label>
                <input type="text" name="titre" class="form-control bg-light">
              </div>
            </div>
            <div class="col-4">
              <div class="p-1 border shadow"  style="background: #90e6b3">
                <label for="ControlInput2" class="form-label"><em> Année: </em></label>
                <input type="text" name="annee" class="form-control bg-light">
              </div>
            </div>
            <div class="col-4">
              <div class="p-1 border shadow"  style="background: #90e6b3">
                <label for="ControlInput3" class="form-label"><em> IdMes: </em></label>
                <input type="text" name="idMes" class="form-control bg-light">
              </div>
            </div>
            <div class="col-4">
              <div class="p-1 border shadow"  style="background: #90e6b3">
                <label for="ControlInput4" class="form-label"><em> Genre: </em></label>
                <input type="text" name="genre" class="form-control bg-light">
              </div>
            </div>
            <div class="col-4">
              <div class="p-1 border shadow"  style="background: #90e6b3">
                <label for="ControlInput6" class="form-label"><em> Pays: </em></label>
                <input type="text" name="codePays" class="form-control bg-light">
              </div>
            </div>

            <div class="col-6-6">
              <div class="p-1 border shadow"  style="background: #90e6b3">
                <label for="ControlInput5" class="form-label"><em> Résumé: </em></label>
                <textarea name="resume" class="form-control bg-light"></textarea>
              </div>
            </div>

            <div class="col-6-6">
              <div class="p-1 border shadow"  style="background: #90e6b3">
                <label for="ControlInput6" class="form-label"><em> URL Image: </em></label>
                <input type="text" name="urlImage" class="form-control bg-light" placeholder="https://..." >
                <br>
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <br>



          </div>
          <div class="d-flex flex-row bd-highlight justify-content-center">
            <div class="p-2 bd-highlight">
              <button type="submit" class="btn btn-success btn-lg form-control"> Save </button>
            </div>
          </div>
        </div>

    </div>
</div>

<?php echo form_close(); ?>
<?php $this->endSection() ?>
