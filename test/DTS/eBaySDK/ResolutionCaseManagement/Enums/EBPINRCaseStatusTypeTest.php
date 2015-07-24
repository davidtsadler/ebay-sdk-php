<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\EBPINRCaseStatusType;

class EBPINRCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EBPINRCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\EBPINRCaseStatusType', $this->obj);
    }
}
