<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserTable extends Doctrine_Table
{
  public function findUserByLogin($login)
  {
    $q = $this->createQuery('u')
      ->where('u.login = \'' . $login . '\'');
    return $q->fetchOne();
  }

  public function findUserByLoginAndPass($login, $pass)
  {
    $q = $this->createQuery('u')
      ->where('u.login = \'' . $login . '\'')
      ->andWhere('u.password = \'' . $pass . '\'');
    return $q->fetchOne();
  }

  public function getAllUser($login)
  {
    $q = $this->createQuery('u')
      ->where('u.login != \'' . $login . '\'');
    return $q->execute();
  }
}