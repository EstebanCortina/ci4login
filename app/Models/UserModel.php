<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\User;


class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'userId';
  protected $allowedFields = ['username', 'password', 'email'];

  public function createUser($data)
  {
    /*
    $this->validateUser($data["username"]);
    $this->checkUser($data["username"], $data["email"]);

    $this->insert($data);

    IDEA: Usar solo un validador, el que revisa si la contraseña es correcta, que devuelva true y dependiendo del contexto, validamos si queremos que sea true o false el resultado esperado.
*/
    $newUser = new User($data["username"], $data["password"], $data["email"]);
    if ($this->insertUser($newUser)) {
      return redirect()->to('forum')->with("data", $data);
    } else {
      return "error";
    }
  }

  private function checkUser(User $user): void
  {
  }

  private function insertUser(User $user): bool
  {
    $username = $user->name;
    $email = $user->email;
    $password = $user->password;
    $query = "INSERT INTO users (userName, email, password) VALUES ('$username','$email','$password')";
    $this->query($query);
    $res = $this->insertID();

    if ($res) {
      return true;
    } else {
      return false;
    }
  }

  public function validateUser($data): bool
  {
    $query = $this->db->query('SELECT * FROM users WHERE "email="' . $data["email"]);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
}
