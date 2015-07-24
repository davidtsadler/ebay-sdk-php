<?php
use DTS\eBaySDK\Trading\Services\TradingBaseService;
use DTS\eBaySDK\Trading\Mocks\Service;
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
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Mocks\Service', $this->service);
    }

    public function testEbayHeaders()
    {
        $this->service->config('apiVersion', '123');
        $this->service->config('siteId', '999');

        $this->service->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(TradingBaseService::HDR_API_VERSION, $this->httpClient->headers);
        $this->assertEquals('123', $this->httpClient->headers[TradingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(TradingBaseService::HDR_SITE_ID , $this->httpClient->headers);
        $this->assertEquals('999', $this->httpClient->headers[TradingBaseService::HDR_SITE_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_OPERATION_NAME, $this->httpClient->headers);
        $this->assertEquals('testOperation', $this->httpClient->headers[TradingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(TradingBaseService::HDR_APP_ID, $this->httpClient->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_CERT_ID, $this->httpClient->headers);
        $this->assertArrayNotHasKey(TradingBaseService::HDR_DEV_ID, $this->httpClient->headers);

        // Now configure optional headers.
        $this->service->config('appId', 'appId');
        $this->service->config('certId', 'certId');
        $this->service->config('devId', 'devId');

        $this->service->testOperation();

        $this->assertArrayHasKey(TradingBaseService::HDR_APP_ID, $this->httpClient->headers);
        $this->assertEquals('appId', $this->httpClient->headers[TradingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_CERT_ID, $this->httpClient->headers);
        $this->assertEquals('certId', $this->httpClient->headers[TradingBaseService::HDR_CERT_ID]);

        $this->assertArrayHasKey(TradingBaseService::HDR_DEV_ID, $this->httpClient->headers);
        $this->assertEquals('devId', $this->httpClient->headers[TradingBaseService::HDR_DEV_ID]);
    }
}
