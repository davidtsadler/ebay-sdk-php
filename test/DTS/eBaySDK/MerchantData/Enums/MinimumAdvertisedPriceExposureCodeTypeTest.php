<?php

use DTS\eBaySDK\MerchantData\Enums\MinimumAdvertisedPriceExposureCodeType;

class MinimumAdvertisedPriceExposureCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MinimumAdvertisedPriceExposureCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\MinimumAdvertisedPriceExposureCodeType', $this->obj);
    }
}
