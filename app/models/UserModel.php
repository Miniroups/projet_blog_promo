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

  }

  public function updateUser(array $userData)
  {
    // code...
  }
}
