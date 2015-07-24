<?php

use DTS\eBaySDK\MerchantData\Enums\PictureSourceCodeType;

class PictureSourceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureSourceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PictureSourceCodeType', $this->obj);
    }
}
