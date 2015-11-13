<?php


namespace Acme\Provider;

use Acme\Repository\UserRepository;
use Acme\Repository\UserRepositoryInterface;
use Acme\Provider\AbstractProvider as Provider;
use Acme\Foundation\Database\DatabaseInterface;

/**
 * @author Kabir Baidhya
 */
class UserServiceProvider extends Provider
{

    /**
     * Registers a Service into the Container
     *
     * @return void
     */
    public function register()
    {
        // Register UserRepositoryInterface
        $this->container->bind(UserRepositoryInterface::class, function ($container) {
            return new UserRepository($container[DatabaseInterface::class]);
        });
    }
}
