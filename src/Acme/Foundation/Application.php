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
     * @return Application
     */
    public function run()
    {
        $this->registerConfig();

        $this->registerServices();

        return $this;
    }

    protected function registerConfig()
    {
        $config = require CONFIG_FILE;
        // Register the configuration
        $this->container->instance('config', $config);
    }

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    protected function registerServices()
    {
        $providers = $this->container['config']['providers'];

        foreach ($providers as $provider) {
            /** @var ServiceProviderInterface $serviceProvider */
            $serviceProvider = new $provider($this->container);

            $serviceProvider->register();
        }
    }

}
