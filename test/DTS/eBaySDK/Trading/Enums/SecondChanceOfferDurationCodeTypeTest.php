<?php

use DTS\eBaySDK\Trading\Enums\SecondChanceOfferDurationCodeType;

class SecondChanceOfferDurationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SecondChanceOfferDurationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SecondChanceOfferDurationCodeType', $this->obj);
    }
}
