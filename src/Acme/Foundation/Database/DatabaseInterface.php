<?php

namespace Acme\Foundation\Database;

use Doctrine\DBAL\Query\QueryBuilder;


/**
 * @author Kabir Baidhya
 */
interface DatabaseInterface
{

    /**
     * Creates and returns a new instance of DBAL QueryBuilder
     *
     * @return QueryBuilder
     */
    public function createQueryBuilder();
}
