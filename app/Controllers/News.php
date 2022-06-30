<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();

        $data =
          [
            'news'  => $model->getNews(),
            'title' => 'News archive',
          ];

     echo view('BlogView');
     echo view('news/overview', $data);
    }

    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

      if (empty($data['news']))
      {
          throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
      }
      $data['title'] = $data['news']['title'];
    }

    public function create()
    {
        helper('form');
        $model = new NewsModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required',
            ]))
        {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'body'  => $this->request->getPost('body'),
            ]);

            echo view('news/success');

        }
        else
        {
        echo view('Layout/master_films'/*, ['title' => 'Create a news item']*/);
            echo view('news/create');
            echo view('Layout/footer');
        }
    }


}
