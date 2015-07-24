<?php

use DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType;

class VariationPictureRuleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VariationPictureRuleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType', $this->obj);
    }
}
