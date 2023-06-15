<?php

namespace App\Exceptions\login;

use Exception;


class IncorrectPasswordException extends Exception
{
  public function __construct($message = "Contraseña incorrecta", $code = 409, Exception $previous = null)
  {
    parent::__construct($message, $code, $previous);
  }
}
