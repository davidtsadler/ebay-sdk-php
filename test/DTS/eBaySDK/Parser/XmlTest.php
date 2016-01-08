<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Parser\Test;

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
        $this->assertEquals('<h1>Bits &amp; Bobs ©</h1><p>Just some &lt;stuff&gt; I found.&nbsp;&copy;</p>', $obj->string);
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

    public function testCanParseXmlWithNamespace()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/ResponseNS.xml');
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
