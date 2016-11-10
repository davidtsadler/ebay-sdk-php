<?php
namespace DTS\eBaySDK\Constants\Test;

use DTS\eBaySDK\Constants\MarketplaceIds as MarketplaceIds;

class MarketplaceIdsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstantsAreCorrectType()
    {
        $this->assertInternalType('string', MarketplaceIds::US);
        $this->assertInternalType('string', MarketplaceIds::CA);
        $this->assertInternalType('string', MarketplaceIds::GB);
        $this->assertInternalType('string', MarketplaceIds::AU);
        $this->assertInternalType('string', MarketplaceIds::AT);
        $this->assertInternalType('string', MarketplaceIds::BE);
        $this->assertInternalType('string', MarketplaceIds::FR);
        $this->assertInternalType('string', MarketplaceIds::DE);
        $this->assertInternalType('string', MarketplaceIds::MOTORS);
        $this->assertInternalType('string', MarketplaceIds::IT);
        $this->assertInternalType('string', MarketplaceIds::NL);
        $this->assertInternalType('string', MarketplaceIds::ES);
        $this->assertInternalType('string', MarketplaceIds::CH);
        $this->assertInternalType('string', MarketplaceIds::HK);
        $this->assertInternalType('string', MarketplaceIds::IN);
        $this->assertInternalType('string', MarketplaceIds::IE);
        $this->assertInternalType('string', MarketplaceIds::MY);
        $this->assertInternalType('string', MarketplaceIds::PH);
        $this->assertInternalType('string', MarketplaceIds::PL);
        $this->assertInternalType('string', MarketplaceIds::SG);
        $this->assertInternalType('string', MarketplaceIds::CN);
    }

    public function testConstantsHaveCorrectValue()
    {
        $this->assertEquals('EBAY-US', MarketplaceIds::US);
        $this->assertEquals('EBAY-CA', MarketplaceIds::CA);
        $this->assertEquals('EBAY-GB', MarketplaceIds::GB);
        $this->assertEquals('EBAY-AU', MarketplaceIds::AU);
        $this->assertEquals('EBAY-AT', MarketplaceIds::AT);
        $this->assertEquals('EBAY-BE', MarketplaceIds::BE);
        $this->assertEquals('EBAY-FR', MarketplaceIds::FR);
        $this->assertEquals('EBAY-DE', MarketplaceIds::DE);
        $this->assertEquals('EBAY-US.MOTORS', MarketplaceIds::MOTORS);
        $this->assertEquals('EBAY-IT', MarketplaceIds::IT);
        $this->assertEquals('EBAY-NL', MarketplaceIds::NL);
        $this->assertEquals('EBAY-ES', MarketplaceIds::ES);
        $this->assertEquals('EBAY-CH', MarketplaceIds::CH);
        $this->assertEquals('EBAY-HK', MarketplaceIds::HK);
        $this->assertEquals('EBAY-IN', MarketplaceIds::IN);
        $this->assertEquals('EBAY-IE', MarketplaceIds::IE);
        $this->assertEquals('EBAY-MY', MarketplaceIds::MY);
        $this->assertEquals('EBAY-PH', MarketplaceIds::PH);
        $this->assertEquals('EBAY-PL', MarketplaceIds::PL);
        $this->assertEquals('EBAY-SG', MarketplaceIds::SG);
        $this->assertEquals('EBAY-CN', MarketplaceIds::CN);
    }
}
