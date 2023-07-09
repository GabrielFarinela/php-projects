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
    $pdf = $this->request->getFile('pdf');
  
    $enrollmentData = [
      'tipo' => $tipo,
      'evento' => $idEvent,
      'usuario' => $idUser,
      'artigo' => $pdfName,
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
