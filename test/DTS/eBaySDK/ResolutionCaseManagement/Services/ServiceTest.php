<?php
use DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService;
use DTS\eBaySDK\ResolutionCaseManagement\Mocks\Service;
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
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Mocks\Service', $this->service);
    }

    public function testEbayHeaders()
    {
        $this->service->config('authToken', '321');

        $this->service->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_AUTH_TOKEN , $this->httpClient->headers);
        $this->assertEquals('321', $this->httpClient->headers[ResolutionCaseManagementBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_OPERATION_NAME, $this->httpClient->headers);
        $this->assertEquals('testOperation', $this->httpClient->headers[ResolutionCaseManagementBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(ResolutionCaseManagementBaseService::HDR_API_VERSION, $this->httpClient->headers);
        $this->assertArrayNotHasKey(ResolutionCaseManagementBaseService::HDR_GLOBAL_ID, $this->httpClient->headers);

        // Now configure optional headers.
        $this->service->config('apiVersion', '123');
        $this->service->config('globalId', '999');

        $this->service->testOperation();

        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_API_VERSION, $this->httpClient->headers);
        $this->assertEquals('123', $this->httpClient->headers[ResolutionCaseManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_GLOBAL_ID, $this->httpClient->headers);
        $this->assertEquals('999', $this->httpClient->headers[ResolutionCaseManagementBaseService::HDR_GLOBAL_ID]);
    }
}
