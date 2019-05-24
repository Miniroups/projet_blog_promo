<?php

namespace app\models;

/**
 *
 */
class UserModel extends Model
{
  public function getAllUsers()
  {
    $stm = $this->getData('SELECT * FROM users');
    return $stm->fetchAll();
  }

  public function getOneUser($userId)
  {
    $userId = intval($userId);
    $stm = $this->getData('SELECT * FROM users WHERE id = ?',[$userId]);
    return $stm->fetch();
  }

  public function addUser(array $userData)
  {
    $this->getData('INSERT INTO users (id, firstname, lastname, email, login, password, url_avatar, file, about) VALUES (NULL, :firstname, :name, :email, :identifiant, :password, :imageProfil, :cvUpload, :description)',$userData);
  }

  public function updateUser(array $userData)
  {
    array_push($userData, ['id'=> $_SESSION['userInfos']['id']]);
    $this->getData('UPDATE users SET firstname = :firstname, lastname = :name,email = :email,login = :identifiant, password = :password, url_avatar = :imageProfil, file = :cvUpload, about = :description WHERE id = :id',$userData);
  }
}
