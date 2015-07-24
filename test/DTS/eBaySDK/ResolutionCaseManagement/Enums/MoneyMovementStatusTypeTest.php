<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementStatusType;

class MoneyMovementStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MoneyMovementStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementStatusType', $this->obj);
    }
}
