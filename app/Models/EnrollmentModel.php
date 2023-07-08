<?php

namespace App\Models;

use CodeIgniter\Model;

class EnrollmentModel extends Model
{
    protected $table = "inscricao";
    protected $allowedFields = [
        'artigo',
        'criada_em',
        'evento',
        'tipo',
        'usuario'
    ];

    public function buscaInscriçõesPorId($id) {
        return $this->where('usuario', $id)->findAll();
    }
}