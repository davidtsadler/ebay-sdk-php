<?php

use DTS\eBaySDK\Trading\Enums\FeedbackResponseCodeType;

class FeedbackResponseCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackResponseCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeedbackResponseCodeType', $this->obj);
    }
}
