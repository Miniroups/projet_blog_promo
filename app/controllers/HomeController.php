<?php

namespace app\controllers;

use app\models\BlogModel;
use app\models\UserModel;
use app\vendor\Encrypt;
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
    if (isset($_SESSION['connexion']) && $_SESSION['connexion'] == true) {
      header('Location: '.PUBLIC_PATH.'user/profil/'.$_SESSION['userInfos']['id']);
    } else {
      $this->template = 'user/connexion';
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['validationConnexion'])) {
        $this->testLogin($_POST);
      }
    }
  }
  // URL d'acces à utiliser : /home/register
  // aucun paramètre
  protected function register()
  {
    $this->template = 'user/inscription';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitInscription'])) {
      if ($_POST['password'] === $_POST['confirmPassword']) {
        $_POST['password'] = Encrypt::md5($_POST['password']);
        unset($_POST['confirmPassword']);
        unset($_POST['submitInscription']);
        var_dump($_POST);
        $this->model->addUser($_POST);
      } else {
        $this->data['error'] = 'les mots de passes ne correspondent pas.';
      }
    }
  }

  // URL d'acces à utiliser : /home/mentions
  // aucun paramètre
  protected function mentions()
  {
    $this->template = 'mentions';
  }
  private function testLogin($data){
    $users = $this->model->getAllUsers();
    for ($i=0; $i < count($users) ; $i++) {
      if (($users[$i]['login'] === $data['loginConnexion']) ||($users[$i]['email'] === $data['loginConnexion'])) {
        if ($users[$i]['password'] === Encrypt::md5($data['passwordConnexion'])) {
          $_SESSION['connexion'] = true;
          $_SESSION['userInfos'] = ['id' => $users[$i]['id']];
          header('Location: '.PUBLIC_PATH.'/home',true);
        } else {
          $this->data['errors'] = 'Identifiants invalide';
        }
      } else {
        $this->data['errors'] = 'Identifiants invalide';
      }
    }

  }
}
