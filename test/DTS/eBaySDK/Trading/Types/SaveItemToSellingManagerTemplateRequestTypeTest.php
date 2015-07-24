<?php

use DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateRequestType;

class SaveItemToSellingManagerTemplateRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SaveItemToSellingManagerTemplateRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
