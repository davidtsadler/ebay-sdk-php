<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Mocks\ComplexClass;

class StrictPropertyTypesTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        \DTS\eBaySDK\Sdk::$STRICT_PROPERTY_TYPES = false;
        $this->obj = new ComplexClass();
    }

    protected function tearDown()
    {
        \DTS\eBaySDK\Sdk::$STRICT_PROPERTY_TYPES = true;
    }

    public function testSettingPropertyWithAnInvalidTypeAllowed()
    {
        $this->obj->integer = 'foo';
        $this->obj->string = 123;
        $this->obj->double = 'foo';
        $this->obj->booleanTrue = 'foo';
        $this->obj->DateTime = 'foo';
        $this->obj->integers[] = 'foo';
        $this->obj->strings[] = 123;

        $this->assertEquals('foo', $this->obj->integer);
        $this->assertEquals(123, $this->obj->string);
        $this->assertEquals('foo', $this->obj->double);
        $this->assertEquals('foo', $this->obj->booleanTrue);
        $this->assertEquals('foo', $this->obj->DateTime);
        $this->assertEquals('foo', $this->obj->integers[0]);
        $this->assertEquals(123, $this->obj->strings[0]);
    }

    /**
     * @expectedException \DTS\eBaySDK\Exceptions\InvalidPropertyTypeException
     */
    public function testSettingComplexPropertiesThrows()
    {
        $this->obj->SimpleClass = 'foo';
    }

    /**
     * @expectedException \DTS\eBaySDK\Exceptions\InvalidPropertyTypeException
     */
    public function testSettingCompleaxUnboundPropertiesThrows()
    {
        $this->obj->simpleClasses[] = 'foo';
    }
}

