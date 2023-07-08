<?php

namespace App\Controllers;

use App\Models\EnrollmentModel;

class Subscribe extends BaseController
{
  public function registerEnrollment()
  {
  }

  public function subscribeView()
  {
    return view('header') .
    view('subscribe') .
    view('footer');
  }
}
