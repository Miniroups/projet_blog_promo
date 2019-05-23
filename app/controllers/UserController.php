<?php

namespace app\controllers;
use app\models\UserModel;
/**
 *
 */
class UserController extends Controller
{
  public function __construct($action, $param = '')
  {
    $this->model = new UserModel();
    parent::__construct($action, $param);
  }
  // URL d'acces à utiliser : /user/profil/id
  // param : id de l'utilisateur
  protected function index() {
    $this->template = 'user/profil';
    $this->data = $this->model->getOneUser($this->param);
  }
  // URL d'acces à utiliser : /user/edit
  // param : id de l'utilisateur
  public function edit()
  {
    $this->template = 'user/inscription';
    $this->data = $this->model->getOneUser($this->param);
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
}
