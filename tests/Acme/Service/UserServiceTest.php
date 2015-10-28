<?php

namespace Acme\Test\Service;

use Mockery;
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
        $session = Mockery::mock(SessionInterface::class);
        $repository = Mockery::mock(UserRepositoryInterface::class);

        $session->shouldReceive('has')->once()->with('user_id')->andReturn(true);
        $session->shouldReceive('get')->once()->with('user_id')->andReturn(5);

        $user = [
            'id' => 5,
            'name' => 'Foo Bar'
        ];

        $repository->shouldReceive('getUserById')->once()->with(5)->andReturn($user);

        $userService = new UserService($session, $repository);

        $result = $userService->getCurrentUser();

        $this->assertEquals($user, $result);
    }
}
