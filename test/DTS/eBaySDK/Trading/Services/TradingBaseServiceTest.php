<?php
use DTS\eBaySDK\Trading\Services\TradingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class TradingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new TradingBaseService();
        $this->service2 = new TradingBaseService(array());
        $this->service3 = new TradingBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
