<?php

use DTS\eBaySDK\Trading\Enums\EBaySubscriptionTypeCodeType;

class EBaySubscriptionTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EBaySubscriptionTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\EBaySubscriptionTypeCodeType', $this->obj);
    }
}
