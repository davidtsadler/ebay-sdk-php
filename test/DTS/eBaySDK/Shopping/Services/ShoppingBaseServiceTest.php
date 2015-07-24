<?php
use DTS\eBaySDK\Shopping\Services\ShoppingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class ShoppingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new ShoppingBaseService();
        $this->service2 = new ShoppingBaseService(array());
        $this->service3 = new ShoppingBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
