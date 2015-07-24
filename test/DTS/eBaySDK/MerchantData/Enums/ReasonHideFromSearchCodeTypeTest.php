<?php

use DTS\eBaySDK\MerchantData\Enums\ReasonHideFromSearchCodeType;

class ReasonHideFromSearchCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReasonHideFromSearchCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ReasonHideFromSearchCodeType', $this->obj);
    }
}
