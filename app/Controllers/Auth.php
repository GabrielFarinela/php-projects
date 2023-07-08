<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('senha');

        $model = model(UserModel::class);

        $user = $model->where([
            'email' => $email,
            'senha' => $password
        ])->first();

        if (isset($user)) {
            
                $session = session();

                $session_data = [
                    'id'       => $user['id'],
                    'nome'     => $user['nome'],
                    'avatar'   => $user['avatar'],
                    'email'    => $user['email'],
                    'logged_in'     => TRUE
                ];

                $session->set($session_data);

                return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/');
        }
    }

    public function register()
    {
        $name = $this->request->getPost('nome');
        $institution = $this->request->getPost('instituicao');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('senha');

        $model = model(UserModel::class);

        $existingUser = $model->where('email', $email)->first();
        if ($existingUser) {
            return redirect()->to('/register');
        }

        $userData = [
            'nome' => $name,
            'email' => $email,
            'senha' => $password,
            'instituicao' => $institution
        ];

        $model->insert($userData);

        return redirect()->to('/');
    }

    public function registerView()
    {
        return view('header') .
            view('register') .
            view('footer');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}
