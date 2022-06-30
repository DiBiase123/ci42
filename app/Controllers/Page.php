<?php

namespace App\Controllers;

class Page extends \CodeIgniter\Controller
{
        public function index()
        {
                $data = [
                        'page_title' => 'Your title'
                ];

                echo view('header');
                echo view('menu');
                echo view('BlogView', $data);
                echo view('footer');
        }
}
