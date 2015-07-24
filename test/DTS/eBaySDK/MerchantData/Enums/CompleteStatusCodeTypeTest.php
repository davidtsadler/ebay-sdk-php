<?php

use DTS\eBaySDK\MerchantData\Enums\CompleteStatusCodeType;

class CompleteStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CompleteStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\CompleteStatusCodeType', $this->obj);
    }
}
