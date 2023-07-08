<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "usuario";
    protected $allowedFields = [
        'nome', 
        'email', 
        'senha', 
        'instituicao'
    ];
}