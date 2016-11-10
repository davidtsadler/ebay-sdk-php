<?php
namespace DTS\eBaySDK\Test\RelatedItemsManagement\Services;

use DTS\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService;
use DTS\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService;
use DTS\eBaySDK\Test\RelatedItemsManagement\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = RelatedItemsManagementBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => RelatedItemsManagementService::API_VERSION
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'required' => true
        ], $d['authToken']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['globalId']);
    }

    public function testEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(RelatedItemsManagementBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('321', $h->headers[RelatedItemsManagementBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(RelatedItemsManagementBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[RelatedItemsManagementBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(RelatedItemsManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(RelatedItemsManagementService::API_VERSION, $h->headers[RelatedItemsManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(RelatedItemsManagementBaseService::HDR_GLOBAL_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpHandler();

        $s = new Service([
            'apiVersion' => '123',
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '999',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(RelatedItemsManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[RelatedItemsManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(RelatedItemsManagementBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[RelatedItemsManagementBaseService::HDR_GLOBAL_ID]);
    }
}
