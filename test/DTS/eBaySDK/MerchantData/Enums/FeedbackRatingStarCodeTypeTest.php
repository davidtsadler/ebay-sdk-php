<?php

use DTS\eBaySDK\MerchantData\Enums\FeedbackRatingStarCodeType;

class FeedbackRatingStarCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackRatingStarCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\FeedbackRatingStarCodeType', $this->obj);
    }
}
