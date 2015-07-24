<?php
use DTS\eBaySDK\Finding\Services\FindingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class FindingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new FindingBaseService();
        $this->service2 = new FindingBaseService(array());
        $this->service3 = new FindingBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
