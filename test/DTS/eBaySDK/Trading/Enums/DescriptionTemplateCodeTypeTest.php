<?php

use DTS\eBaySDK\Trading\Enums\DescriptionTemplateCodeType;

class DescriptionTemplateCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DescriptionTemplateCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DescriptionTemplateCodeType', $this->obj);
    }
}
