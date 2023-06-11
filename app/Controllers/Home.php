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
    $response = $userModel->login($data);

    if ($response['type'] == 1) {
      return redirect()->to('forum')->with("data", $response);
    } else {
      return $response['res'];
    }
  }
  public function signup()
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $email = $this->request->getPost('email');

    $data = [
      "username" => $username,
      "email" => $email,
      "password" => $password
    ];

    $userModel = new UserModel();
    $response = $userModel->signup($data);

    if ($response['type'] == 2) {
      return redirect()->to('forum')->with("data", $response);
    } else {
      return "El correo o el nombre de usuario ya estan siendo utilizados";
    }
  }
}
