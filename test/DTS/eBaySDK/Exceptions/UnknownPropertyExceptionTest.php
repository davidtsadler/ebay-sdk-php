<?php

use DTS\eBaySDK\Exceptions\UnknownPropertyException;

class UnknownPropertyExceptionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new UnknownPropertyException('Bar', 'foo');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Exceptions\UnknownPropertyException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Unknown property: Bar::foo', $this->obj->getMessage());
    }
}
