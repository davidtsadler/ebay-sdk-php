<?php

use DTS\eBaySDK\Parser\XmlParser;

class XmlTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->xmlParser = new XmlParser('\DTS\eBaySDK\Mocks\ComplexClass');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Parser\XmlParser', $this->xmlParser);
    }

    public function testCanParseXml()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/Response.xml');
        $xml = preg_replace('/[\n\r]/', '', $xml);
        $xml = preg_replace('/>\s+/', '>', $xml);
        $obj = $this->xmlParser->parse($xml);

        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\ComplexClass', $obj);

        // This is not in the XML and so should not be set.
        $this->assertEquals(false, isset($this->obj->foo));

        $this->assertEquals(123, $obj->integer);
        $this->assertEquals('a string', $obj->string);
        $this->assertEquals('foo', $obj->foo);
        $this->assertEquals(123.45, $obj->double);
        $this->assertEquals(true, $obj->booleanTrue);
        $this->assertEquals(false, $obj->booleanFalse);
        $this->assertEquals(new \DateTime('2000-01-01T16:15:30.123Z', new \DateTimeZone('UTC')), $obj->DateTime);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\SimpleClass', $obj->SimpleClass);
        $this->assertEquals(321, $obj->SimpleClass->integer);
        $this->assertEquals('another string', $obj->SimpleClass->string);
        $this->assertEquals(123, $obj->SimpleClass->IntegerAttribute);
        $this->assertEquals(123.45, $obj->SimpleClass->doubleAttribute);
        $this->assertEquals(true, $obj->SimpleClass->BooleanTrueAttribute);
        $this->assertEquals(false, $obj->SimpleClass->booleanFalseAttribute);
        $this->assertEquals(new \DateTime('2000-01-01T16:15:30.123Z', new \DateTimeZone('UTC')), $obj->SimpleClass->DateTimeAttribute);
        $this->assertEquals('foo', $obj->strings[0]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertEquals(1, $obj->integers[0]);
        $this->assertEquals(2, $obj->integers[1]);
        $this->assertEquals(3, $obj->integers[2]);
        $this->assertEquals(4, $obj->integers[3]);
        $this->assertEquals(5, $obj->integers[4]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\SimpleClass', $obj->simpleClasses[0]);
        $this->assertEquals(888, $obj->simpleClasses[0]->integer);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\SimpleClass', $obj->simpleClasses[1]);
        $this->assertEquals(999, $obj->simpleClasses[1]->integer);
        $this->assertEquals(543.21, $obj->AmountClass->value);
        $this->assertEquals('one', $obj->AmountClass->AttributeOne);
        $this->assertEquals('binary type', $obj->base64BinaryType->value);
        $this->assertEquals(true, $obj->booleanType->value);
        $this->assertEquals(123, $obj->decimalType->value);
        $this->assertEquals(123.45, $obj->doubleType->value);
        $this->assertEquals(123, $obj->integerType->value);
        $this->assertEquals('string type', $obj->stringType->value);
        $this->assertEquals('token type', $obj->tokenType->value);
        $this->assertEquals('uri type', $obj->uriType->value);
    }
}
