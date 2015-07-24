<?php

use DTS\eBaySDK\Trading\Enums\SellerDashboardAlertSeverityCodeType;

class SellerDashboardAlertSeverityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerDashboardAlertSeverityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellerDashboardAlertSeverityCodeType', $this->obj);
    }
}
