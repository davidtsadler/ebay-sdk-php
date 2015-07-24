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

use DTS\eBaySDK\Mocks\ComplexClass;

class ConstructTest extends \PHPUnit_Framework_TestCase
{
    public function testSettingPropertiesViaCtor()
    {
        $obj = new ComplexClass(array(
            'foo' => 'foo',
            'integer' => 123,
            'strings' => array('foo', 'bar')
        ));

        $this->assertEquals('foo', $obj->foo);
        $this->assertInternalType('string', $obj->foo);

        $this->assertEquals(123, $obj->integer);
        $this->assertInternalType('integer', $obj->integer);

        $this->assertEquals(2, count($obj->strings));
        $this->assertEquals('foo', $obj->strings[0]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $obj->strings);
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
