<?php

use DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType;

class ProfileCategoryGroupCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProfileCategoryGroupCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType', $this->obj);
    }
}
