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

namespace DTS\eBaySDK\Trading\Services\Test;

use DTS\eBaySDK\Trading\Services\TradingBaseService;
use DTS\eBaySDK\Trading\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = TradingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'required' => true
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['authToken']);

        $this->assertArrayHasKey('siteId', $d);
        $this->assertEquals([
            'valid' => ['int', 'string'],
            'required' => true
        ], $d['siteId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'handler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(TradingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[TradingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(TradingBaseService::HDR_SITE_ID , $h->headers);
        $this->assertEquals(0, $h->headers[TradingBaseService::HDR_SITE_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[TradingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(TradingBaseService::HDR_APP_ID, $h->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_CERT_ID, $h->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_DEV_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => 'appId', 'certId' => 'certId', 'devId' => 'devId'],
            'siteId' => 999,
            'handler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(TradingBaseService::HDR_APP_ID, $h->headers);
        $this->assertEquals('appId', $h->headers[TradingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_CERT_ID, $h->headers);
        $this->assertEquals('certId', $h->headers[TradingBaseService::HDR_CERT_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_DEV_ID, $h->headers);
        $this->assertEquals('devId', $h->headers[TradingBaseService::HDR_DEV_ID]);
    }
}

