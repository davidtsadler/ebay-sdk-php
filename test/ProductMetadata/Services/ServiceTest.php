<?php
namespace DTS\eBaySDK\Test\ProductMetadata\Services;

use DTS\eBaySDK\ProductMetadata\Services\ProductMetadataBaseService;
use DTS\eBaySDK\ProductMetadata\Services\ProductMetadataService;
use DTS\eBaySDK\Test\ProductMetadata\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = ProductMetadataBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => ProductMetadataService::API_VERSION
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
        $this->assertArrayHasKey(ProductMetadataBaseService::HDR_APP_ID, $h->headers);
        $this->assertEquals('321', $h->headers[ProductMetadataBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(ProductMetadataBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[ProductMetadataBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(ProductMetadataBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(ProductMetadataService::API_VERSION, $h->headers[ProductMetadataBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(ProductMetadataBaseService::HDR_GLOBAL_ID, $h->headers);
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

        $this->assertArrayHasKey(ProductMetadataBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[ProductMetadataBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ProductMetadataBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[ProductMetadataBaseService::HDR_GLOBAL_ID]);
    }
}
