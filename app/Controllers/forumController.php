<?php

namespace App\Controllers;

class forumController extends BaseController
{
  public function index()
  {
    return view('forum/index');
  }
}
