<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\Sdk;

class SdkTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->sdk = new Sdk();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Sdk', $this->sdk);
    }

    public function testCallingUnknownMethod()
    {
        $this->setExpectedException('\BadMethodCallException', 'Unknown method: foo');

        $this->sdk->foo();
    }

    public function testCanCreateBulkDataExchange()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->sdk->createBulkDataExchange(['authToken' => '']));
    }

    public function testCanCreateBusinessPoliciesManagement()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService', $this->sdk->createBusinessPoliciesManagement(['authToken' => '', 'globalId' => '']));
    }

    public function testCanCreateFileTransfer()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferService', $this->sdk->createFileTransfer(['authToken' => '']));
    }

    public function testCanCreateFinding()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->sdk->createFinding(['appId' => '']));
    }

    public function testCanCreateHalfFinding()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->sdk->createHalfFinding(['appId' => '']));
    }

    public function testCanCreateResolutionCaseManagement()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->sdk->createResolutionCaseManagement(['authToken' => '']));
    }

    public function testCanCreateShopping()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingService', $this->sdk->createShopping(['apiVersion' => '', 'appId' => '']));
    }

    public function testCanCreateTrading()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingService', $this->sdk->createTrading(['apiVersion' => '', 'siteId' => '']));
    }
}
