<?php

use DTS\eBaySDK\Finding\Enums\OutputSelectorType;

class OutputSelectorTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new OutputSelectorType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\OutputSelectorType', $this->obj);
    }
}
