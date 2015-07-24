<?php

use DTS\eBaySDK\MerchantData\Types\FeedbackRequirementsType;

class FeedbackRequirementsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackRequirementsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\FeedbackRequirementsType', $this->obj);
    }

    public function testExtendsBooleanType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BooleanType', $this->obj);
    }
}
