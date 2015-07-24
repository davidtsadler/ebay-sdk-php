<?php
use DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class ResolutionCaseManagementBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new ResolutionCaseManagementBaseService();
        $this->service2 = new ResolutionCaseManagementBaseService(array());
        $this->service3 = new ResolutionCaseManagementBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
