<?php
namespace DTS\eBaySDK\MerchantData\Services;

/**
 * Unlike the other API's this is not a true service.
 * This class exists to help parse XML from the Bulk Data Exchange Service into the correct PHP objects.
 */
class MerchantDataService
{
    /**
     * @var \DTS\eBaySDK\Parser Xml Parser.
     */
    private $xmlParser;

    public function __construct()
    {
        $this->xmlParser = new \DTS\eBaySDK\Parser\XmlParser('\DTS\eBaySDK\MerchantData\Types\BulkDataExchangeResponsesType');
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\MerchantData\Types\BulkDataExchangeResponsesType
     */
    public function bulkDataExchangeResponses($xml)
    {
        return $this->parseXml($xml);
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType
     */
    public function activeInventoryReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ActiveInventoryReport;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function addFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function addItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function endFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function endItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType
     */
    public function feeSettlementReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->FeeSettlementReport;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function orderAck($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->OrderAckResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function relistFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function relistItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function reviseFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function reviseInventoryStatus($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseInventoryStatusResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function reviseItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function setShipmentTrackingInfo($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->SetShipmentTrackingInfoResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\MerchantData\Types\SoldReportResponseType
     */
    public function soldReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->SoldReport;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function uploadSiteHostedPictures($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->UploadSiteHostedPicturesResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function verifyAddFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return \DTS\eBaySDK\Types\UnboundType
     */
    public function verifyAddItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddItemResponse;
    }

    private function parseXml($xml)
    {
        return $this->xmlParser->parse($xml);
    }
}
