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
 * @property boolean $AutoPay
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $BestOfferEnabled
 * @property integer $BidCount
 * @property \DTS\eBaySDK\Shopping\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property boolean $BuyItNowAvailable
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $BuyItNowPrice
 * @property \DTS\eBaySDK\Shopping\Types\CharityType $Charity
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property integer $ConditionID
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ConvertedBuyItNowPrice
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ConvertedCurrentPrice
 * @property \DTS\eBaySDK\Shopping\Enums\CountryCodeType $Country
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $CurrentPrice
 * @property string $Description
 * @property \DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property boolean $EligibleForPickupDropOff
 * @property \DateTime $EndTime
 * @property string[] $ExcludeShipToLocation
 * @property string $GalleryURL
 * @property boolean $GlobalShipping
 * @property \DTS\eBaySDK\Shopping\Enums\HalfItemConditionCodeType $HalfItemCondition
 * @property integer $HandlingTime
 * @property \DTS\eBaySDK\Shopping\Types\SimpleUserType $HighBidder
 * @property integer $HitCount
 * @property boolean $IgnoreQuantity
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property integer $ItemCompatibilityCount
 * @property \DTS\eBaySDK\Shopping\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property string $ItemID
 * @property \DTS\eBaySDK\Shopping\Types\NameValueListArrayType $ItemSpecifics
 * @property \DTS\eBaySDK\Shopping\Enums\ListingStatusCodeType $ListingStatus
 * @property \DTS\eBaySDK\Shopping\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $MinimumToBid
 * @property boolean $NewBestOffer
 * @property \DTS\eBaySDK\Shopping\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DTS\eBaySDK\Shopping\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string[] $PictureURL
 * @property string $PostalCode
 * @property string $PrimaryCategoryID
 * @property string $PrimaryCategoryIDPath
 * @property string $PrimaryCategoryName
 * @property \DTS\eBaySDK\Shopping\Types\ProductIDType $ProductID
 * @property integer $Quantity
 * @property \DTS\eBaySDK\Shopping\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property \DTS\eBaySDK\Shopping\Types\QuantityInfo $QuantityInfo
 * @property integer $QuantitySold
 * @property integer $QuantitySoldByPickupInStore
 * @property integer $QuantityThreshold
 * @property boolean $ReserveMet
 * @property \DTS\eBaySDK\Shopping\Types\ReturnPolicyType $ReturnPolicy
 * @property string $SKU
 * @property string $SecondaryCategoryID
 * @property string $SecondaryCategoryIDPath
 * @property string $SecondaryCategoryName
 * @property \DTS\eBaySDK\Shopping\Types\SimpleUserType $Seller
 * @property string $SellerComments
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property \DTS\eBaySDK\Shopping\Enums\SiteCodeType $Site
 * @property \DateTime $StartTime
 * @property \DTS\eBaySDK\Shopping\Types\StorefrontType $Storefront
 * @property string $Subtitle
 * @property string $TimeLeft
 * @property string $Title
 * @property boolean $TopRatedListing
 * @property \DTS\eBaySDK\Shopping\Types\UnitInfoType $UnitInfo
 * @property \DTS\eBaySDK\Shopping\Types\VariationsType $Variations
 * @property boolean $VhrAvailable
 * @property string $VhrUrl
 * @property string $ViewItemURLForNaturalSearch
 * @property integer $WatchCount
 * @property boolean $eBayNowAvailable
 * @property boolean $eBayNowEligible
 */
class SimpleItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AutoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ),
        'AvailableForPickupDropOff' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ),
        'BestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'BidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ),
        'BusinessSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'BuyItNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ),
        'BuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ),
        'Charity' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\CharityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ),
        'ConditionDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ),
        'ConditionDisplayName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ),
        'ConditionID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ),
        'ConvertedBuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ),
        'ConvertedCurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ),
        'Country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'CurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'DiscountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'EligibleForPickupDropOff' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
        ),
        'EndTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ),
        'ExcludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'GalleryURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryURL'
        ),
        'GlobalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'HalfItemCondition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HalfItemCondition'
        ),
        'HandlingTime' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTime'
        ),
        'HighBidder' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ),
        'HitCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ),
        'IgnoreQuantity' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
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
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'ItemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'ListingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
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
        'LotSize' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ),
        'MinimumToBid' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ),
        'NewBestOffer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewBestOffer'
        ),
        'PaymentAllowedSite' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ),
        'PaymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
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
        'PrimaryCategoryIDPath' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryIDPath'
        ),
        'PrimaryCategoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryName'
        ),
        'ProductID' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'Quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'QuantityAvailableHint' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ),
        'QuantityInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\QuantityInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'QuantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'QuantitySoldByPickupInStore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ),
        'QuantityThreshold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ),
        'ReserveMet' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ),
        'ReturnPolicy' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'SecondaryCategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryID'
        ),
        'SecondaryCategoryIDPath' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryIDPath'
        ),
        'SecondaryCategoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryName'
        ),
        'Seller' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'SellerComments' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerComments'
        ),
        'ShipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ),
        'ShippingCostSummary' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ),
        'Site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'StartTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ),
        'Storefront' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ),
        'Subtitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subtitle'
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
        'TopRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ),
        'UnitInfo' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ),
        'Variations' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'VhrAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VhrAvailable'
        ),
        'VhrUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VhrUrl'
        ),
        'ViewItemURLForNaturalSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ),
        'WatchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ),
        'eBayNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ),
        'eBayNowEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
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
