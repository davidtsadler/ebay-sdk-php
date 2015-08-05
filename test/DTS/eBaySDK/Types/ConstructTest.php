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

namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Mocks\AmountClass;
use DTS\eBaySDK\Mocks\ComplexClass;
use DTS\eBaySDK\Mocks\SimpleClass;

class ConstructTest extends \PHPUnit_Framework_TestCase
{
    public function testSettingPropertiesViaCtor()
    {
        $values = array(
            'foo' => 'foo',
            'integer' => 123,
            'double' => 123.45,
            'booleanTrue' => true,
            'booleanFalse' => false,
            'DateTime' => '2000-01-01T00:00:00.000Z',
            /**
             * Wouldn't do this in client code.
             * Can pass the same field multiple times. The value is just assigned over the previous one.
             * All we are doing here is testing that different types can be passed to the field
             * and it will be handled correctly by the code.
             */
            'DateTime' => new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
            'strings' => array('foo', 'bar'),
            'integers' => array(111, 222),
            'AmountClass' => array(
                'value' => 543.21,
                'AttributeOne' => 'one'
            ),
            'AmountClass' => new AmountClass(array('value' => 543.21, 'AttributeOne' => 'one')),
            'SimpleClass' => array(
                'integer' => 123,
                'string' => 'foo',
                'double' => 123.45,
                'booleanTrue' => true,
                'booleanFalse' => false,
                'DateTime' => new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
                'integers' => array(100, 200, 300)
            ),
            'simpleClasses' => array(
                array(
                    'integer' => 321,
                    'string' => 'bar',
                    'double' => 5432.10,
                    'booleanTrue' => true,
                    'booleanFalse' => false,
                    'DateTime' => '2015-01-01T00:00:00.000Z'
                ),
                new SimpleClass(array(
                    'integers' => array(300, 200, 100),
                    'strings' => array('foo', 'bar')
                )),
                new SimpleClass()
            ),
        );

        $obj = new ComplexClass($values);

        $this->assertEquals('foo', $obj->foo);
        $this->assertInternalType('string', $obj->foo);

        $this->assertEquals(123, $obj->integer);
        $this->assertInternalType('integer', $obj->integer);

        $this->assertEquals(123.45, $obj->double);
        $this->assertInternalType('float', $obj->double);

        $this->assertEquals(true, $obj->booleanTrue);
        $this->assertInternalType('boolean', $obj->booleanTrue);

        $this->assertEquals(false, $obj->booleanFalse);
        $this->assertInternalType('boolean', $obj->booleanFalse);

        $this->assertEquals(
            new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
            $obj->DateTime
        );
        $this->assertInstanceOf('\DateTime', $obj->DateTime);

        $this->assertEquals(2, count($obj->strings));
        $this->assertEquals('foo', $obj->strings[0]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $obj->strings);

        $this->assertEquals(2, count($obj->integers));
        $this->assertEquals(111, $obj->integers[0]);
        $this->assertEquals(222, $obj->integers[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $obj->integers);

        $this->assertEquals(543.21, $obj->AmountClass->value);
        $this->assertEquals('one', $obj->AmountClass->AttributeOne);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\AmountClass', $obj->AmountClass);

        $this->assertEquals(123, $obj->SimpleClass->integer);
        $this->assertEquals('foo', $obj->SimpleClass->string);
        $this->assertEquals(123.45, $obj->SimpleClass->double);
        $this->assertEquals(true, $obj->SimpleClass->booleanTrue);
        $this->assertEquals(false, $obj->SimpleClass->booleanFalse);
        $this->assertEquals(
            new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
            $obj->SimpleClass->DateTime
        );
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\SimpleClass', $obj->SimpleClass);

        $this->assertEquals(3, count($obj->SimpleClass->integers));
        $this->assertEquals(100, $obj->SimpleClass->integers[0]);
        $this->assertEquals(200, $obj->SimpleClass->integers[1]);
        $this->assertEquals(300, $obj->SimpleClass->integers[2]);

        $this->assertEquals(3, count($obj->simpleClasses));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $obj->simpleClasses);
    }

    public function testSettingInvalidPropertyViaCtor()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property: DTS\eBaySDK\Mocks\ComplexClass::bar');

        $obj = new ComplexClass(array(
            'bar' => 'bar'
        ));
    }

    public function testSettingInvalidPropertyTypeViaCtor()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type: DTS\eBaySDK\Mocks\ComplexClass::string expected <string>, got <integer>');

        $obj = new ComplexClass(array(
            'string' => 123
        ));
    }
}
