<?php
namespace DTS\eBaySDK\Finding\Services\Test;

use DTS\eBaySDK\Finding\Services\FindingBaseService;
use DTS\eBaySDK\Finding\Services\FindingService;
use DTS\eBaySDK\Finding\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = FindingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => FindingService::API_VERSION
        ], $d['apiVersion']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['globalId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'credentials' => ['appId' => '321', 'certId' => '', 'devId' => ''],
            'handler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(FindingBaseService::HDR_APP_ID , $h->headers);
        $this->assertEquals('321', $h->headers[FindingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(FindingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[FindingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(FindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(FindingService::API_VERSION, $h->headers[FindingBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(FindingBaseService::HDR_GLOBAL_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new Handler();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '999',
            'handler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(FindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[FindingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(FindingBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[FindingBaseService::HDR_GLOBAL_ID]);
    }
}

