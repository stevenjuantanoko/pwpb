<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Database\Query;
use Config\Validation;

class Admin extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('layout/admin_layout');
    }
    public function dashboard()
    {
        echo view('admin/index');
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
    public function save()
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
    public function blog_single()
    {
        return view('user/blog_single');
    }
}