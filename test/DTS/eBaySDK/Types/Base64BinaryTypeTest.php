<?php

use DTS\eBaySDK\Types\Base64BinaryType;

class Base64BinaryTypeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new Base64BinaryType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\Base64BinaryType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertInternalType('string', $this->obj->value);
    }
}
