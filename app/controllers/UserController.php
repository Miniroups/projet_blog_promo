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
    parent::__construct($action, $param = '');
  }
  // URL d'acces à utiliser : /user/id
  // param : id de l'utilisateur
  protected function index($param) {
    $this->template = 'user/profil';
    $this->data = $this->model->getOneUser($param);
  }
  // URL d'acces à utiliser : /user/edit
  // param : id de l'utilisateur
  public function edit($param)
  {
    $this->template = 'user/inscription';
    $this->data = $this->model->getOneUser($param);
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
}
