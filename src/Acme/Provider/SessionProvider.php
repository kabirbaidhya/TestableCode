<?php

namespace Acme\Provider;

use Acme\Foundation\Session\Session;
use Acme\Foundation\Session\SessionInterface;
use Acme\Foundation\Database\DatabaseInterface;
use Acme\Provider\AbstractProvider as Provider;

/**
 * @author Kabir Baidhya
 */
class SessionProvider extends Provider
{

    /**
     * Registers a Service into the Container
     *
     * @return void
     */
    public function register()
    {
        // Register SessionInterface bindings
        $this->container->bind(SessionInterface::class, function ($container) {
            return new Session($container[DatabaseInterface::class]);
        });
    }
}
