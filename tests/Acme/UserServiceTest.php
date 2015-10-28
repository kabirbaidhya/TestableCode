<?php

namespace Acme\Test;

use Acme\UserRepositoryInterface;
use Acme\UserService;
use Acme\SessionInterface;

/**
 * @author Kabir Baidhya
 */
class UserServiceTest extends TestCase
{

    public function testUserServiceReturnsCurrentUser()
    {
        $session = $this->getMock(SessionInterface::class, ['get']);
        $repository = $this->getMock(UserRepositoryInterface::class, ['getUserById']);

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
