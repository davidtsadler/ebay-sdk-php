<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalINRCaseStatusType;

class PaypalINRCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaypalINRCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalINRCaseStatusType', $this->obj);
    }
}
