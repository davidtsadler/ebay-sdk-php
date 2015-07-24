<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Enums\ConsolidationJobType;

class ConsolidationJobTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ConsolidationJobType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Enums\ConsolidationJobType', $this->obj);
    }
}
