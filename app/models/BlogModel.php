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

  public function getOneArticle($articleId) : array
  {
    $articleId = intval($articleId);
    $stm = $this->getData('SELECT * FROM articles WHERE id = ?',[$articleId]);
    return $stm->fetch();
  }
  public function getArticles(int $limit)
  {
    $stm = $this->getData('SELECT * FROM articles ORDER BY id DESC LIMIT ?',[$limit]);
    return $stm->fetchAll();
  }
  public function getComments($articleId) : array
  {
    $articleId = intval($articleId);
    $stm = $this->getData('SELECT * FROM comments WHERE articles_id = ?',[$articleId]);
    return $stm->fetchAll();
  }

  public function addArticle(array $articleData, int $author)
  {
    array_push($articleData, ['users_id'=>$author]);
    $this->getData('INSERT INTO articles (id, users_id, title, content, url_img, alt_img, created_at, updated_at) VALUES (NULL, :users_id, :titreArticle, :texteArticle, :imageArticle, :altImgArticle, CURRENT_TIMESTAMP, NULL)',$articleData);
  }

  public function updateArticle(array $articleData)
  {
    $this->getData('UPDATE articles SET title = :titreArticle, content = :texteArticle, url_img = :imageArticle, alt_img = :altImgArticle, updated_at = CURRENT_TIMESTAMP WHERE id = :id',$articleData);
  }

  public function addComment(array $commentData)
  {
    // code...
  }

}
