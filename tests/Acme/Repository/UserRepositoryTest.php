<?php

namespace Acme\Test\Repository;

use Acme\Test\TestCase;
use Acme\Repository\UserRepository;
use Acme\Repository\UserRepositoryInterface;

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
        $this->userRepository = $this->getContainer()[UserRepositoryInterface::class];
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
