<?php

namespace App\Exceptions\login;

use Exception;


class UserNotFoundException extends Exception
{
  public function __construct($name, $code = 404, Exception $previous = null)
  {
    $message = $this->message($name);
    parent::__construct($message, $code, $previous);
  }

  private function message(string $name): string
  {
    return "No se encontro una cuenta para el usuario: " . $name;
  }
}
