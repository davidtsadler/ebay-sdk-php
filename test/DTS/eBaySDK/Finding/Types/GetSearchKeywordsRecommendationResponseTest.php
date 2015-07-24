<?php

use DTS\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse;

class GetSearchKeywordsRecommendationResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetSearchKeywordsRecommendationResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseServiceResponse', $this->obj);
    }
}
