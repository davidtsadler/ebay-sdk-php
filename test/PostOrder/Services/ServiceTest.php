<?php
namespace DTS\eBaySDK\Test\PostOrder\Services;

use DTS\eBaySDK\PostOrder\Services\PostOrderBaseService;
use DTS\eBaySDK\PostOrder\Services\PostOrderService;
use DTS\eBaySDK\Test\PostOrder\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = PostOrderBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => PostOrderService::API_VERSION,
            'required' => true
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'required' => true
        ], $d['authToken']);

        $this->assertArrayHasKey('marketplaceId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['marketplaceId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authToken' => '321',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(PostOrderBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('TOKEN 321', $h->headers[PostOrderBaseService::HDR_AUTH_TOKEN ]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(PostOrderBaseService::HDR_MARKETPLACE_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authToken' => '321',
            'marketplaceId' => '123',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(PostOrderBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[PostOrderBaseService::HDR_MARKETPLACE_ID]);
    }
}
