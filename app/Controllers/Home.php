<?php
namespace App\Controllers;

class Home extends \CodeIgniter\Controller
{
  public function index()
	{
					$data = [
									'page_title' => 'Your title'
					];

				echo view('welcome_message', $data);
	}
}
