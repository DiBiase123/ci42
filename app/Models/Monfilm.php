<?php

namespace App\Models;

use CodeIgniter\Model;

class Filmsmodel extends Model
{
  protected $table = 'film';
  protected $primaryKey = 'idFilm';
  protected $allowedFields = [
    'titre',
    'annee',
    'idMes',
    'genre',
    'resume',
    'codePays',
    'urlImage'
  ];

  public function tousmesfilm()
  {
    return $this->findAll();
  }

  public function monfilm(int $id)
  {
    return $this->find($id);
  }



}
