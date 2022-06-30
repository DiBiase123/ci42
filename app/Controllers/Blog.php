<?php

namespace App\Controllers;

class Blog extends \CodeIgniter\Controller
{
        public function index()
        {
          echo view('Layout/header');
          echo view('BlogView');

        }
}
