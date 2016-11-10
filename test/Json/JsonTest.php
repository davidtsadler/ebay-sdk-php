<?php
namespace DTS\eBaySDK\Parser\Test;

use DTS\eBaySDK\Test\Mocks\ComplexClass;

class JsonTest extends \PHPUnit_Framework_TestCase
{
    public function testCanDecodeJson()
    {
        $json = file_get_contents(__DIR__.'/../Mocks/Response.json');
        $obj = new ComplexClass(json_decode($json, true));

        // This is not in the json and so should not be set.
        $this->assertEquals(false, isset($obj->foo));

        $this->assertEquals(123, $obj->integer);
        $this->assertEquals('&lt;h1&gt;Bits &amp;amp; Bobs &#xA9;&lt;/h1&gt;&lt;p&gt;Just some &amp;lt;stuff&amp;gt; I found.&amp;nbsp;&amp;copy;&lt;/p&gt;', $obj->string);
        $this->assertEquals(123.45, $obj->double);
        $this->assertEquals(true, $obj->booleanTrue);
        $this->assertEquals(false, $obj->booleanFalse);
        $this->assertEquals(new \DateTime('2000-01-01T16:15:30.123Z', new \DateTimeZone('UTC')), $obj->DateTime);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $obj->SimpleClass);
        $this->assertEquals(321, $obj->SimpleClass->integer);
        $this->assertEquals('another string', $obj->SimpleClass->string);
        $this->assertEquals('foo', $obj->strings[0]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertEquals(1, $obj->integers[0]);
        $this->assertEquals(2, $obj->integers[1]);
        $this->assertEquals(3, $obj->integers[2]);
        $this->assertEquals(4, $obj->integers[3]);
        $this->assertEquals(5, $obj->integers[4]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $obj->simpleClasses[0]);
        $this->assertEquals(888, $obj->simpleClasses[0]->integer);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $obj->simpleClasses[1]);
        $this->assertEquals(999, $obj->simpleClasses[1]->integer);
        $this->assertEquals(543.21, $obj->AmountClass->value);
        $this->assertEquals('binary type', $obj->base64BinaryType->value);
        $this->assertEquals(true, $obj->booleanType->value);
        $this->assertEquals(123, $obj->decimalType->value);
        $this->assertEquals(123.45, $obj->doubleType->value);
        $this->assertEquals(123, $obj->integerType->value);
        $this->assertEquals('string type', $obj->stringType->value);
        $this->assertEquals('token type', $obj->tokenType->value);
        $this->assertEquals('uri type', $obj->uriType->value);
        $this->assertEquals(123, $obj->decimalTypePosInteger->value);
        $this->assertEquals(123.45, $obj->decimalTypePosFloat->value);
        $this->assertEquals(-123, $obj->decimalTypeNegInteger->value);
        $this->assertEquals(-123.45, $obj->decimalTypeNegFloat->value);
        $this->assertEquals(1, $obj->anyType);
        $this->assertEquals(1, $obj->anyTypes[0]);
        $this->assertEquals('foo', $obj->anyTypes[1]);
        $this->assertEquals(1.23, $obj->anyTypes[2]);
        $this->assertEquals(true, $obj->anyTypes[3]);
        $this->assertEquals(false, $obj->anyTypes[4]);
        $this->assertEquals([1, 2, 3], $obj->anyTypes[5]);
    }
}
