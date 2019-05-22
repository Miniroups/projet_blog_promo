<?php

namespace app\controllers;

/**
 *
 */
class BlogController extends Controller
{
  // URL d'acces à utiliser : /Blog
  // liste les articles
  protected function index() {
    $this->template = 'blog/liste-articles';
  }
  // URL d'acces à utiliser : /Blog/edit
  // param : id de l'article à édit
  protected function edit($param)
  {
    $this->template = 'blog/creation-article';
  }
  // URL d'acces à utiliser : /Blog/new
  // pas de paramètre
  protected function new($value='')
  {
      $this->edit('');
  }
  // URL d'acces à utiliser : /Blog/article
  // param : id de l'article à afficher
  protected function article($param)
  {
    $this->comments();
    $this->template = 'blog/article';
  }
  protected function comments()
  {
    // code...
  }
}
