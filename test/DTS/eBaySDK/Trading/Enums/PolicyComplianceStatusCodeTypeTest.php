<?php

use DTS\eBaySDK\Trading\Enums\PolicyComplianceStatusCodeType;

class PolicyComplianceStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PolicyComplianceStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PolicyComplianceStatusCodeType', $this->obj);
    }
}
