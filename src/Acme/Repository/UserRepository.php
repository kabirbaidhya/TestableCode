<?php

namespace Acme\Repository;

use Acme\Foundation\DatabaseInterface;

/**
 * @author Kabir Baidhya
 */
class UserRepository implements UserRepositoryInterface
{

    /**
     * @var DatabaseInterface
     */
    protected $db;

    /**
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    /**
     * Gets a user by id
     *
     * @param int $userId
     * @return mixed
     */
    public function getUserById($userId)
    {
        $query = $this->db->createQueryBuilder();

        return $query
            ->select('*')
            ->from('user')
            ->where($query->expr()->eq('id', $userId))
            ->execute()->fetch();
    }
}
