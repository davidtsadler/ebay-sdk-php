<?php

use DTS\eBaySDK\Trading\Enums\ListingEnhancementDurationCodeType;

class ListingEnhancementDurationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingEnhancementDurationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ListingEnhancementDurationCodeType', $this->obj);
    }
}
