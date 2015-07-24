<?php

use DTS\eBaySDK\Trading\Enums\UnpaidItemCaseStatusTypeCodeType;

class UnpaidItemCaseStatusTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UnpaidItemCaseStatusTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\UnpaidItemCaseStatusTypeCodeType', $this->obj);
    }
}
