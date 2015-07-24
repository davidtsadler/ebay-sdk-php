<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseStatusInputType;

class CaseStatusInputTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CaseStatusInputType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseStatusInputType', $this->obj);
    }
}
