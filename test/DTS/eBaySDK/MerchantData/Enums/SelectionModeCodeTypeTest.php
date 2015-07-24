<?php

use DTS\eBaySDK\MerchantData\Enums\SelectionModeCodeType;

class SelectionModeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SelectionModeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\SelectionModeCodeType', $this->obj);
    }
}
