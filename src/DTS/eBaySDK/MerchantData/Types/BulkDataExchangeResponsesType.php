<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType $ActiveInventoryReport
 * @property \DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType[] $AddFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\AddItemResponseType[] $AddItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType[] $EndFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\EndItemResponseType[] $EndItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType $FeeSettlementReport
 * @property \DTS\eBaySDK\MerchantData\Types\OrderAckResponseType[] $OrderAckResponse
 * @property \DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType[] $RelistFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\RelistItemResponseType[] $RelistItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType[] $ReviseFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType[] $ReviseInventoryStatusResponse
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType[] $ReviseItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType[] $SetShipmentTrackingInfoResponse
 * @property \DTS\eBaySDK\MerchantData\Types\SoldReportResponseType $SoldReport
 * @property \DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType[] $UploadSiteHostedPicturesResponse
 * @property \DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType[] $VerifyAddFixedPriceItemResponse
 * @property \DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType[] $VerifyAddItemResponse
 */
class BulkDataExchangeResponsesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ActiveInventoryReport' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActiveInventoryReport'
        ),
        'AddFixedPriceItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AddFixedPriceItemResponse'
        ),
        'AddItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AddItemResponse'
        ),
        'EndFixedPriceItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'EndFixedPriceItemResponse'
        ),
        'EndItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\EndItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'EndItemResponse'
        ),
        'FeeSettlementReport' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeSettlementReport'
        ),
        'OrderAckResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderAckResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'OrderAckResponse'
        ),
        'RelistFixedPriceItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RelistFixedPriceItemResponse'
        ),
        'RelistItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelistItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RelistItemResponse'
        ),
        'ReviseFixedPriceItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReviseFixedPriceItemResponse'
        ),
        'ReviseInventoryStatusResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReviseInventoryStatusResponse'
        ),
        'ReviseItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReviseItemResponse'
        ),
        'SetShipmentTrackingInfoResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SetShipmentTrackingInfoResponse'
        ),
        'SoldReport' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SoldReportResponseType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldReport'
        ),
        'UploadSiteHostedPicturesResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UploadSiteHostedPicturesResponse'
        ),
        'VerifyAddFixedPriceItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddFixedPriceItemResponse'
        ),
        'VerifyAddItemResponse' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddItemResponse'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeResponses';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
