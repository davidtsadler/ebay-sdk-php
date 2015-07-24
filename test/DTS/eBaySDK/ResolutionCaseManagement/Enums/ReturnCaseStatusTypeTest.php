<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\ReturnCaseStatusType;

class ReturnCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\ReturnCaseStatusType', $this->obj);
    }
}
