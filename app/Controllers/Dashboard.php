<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\EnrollmentModel;

class Dashboard extends BaseController
{
  public function dashboard()
  {
    $modelEvent = model(EventModel::class);
    $modelEnrollment = model(EnrollmentModel::class);

    $session = session();

    $data = [
      'eventos' => $modelEvent->buscaTodosEventos(),
      'inscricoes' => $modelEnrollment->buscaInscriçõesPorId($session->id),
      'user' => $session
  ];

      return view('header') .
          view('dashboard', $data) .
          view('footer');
  }
}
