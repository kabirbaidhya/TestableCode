<?php

namespace Acme\Test;

use Acme\UserService;

/**
 * @author Kabir Baidhya
 */
class UserServiceTest extends TestCase
{

    public function testUserServiceReturnsCurrentUser()
    {
        $userService = new UserService();

        $user = $userService->getCurrentUser();
    }
}
