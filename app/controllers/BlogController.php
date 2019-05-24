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
    $this->data['article'] = $this->model->getAllArticles();
  }
  // URL d'acces à utiliser : /Blog/edit/id
  // param : id de l'article à édit
  protected function edit(bool $new = false)
  {
    $this->template = 'blog/creation-article';
    if (!$new) {
      $this->data = $this->model->getOneArticle($this->param);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['validationArticle'])) {
      array_pop($_POST);
      if ($new) {
        $this->model->addArticle($_POST);
      } else {
        array_push($_POST, ['id'=>$this->param]);
        $this->model->updateArticle($_POST);
      }
    }
  }
  // URL d'acces à utiliser : /Blog/new
  // pas de paramètre
  protected function new()
  {
      $this->edit(true);
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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitCommentaire'])) {
      array_pop($_POST);
      $_POST['article_id'] = $this->param[0];
      var_dump($_POST);
      $this->model->addComment($_POST);
    }
  }
}
