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

namespace DTS\eBaySDK\HalfFinding\Services\Test;

use DTS\eBaySDK\HalfFinding\Services\HalfFindingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class HalfFindingServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new HalfFindingService();
        $this->service2 = new HalfFindingService(array());
        $this->service3 = new HalfFindingService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service3);
    }
}
