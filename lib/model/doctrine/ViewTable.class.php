<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ViewTable extends Doctrine_Table
{
  public function getView($login)
  {
    $q = $this->createQuery('v')
      ->leftJoin('v.User u')
      ->where('v.id_user = u.id_user')
      ->andWhere('u.login = \'' . $login . '\'');
    return $q->execute();
  }
}