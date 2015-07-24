<?php

use DTS\eBaySDK\MerchantData\Enums\ItemSpecificSourceCodeType;

class ItemSpecificSourceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemSpecificSourceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ItemSpecificSourceCodeType', $this->obj);
    }
}
