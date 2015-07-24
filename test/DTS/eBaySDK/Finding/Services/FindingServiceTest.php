<?php

use DTS\eBaySDK\Finding\Services\FindingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class FindingServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new FindingService();
        $this->service2 = new FindingService(array());
        $this->service3 = new FindingService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service3);
    }
}
