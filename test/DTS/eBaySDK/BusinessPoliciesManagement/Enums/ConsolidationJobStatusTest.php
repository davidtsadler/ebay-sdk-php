<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Enums\ConsolidationJobStatus;

class ConsolidationJobStatusTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ConsolidationJobStatus();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Enums\ConsolidationJobStatus', $this->obj);
    }
}
