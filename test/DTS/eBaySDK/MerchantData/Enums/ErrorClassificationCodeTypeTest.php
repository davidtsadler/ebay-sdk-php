<?php

use DTS\eBaySDK\MerchantData\Enums\ErrorClassificationCodeType;

class ErrorClassificationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorClassificationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ErrorClassificationCodeType', $this->obj);
    }
}
