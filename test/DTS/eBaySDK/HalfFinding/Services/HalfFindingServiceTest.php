<?php

use DTS\eBaySDK\HalfFinding\Services\HalfFindingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class HalfFindingServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new HalfFindingService();
        $this->service2 = new HalfFindingService(array());
        $this->service3 = new HalfFindingService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service3);
    }
}
