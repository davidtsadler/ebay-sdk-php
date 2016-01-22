<?php
namespace DTS\eBaySDK\ReturnManagement\Services\Test;

use DTS\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService;
use DTS\eBaySDK\ReturnManagement\Services\ReturnManagementService;
use DTS\eBaySDK\ReturnManagement\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = ReturnManagementBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => ReturnManagementService::API_VERSION
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

    public function testEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'handler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(ReturnManagementBaseService::HDR_AUTH_TOKEN, $h->headers);
        $this->assertEquals('321', $h->headers[ReturnManagementBaseService::HDR_AUTH_TOKEN]);

        $this->assertArrayHasKey(ReturnManagementBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[ReturnManagementBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(ReturnManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(ReturnManagementService::API_VERSION, $h->headers[ReturnManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(ReturnManagementBaseService::HDR_GLOBAL_ID, $h->headers);
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

        $this->assertArrayHasKey(ReturnManagementBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[ReturnManagementBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(ReturnManagementBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[ReturnManagementBaseService::HDR_GLOBAL_ID]);
    }
}

