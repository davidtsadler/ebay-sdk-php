<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\SellerINREscalationReasonType;

class SellerINREscalationReasonTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerINREscalationReasonType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\SellerINREscalationReasonType', $this->obj);
    }
}
