<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Author extends BaseAuthor
{
  public function getAuthorId()
  {
    return $this->_get('id_author');
  }

  public function getAuthorName()
  {
    return $this->_get('name');
  }
}