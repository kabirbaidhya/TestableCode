<?php

namespace Acme\Test\Foundation\Session;

use Acme\Test\TestCase;
use Acme\Foundation\Session\Session;
use Acme\Foundation\Session\SessionInterface;

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
        $this->session = $this->getContainer()[SessionInterface::class];
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
