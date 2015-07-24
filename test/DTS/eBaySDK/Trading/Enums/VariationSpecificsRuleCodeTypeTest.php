<?php

use DTS\eBaySDK\Trading\Enums\VariationSpecificsRuleCodeType;

class VariationSpecificsRuleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VariationSpecificsRuleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\VariationSpecificsRuleCodeType', $this->obj);
    }
}
