<?php

use DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException;

class UnknownConfigurationOptionExceptionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new UnknownConfigurationOptionException('Bar', 'foo');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Unknown configuration option: Bar::foo', $this->obj->getMessage());
    }
}
