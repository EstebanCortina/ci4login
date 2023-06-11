<?php

namespace App\Models;

class User
{
  public $name;
  public $password;
  public $email;

  public function __construct($name, $password, $email)
  {
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
  }
}
