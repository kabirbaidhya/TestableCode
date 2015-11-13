<?php

namespace Acme\Test\Foundation;

use Acme\Foundation\Database;
use Acme\Foundation\Session;
use Acme\Test\TestCase;
use Doctrine\DBAL\DriverManager;

/**
 * @author Kabir Baidhya
 */
class SessionTest extends TestCase
{

    /**
     * @var Session
     */
    protected $session;

    public function setUp()
    {
        // TODO Refactor to make it DRY
        $config = require 'config/config.php';
        $this->session = new Session(
            new Database(
                DriverManager::getConnection($config['database'])
            )
        );
    }

    public function testSessionHasUserIdKeyWorks()
    {
        $exists = $this->session->has('user_id');

        $this->assertTrue($exists);
    }

    public function testSessionHasUserIdKeyReturnsFalseIfDoesntExist()
    {
        $exists = $this->session->has('blog_id');

        $this->assertFalse($exists);
    }

    public function testSessionGetReturnsValueIfExists()
    {
        $result = $this->session->get('user_id');
        $expected = 1;

        $this->assertEquals($expected, $result);
    }


}
