<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
    public function blog_grid()
    {
        return view('user/blog-grid');
    }
    public function blog_single()
    {
        return view('user/blog-single');
    }
}