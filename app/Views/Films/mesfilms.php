<?= $this->extend('Layout/master_films') ?>
<?= $this->section('content') ?>

<br>
<h1 class="text-primary">All titre</h1>
<br>


<?php

foreach ($films as $f) {
  echo '<h3>'.$f['titre'].'</h3>';
} ?>


<?php $this->endSection() ?>
