<?php

namespace Acme\Test\Service;

use Acme\Test\TestCase;
use Acme\Service\UserService;
use Acme\Foundation\SessionInterface;
use Acme\Repository\UserRepositoryInterface;

/**
 * @author Kabir Baidhya
 */
class UserServiceTest extends TestCase
{

    public function testUserServiceReturnsCurrentUser()
    {
        $session = $this->getMockForAbstractClass(SessionInterface::class);
        $repository = $this->getMockForAbstractClass(UserRepositoryInterface::class);

        $session->expects($this->once())->method('get')->with('user_id')->willReturn(5);

        $user = [
            'id' => 5,
            'name' => 'Foo Bar'
        ];

        $repository->expects($this->once())->method('getUserById')->with(5)->willReturn($user);

        $userService = new UserService($session, $repository);

        $result = $userService->getCurrentUser();

        $this->assertEquals($user, $result);
    }
}
