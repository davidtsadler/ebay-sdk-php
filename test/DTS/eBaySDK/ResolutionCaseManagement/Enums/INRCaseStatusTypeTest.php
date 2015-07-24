<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\INRCaseStatusType;

class INRCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new INRCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\INRCaseStatusType', $this->obj);
    }
}
