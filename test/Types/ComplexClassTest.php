<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Test\Mocks\AmountClass;
use DTS\eBaySDK\Test\Mocks\SimpleClass;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class ComplexClassTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new ComplexClass();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\ComplexClass', $this->obj);
    }

    public function testExtendsSimpleClass()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $this->obj);
    }

    public function testGettingSettingProperties()
    {
        $this->obj->foo = 'foo';
        $this->assertEquals('foo', $this->obj->foo);
        $this->assertInternalType('string', $this->obj->foo);
    }

    public function testGettingSettingInheritedProperties()
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

        $date = new \DateTime('2000-01-01', new \DateTimeZone("UTC"));
        $this->obj->DateTime = $date;
        $this->assertEquals($date, $this->obj->DateTime);
        $this->assertInstanceOf('\DateTime', $this->obj->DateTime);

        $simpleClass = new SimpleClass();
        $this->obj->SimpleClass = $simpleClass;
        $this->assertEquals($simpleClass, $this->obj->SimpleClass);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $this->obj->SimpleClass);

        $this->assertEquals(0, count($this->obj->strings));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->strings[] = 'foo';
        $this->obj->strings[] = 'bar';
        $this->assertEquals(2, count($this->obj->strings));
        $this->assertEquals('foo', $this->obj->strings[0]);
        $this->assertEquals('bar', $this->obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->strings = ['foo', 'bar'];
        $this->assertEquals(2, count($this->obj->strings));
        $this->assertEquals('foo', $this->obj->strings[0]);
        $this->assertEquals('bar', $this->obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->strings = [];
        $this->assertEquals(0, count($this->obj->strings));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);
    }

    public function testToXml()
    {
        $this->obj->foo = 'foo';
        $this->obj->integer = 123;
        $this->obj->string = '<h1>Bits &amp; Bobs</h1><p>Just some &lt;stuff&gt; I found.&nbsp;&copy;</p>';
        $this->obj->double = 123.45;
        $this->obj->DateTime = new \DateTime('2000-01-01', new \DateTimeZone("UTC"));
        $this->obj->booleanTrue = true;
        $this->obj->booleanFalse = false;

        $simpleClass = new SimpleClass();
        $simpleClass->integer = 321;
        $simpleClass->string = 'another string';
        $this->obj->SimpleClass = $simpleClass;

        $amountClass = new AmountClass();
        $amountClass->value = 543.21;
        $amountClass->AttributeOne = 'one';
        $this->obj->AmountClass = $amountClass;

        $this->obj->strings = ['foo', 'bar'];
        $this->obj->integers = [1,2,3,4,5];

        $this->obj->simpleClasses = [
            new SimpleClass(['integer' => 888]),
            new SimpleClass(['integer' => 999])
        ];

        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/../Mocks/ComplexClassXml.xml', $this->obj->toRequestXml());
    }

    public function testToJson()
    {
        $this->obj->foo = 'foo';
        $this->obj->integer = 123;
        $this->obj->string = '<h1>Bits &amp; Bobs</h1><p>Just some &lt;stuff&gt; I found.&nbsp;&copy;</p>';
        $this->obj->double = 123.45;
        $this->obj->DateTime = new \DateTime('2000-01-01', new \DateTimeZone("UTC"));
        $this->obj->booleanTrue = true;
        $this->obj->booleanFalse = false;

        $simpleClass = new SimpleClass();
        $simpleClass->integer = 321;
        $simpleClass->string = 'another string';
        $this->obj->SimpleClass = $simpleClass;

        $amountClass = new AmountClass();
        $amountClass->value = 543.21;
        $amountClass->AttributeOne = 'one';
        $this->obj->AmountClass = $amountClass;

        $this->obj->strings = ['foo', 'bar'];
        $this->obj->integers = [1,2,3,4,5];

        $this->obj->simpleClasses = [
            new SimpleClass(['integer' => 888]),
            new SimpleClass(['integer' => 999])
        ];

        $this->obj->anyType = 1;
        $this->obj->anyTypes[] = 1;
        $this->obj->anyTypes[] = 'foo';
        $this->obj->anyTypes[] = 1.23;
        $this->obj->anyTypes[] = true;
        $this->obj->anyTypes[] = false;
        $date = new \DateTime('2000-01-01', new \DateTimeZone('UTC'));
        $this->obj->anyTypes[] = $date;
        $this->obj->anyTypes[] = [1, 2, 3];

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../Mocks/ComplexClassJson.json', json_encode($this->obj->toArray()));
    }
}
