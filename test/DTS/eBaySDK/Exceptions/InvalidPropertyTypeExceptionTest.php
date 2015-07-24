<?php

use DTS\eBaySDK\Exceptions\InvalidPropertyTypeException;

class InvalidPropertyTypeExceptionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new InvalidPropertyTypeException('Bar', 'foo', 'string', 'integer');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Invalid property type: Bar::foo expected <string>, got <integer>', $this->obj->getMessage());
    }
}
