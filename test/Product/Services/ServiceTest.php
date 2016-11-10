<?php
namespace DTS\eBaySDK\Test\Product\Services;

use DTS\eBaySDK\Product\Services\ProductBaseService;
use DTS\eBaySDK\Product\Services\ProductService;
use DTS\eBaySDK\Test\Product\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = ProductBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => ProductService::API_VERSION
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
        $this->assertArrayHasKey(ProductBaseService::HDR_APP_ID, $h->headers);
        $this->assertEquals('321', $h->headers[ProductBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(ProductBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[ProductBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(ProductBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(ProductService::API_VERSION, $h->headers[ProductBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(ProductBaseService::HDR_GLOBAL_ID, $h->headers);
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

        $this->assertArrayHasKey(ProductBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[ProductBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ProductBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[ProductBaseService::HDR_GLOBAL_ID]);
    }
}
