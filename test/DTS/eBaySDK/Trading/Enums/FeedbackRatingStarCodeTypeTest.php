<?php

use DTS\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType;

class FeedbackRatingStarCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackRatingStarCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType', $this->obj);
    }
}
