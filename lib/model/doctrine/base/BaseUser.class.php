<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseUser extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('user');
    $this->hasColumn('id_user', 'integer', 4, array('type' => 'integer', 'unsigned' => '1', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
    $this->hasColumn('name', 'string', 45, array('type' => 'string', 'notnull' => true, 'length' => '45'));
    $this->hasColumn('login', 'string', 45, array('type' => 'string', 'notnull' => true, 'length' => '45'));
    $this->hasColumn('password', 'string', 20, array('type' => 'string', 'notnull' => true, 'length' => '20'));
    $this->hasColumn('id_role', 'integer', 4, array('type' => 'integer', 'unsigned' => '1', 'length' => '4'));
    $this->hasColumn('avatar', 'string', 100, array('type' => 'string', 'length' => '100'));
  }

  public function setUp()
  {
    $this->hasOne('Role', array('local' => 'id_role',
                                'foreign' => 'id_role'));

    $this->hasMany('Comment', array('local' => 'id_user',
                                    'foreign' => 'id_user'));

    $this->hasMany('View', array('local' => 'id_user',
                                 'foreign' => 'id_user'));
  }
}