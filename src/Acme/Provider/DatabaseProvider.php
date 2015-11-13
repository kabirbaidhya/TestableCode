<?php

namespace Acme\Provider;

use Doctrine\DBAL\DriverManager;
use Acme\Foundation\Database\Database;
use Acme\Foundation\Database\DatabaseInterface;
use Acme\Provider\AbstractProvider as Provider;

/**
 * @author Kabir Baidhya
 */
class DatabaseProvider extends Provider
{

    /**
     * Registers a Service into the Container
     *
     * @return void
     */
    public function register()
    {
        // Register DatabaseInterface
        $this->container->bind(DatabaseInterface::class, function ($container) {
            return new Database(
                DriverManager::getConnection($container['config']['database'])
            );
        });

    }
}
