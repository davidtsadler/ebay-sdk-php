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
 * @property \DTS\eBaySDK\MerchantData\Types\MerchantDataRequestHeaderType $Header
 * @property \DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemRequestType[] $AddFixedPriceItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\AddItemRequestType[] $AddItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemRequestType[] $EndFixedPriceItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\EndItemRequestType[] $EndItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\OrderAckRequestType[] $OrderAckRequest
 * @property \DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemRequestType[] $RelistFixedPriceItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\RelistItemRequestType[] $RelistItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemRequestType[] $ReviseFixedPriceItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType[] $ReviseInventoryStatusRequest
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseItemRequestType[] $ReviseItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoRequestType[] $SetShipmentTrackingInfoRequest
 * @property \DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType[] $UploadSiteHostedPicturesRequest
 * @property \DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType[] $VerifyAddFixedPriceItemRequest
 * @property \DTS\eBaySDK\MerchantData\Types\VerifyAddItemRequestType[] $VerifyAddItemRequest
 */
class BulkDataExchangeRequestsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Header' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MerchantDataRequestHeaderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Header'
        ),
        'AddFixedPriceItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AddFixedPriceItemRequest'
        ),
        'AddItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AddItemRequest'
        ),
        'EndFixedPriceItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'EndFixedPriceItemRequest'
        ),
        'EndItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\EndItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'EndItemRequest'
        ),
        'OrderAckRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderAckRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'OrderAckRequest'
        ),
        'RelistFixedPriceItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RelistFixedPriceItemRequest'
        ),
        'RelistItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelistItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RelistItemRequest'
        ),
        'ReviseFixedPriceItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReviseFixedPriceItemRequest'
        ),
        'ReviseInventoryStatusRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReviseInventoryStatusRequest'
        ),
        'ReviseItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReviseItemRequest'
        ),
        'SetShipmentTrackingInfoRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SetShipmentTrackingInfoRequest'
        ),
        'UploadSiteHostedPicturesRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UploadSiteHostedPicturesRequest'
        ),
        'VerifyAddFixedPriceItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddFixedPriceItemRequest'
        ),
        'VerifyAddItemRequest' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VerifyAddItemRequestType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddItemRequest'
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
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeRequests';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
