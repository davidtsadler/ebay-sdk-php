<?php

use DTS\eBaySDK\Trading\Enums\DisputeSortTypeCodeType;

class DisputeSortTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeSortTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeSortTypeCodeType', $this->obj);
    }
}
