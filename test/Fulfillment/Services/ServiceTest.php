<?php
namespace DTS\eBaySDK\Test\Fulfillment\Services;

use DTS\eBaySDK\Fulfillment\Services\FulfillmentBaseService;
use DTS\eBaySDK\Fulfillment\Services\FulfillmentService;
use DTS\eBaySDK\Test\Fulfillment\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = FulfillmentBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => FulfillmentService::API_VERSION,
            'required' => true
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authorization', $d);
        $this->assertEquals([
            'valid'   => ['string'],
            'required' => true
        ], $d['authorization']);

        $this->assertArrayHasKey('marketplaceId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['marketplaceId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(FulfillmentBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[FulfillmentBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(FulfillmentBaseService::HDR_MARKETPLACE_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'marketplaceId' => '123',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(FulfillmentBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[FulfillmentBaseService::HDR_MARKETPLACE_ID]);
    }
}
