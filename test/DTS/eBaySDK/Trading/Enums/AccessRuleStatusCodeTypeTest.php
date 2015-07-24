<?php

use DTS\eBaySDK\Trading\Enums\AccessRuleStatusCodeType;

class AccessRuleStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AccessRuleStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AccessRuleStatusCodeType', $this->obj);
    }
}
