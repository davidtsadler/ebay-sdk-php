<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseUserRoleType;

class CaseUserRoleTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CaseUserRoleType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseUserRoleType', $this->obj);
    }
}
