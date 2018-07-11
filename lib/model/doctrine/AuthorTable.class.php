<?php

class AuthorTable extends Doctrine_Table
{
    public function getAuthor()
    {
        $q = $this->createQuery('a');
        return $q->execute();
    }
}