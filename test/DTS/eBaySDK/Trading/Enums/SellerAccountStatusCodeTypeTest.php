<?php

use DTS\eBaySDK\Trading\Enums\SellerAccountStatusCodeType;

class SellerAccountStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerAccountStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellerAccountStatusCodeType', $this->obj);
    }
}
