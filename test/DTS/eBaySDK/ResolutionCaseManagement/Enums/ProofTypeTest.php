<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\ProofType;

class ProofTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProofType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\ProofType', $this->obj);
    }
}
