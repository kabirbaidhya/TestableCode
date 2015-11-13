<?php

namespace Acme\Test;

use PHPUnit_Framework_TestCase;
use Acme\Foundation\Application;

/**
 * @author Kabir Baidhya
 */
class TestCase extends PHPUnit_Framework_TestCase
{

    /**
     * @var Application
     */
    protected static $application;

    /**
     * @param Application $application
     */
    public static function setApplication(Application $application)
    {
        self::$application = $application;
    }

    /**
     * @return \Illuminate\Contracts\Container\Container
     */
    public function getContainer()
    {
        return self::$application->getContainer();
    }

}
