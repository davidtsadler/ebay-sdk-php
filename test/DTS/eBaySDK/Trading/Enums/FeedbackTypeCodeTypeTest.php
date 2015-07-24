<?php

use DTS\eBaySDK\Trading\Enums\FeedbackTypeCodeType;

class FeedbackTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeedbackTypeCodeType', $this->obj);
    }
}
