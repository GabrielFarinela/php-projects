<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = "evento";
    protected $allowedFields = [
        'silga',
        'nome',
        'espaco',
        'cidade',
        'pais',
        'fim_inscricao',
        'data_inicio',
        'data_fim'
    ];

    public function buscaEventosPorId($id) {
        return $this->find($id);
    }

    public function buscaTodosEventos() {
        return $this->findAll();
    }
}