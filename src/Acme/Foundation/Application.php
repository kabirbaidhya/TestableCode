<?php

namespace Acme\Foundation;

use Illuminate\Contracts\Container\Container;

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
     */
    public function run()
    {
        // Bootstrap the container with Services
    }

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

}
