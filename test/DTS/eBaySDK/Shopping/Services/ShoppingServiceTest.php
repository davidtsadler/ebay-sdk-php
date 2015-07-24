<?php

use DTS\eBaySDK\Shopping\Services\ShoppingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class ShoppingServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new ShoppingService();
        $this->service2 = new ShoppingService(array());
        $this->service3 = new ShoppingService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->service3);
    }
}
