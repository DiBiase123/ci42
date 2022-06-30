<?php
namespace App\Controllers;

class Ultimate extends \CodeIgniter\Controller
{
  public function index()
	{
					$data = [
									'page_title' => 'Your title'
					];

				//	echo view('menu');
        echo view('Layout/header');
				echo view('Ultimate/index', $data);
				//	echo view('footer');
	}
}
