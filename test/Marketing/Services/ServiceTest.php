<?php
namespace DTS\eBaySDK\Test\Marketing\Services;

use DTS\eBaySDK\Marketing\Services\MarketingBaseService;
use DTS\eBaySDK\Marketing\Services\MarketingService;
use DTS\eBaySDK\Test\Marketing\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = MarketingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => MarketingService::API_VERSION,
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
        $this->assertArrayHasKey(MarketingBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[MarketingBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(MarketingBaseService::HDR_MARKETPLACE_ID, $h->headers);
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

        $this->assertArrayHasKey(MarketingBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[MarketingBaseService::HDR_MARKETPLACE_ID]);
    }
}
