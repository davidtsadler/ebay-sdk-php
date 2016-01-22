<?php
namespace DTS\eBaySDK\BusinessPoliciesManagement\Services\Test;

use DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService;
use DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService;
use DTS\eBaySDK\BusinessPoliciesManagement\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = BusinessPoliciesManagementBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => BusinessPoliciesManagementService::API_VERSION
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'required' => true
        ], $d['authToken']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'required' => true
        ], $d['globalId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '999',
            'handler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('321', $h->headers[BusinessPoliciesManagementBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[BusinessPoliciesManagementBaseService::HDR_GLOBAL_ID]);

        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[BusinessPoliciesManagementBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(BusinessPoliciesManagementService::API_VERSION, $h->headers[BusinessPoliciesManagementBaseService::HDR_API_VERSION]);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'apiVersion' => '123',
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '999',
            'handler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(BusinessPoliciesManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[BusinessPoliciesManagementBaseService::HDR_API_VERSION]);
    }
}

