<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\UPICaseStatusType;

class UPICaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UPICaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\UPICaseStatusType', $this->obj);
    }
}
