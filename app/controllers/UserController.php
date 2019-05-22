<?php

namespace app\controllers;

/**
 *
 */
class UserController extends Controller
{
  // URL d'acces à utiliser : /user
  // param : id de l'utilisateur
  protected function index() {
    $this->template = 'user/profil';
  }
  // URL d'acces à utiliser : /user/edit
  // param : id de l'utilisateur
  public function edit($param)
  {
    $this->template = 'user/inscription';
  }
}
