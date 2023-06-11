<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
  public function index()
  {
    return view('index');
  }

  public function login()
  {
    //Aqui va la validación del usuario
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $data = [
      "username" => $username,
      "password" => $password
    ];
    $userModel = new UserModel();
    $userModel->validateUser($data);
    //return redirect()->to('forum')->with("data", $data);
  }
  public function signup()
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $email = $this->request->getPost('email');
  }
}
