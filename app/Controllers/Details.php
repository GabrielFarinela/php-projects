<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\EnrollmentModel;

class Details extends BaseController
{
  public function showEvent()
  {
    $modelEvent = model(EventModel::class);
    $modelEnrollment = model(EnrollmentModel::class);

    $idEvent = $this->request->getVar('id'); 
    $idUser = $this->request->getVar('idUser'); 

    $data = [
      'evento' => $modelEvent->buscaEventosPorId($idEvent),
      'inscricoes' => $modelEnrollment->buscaInscriçõesPorId($idUser)
    ];

    return view('header') .
        view('event', $data) . 
        view('footer');
  }
}
