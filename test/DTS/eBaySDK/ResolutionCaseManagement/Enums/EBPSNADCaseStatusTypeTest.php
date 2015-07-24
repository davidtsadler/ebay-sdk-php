<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\EBPSNADCaseStatusType;

class EBPSNADCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EBPSNADCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\EBPSNADCaseStatusType', $this->obj);
    }
}
