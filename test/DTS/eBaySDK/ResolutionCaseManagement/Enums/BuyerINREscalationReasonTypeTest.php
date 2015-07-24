<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\BuyerINREscalationReasonType;

class BuyerINREscalationReasonTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerINREscalationReasonType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\BuyerINREscalationReasonType', $this->obj);
    }
}
