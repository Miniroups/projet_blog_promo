<?php

namespace app\controllers;

use app\models\BlogModel;
use app\models\UserModel;

/**
 *
 */
class HomeController extends Controller
{
  public function __construct($action, $param = '')
  {
    $this->model = new UserModel();
    parent::__construct($action, $param);
  }
  // URL d'acces à utiliser : / ou /home
  // aucun paramètre
  protected function index() {
    $this->template = 'home';
    $this->data['users'] = $this->model->getAllUsers();
    // attention :
    // le model utiliser à partire d'ici est différent du model au dessus !
    $this->model = new BlogModel();
    $this->data['articles'] = $this->model->getArticles(3);
  }
  // URL d'acces à utiliser : /home/login
  // aucun paramètre
  protected function login()
  {
    $this->template = 'user/connexion';
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
  // URL d'acces à utiliser : /home/register
  // aucun paramètre
  protected function register()
  {
    $this->template = 'user/inscription';
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
}
