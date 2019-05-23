<?php

namespace app\controllers;
use app\models\BlogModel;

/**
 *
 */
class BlogController extends Controller
{
  public function __construct($action, $param = '')
  {
    $this->model = new BlogModel();
    parent::__construct($action, $param = '');
  }
  // URL d'acces à utiliser : /Blog
  // liste les articles
  protected function index() {
    $this->template = 'blog/liste-articles';
    $this->data = $this->model->getAllArticles();
  }
  // URL d'acces à utiliser : /Blog/edit/id
  // param : id de l'article à édit
  protected function edit($param)
  {
    $this->template = 'blog/creation-article';
    if ($param) {
      $this->data = $this->model->getOneArticle($param);
    }
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
  // URL d'acces à utiliser : /Blog/new
  // pas de paramètre
  protected function new()
  {
      $this->edit(false);
  }
  // URL d'acces à utiliser : /Blog/article
  // param : id de l'article à afficher
  protected function article($param)
  {
    $this->comments();
    $this->template = 'blog/article';
    $this->data['article'] = $this->model->getOneArticle($param);
  }
  protected function comments()
  {
    $this->data['comments'] = $this->model->getComments($param);
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
}
