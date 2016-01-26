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

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $BidCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BidIncrement
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedCurrentPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CurrentPrice
 * @property \DTS\eBaySDK\Trading\Types\UserType $HighBidder
 * @property integer $LeadCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MinimumToBid
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property boolean $SecondChanceEligible
 * @property integer $BidderCount
 * @property \DTS\eBaySDK\Trading\Enums\ListingStatusCodeType $ListingStatus
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FinalValueFee
 * @property \DTS\eBaySDK\Trading\Types\PromotionalSaleDetailsType $PromotionalSaleDetails
 * @property boolean $AdminEnded
 * @property boolean $SoldAsBin
 * @property integer $QuantitySoldByPickupInStore
 * @property \DTS\eBaySDK\Trading\Types\SuggestedBidValueType $SuggestedBidValues
 */
class SellingStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ),
        'BidIncrement' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidIncrement'
        ),
        'ConvertedCurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ),
        'CurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ),
        'HighBidder' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ),
        'LeadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ),
        'MinimumToBid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ),
        'QuantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'ReserveMet' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ),
        'SecondChanceEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEligible'
        ),
        'BidderCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidderCount'
        ),
        'ListingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ),
        'FinalValueFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ),
        'PromotionalSaleDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PromotionalSaleDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleDetails'
        ),
        'AdminEnded' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdminEnded'
        ),
        'SoldAsBin' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldAsBin'
        ),
        'QuantitySoldByPickupInStore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ),
        'SuggestedBidValues' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SuggestedBidValueType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SuggestedBidValues'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
