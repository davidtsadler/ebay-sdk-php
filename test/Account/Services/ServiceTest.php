<?php
namespace DTS\eBaySDK\Test\Account\Services;

use DTS\eBaySDK\Account\Services\AccountBaseService;
use DTS\eBaySDK\Account\Services\AccountService;
use DTS\eBaySDK\Test\Account\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = AccountBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => AccountService::API_VERSION,
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
        $this->assertArrayHasKey(AccountBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[AccountBaseService::HDR_AUTHORIZATION]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(AccountBaseService::HDR_MARKETPLACE_ID, $h->headers);
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

        $this->assertArrayHasKey(AccountBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[AccountBaseService::HDR_MARKETPLACE_ID]);
    }
}
