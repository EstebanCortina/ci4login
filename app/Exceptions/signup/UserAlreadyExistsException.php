<?php

namespace App\Exceptions\signup;

use Exception;


class UserAlreadyExistsException extends Exception
{
  public function __construct($message = "El usuario ya está registrado", $code = 409, Exception $previous = null)
  {
    parent::__construct($message, $code, $previous);
  }
}
