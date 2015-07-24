<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest;

class GetConsolidationJobStatusRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetConsolidationJobStatusRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest', $this->obj);
    }
}
