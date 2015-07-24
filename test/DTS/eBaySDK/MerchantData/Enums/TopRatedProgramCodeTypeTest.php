<?php

use DTS\eBaySDK\MerchantData\Enums\TopRatedProgramCodeType;

class TopRatedProgramCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TopRatedProgramCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TopRatedProgramCodeType', $this->obj);
    }
}
