<?php

namespace Acme\Foundation;

use Doctrine\DBAL\DriverManager;
use Acme\Repository\UserRepository;
use Acme\Foundation\Session\Session;
use Acme\Foundation\Database\Database;
use Acme\Repository\UserRepositoryInterface;
use Illuminate\Contracts\Container\Container;
use Acme\Foundation\Session\SessionInterface;
use Acme\Foundation\Database\DatabaseInterface;

/**
 * @author Kabir Baidhya
 */
class Application
{

    /**
     * @var Container
     */
    protected $container;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Run the application
     *
     * TODO This method violates the SRP, refactor it
     *
     * @return Application
     */
    public function run()
    {
        // Register the configuration
        $this->container->bind('config', function () {
            return require CONFIG_FILE;
        });

        // Register DatabaseInterface
        $this->container->bind(DatabaseInterface::class, function ($container) {
            return new Database(
                DriverManager::getConnection($container['config']['database'])
            );
        });

        // Register UserRepositoryInterface
        $this->container->bind(UserRepositoryInterface::class, function ($container) {
            return new UserRepository($container[DatabaseInterface::class]);
        });

        // Register SessionInterface bindings
        $this->container->bind(SessionInterface::class, function ($container) {
            return new Session($container[DatabaseInterface::class]);
        });

        return $this;
    }

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

}
