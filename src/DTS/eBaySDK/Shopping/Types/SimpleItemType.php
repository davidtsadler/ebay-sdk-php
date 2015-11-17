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

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property boolean $BestOfferEnabled
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $BuyItNowPrice
 * @property string $Description
 * @property string $ItemID
 * @property boolean $BuyItNowAvailable
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ConvertedBuyItNowPrice
 * @property \DateTime $EndTime
 * @property \DateTime $StartTime
 * @property string $ViewItemURLForNaturalSearch
 * @property \DTS\eBaySDK\Shopping\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property \DTS\eBaySDK\Shopping\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $GalleryURL
 * @property string[] $PictureURL
 * @property string $PostalCode
 * @property string $PrimaryCategoryID
 * @property string $PrimaryCategoryName
 * @property integer $Quantity
 * @property \DTS\eBaySDK\Shopping\Types\SimpleUserType $Seller
 * @property integer $BidCount
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ConvertedCurrentPrice
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $CurrentPrice
 * @property \DTS\eBaySDK\Shopping\Types\SimpleUserType $HighBidder
 * @property \DTS\eBaySDK\Shopping\Enums\ListingStatusCodeType $ListingStatus
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\Shopping\Enums\SiteCodeType $Site
 * @property string $TimeLeft
 * @property string $Title
 * @property \DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property \DTS\eBaySDK\Shopping\Types\NameValueListArrayType $ItemSpecifics
 * @property integer $HitCount
 * @property string $Subtitle
 * @property string $PrimaryCategoryIDPath
 * @property string $SecondaryCategoryID
 * @property string $SecondaryCategoryName
 * @property string $SecondaryCategoryIDPath
 * @property \DTS\eBaySDK\Shopping\Types\CharityType $Charity
 * @property \DTS\eBaySDK\Shopping\Types\StorefrontType $Storefront
 * @property \DTS\eBaySDK\Shopping\Enums\CountryCodeType $Country
 * @property \DTS\eBaySDK\Shopping\Enums\HalfItemConditionCodeType $HalfItemCondition
 * @property string $SellerComments
 * @property \DTS\eBaySDK\Shopping\Types\ReturnPolicyType $ReturnPolicy
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $MinimumToBid
 * @property \DTS\eBaySDK\Shopping\Types\ProductIDType $ProductID
 * @property boolean $AutoPay
 * @property \DTS\eBaySDK\Shopping\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DTS\eBaySDK\Shopping\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\Shopping\Types\VariationsType $Variations
 * @property integer $HandlingTime
 * @property integer $LotSize
 * @property integer $ConditionID
 * @property string $ConditionDisplayName
 * @property \DTS\eBaySDK\Shopping\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property \DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property string[] $ExcludeShipToLocation
 * @property boolean $TopRatedListing
 * @property string $VhrUrl
 * @property boolean $VhrAvailable
 * @property \DTS\eBaySDK\Shopping\Types\QuantityInfo $QuantityInfo
 * @property \DTS\eBaySDK\Shopping\Types\UnitInfoType $UnitInfo
 * @property boolean $GlobalShipping
 * @property string $ConditionDescription
 * @property integer $ItemCompatibilityCount
 * @property \DTS\eBaySDK\Shopping\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $QuantitySoldByPickupInStore
 * @property string $SKU
 * @property boolean $NewBestOffer
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 */
class SimpleItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'BuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'BuyItNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ),
        'ConvertedBuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ),
        'EndTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ),
        'StartTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ),
        'ViewItemURLForNaturalSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ),
        'ListingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ),
        'Location' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ),
        'PaymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'GalleryURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryURL'
        ),
        'PictureURL' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PictureURL'
        ),
        'PostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'PrimaryCategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryID'
        ),
        'PrimaryCategoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryName'
        ),
        'Quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'Seller' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'BidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ),
        'ConvertedCurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ),
        'CurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ),
        'HighBidder' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ),
        'ListingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
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
        'ShipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ),
        'Site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'TimeLeft' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ),
        'Title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ),
        'ShippingCostSummary' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ),
        'ItemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'HitCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ),
        'Subtitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subtitle'
        ),
        'PrimaryCategoryIDPath' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryIDPath'
        ),
        'SecondaryCategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryID'
        ),
        'SecondaryCategoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryName'
        ),
        'SecondaryCategoryIDPath' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryIDPath'
        ),
        'Charity' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\CharityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ),
        'Storefront' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ),
        'Country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'HalfItemCondition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HalfItemCondition'
        ),
        'SellerComments' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerComments'
        ),
        'ReturnPolicy' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ),
        'MinimumToBid' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ),
        'ProductID' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'AutoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ),
        'BusinessSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'PaymentAllowedSite' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'Variations' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'HandlingTime' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTime'
        ),
        'LotSize' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ),
        'ConditionID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ),
        'ConditionDisplayName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ),
        'QuantityAvailableHint' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ),
        'QuantityThreshold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ),
        'DiscountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'ExcludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'TopRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ),
        'VhrUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VhrUrl'
        ),
        'VhrAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VhrAvailable'
        ),
        'QuantityInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\QuantityInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'UnitInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ),
        'GlobalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'ConditionDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ),
        'ItemCompatibilityCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ),
        'ItemCompatibilityList' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ItemCompatibilityListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ),
        'QuantitySoldByPickupInStore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'NewBestOffer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewBestOffer'
        ),
        'eBayNowEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ),
        'eBayNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ),
        'IgnoreQuantity' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ),
        'AvailableForPickupDropOff' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ),
        'EligibleForPickupDropOff' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
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
