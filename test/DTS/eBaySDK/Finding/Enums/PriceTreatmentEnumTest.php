<?php

use DTS\eBaySDK\Finding\Enums\PriceTreatmentEnum;

class PriceTreatmentEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PriceTreatmentEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\PriceTreatmentEnum', $this->obj);
    }
}
