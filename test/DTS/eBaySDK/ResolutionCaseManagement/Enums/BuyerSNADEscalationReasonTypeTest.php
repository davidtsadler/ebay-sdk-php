<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\BuyerSNADEscalationReasonType;

class BuyerSNADEscalationReasonTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerSNADEscalationReasonType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\BuyerSNADEscalationReasonType', $this->obj);
    }
}
