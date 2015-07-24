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

use DTS\eBaySDK\Types\UnboundType;

class UnboundTypeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new UnboundType('', '', 'string');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $this->obj);
    }

    public function testExtendsArrayAccess()
    {
        $this->assertInstanceOf('\ArrayAccess', $this->obj);
    }

    public function testExtendsIterator()
    {
        $this->assertInstanceOf('\Iterator', $this->obj);
    }

    public function testExtendsCountable()
    {
        $this->assertInstanceOf('\Countable', $this->obj);
    }

    public function testArray()
    {
        $this->assertEquals(0, count($this->obj));

        $this->obj[] = 'one';
        $this->assertEquals(1, count($this->obj));
        $this->assertEquals('one', $this->obj[0]);

        $this->obj[] = 'two';
        $this->assertEquals(2, count($this->obj));
        $this->assertEquals('two', $this->obj[1]);

        $this->assertEquals(null, $this->obj[10]);
        $this->obj[10] = 'three';
        $this->assertEquals(3, count($this->obj));
        $this->assertEquals('three', $this->obj[10]);

        unset($this->obj[10]);
        $this->assertEquals(2, count($this->obj));
        $this->assertEquals(null, $this->obj[10]);

        $index = 0;
        foreach ($this->obj as $key => $value) {
            $this->assertEquals($index, $key);
            $this->assertEquals($this->obj[$index], $value);
            $index++;
        }
    }

    public function testSettingInvalidType()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type: :: expected <string>, got <integer>');

        $this->obj[] = 123;
    }
}
