<?php
namespace DTS\eBaySDK\Test\Order\Services;

use DTS\eBaySDK\Order\Services\OrderBaseService;
use DTS\eBaySDK\Order\Services\OrderService;
use DTS\eBaySDK\Test\Order\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = OrderBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => OrderService::API_VERSION,
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

        $this->assertArrayHasKey('riskCorrelationId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['riskCorrelationId']);
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
        $this->assertArrayHasKey(OrderBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[OrderBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(OrderBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertArrayNotHasKey(OrderBaseService::HDR_END_USER_CTX, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'marketplaceId' => '123',
            'riskCorrelationId' => '456',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(OrderBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[OrderBaseService::HDR_MARKETPLACE_ID]);
        $this->assertEquals('deviceId=456', $h->headers[OrderBaseService::HDR_END_USER_CTX ]);
    }
}
