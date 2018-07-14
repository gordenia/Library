<?php

class AuthorTable extends Doctrine_Table
{
    public function getAllAuthors()
    {
        $q = $this->createQuery('a');
        return $q->execute();
    }
}