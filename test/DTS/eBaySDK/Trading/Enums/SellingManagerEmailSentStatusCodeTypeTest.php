<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerEmailSentStatusCodeType;

class SellingManagerEmailSentStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerEmailSentStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerEmailSentStatusCodeType', $this->obj);
    }
}
