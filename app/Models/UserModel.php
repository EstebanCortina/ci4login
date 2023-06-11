<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\User;


class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'userId';
  protected $allowedFields = ['username', 'password', 'email'];

  public function login(array $data): array
  {
    $response = $this->validateUser($data['username'], $data['password']);
    return $response;
  }

  public function signup(array $data): array
  {
    $response = $this->validateUser($data['username'], $data['password']);
    if ($response['type'] == 2) {
      if ($this->createUser($data)) {
        $response = [
          "type" => 2,
          "res" => $data['username']
        ];
        return $response;
      } else {
        $response = [
          "type" => 1,
          "res" => "Error al insertar usuario"
        ];
        return $response;
      }
    } else {
      return $response;
    }
  }



  private function createUser(array $data)
  {
    $newUser = new User($data['username'], $data['password'], $data['email']);

    if ($this->insertUser($newUser)) {
      return redirect()->to('forum')->with("data", $data['username']);
    } else {
      return "error";
    }
  }
  private function insertUser(User $user): bool
  {
    $query = "INSERT INTO users (userName, email, password) VALUES ('$user->name','$user->email','$user->password')";
    if ($this->query($query)) {
      return true;
    } else {
      return false;
    }
  }

  private function validateUser(string $username, string $password): array
  {

    $query_username = "SELECT username from users WHERE username='$username'";
    $resUsername = $this->query($query_username)->getResult();


    if ($resUsername) {
      $query = "SELECT username from users WHERE username='$username' AND password='$password'";
      $result = $this->query($query)->getResult();


      if ($result) {
        $response = [
          "type" => 1,
          "res" => $result[0]->username
        ];
        return $response;
      } else {
        $response = [
          "type" => 2,
          "res" => "Contraseña incorrecta"
        ];
        return $response;
      }
    } else {
      $response = [
        "type" => 2,
        "res" => "No se encontro una cuenta con este nombre de usuario"
      ];
      return $response;
    }
  }
}
