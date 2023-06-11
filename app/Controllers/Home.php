<?php

namespace App\Controllers;

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

    return redirect()->to('forum')->with("data", $data);
  }
}
