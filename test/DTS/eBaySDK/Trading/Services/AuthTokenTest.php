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

use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\Trading\Types;
use DTS\eBaySDK\Mocks\HttpClient;

class AuthTokenTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service = new TradingService(array(), new HttpClient());
        $this->service2 = new TradingService(array('authToken' => '321'), new HttpClient());
    }

    public function testAuthTokenCanBeConfigured()
    {
        // authToken is optional.
        $this->assertEquals(null, $this->service->config('authToken'));
    
        $this->service->config('authToken', '123');
        $this->assertEquals('123', $this->service->config('authToken'));

        // authToken can be set when creating an instance of the class.
        $this->assertEquals('321', $this->service2->config('authToken'));
    }

    public function testAuthTokenIsUsedInRequst()
    {
        $this->service2->config('authToken', '321');

        // Calling the operation results in the auth token been set by the service.
        $request = new Types\GeteBayOfficialTimeRequestType();
        $this->assertEquals(null, $request->RequesterCredentials);
        $this->service2->geteBayOfficialTime($request);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType', $request->RequesterCredentials);
        $this->assertEquals('321', $request->RequesterCredentials->eBayAuthToken);

        // Calling the operation results in the auth token been set by the service.
        $request = new Types\GeteBayOfficialTimeRequestType();
        $request->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $this->assertEquals(null, $request->RequesterCredentials->eBayAuthToken);
        $this->service2->geteBayOfficialTime($request);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType', $request->RequesterCredentials);
        $this->assertEquals('321', $request->RequesterCredentials->eBayAuthToken);

        // Calling the operation shouldn't modify an existing auth token. 
        $request = new Types\GeteBayOfficialTimeRequestType();
        $request->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $request->RequesterCredentials->eBayAuthToken = '123';
        $this->service2->geteBayOfficialTime($request);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType', $request->RequesterCredentials);
        $this->assertEquals('123', $request->RequesterCredentials->eBayAuthToken);
    }
}
