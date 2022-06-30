<?php

namespace App\Models;
use CodeIgniter\Model;

class Filmsmodel extends Model
{
  protected $table = 'Film';
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

  public function unfilm(int $id)
  {
    return $this->find($id);
  }

  public function sauvegarde($data)
  {
    return $this->insert($data);
  }




}
