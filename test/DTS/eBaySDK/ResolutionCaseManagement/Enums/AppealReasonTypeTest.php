<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\AppealReasonType;

class AppealReasonTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AppealReasonType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\AppealReasonType', $this->obj);
    }
}
