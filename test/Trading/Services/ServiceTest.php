<?php
namespace DTS\eBaySDK\Test\Trading\Services;

use DTS\eBaySDK\Trading\Services\TradingBaseService;
use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\Test\Trading\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = TradingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => TradingService::API_VERSION,
            'required' => true
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authorization', $d);
        $this->assertEquals([
            'valid'   => ['string']
        ], $d['authorization']);

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
        $h = new HttpHandler();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'httpHandler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(TradingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[TradingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(TradingBaseService::HDR_SITE_ID, $h->headers);
        $this->assertEquals(0, $h->headers[TradingBaseService::HDR_SITE_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[TradingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(TradingBaseService::HDR_APP_ID, $h->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_CERT_ID, $h->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_DEV_ID, $h->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_AUTHORIZATION, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'authorization' => 'foo',
            'credentials' => ['appId' => 'appId', 'certId' => 'certId', 'devId' => 'devId'],
            'siteId' => 999,
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(TradingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(TradingService::API_VERSION, $h->headers[TradingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(TradingBaseService::HDR_APP_ID, $h->headers);
        $this->assertEquals('appId', $h->headers[TradingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_CERT_ID, $h->headers);
        $this->assertEquals('certId', $h->headers[TradingBaseService::HDR_CERT_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_DEV_ID, $h->headers);
        $this->assertEquals('devId', $h->headers[TradingBaseService::HDR_DEV_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('foo', $h->headers[TradingBaseService::HDR_AUTHORIZATION]);

    }
}
