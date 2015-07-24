<?php

use DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateResponseType;

class SaveItemToSellingManagerTemplateResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SaveItemToSellingManagerTemplateResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
