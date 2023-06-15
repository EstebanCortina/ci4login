<?php

namespace App\Models;


use CodeIgniter\Model;
use App\Models\User;
use App\Exceptions\login\IncorrectPasswordException;
use App\Exceptions\login\UserNotFoundException;
use App\Exceptions\signup\UserAlreadyExistsException;


use Exception;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'userId';
  protected $allowedFields = ['username', 'password', 'email'];

  public function login(array $data): string | Exception
  {

    try {
      $response = $this->validateUser($data['username'], $data['password']);
      return $response;
    } catch (Exception $newException) {
      throw $newException;
    }
  }

  public function signup(array $data)
  {

    /*
    En esta parte se validaria el nuevo nombre de usuario
    if ($data['data']) {
    }
    */

    try {
      $response = $this->createUser($data);
      return $response;
    } catch (Exception $newException) {
      throw $newException;
    }
  }



  private function createUser(array $data): User | Exception
  {
    $newUser = new User($data['username'], $data['password'], $data['email']);

    try {
      $this->validateUser($data['username'], $data['password']);
      throw new UserAlreadyExistsException();
    } catch (Exception $UserException) {
      if ($UserException instanceof UserNotFoundException) {
        try {
          $this->insertUser($newUser);
          return $newUser;
        } catch (Exception $newException) {
          throw $newException;
        }
      } else {
        throw $UserException;
      }
    }
  }


  private function validateUser(string $username, string $password): string | Exception
  {

    $query_username = "SELECT username from users WHERE username='$username'";
    $resUsername = $this->query($query_username)->getResult();

    if ($resUsername) {
      $query = "SELECT username from users WHERE username='$username' AND password='$password'";
      $result = $this->query($query)->getResult();
      if ($result) {
        return $result[0]->username;
      } else {
        throw new IncorrectPasswordException();
      }
    } else {
      throw new UserNotFoundException($username);
    }
  }



  private function insertUser(User $newUser): bool
  {
    try {
      $query = "INSERT INTO users (userName, email, password) VALUES ('$newUser->name','$newUser->email','$newUser->password')";
      $this->query($query);
      return true;
    } catch (Exception $th) {
      throw $th;
    }
  }
}
