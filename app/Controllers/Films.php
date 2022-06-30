<?php

namespace App\Controllers;
use App\Models\Filmsmodel;

class Films extends \CodeIgniter\Controller
{

        private $modelfilm;

        public function __construct()
        {
          $this->modelfilm = new Filmsmodel();
          helper('form');
        }

        public function index()
        {
          $film=array(
            "titre" => "Les sous-doués en vacances",
            "année" => 1982,
            "genre" => "comedie"
          );

          $page_title = [
									'page_title' => 'Your title'
					];


          return view ('Films/index', $film);
        }

        public function vacances()
        {
          return view ('Films/vacances');
        }

        public function mesfilms()
        {
          $films = $this->modelfilm->findAll();
          $data = array("films"=>$films);
          return view ('Films/mesfilms', $data);
        }

        public function letfilm (int $id)
        {
          $monsuperfilm = $this->modelfilm->unfilm($id);
          $data = array ("monsuperfilm"=>$monsuperfilm);
          return view ('Films/letfilm', $data);
        }

        public function creer()
        {
          if($_SERVER['REQUEST_METHOD']==='POST')
          {
            $data = array(
              'titre'=> $this->request->getPost('titre'),
              'annee'=> $this->request->getPost('annee'),
              'idMes'=> $this->request->getPost('idMes'),
              'genre'=> $this->request->getPost('genre'),
              'resume'=> $this->request->getPost('resume'),
              'codePays'=> $this->request->getPost('codePays'),
              'urlimage'=> $this->request->getPost('urlImage'),
            );

          //  print_r($data); /* VERIFICA DATI DENTRO $DATA */
          //  die();
          $this->modelfilm->sauvegarde($data);
          $lastid = $this->modelfilm->insertID();
          echo 'film sauvegardé' ;

          return redirect()->to('/Films/letfilm/'.$lastid); // ++ ULTIMO INSERITO



          }

          return view('Films/creer');


        }

}
