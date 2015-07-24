<?php
use DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class HalfFindingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new HalfFindingBaseService();
        $this->service2 = new HalfFindingBaseService(array());
        $this->service3 = new HalfFindingBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
