<?php

use DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderResponseType;

class MoveSellingManagerInventoryFolderResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MoveSellingManagerInventoryFolderResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
