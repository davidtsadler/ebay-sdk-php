<?php

use DTS\eBaySDK\MerchantData\Enums\PictureWatermarkCodeType;

class PictureWatermarkCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureWatermarkCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PictureWatermarkCodeType', $this->obj);
    }
}
