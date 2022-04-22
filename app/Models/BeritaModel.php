<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $allowedFields = ['judul', 'author', 'newslead', 'newsbody', 'newsleg', 'newsimg'];
}