<?php

namespace Acme\Test\Repository;

use Acme\Test\TestCase;
use Doctrine\DBAL\DriverManager;
use Acme\Repository\UserRepository;
use Acme\Foundation\Database\Database;

/**
 * @author Kabir Baidhya
 */
class UserRepositoryTest extends TestCase
{

    /**
     * @var UserRepository
     */
    protected $userRepository;

    public function setUp()
    {
        $config = require 'config/config.php';
        $this->userRepository = new UserRepository(
            new Database(
                DriverManager::getConnection($config['database'])
            )
        );
    }

    public function testGetUserByIdReturnsUserIfExists()
    {
        $user = [
            'id' => 5,
            'name' => 'Foo Bar'
        ];

        $result = $this->userRepository->getUserById(5);

        $this->assertEquals($user, $result);
    }
}
