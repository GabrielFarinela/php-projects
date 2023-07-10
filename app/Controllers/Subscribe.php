<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\EnrollmentModel;

class Subscribe extends BaseController
{
  public function registerEnrollment()
  {
    $modelEnrollment = model(EnrollmentModel::class);
    $modelEvent = model(EventModel::class);
  
    $tipo = $this->request->getPost('inscricao');
    $idEvent = (int) $this->request->getPost('id');
    $idUser = (int) $this->request->getPost('idUser');
    $arquivo = $_FILES['arquivo'];

    if (!empty($arquivo['name'])) {
        $diretorio_destino = './assets/';

        if (!is_dir($diretorio_destino)) {
            mkdir($diretorio_destino, 0777, true);
        }

        $nome_arquivo = $arquivo['name'];
        $caminho_arquivo = $diretorio_destino . $nome_arquivo;

        if (move_uploaded_file($arquivo['tmp_name'], $caminho_arquivo)) {
            echo 'Arquivo salvo com sucesso.';
        } else {
            echo 'Falha ao salvar o arquivo.';
        }
    } else {
      $nome_arquivo = null;
    }
  
    $enrollmentData = [
      'tipo' => $tipo,
      'evento' => $idEvent,
      'usuario' => $idUser,
      'artigo' => $nome_arquivo
    ];
  
    $modelEnrollment->insert($enrollmentData);
  
    return redirect()->to('/dashboard');
  }

  public function subscribeView()
  {
    $idEvent = $this->request->getVar('id'); 
    $idUser = $this->request->getVar('idUser');
    
    $modelEvent = model(EventModel::class);
    $modeUser = model(UserModel::class);

    $data = [
      'evento' => $modelEvent->buscaEventosPorId($idEvent),
      'usuario' => $modeUser->buscaUsuariosPorId($idUser)
    ];

    return view('header') .
    view('subscribe', $data) .
    view('footer');
  }
}
