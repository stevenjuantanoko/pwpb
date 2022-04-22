<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Pages extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        return view('layout/page_layout');
    }
    public function home()
    {

        $berita = $this->beritaModel->findAll();

        $data = [
            'berita' => $berita
        ];

        return view('user/index', $data);
    }

    public function blog_grid()
    {
        echo view('user/blog_grid');
    }
    public function blog_single()
    {
        return view('user/blog_single');
    }
    public function about()
    {
        echo view('layout/about');
    }
    public function contact()
    {
        echo view('layout/contact.php');
    }
}