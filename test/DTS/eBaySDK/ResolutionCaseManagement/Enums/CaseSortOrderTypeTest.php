<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseSortOrderType;

class CaseSortOrderTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CaseSortOrderType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseSortOrderType', $this->obj);
    }
}
