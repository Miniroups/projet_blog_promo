<?php

namespace app\models;

/**
 *
 */
class BlogModel extends Model
{
  public function getAllArticles() : array
  {
    $stm = $this->getData('SELECT * FROM articles');
    return $stm->fetchAll();
  }

  public function getOneArticle(int $articleId) : array
  {
    $stm = $this->getData('SELECT * FROM articles WHERE id = ?',[$articleId]);
    return $stm->fetch();
  }
  public function getArticles(int $limit)
  {
    $stm = $this->getData('SELECT * FROM articles ORDER BY id DESC LIMIT ?',[$limit]);
    return $stm->fetchAll();
  }
  public function getComments(int $articleId) : array
  {
    $stm = $this->getData('SELECT * FROM comments WHERE articles_id = ?',[$articleId]);
    return $stm->fetchAll();
  }

  public function addArticle(array $articleData)
  {
    // code...
  }

  public function updateArticle(array $articleData)
  {
    // code...
  }

  public function addComment(array $commentData)
  {
    // code...
  }

}
