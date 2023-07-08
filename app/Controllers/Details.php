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

    $id = $this->request->getVar('id'); 

    $data = [
      'evento' => $modelEvent->buscaEventosPorId($id),
      'inscricoes' => $modelEnrollment->buscaInscriçõesPorId($id)
    ];

    return view('header') .
        view('event', $data) . 
        view('footer');
  }
}
