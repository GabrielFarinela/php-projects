<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;

class Subscribe extends BaseController
{
  public function registerEnrollment()
  {
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
