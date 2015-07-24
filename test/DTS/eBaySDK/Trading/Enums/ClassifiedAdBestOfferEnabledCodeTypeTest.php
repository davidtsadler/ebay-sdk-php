<?php

use DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType;

class ClassifiedAdBestOfferEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ClassifiedAdBestOfferEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType', $this->obj);
    }
}
