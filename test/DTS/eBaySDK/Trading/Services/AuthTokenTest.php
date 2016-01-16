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
use DTS\eBaySDK\Mocks\Handler;

class AuthTokenTest extends \PHPUnit_Framework_TestCase
{

    public function testAuthTokenIsUsedInRequst()
    {
        $s = new TradingService([
            'apiVersion' => '',
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'handler' => new Handler()
        ]);

        // Calling the operation results in the auth token been set by the service.
        $r = new Types\GeteBayOfficialTimeRequestType();
        $this->assertEquals(null, $r->RequesterCredentials);
        $s->geteBayOfficialTime($r);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType', $r->RequesterCredentials);
        $this->assertEquals('321', $r->RequesterCredentials->eBayAuthToken);

        // Calling the operation results in the auth token been set by the service.
        $r = new Types\GeteBayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $this->assertEquals(null, $r->RequesterCredentials->eBayAuthToken);
        $s->geteBayOfficialTime($r);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType', $r->RequesterCredentials);
        $this->assertEquals('321', $r->RequesterCredentials->eBayAuthToken);

        // Calling the operation shouldn't modify an existing auth token.
        $r = new Types\GeteBayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $r->RequesterCredentials->eBayAuthToken = '123';
        $s->geteBayOfficialTime($r);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType', $r->RequesterCredentials);
        $this->assertEquals('123', $r->RequesterCredentials->eBayAuthToken);
    }
}

