<?php
use DTS\eBaySDK\Constants\SiteIds as SiteIds;

class SiteIdsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstantsAreCorrectType()
    {
        $this->assertInternalType('integer', SiteIds::US);
        $this->assertInternalType('integer', SiteIds::ENCA);
        $this->assertInternalType('integer', SiteIds::GB);
        $this->assertInternalType('integer', SiteIds::AU);
        $this->assertInternalType('integer', SiteIds::AT);
        $this->assertInternalType('integer', SiteIds::FRBE);
        $this->assertInternalType('integer', SiteIds::FR);
        $this->assertInternalType('integer', SiteIds::DE);
        $this->assertInternalType('integer', SiteIds::MOTORS);
        $this->assertInternalType('integer', SiteIds::IT);
        $this->assertInternalType('integer', SiteIds::NLBE);
        $this->assertInternalType('integer', SiteIds::NL);
        $this->assertInternalType('integer', SiteIds::ES);
        $this->assertInternalType('integer', SiteIds::CH);
        $this->assertInternalType('integer', SiteIds::HK);
        $this->assertInternalType('integer', SiteIds::IN);
        $this->assertInternalType('integer', SiteIds::IE);
        $this->assertInternalType('integer', SiteIds::MY);
        $this->assertInternalType('integer', SiteIds::FRCA);
        $this->assertInternalType('integer', SiteIds::PH);
        $this->assertInternalType('integer', SiteIds::PL);
        $this->assertInternalType('integer', SiteIds::SG);
    }

    public function testConstantsHaveCorrectValue()
    {
        $this->assertEquals(0, SiteIds::US);
        $this->assertEquals(2, SiteIds::ENCA);
        $this->assertEquals(3, SiteIds::GB);
        $this->assertEquals(15, SiteIds::AU);
        $this->assertEquals(16, SiteIds::AT);
        $this->assertEquals(23, SiteIds::FRBE);
        $this->assertEquals(71, SiteIds::FR);
        $this->assertEquals(77, SiteIds::DE);
        $this->assertEquals(100, SiteIds::MOTORS);
        $this->assertEquals(101, SiteIds::IT);
        $this->assertEquals(123, SiteIds::NLBE);
        $this->assertEquals(146, SiteIds::NL);
        $this->assertEquals(186, SiteIds::ES);
        $this->assertEquals(193, SiteIds::CH);
        $this->assertEquals(201, SiteIds::HK);
        $this->assertEquals(203, SiteIds::IN);
        $this->assertEquals(205, SiteIds::IE);
        $this->assertEquals(207, SiteIds::MY);
        $this->assertEquals(210, SiteIds::FRCA);
        $this->assertEquals(211, SiteIds::PH);
        $this->assertEquals(212, SiteIds::PL);
        $this->assertEquals(216, SiteIds::SG);
    }
}
