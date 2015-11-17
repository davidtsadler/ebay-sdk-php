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
 * @property string $SKU
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $StartPrice
 * @property integer $Quantity
 * @property \DTS\eBaySDK\MerchantData\Types\NameValueListArrayType[] $VariationSpecifics
 * @property integer $UnitsAvailable
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $UnitCost
 * @property \DTS\eBaySDK\MerchantData\Types\SellingStatusType $SellingStatus
 * @property string $VariationTitle
 * @property string $VariationViewItemURL
 * @property boolean $Delete
 * @property \DTS\eBaySDK\MerchantData\Types\SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property integer $WatchCount
 * @property string $PrivateNotes
 * @property \DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property \DTS\eBaySDK\MerchantData\Types\VariationProductListingDetailsType $VariationProductListingDetails
 */
class VariationType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'StartPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ),
        'Quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'VariationSpecifics' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\NameValueListArrayType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        ),
        'UnitsAvailable' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitsAvailable'
        ),
        'UnitCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitCost'
        ),
        'SellingStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ),
        'VariationTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationTitle'
        ),
        'VariationViewItemURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationViewItemURL'
        ),
        'Delete' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Delete'
        ),
        'SellingManagerProductInventoryStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingManagerProductInventoryStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
        ),
        'WatchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ),
        'PrivateNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ),
        'DiscountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'VariationProductListingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VariationProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationProductListingDetails'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
