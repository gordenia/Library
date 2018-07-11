<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ArticleTable extends Doctrine_Table
{
    function getArticleByBook($bookId)
    {
        $q = $this->createQuery('a')
            ->where('a.book_id' . $bookId)
            ->limit(1);

        // Parameters construction
        $params = [];

        // Executing query
        return $q->fetchOne($params);
    }
}