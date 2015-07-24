<?php

use DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService;
use DTS\eBaySDK\HttpClient\HttpClient;

class ResolutionCaseManagementServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new ResolutionCaseManagementService();
        $this->service2 = new ResolutionCaseManagementService(array());
        $this->service3 = new ResolutionCaseManagementService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService', $this->service3);
    }
}
