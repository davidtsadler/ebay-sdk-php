<?php
use DTS\eBaySDK\Constants\GlobalIds as GlobalIds;

class GlobalIdsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstantsAreCorrectType()
    {
        $this->assertInternalType('string', GlobalIds::US);
        $this->assertInternalType('string', GlobalIds::ENCA);
        $this->assertInternalType('string', GlobalIds::GB);
        $this->assertInternalType('string', GlobalIds::AU);
        $this->assertInternalType('string', GlobalIds::AT);
        $this->assertInternalType('string', GlobalIds::FRBE);
        $this->assertInternalType('string', GlobalIds::FR);
        $this->assertInternalType('string', GlobalIds::DE);
        $this->assertInternalType('string', GlobalIds::MOTORS);
        $this->assertInternalType('string', GlobalIds::IT);
        $this->assertInternalType('string', GlobalIds::NLBE);
        $this->assertInternalType('string', GlobalIds::NL);
        $this->assertInternalType('string', GlobalIds::ES);
        $this->assertInternalType('string', GlobalIds::CH);
        $this->assertInternalType('string', GlobalIds::HK);
        $this->assertInternalType('string', GlobalIds::IN);
        $this->assertInternalType('string', GlobalIds::IE);
        $this->assertInternalType('string', GlobalIds::MY);
        $this->assertInternalType('string', GlobalIds::FRCA);
        $this->assertInternalType('string', GlobalIds::PH);
        $this->assertInternalType('string', GlobalIds::PL);
        $this->assertInternalType('string', GlobalIds::SG);
    }

    public function testConstantsHaveCorrectValue()
    {
        $this->assertEquals('EBAY-US', GlobalIds::US);
        $this->assertEquals('EBAY-ENCA', GlobalIds::ENCA);
        $this->assertEquals('EBAY-GB', GlobalIds::GB);
        $this->assertEquals('EBAY-AU', GlobalIds::AU);
        $this->assertEquals('EBAY-AT', GlobalIds::AT);
        $this->assertEquals('EBAY-FRBE', GlobalIds::FRBE);
        $this->assertEquals('EBAY-FR', GlobalIds::FR);
        $this->assertEquals('EBAY-DE', GlobalIds::DE);
        $this->assertEquals('EBAY-MOTOR', GlobalIds::MOTORS);
        $this->assertEquals('EBAY-IT', GlobalIds::IT);
        $this->assertEquals('EBAY-NLBE', GlobalIds::NLBE);
        $this->assertEquals('EBAY-NL', GlobalIds::NL);
        $this->assertEquals('EBAY-ES', GlobalIds::ES);
        $this->assertEquals('EBAY-CH', GlobalIds::CH);
        $this->assertEquals('EBAY-HK', GlobalIds::HK);
        $this->assertEquals('EBAY-IN', GlobalIds::IN);
        $this->assertEquals('EBAY-IE', GlobalIds::IE);
        $this->assertEquals('EBAY-MY', GlobalIds::MY);
        $this->assertEquals('EBAY-FRCA', GlobalIds::FRCA);
        $this->assertEquals('EBAY-PH', GlobalIds::PH);
        $this->assertEquals('EBAY-PL', GlobalIds::PL);
        $this->assertEquals('EBAY-SG', GlobalIds::SG);
    }
}
