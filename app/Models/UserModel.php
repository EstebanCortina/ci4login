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
    print_r($newUser);
  }

  private function checkUser(User $user): void
  {
  }

  private function validateUser(User $user): void
  {
  }
}
