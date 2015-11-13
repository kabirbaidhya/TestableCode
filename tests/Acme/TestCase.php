<?php

namespace Acme\Test;

use PHPUnit_Framework_TestCase;
use Illuminate\Contracts\Container\Container;

/**
 * @author Kabir Baidhya
 */
class TestCase extends PHPUnit_Framework_TestCase
{

    /**
     * @var Container
     */
    protected static $container;

    /**
     * @return Container
     */
    public static function getContainer()
    {
        return self::$container;
    }

    /**
     * @param Container $container
     */
    public static function setContainer(Container $container)
    {
        self::$container = $container;
    }

}
