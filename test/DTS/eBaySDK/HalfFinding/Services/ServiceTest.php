<?php
namespace DTS\eBaySDK\HalfFinding\Services\Test;

use DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService;
use DTS\eBaySDK\HalfFinding\Services\HalfFindingService;
use DTS\eBaySDK\HalfFinding\Mocks\Service;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = HalfFindingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => HalfFindingService::API_VERSION
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
        $this->assertArrayHasKey(HalfFindingBaseService::HDR_APP_ID , $h->headers);
        $this->assertEquals('321', $h->headers[HalfFindingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(HalfFindingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[HalfFindingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayHasKey(HalfFindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals(HalfFindingService::API_VERSION, $h->headers[HalfFindingBaseService::HDR_API_VERSION]);

        $this->assertArrayNotHasKey(HalfFindingBaseService::HDR_GLOBAL_ID, $h->headers);
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

        $this->assertArrayHasKey(HalfFindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[HalfFindingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(HalfFindingBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[HalfFindingBaseService::HDR_GLOBAL_ID]);
    }
}

