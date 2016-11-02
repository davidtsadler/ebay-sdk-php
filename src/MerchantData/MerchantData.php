<?php
namespace DTS\eBaySDK\MerchantData;

/**
 * Unlike other services there is no MerchantData service class as all operations
 * are performed via other services.
 *
 * This class is to help client code parse the XML that has been returned via an
 * attachment in a LMS response.
 */
class MerchantData
{
    /**
     * @var \DTS\eBaySDK\Parser Xml Parser. // TODO This class is not found.
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
     * @return Types\AddFixedPriceItemResponseType[]
     */
    public function addFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\AddItemResponseType[]
     */
    public function addItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\EndFixedPriceItemResponseType[]
     */
    public function endFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\EndItemResponseType[]
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
     * @return Types\OrderAckResponseType[]
     */
    public function orderAck($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->OrderAckResponse;
    }

    /**
     * @param string $xml
     * @return Types\RelistFixedPriceItemResponseType[]
     */
    public function relistFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\RelistItemResponseType[]
     */
    public function relistItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\ReviseFixedPriceItemResponseType[]
     */
    public function reviseFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\ReviseInventoryStatusResponseType[]
     */
    public function reviseInventoryStatus($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseInventoryStatusResponse;
    }

    /**
     * @param string $xml
     * @return Types\ReviseItemResponseType[]
     */
    public function reviseItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\SetShipmentTrackingInfoResponseType[]
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
     * @return Types\UploadSiteHostedPicturesResponseType[]
     */
    public function uploadSiteHostedPictures($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->UploadSiteHostedPicturesResponse;
    }

    /**
     * @param string $xml
     * @return Types\VerifyAddFixedPriceItemResponseType[]
     */
    public function verifyAddFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     * @return Types\VerifyAddItemResponseType[]
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
