<?php

namespace App\Controllers;
use App\Models\Filmsmodel;

class Films extends \CodeIgniter\Controller
{

        public function index()
        {
            $film=array(
              "titre" => "Les sous-doués en vacances",
              "année" => 1982,
              "genre" => "comedie"
            );
            return view ('Films/index', $film);
        }

        public function vacances()
        {
          return view ('Films/vacances');
        }

        public function mesfilms()
        {
            $modelfilm = new Filmsmodel();
            $films = $modelfilm->findAll();
            $data = array("films"=>$films);
            return view ('Films/mesfilms', $data);

          }
}
