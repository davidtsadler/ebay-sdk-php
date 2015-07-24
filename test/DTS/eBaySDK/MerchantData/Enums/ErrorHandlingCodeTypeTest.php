<?php

use DTS\eBaySDK\MerchantData\Enums\ErrorHandlingCodeType;

class ErrorHandlingCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorHandlingCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ErrorHandlingCodeType', $this->obj);
    }
}
