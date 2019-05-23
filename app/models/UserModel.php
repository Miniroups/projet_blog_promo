<?php

namespace app\models;

/**
 *
 */
class UserModel extends Model
{
  public function getAllUsers()
  {
    return $this->getData('SELECT * FROM users');
  }

  public function getOneUser($userId)
  {
    return $this->getData('SELECT * FROM users WHERE id = ?',[$userId]);
  }

  public function addUser(array $userData)
  {

  }

  public function updateUser(array $userData)
  {
    // code...
  }
}
