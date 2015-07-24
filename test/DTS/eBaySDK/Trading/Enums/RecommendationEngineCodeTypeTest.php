<?php

use DTS\eBaySDK\Trading\Enums\RecommendationEngineCodeType;

class RecommendationEngineCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RecommendationEngineCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RecommendationEngineCodeType', $this->obj);
    }
}
