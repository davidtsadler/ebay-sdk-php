<?php

use DTS\eBaySDK\MerchantData\Enums\ReviseReasonCodeType;

class ReviseReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReviseReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ReviseReasonCodeType', $this->obj);
    }
}
