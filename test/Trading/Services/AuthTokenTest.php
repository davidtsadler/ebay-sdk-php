<?php
namespace DTS\eBaySDK\Test\Trading\Services;

use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\Trading\Types;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class AuthTokenTest extends \PHPUnit_Framework_TestCase
{

    public function testAuthTokenIsUsedInRequst()
    {
        $s = new TradingService([
            'apiVersion' => '',
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'httpHandler' => new HttpHandler()
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

    public function testAuthTokenIsNotUsedInRequst()
    {
        $s = new TradingService([
            'apiVersion' => '',
            'authorization' => '123',
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'httpHandler' => new HttpHandler()
        ]);

        /**
         * Calling an operation when using an OAUTH token should not
         * result in ANY token appearing withing the body of the request.
         */
        $r = new Types\GeteBayOfficialTimeRequestType();
        $this->assertEquals(null, $r->RequesterCredentials);
        $s->geteBayOfficialTime($r);
        $this->assertEquals(null, $r->RequesterCredentials);

        $r = new Types\GeteBayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $this->assertEquals(null, $r->RequesterCredentials->eBayAuthToken);
        $s->geteBayOfficialTime($r);
        $this->assertEquals(null, $r->RequesterCredentials);

        $r = new Types\GeteBayOfficialTimeRequestType();
        $r->RequesterCredentials = new Types\CustomSecurityHeaderType();
        $r->RequesterCredentials->eBayAuthToken = '123';
        $s->geteBayOfficialTime($r);
        $this->assertEquals(null, $r->RequesterCredentials);
    }
}
