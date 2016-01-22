<?php
namespace DTS\eBaySDK\Shopping\Services\Test;

use DTS\eBaySDK\Shopping\Services\ShoppingBaseService;
use DTS\eBaySDK\Shopping\Services\ShoppingService;
use DTS\eBaySDK\Shopping\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = ShoppingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('affiliateUserId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['affiliateUserId']);

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => ShoppingService::API_VERSION,
            'required' => true
        ], $d['apiVersion']);

        $this->assertArrayHasKey('siteId', $d);
        $this->assertEquals([
            'valid' => ['int', 'string']
        ], $d['siteId']);

        $this->assertArrayHasKey('trackingId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['trackingId']);

        $this->assertArrayHasKey('trackingPartnerCode', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['trackingPartnerCode']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => '321', 'certId' => '', 'devId' => ''],
            'handler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(ShoppingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[ShoppingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_APP_ID , $h->headers);
        $this->assertEquals('321', $h->headers[ShoppingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[ShoppingBaseService::HDR_OPERATION_NAME]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_REQUEST_FORMAT, $h->headers);
        $this->assertEquals('XML', $h->headers[ShoppingBaseService::HDR_REQUEST_FORMAT]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_SITE_ID, $h->headers);
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_TRACKING_ID, $h->headers);
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_TRACKING_PARTNER_CODE, $h->headers);
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_AFFILIATE_USER_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'affiliateUserId' => '666',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'trackingId' => '888',
            'trackingPartnerCode' => '777',
            'handler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(ShoppingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(ShoppingService::API_VERSION, $h->headers[ShoppingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_SITE_ID, $h->headers);
        $this->assertEquals('0', $h->headers[ShoppingBaseService::HDR_SITE_ID]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_TRACKING_ID, $h->headers);
        $this->assertEquals('888', $h->headers[ShoppingBaseService::HDR_TRACKING_ID]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_TRACKING_PARTNER_CODE, $h->headers);
        $this->assertEquals('777', $h->headers[ShoppingBaseService::HDR_TRACKING_PARTNER_CODE]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_AFFILIATE_USER_ID, $h->headers);
        $this->assertEquals('666', $h->headers[ShoppingBaseService::HDR_AFFILIATE_USER_ID]);
    }
}

