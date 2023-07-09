<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\EnrollmentModel;

class Subscribe extends BaseController
{
  public function registerEnrollment()
  {
    $tipo = $this->request->getPost('inscricao');
    $idEvent = intval($this->request->getVar('id')); 
    $idUser = intval($this->request->getVar('idUser'));

    $modelEnrollment = model(EnrollmentModel::class);

    $enrollmentData = [
      'usuario' => $idUser,
      'tipo' => $tipo,
      'evento' => $idEvent
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
