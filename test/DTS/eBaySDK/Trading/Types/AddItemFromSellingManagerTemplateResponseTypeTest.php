<?php

use DTS\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateResponseType;

class AddItemFromSellingManagerTemplateResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddItemFromSellingManagerTemplateResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
