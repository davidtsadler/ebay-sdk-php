<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\PaymentMethodType;

class PaymentMethodTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentMethodType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\PaymentMethodType', $this->obj);
    }
}
