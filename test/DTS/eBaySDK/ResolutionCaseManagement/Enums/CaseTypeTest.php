<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseType;

class CaseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CaseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseType', $this->obj);
    }
}
