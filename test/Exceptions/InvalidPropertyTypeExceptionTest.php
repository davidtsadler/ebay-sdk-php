<?php
namespace DTS\eBaySDK\Exceptions\Test;

use DTS\eBaySDK\Exceptions\InvalidPropertyTypeException;

class InvalidPropertyTypeExceptionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new InvalidPropertyTypeException('foo', 'string', 'integer'); // TODO Unused function result.
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
        $this->assertEquals('Invalid property type provided for foo. Expected string but got integer', $this->obj->getMessage());
    }
}
