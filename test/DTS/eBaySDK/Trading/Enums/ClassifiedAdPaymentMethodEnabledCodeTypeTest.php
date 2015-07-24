<?php

use DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType;

class ClassifiedAdPaymentMethodEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ClassifiedAdPaymentMethodEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType', $this->obj);
    }
}
