<?php

use DTS\eBaySDK\Finding\Types\FindItemsByKeywordsRequest;

class FindItemsByKeywordsRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindItemsByKeywordsRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\FindItemsByKeywordsRequest', $this->obj);
    }

    public function testExtendsBaseFindingServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest', $this->obj);
    }
}
