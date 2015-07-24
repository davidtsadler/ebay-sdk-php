<?php

use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class TradingServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new TradingService();
        $this->service2 = new TradingService(array());
        $this->service3 = new TradingService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service3);
    }
}
