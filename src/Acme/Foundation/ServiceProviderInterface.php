<?php

namespace Acme\Foundation;

/**
 * @author Kabir Baidhya
 */
interface ServiceProviderInterface
{

    /**
     * Registers a Service into the Container
     *
     * @return void
     */
    public function register();

}
