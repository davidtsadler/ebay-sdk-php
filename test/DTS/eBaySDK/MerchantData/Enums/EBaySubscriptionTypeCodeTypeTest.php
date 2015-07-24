<?php

use DTS\eBaySDK\MerchantData\Enums\EBaySubscriptionTypeCodeType;

class EBaySubscriptionTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EBaySubscriptionTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\EBaySubscriptionTypeCodeType', $this->obj);
    }
}
