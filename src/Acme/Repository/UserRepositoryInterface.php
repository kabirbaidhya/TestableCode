<?php

namespace Acme\Repository;

/**
 * @author Kabir Baidhya
 */
interface UserRepositoryInterface
{

    /**
     * Gets a user by id
     *
     * @param int|null $userId
     */
    public function getUserById($userId);
}
