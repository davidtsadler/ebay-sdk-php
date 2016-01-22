<?php
namespace DTS\eBaySDK\ResolutionCaseManagement\Services\Test;

use DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService;
use DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService;
use DTS\eBaySDK\ResolutionCaseManagement\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = ResolutionCaseManagementBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => ResolutionCaseManagementService::API_VERSION
        ], $d['apiVersion']);

        $this->assertArrayHasKey('authToken', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'required' => true
        ], $d['authToken']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['globalId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'handler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_AUTH_TOKEN , $h->headers);
        $this->assertEquals('321', $h->headers[ResolutionCaseManagementBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[ResolutionCaseManagementBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(ResolutionCaseManagementService::API_VERSION, $h->headers[ResolutionCaseManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(ResolutionCaseManagementBaseService::HDR_GLOBAL_ID, $h->headers);
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

        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[ResolutionCaseManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ResolutionCaseManagementBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[ResolutionCaseManagementBaseService::HDR_GLOBAL_ID]);
    }
}

