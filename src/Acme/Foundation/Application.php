<?php

namespace Acme\Foundation;

use Doctrine\DBAL\DriverManager;
use Acme\Foundation\Database\Database;
use Acme\Repository\UserRepository;
use Acme\Repository\UserRepositoryInterface;
use Illuminate\Contracts\Container\Container;
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

        $this->container->bind(UserRepositoryInterface::class, function ($container) {
            return new UserRepository($container[DatabaseInterface::class]);
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
