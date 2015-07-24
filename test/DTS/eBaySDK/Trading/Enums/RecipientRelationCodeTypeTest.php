<?php

use DTS\eBaySDK\Trading\Enums\RecipientRelationCodeType;

class RecipientRelationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RecipientRelationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RecipientRelationCodeType', $this->obj);
    }
}
