<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = "evento";
    protected $allowedFields = [
        'sigla',
        'nome',
        'espaco',
        'cidade',
        'pais',
        'fim_inscricao',
        'data_inicio',
        'data_fim'
    ];
    public function buscaTodosEventos() {
        return $this->findAll();
    }
}

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