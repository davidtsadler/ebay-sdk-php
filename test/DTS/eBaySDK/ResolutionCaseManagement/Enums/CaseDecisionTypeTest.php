<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseDecisionType;

class CaseDecisionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CaseDecisionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseDecisionType', $this->obj);
    }
}
