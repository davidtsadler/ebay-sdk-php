<?php

use DTS\eBaySDK\Trading\Enums\SetUserNotesActionCodeType;

class SetUserNotesActionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SetUserNotesActionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SetUserNotesActionCodeType', $this->obj);
    }
}
