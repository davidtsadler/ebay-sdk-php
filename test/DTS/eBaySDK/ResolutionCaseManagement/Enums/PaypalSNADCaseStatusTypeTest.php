<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType;

class PaypalSNADCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaypalSNADCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType', $this->obj);
    }
}
