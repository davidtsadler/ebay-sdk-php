<?php

use DTS\eBaySDK\Trading\Enums\QuestionTypeCodeType;

class QuestionTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuestionTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\QuestionTypeCodeType', $this->obj);
    }
}
