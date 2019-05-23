<?php

namespace app\controllers;
use app\models\BlogModel;

/**
 *
 */
class BlogController extends Controller
{
  public function __construct($action, $param = [])
  {
    $this->model = new BlogModel();
    parent::__construct($action, $param);
  }
  // URL d'acces à utiliser : /Blog
  // liste les articles
  protected function index() {
    $this->template = 'blog/liste-articles';
    $this->data = $this->model->getAllArticles();
  }
  // URL d'acces à utiliser : /Blog/edit/id
  // param : id de l'article à édit
  protected function edit()
  {
    $this->template = 'blog/creation-article';
    if ($this->param) {
      $this->data = $this->model->getOneArticle($this->param);
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
  // URL d'acces à utiliser : /Blog/article/id
  // param : id de l'article à afficher
  protected function article()
  {
    $this->template = 'blog/article';
    $this->comments();
    $this->data['article'] = $this->model->getOneArticle($this->param);
  }
  protected function comments()
  {
    $this->data['comments'] = $this->model->getComments($this->param);
    // if (formulaire validé) {
    //   $this->model->($_POST);
    // }
  }
}
