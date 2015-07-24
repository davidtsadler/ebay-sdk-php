<?php

use DTS\eBaySDK\Shopping\Enums\CommentTypeCodeType;

class CommentTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CommentTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\CommentTypeCodeType', $this->obj);
    }
}
