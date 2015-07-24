<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\SNADCaseStatusType;

class SNADCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SNADCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\SNADCaseStatusType', $this->obj);
    }
}
