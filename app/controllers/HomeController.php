<?php

namespace app\controllers;

/**
 *
 */
class HomeController extends Controller
{
  // URL d'acces à utiliser : / ou /home
  // aucun paramètre
  protected function index() {
    $this->template = 'home';
  }
  // URL d'acces à utiliser : /home/login
  // aucun paramètre
  protected function login()
  {
    $this->template = 'user/connexion';
  }
  // URL d'acces à utiliser : /home/register
  // aucun paramètre
  protected function register()
  {
    $this->template = 'user/inscription';
  }
}
