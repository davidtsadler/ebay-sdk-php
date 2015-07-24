<?php

use DTS\eBaySDK\Trading\Enums\DisputeExplanationCodeType;

class DisputeExplanationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeExplanationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeExplanationCodeType', $this->obj);
    }
}
