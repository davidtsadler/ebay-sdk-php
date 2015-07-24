<?php
use DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService;
use DTS\eBaySDK\BusinessPoliciesManagement\Mocks\Service;
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
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Mocks\Service', $this->service);
    }

    public function testEbayHeaders()
    {
        $this->service->config('authToken', '321');
        $this->service->config('globalId', '999');

        $this->service->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_AUTH_TOKEN, $this->httpClient->headers);
        $this->assertEquals('321', $this->httpClient->headers[BusinessPoliciesManagementBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_GLOBAL_ID, $this->httpClient->headers);
        $this->assertEquals('999', $this->httpClient->headers[BusinessPoliciesManagementBaseService::HDR_GLOBAL_ID]);

        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_OPERATION_NAME, $this->httpClient->headers);
        $this->assertEquals('testOperation', $this->httpClient->headers[BusinessPoliciesManagementBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(BusinessPoliciesManagementBaseService::HDR_API_VERSION, $this->httpClient->headers);

        // Now configure optional headers.
        $this->service->config('apiVersion', '123');

        $this->service->testOperation();

        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_API_VERSION, $this->httpClient->headers);
        $this->assertEquals('123', $this->httpClient->headers[BusinessPoliciesManagementBaseService::HDR_API_VERSION]);
    }
}
