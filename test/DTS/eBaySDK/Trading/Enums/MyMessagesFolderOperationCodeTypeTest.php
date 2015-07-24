<?php

use DTS\eBaySDK\Trading\Enums\MyMessagesFolderOperationCodeType;

class MyMessagesFolderOperationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MyMessagesFolderOperationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\MyMessagesFolderOperationCodeType', $this->obj);
    }
}
