<?php

use DTS\eBaySDK\Types\IntegerType;

class IntegerTypeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new IntegerType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\IntegerType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertInternalType('integer', $this->obj->value);
    }
}
