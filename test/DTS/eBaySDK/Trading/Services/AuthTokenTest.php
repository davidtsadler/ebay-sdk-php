<?php

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
