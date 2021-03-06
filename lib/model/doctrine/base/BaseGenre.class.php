<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseGenre extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('genre');
    $this->hasColumn('id_genre', 'integer', 4, array('type' => 'integer', 'unsigned' => '1', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
    $this->hasColumn('name', 'string', 45, array('type' => 'string', 'notnull' => true, 'length' => '45'));
  }

  public function setUp()
  {
    $this->hasMany('Book', array('local' => 'id_genre',
                                 'foreign' => 'id_genre'));
  }
}