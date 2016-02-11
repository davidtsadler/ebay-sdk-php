<?php
namespace DTS\eBaySDK\MerchantData\Services\Test;

use DTS\eBaySDK\MerchantData\Services\MerchantDataService;

class MerchantDataServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service = new MerchantDataService();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Services\MerchantDataService', $this->service);
    }

    public function testActiveInventoryReport()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/ActiveInventoryReport.xml');
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType', $this->service->activeInventoryReport($xml));
    }

    public function testAddFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/AddFixedPriceItem.xml');
        $responses = $this->service->addFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType', $response);
        }
    }

    public function testAddItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/AddItem.xml');
        $responses = $this->service->addItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AddItemResponseType', $response);
        }
    }

    public function testEndFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/EndFixedPriceItem.xml');
        $responses = $this->service->endFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType', $response);
        }
    }

    public function testEndItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/EndItem.xml');
        $responses = $this->service->endItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\EndItemResponseType', $response);
        }
    }

    public function testFeeSettlementReport()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/FeeSettlementReport.xml');
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType', $this->service->feeSettlementReport($xml));
    }

    public function testOrderAck()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/OrderAck.xml');
        $responses = $this->service->orderAck($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\OrderAckResponseType', $response);
        }
    }

    public function testRelistFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/RelistFixedPriceItem.xml');
        $responses = $this->service->relistFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType', $response);
        }
    }

    public function testRelistItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/RelistItem.xml');
        $responses = $this->service->relistItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\RelistItemResponseType', $response);
        }
    }

    public function testReviseFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/ReviseFixedPriceItem.xml');
        $responses = $this->service->reviseFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType', $response);
        }
    }

    public function testReviseInventoryStatus()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/ReviseInventoryStatus.xml');
        $responses = $this->service->reviseInventoryStatus($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType', $response);
        }
    }

    public function testReviseItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/ReviseItem.xml');
        $responses = $this->service->reviseItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType', $response);
        }
    }

    public function testSetShipmentTrackingInfo()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/SetShipmentTrackingInfo.xml');
        $responses = $this->service->setShipmentTrackingInfo($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType', $response);
        }
    }

    public function testSoldReport()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/SoldReport.xml');
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\SoldReportResponseType', $this->service->soldReport($xml));
    }

    public function testUploadSiteHostedPictures()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/UploadSiteHostedPictures.xml');
        $responses = $this->service->uploadSiteHostedPictures($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType', $response);
        }
    }

    public function testVerifyAddFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/VerifyAddFixedPriceItem.xml');
        $responses = $this->service->verifyAddFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType', $response);
        }
    }

    public function testVerifyAddItem()
    {
        $xml = file_get_contents(__DIR__.'/../Mocks/VerifyAddItem.xml');
        $responses = $this->service->verifyAddItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\UnboundType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType', $response);
        }
    }
}
