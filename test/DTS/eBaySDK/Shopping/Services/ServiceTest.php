<?php
use DTS\eBaySDK\Shopping\Services\ShoppingBaseService;
use DTS\eBaySDK\Shopping\Mocks\Service;
use DTS\eBaySDK\Mocks\HttpClient;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->httpClient = new HttpClient();
        $this->service = new Service(array(), $this->httpClient);
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Mocks\Service', $this->service);
    }

    public function testEbayHeaders()
    {
        $this->service->config('apiVersion', '123');
        $this->service->config('appId', '321');

        $this->service->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(ShoppingBaseService::HDR_API_VERSION, $this->httpClient->headers);
        $this->assertEquals('123', $this->httpClient->headers[ShoppingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_APP_ID , $this->httpClient->headers);
        $this->assertEquals('321', $this->httpClient->headers[ShoppingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_OPERATION_NAME, $this->httpClient->headers);
        $this->assertEquals('testOperation', $this->httpClient->headers[ShoppingBaseService::HDR_OPERATION_NAME]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_REQUEST_FORMAT, $this->httpClient->headers);
        $this->assertEquals('XML', $this->httpClient->headers[ShoppingBaseService::HDR_REQUEST_FORMAT]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_SITE_ID, $this->httpClient->headers);
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_TRACKING_ID, $this->httpClient->headers);
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_TRACKING_PARTNER_CODE, $this->httpClient->headers);
        $this->assertArrayNotHasKey(ShoppingBaseService::HDR_AFFILIATE_USER_ID, $this->httpClient->headers);

        // Now configure optional headers.
        $this->service->config('siteId', '999');
        $this->service->config('trackingId', '888');
        $this->service->config('trackingPartnerCode', '777');
        $this->service->config('affiliateUserId', '666');

        $this->service->testOperation();

        $this->assertArrayHasKey(ShoppingBaseService::HDR_SITE_ID, $this->httpClient->headers);
        $this->assertEquals('999', $this->httpClient->headers[ShoppingBaseService::HDR_SITE_ID]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_TRACKING_ID, $this->httpClient->headers);
        $this->assertEquals('888', $this->httpClient->headers[ShoppingBaseService::HDR_TRACKING_ID]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_TRACKING_PARTNER_CODE, $this->httpClient->headers);
        $this->assertEquals('777', $this->httpClient->headers[ShoppingBaseService::HDR_TRACKING_PARTNER_CODE]);

        $this->assertArrayHasKey(ShoppingBaseService::HDR_AFFILIATE_USER_ID, $this->httpClient->headers);
        $this->assertEquals('666', $this->httpClient->headers[ShoppingBaseService::HDR_AFFILIATE_USER_ID]);
    }
}
