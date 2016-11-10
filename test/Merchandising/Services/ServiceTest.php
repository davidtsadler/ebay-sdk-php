<?php
namespace DTS\eBaySDK\Test\Merchandising\Services;

use DTS\eBaySDK\Merchandising\Services\MerchandisingBaseService;
use DTS\eBaySDK\Merchandising\Services\MerchandisingService;
use DTS\eBaySDK\Test\Merchandising\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = MerchandisingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => MerchandisingService::API_VERSION
        ], $d['apiVersion']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['globalId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'credentials' => ['appId' => '321', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(MerchandisingBaseService::HDR_APP_ID, $h->headers);
        $this->assertEquals('321', $h->headers[MerchandisingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(MerchandisingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[MerchandisingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(MerchandisingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(MerchandisingService::API_VERSION, $h->headers[MerchandisingBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(MerchandisingBaseService::HDR_GLOBAL_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '999',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(MerchandisingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[MerchandisingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(MerchandisingBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[MerchandisingBaseService::HDR_GLOBAL_ID]);
    }
}
