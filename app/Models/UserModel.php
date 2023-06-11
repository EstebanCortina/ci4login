<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'userId';
  protected $allowedFields = ['username'];

  public function createUser($data)
  {
    $this->validateUser($data["username"]);
    $this->insert($data);

    return $this->insertID();
  }

  private function checkUser(string $username, string $email): void
  {
  }

  private function validateUser(string $username): void
  {
  }
}
