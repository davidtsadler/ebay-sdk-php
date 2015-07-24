<?php

use DTS\eBaySDK\Types\StringType;

class StringTypeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new StringType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
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
