<?php

use DTS\eBaySDK\HalfFinding\Enums\RentalDurationType;

class RentalDurationTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RentalDurationType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\RentalDurationType', $this->obj);
    }
}
