<?php

use DTS\eBaySDK\Trading\Enums\INEscrowWorkflowTimelineCodeType;

class INEscrowWorkflowTimelineCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new INEscrowWorkflowTimelineCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\INEscrowWorkflowTimelineCodeType', $this->obj);
    }
}
