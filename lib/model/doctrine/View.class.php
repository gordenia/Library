<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class View extends BaseView
{
  public function getBookId()
  {
    return $this->_get('id_book');
  }

  public function getBookName()
  {
    return $this->Book->_get('name');
  }

  public function getDateInsert()
  {
    return $this->_get('date_insert');
  }
}