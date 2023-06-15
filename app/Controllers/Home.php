<?php

namespace App\Controllers;

use App\Models\UserModel;
use Exception;

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


    try {
      $response = $userModel->login($data);
      return redirect()->to('forum')->with("data", $response);
    } catch (Exception $newException) {
      return redirect()->to('/')->with("data", $newException->getMessage());
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

    try {
      $response = $userModel->signup($data);
      return redirect()->to('forum')->with("data", $response->name);
    } catch (Exception $newException) {
      return redirect()->to('/')->with("data", $newException->getMessage());
    }
  }
}
