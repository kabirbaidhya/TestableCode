<?php

namespace Acme\Provider;

use Acme\Foundation\ServiceProviderInterface;
use Illuminate\Contracts\Container\Container;

/**
 * @author Kabir Baidhya
 */
abstract class AbstractProvider implements ServiceProviderInterface
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

}
