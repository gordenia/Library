<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Genre extends BaseGenre
{
  public function getGenreId()
  {
    return $this->_get('id_genre');
  }

  public function getGenreName()
  {
    return $this->_get('name');
  }
}