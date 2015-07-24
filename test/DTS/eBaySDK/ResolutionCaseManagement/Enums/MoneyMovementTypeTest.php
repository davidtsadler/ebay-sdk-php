<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementType;

class MoneyMovementTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MoneyMovementType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementType', $this->obj);
    }
}
