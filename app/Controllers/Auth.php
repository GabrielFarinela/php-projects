<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = model(UserModel::class);

        $user = $model->where([
            'user_email' => $email,
            'user_password' => $password
        ])->first();

        if (isset($user)) {
            
                $session = session();

                $session_data = [
                    'user_id'       => $user['user_id'],
                    'user_name'     => $user['user_name'],
                    'user_email'    => $user['user_email'],
                    'logged_in'     => TRUE
                ];

                $session->set($session_data);

                return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/');
        }
    }

    public function dashboard()
    {
        return view('header') .
            view('dashboard') .
            view('footer');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}
