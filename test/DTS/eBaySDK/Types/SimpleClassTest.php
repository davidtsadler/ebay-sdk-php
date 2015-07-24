<?php
use DTS\eBaySDK\Mocks\SimpleClass;
use DTS\eBaySDK\Mocks\Base64BinaryType;
use DTS\eBaySDK\Mocks\BooleanType;
use DTS\eBaySDK\Mocks\DecimalType;
use DTS\eBaySDK\Mocks\DoubleType;
use DTS\eBaySDK\Mocks\IntegerType;
use DTS\eBaySDK\Mocks\StringType;
use DTS\eBaySDK\Mocks\TokenType;
use DTS\eBaySDK\Mocks\URIType;

class SimpleClassTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new SimpleClass();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\SimpleClass', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testGettingSettingProperties()
    {
        $this->obj->integer = 123;
        $this->assertEquals(123, $this->obj->integer);
        $this->assertInternalType('integer', $this->obj->integer);

        $this->obj->string = 'foo';
        $this->assertEquals('foo', $this->obj->string);
        $this->assertInternalType('string', $this->obj->string);

        $this->obj->double = 123.45;
        $this->assertEquals(123.45, $this->obj->double);
        $this->assertInternalType('float', $this->obj->double);

        $this->obj->booleanTrue = true;
        $this->assertEquals(true, $this->obj->booleanTrue);
        $this->assertInternalType('boolean', $this->obj->booleanTrue);

        $this->obj->booleanFalse = false;
        $this->assertEquals(false, $this->obj->booleanFalse);
        $this->assertInternalType('boolean', $this->obj->booleanFalse);

        $date = new \DateTime('2000-01-01', new \DateTimeZone('UTC'));
        $this->obj->DateTime = $date;
        $this->assertEquals($date, $this->obj->DateTime);
        $this->assertInstanceOf('\DateTime', $this->obj->DateTime);

        $simpleClass = new SimpleClass();
        $this->obj->SimpleClass = $simpleClass;
        $this->assertEquals($simpleClass, $this->obj->SimpleClass);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\SimpleClass', $this->obj->SimpleClass);

        $this->assertEquals(0, count($this->obj->strings));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->strings);

        $this->obj->strings[] = 'foo';
        $this->obj->strings[] = 'bar';
        $this->assertEquals(2, count($this->obj->strings));
        $this->assertEquals('foo', $this->obj->strings[0]);
        $this->assertEquals('bar', $this->obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->strings);

        $this->obj->strings = array('foo', 'bar');
        $this->assertEquals(2, count($this->obj->strings));
        $this->assertEquals('foo', $this->obj->strings[0]);
        $this->assertEquals('bar', $this->obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->strings);

        $this->obj->strings = array();
        $this->assertEquals(0, count($this->obj->strings));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->strings);

        $this->obj->integers[] = 111;
        $this->obj->integers[] = 222;
        $this->assertEquals(2, count($this->obj->integers));
        $this->assertEquals(111, $this->obj->integers[0]);
        $this->assertEquals(222, $this->obj->integers[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->integers);

        $this->obj->integers = array(111, 222);
        $this->assertEquals(2, count($this->obj->integers));
        $this->assertEquals(111, $this->obj->integers[0]);
        $this->assertEquals(222, $this->obj->integers[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->integers);

        $this->obj->integers = array();
        $this->assertEquals(0, count($this->obj->integers));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj->integers);

        $this->obj->base64BinaryType = new Base64BinaryType();
        $this->obj->base64BinaryType->value = 'binary type';
        $this->assertEquals('binary type', $this->obj->base64BinaryType->value);

        $this->obj->booleanType = new BooleanType();
        $this->obj->booleanType->value = true;
        $this->assertEquals(true, $this->obj->booleanType->value);

        $this->obj->decimalType = new DecimalType();
        $this->obj->decimalType->value = 123;
        $this->assertEquals(123, $this->obj->decimalType->value);

        $this->obj->doubleType = new DoubleType();
        $this->obj->doubleType->value = 123.34;
        $this->assertEquals(123.34, $this->obj->doubleType->value);

        $this->obj->integerType = new IntegerType();
        $this->obj->integerType->value = 123;
        $this->assertEquals(123, $this->obj->integerType->value);

        $this->obj->stringType = new StringType();
        $this->obj->stringType->value = 'string type';
        $this->assertEquals('string type', $this->obj->stringType->value);

        $this->obj->tokenType = new TokenType();
        $this->obj->tokenType->value = 'token type';
        $this->assertEquals('token type', $this->obj->tokenType->value);

        $this->obj->uriType = new URIType();
        $this->obj->uriType->value = 'uri type';
        $this->assertEquals('uri type', $this->obj->uriType->value);
    }

    public function testIsSet()
    {
        $this->obj->string = 'foo';
        $this->assertEquals(true, isset($this->obj->string));
    }

    public function testUnSet()
    {
        $this->obj->string = 'foo';
        unset($this->obj->string);
        $this->assertEquals(false, isset($this->obj->string));
    }

    public function testGettingNonExistentProperty()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property: DTS\eBaySDK\Mocks\SimpleClass::foo');

        $this->obj->foo;
    }

    public function testSettingNonExistentProperty()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property: DTS\eBaySDK\Mocks\SimpleClass::foo');

        $this->obj->foo = 'foo';
    }

    public function testSettingPropertyWithAnInvalidType()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type: DTS\eBaySDK\Mocks\SimpleClass::integer expected <integer>, got <string>');

        $this->obj->integer = 'foo';
    }

    public function testIsSetNonExistentProperty()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property: DTS\eBaySDK\Mocks\SimpleClass::foo');

        isset($this->obj->foo);
    }

    public function testUnSetNonExistentProperty()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property: DTS\eBaySDK\Mocks\SimpleClass::foo');

        isset($this->obj->foo);
    }

    public function testSettingUnboundPropertyWithAnInvalidType()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type: DTS\eBaySDK\Mocks\SimpleClass::integers expected <integer>, got <string>');

        $this->obj->integers[] = 'foo';
    }

    public function testSettingUnboundPropertyWithOneInvalidType()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type: DTS\eBaySDK\Mocks\SimpleClass::integers expected <integer>, got <string>');

        $this->obj->integers = array(123, 'foo');
    }

    public function testSettingUnboundPropertyDirectly()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type: DTS\eBaySDK\Mocks\SimpleClass::integers expected <DTS\eBaySDK\Types\UnboundType>, got <integer>');

        $this->obj->integers = 123;
    }

    public function testCanGetElementMeta()
    {
        $meta = new \StdClass();
        $meta->propertyName = 'SimpleClass';
        $meta->phpType = 'DTS\eBaySDK\Mocks\SimpleClass';
        $meta->unbound = false;
        $meta->attribute = false;
        $meta->elementName = 'SimpleClass';
        $meta->strData = '';

        $this->assertEquals($meta, $this->obj->elementMeta('SimpleClass'));
    }
}
