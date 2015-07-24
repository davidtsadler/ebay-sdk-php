<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Enums\IsoCurrencyCode;

class IsoCurrencyCodeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IsoCurrencyCode();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Enums\IsoCurrencyCode', $this->obj);
    }
}
