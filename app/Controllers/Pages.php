<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('layout/page_layout');
    }
    public function home()
    {
        echo view('user/index');
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