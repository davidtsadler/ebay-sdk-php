<?php

use DTS\eBaySDK\Trading\Enums\AccessRuleCurrentStatusCodeType;

class AccessRuleCurrentStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AccessRuleCurrentStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AccessRuleCurrentStatusCodeType', $this->obj);
    }
}
