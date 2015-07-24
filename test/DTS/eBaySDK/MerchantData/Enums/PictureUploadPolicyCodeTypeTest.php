<?php

use DTS\eBaySDK\MerchantData\Enums\PictureUploadPolicyCodeType;

class PictureUploadPolicyCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureUploadPolicyCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PictureUploadPolicyCodeType', $this->obj);
    }
}
