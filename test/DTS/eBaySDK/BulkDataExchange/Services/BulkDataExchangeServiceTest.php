<?php

use DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService;
use DTS\eBaySDK\HttpClient\HttpClient;

class BulkDataExchangeServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new BulkDataExchangeService();
        $this->service2 = new BulkDataExchangeService(array());
        $this->service3 = new BulkDataExchangeService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService', $this->service3);
    }
}
