<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeritaModel;
use CodeIgniter\Database\Query;
use Config\Validation;

class Admin extends BaseController
{
    protected $userModel;
    protected $beritaModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        return view('layout/admin_layout');
    }
    public function dashboard()
    {
        echo view('admin/index');
    }
    public function login()
    {
        echo view('admin/login');
    }
    public function user()
    {
        $user = $this->userModel->findAll();

        $data = [
            'user' => $user
        ];

        // $userModel = new \App\Models\UserModel();
        // $userModel = new UserModel();

        return view('admin/user', $data);
    }
    public function createuser()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('admin/createuser', $data);
    }
    public function saveuser()
    {
        ///validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'is_unique' => '{field} already exist'
                ]
            ],
            'password' => 'required'
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/createuser')->withInput()->with('validation', $validation);
        }


        $this->userModel->save([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/user');
    }

    public function berita()
    {
        $berita = $this->beritaModel->findAll();

        $data = [
            'berita' => $berita
        ];

        return view('admin/berita', $data);
    }
    public function createberita()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('admin/createberita', $data);
    }
    public function saveberita()
    {
        ///validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[berita.judul]',
                'errors' => [
                    'is_unique' => '{field} already exist'
                ]
            ],
            'author' => 'required',
            'newslead' => 'required',
            'newsbody' => 'required',
            'newsleg' => 'required'
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/createberita')->withInput()->with('validation', $validation);
        }


        $this->beritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'author' => $this->request->getVar('author'),
            'newslead' => $this->request->getVar('newslead'),
            'newsbody' => $this->request->getVar('newsbody'),
            'newsleg' => $this->request->getVar('newsleg'),
            'newsimg' => $this->request->getVar('newsimg')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/berita');
    }
}