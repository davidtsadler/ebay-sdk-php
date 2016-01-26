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
 * @property string $ApplicationData
 * @property \DTS\eBaySDK\Trading\Types\AttributeArrayType $AttributeArray
 * @property boolean $AutoPay
 * @property \DTS\eBaySDK\Trading\Types\PaymentDetailsType $PaymentDetails
 * @property \DTS\eBaySDK\Trading\Types\BiddingDetailsType $BiddingDetails
 * @property boolean $MotorsGermanySearchable
 * @property \DTS\eBaySDK\Trading\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BuyItNowPrice
 * @property boolean $CategoryMappingAllowed
 * @property \DTS\eBaySDK\Trading\Types\CharityType $Charity
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $Country
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DTS\eBaySDK\Trading\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property \DTS\eBaySDK\Trading\Types\DistanceType $Distance
 * @property integer $GiftIcon
 * @property \DTS\eBaySDK\Trading\Enums\GiftServicesCodeType[] $GiftServices
 * @property \DTS\eBaySDK\Trading\Enums\HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Types\ListingDetailsType $ListingDetails
 * @property \DTS\eBaySDK\Trading\Types\ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property \DTS\eBaySDK\Trading\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DTS\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property \DTS\eBaySDK\Trading\Types\CategoryType $PrimaryCategory
 * @property boolean $PrivateListing
 * @property \DTS\eBaySDK\Trading\Types\ProductListingDetailsType $ProductListingDetails
 * @property integer $Quantity
 * @property string $PrivateNotes
 * @property string $RegionID
 * @property boolean $RelistLink
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ReservePrice
 * @property \DTS\eBaySDK\Trading\Types\ReviseStatusType $ReviseStatus
 * @property \DateTime $ScheduleTime
 * @property \DTS\eBaySDK\Trading\Types\CategoryType $SecondaryCategory
 * @property \DTS\eBaySDK\Trading\Types\CategoryType $FreeAddedCategory
 * @property \DTS\eBaySDK\Trading\Types\UserType $Seller
 * @property \DTS\eBaySDK\Trading\Types\SellingStatusType $SellingStatus
 * @property \DTS\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $Site
 * @property \DTS\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\Trading\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property \DTS\eBaySDK\Trading\Types\VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property integer $WatchCount
 * @property integer $HitCount
 * @property boolean $DisableBuyerRequirements
 * @property \DTS\eBaySDK\Trading\Types\BestOfferDetailsType $BestOfferDetails
 * @property boolean $LocationDefaulted
 * @property boolean $ThirdPartyCheckout
 * @property boolean $UseTaxTable
 * @property boolean $BuyerResponsibleForShipping
 * @property string $eBayNotes
 * @property integer $QuestionCount
 * @property boolean $Relisted
 * @property integer $QuantityAvailable
 * @property string $SKU
 * @property boolean $CategoryBasedAttributesPrefill
 * @property \DTS\eBaySDK\Trading\Types\SearchDetailsType $SearchDetails
 * @property string $PostalCode
 * @property boolean $ShippingTermsInDescription
 * @property string $SellerInventoryID
 * @property \DTS\eBaySDK\Trading\Types\PictureDetailsType $PictureDetails
 * @property integer $DispatchTimeMax
 * @property boolean $SkypeEnabled
 * @property string $SkypeID
 * @property \DTS\eBaySDK\Trading\Enums\SkypeContactOptionCodeType[] $SkypeContactOption
 * @property boolean $BestOfferEnabled
 * @property boolean $LocalListing
 * @property boolean $ThirdPartyCheckoutIntegration
 * @property \DTS\eBaySDK\Trading\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DTS\eBaySDK\Trading\Types\AddressType $SellerContactDetails
 * @property integer $TotalQuestionCount
 * @property boolean $ProxyItem
 * @property \DTS\eBaySDK\Trading\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property integer $LeadCount
 * @property integer $NewLeadCount
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType $ItemSpecifics
 * @property string $GroupCategoryID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ClassifiedAdPayPerLeadFee
 * @property \DTS\eBaySDK\Trading\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DTS\eBaySDK\Trading\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $UpdateSellerInfo
 * @property boolean $UpdateReturnPolicy
 * @property \DTS\eBaySDK\Trading\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property \DTS\eBaySDK\Trading\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\Trading\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property \DTS\eBaySDK\Trading\Types\ReturnPolicyType $ReturnPolicy
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DTS\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\Trading\Types\VariationsType $Variations
 * @property \DTS\eBaySDK\Trading\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $ItemCompatibilityCount
 * @property integer $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property \DTS\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property boolean $PostCheckoutExperienceEnabled
 * @property \DTS\eBaySDK\Trading\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property boolean $UseRecommendedProduct
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VINLink
 * @property string $VRM
 * @property string $VRMLink
 * @property \DTS\eBaySDK\Trading\Types\QuantityInfoType $QuantityInfo
 * @property \DTS\eBaySDK\Trading\Types\SellerProfilesType $SellerProfiles
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property \DTS\eBaySDK\Trading\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property boolean $TopRatedListing
 * @property \DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FloorPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CeilingPrice
 * @property boolean $IsIntermediatedShippingEligible
 * @property \DTS\eBaySDK\Trading\Types\UnitInfoType $UnitInfo
 * @property integer $RelistParentID
 * @property string $ConditionDefinition
 * @property boolean $HideFromSearch
 * @property \DTS\eBaySDK\Trading\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property boolean $IncludeRecommendations
 * @property \DTS\eBaySDK\Trading\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 * @property boolean $LiveAuction
 * @property \DTS\eBaySDK\Trading\Types\DigitalGoodInfoType $DigitalGoodInfo
 * @property boolean $eBayPlus
 * @property boolean $eBayPlusEligible
 * @property boolean $eMailDeliveryAvailable
 */
class ItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ApplicationData' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationData'
        ),
        'AttributeArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AttributeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeArray'
        ),
        'AutoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ),
        'PaymentDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ),
        'BiddingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BiddingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingDetails'
        ),
        'MotorsGermanySearchable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsGermanySearchable'
        ),
        'BuyerProtection' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerProtection'
        ),
        'BuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ),
        'CategoryMappingAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryMappingAllowed'
        ),
        'Charity' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ),
        'Country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'Currency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'DescriptionReviseMode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DescriptionReviseMode'
        ),
        'Distance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DistanceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Distance'
        ),
        'GiftIcon' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GiftIcon'
        ),
        'GiftServices' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'GiftServices'
        ),
        'HitCounter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCounter'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'ListingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ),
        'ListingDesigner' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDesignerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDesigner'
        ),
        'ListingDuration' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ),
        'ListingEnhancement' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingEnhancement'
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
        'PaymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'PayPalEmailAddress' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ),
        'PrimaryCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategory'
        ),
        'PrivateListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateListing'
        ),
        'ProductListingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ),
        'Quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'PrivateNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ),
        'RegionID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegionID'
        ),
        'RelistLink' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistLink'
        ),
        'ReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ),
        'ReviseStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReviseStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseStatus'
        ),
        'ScheduleTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ),
        'SecondaryCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ),
        'FreeAddedCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ),
        'Seller' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'SellingStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
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
        'StartPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ),
        'Storefront' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ),
        'SubTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubTitle'
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
        'UUID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ),
        'VATDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VATDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
        ),
        'SellerVacationNote' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerVacationNote'
        ),
        'WatchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ),
        'HitCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ),
        'DisableBuyerRequirements' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisableBuyerRequirements'
        ),
        'BestOfferDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ),
        'LocationDefaulted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocationDefaulted'
        ),
        'ThirdPartyCheckout' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckout'
        ),
        'UseTaxTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseTaxTable'
        ),
        'BuyerResponsibleForShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ),
        'eBayNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNotes'
        ),
        'QuestionCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionCount'
        ),
        'Relisted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ),
        'QuantityAvailable' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'CategoryBasedAttributesPrefill' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryBasedAttributesPrefill'
        ),
        'SearchDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SearchDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchDetails'
        ),
        'PostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'ShippingTermsInDescription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsInDescription'
        ),
        'SellerInventoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ),
        'PictureDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PictureDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureDetails'
        ),
        'DispatchTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DispatchTimeMax'
        ),
        'SkypeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeEnabled'
        ),
        'SkypeID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ),
        'SkypeContactOption' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SkypeContactOption'
        ),
        'BestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'LocalListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListing'
        ),
        'ThirdPartyCheckoutIntegration' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckoutIntegration'
        ),
        'ListingCheckoutRedirectPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ),
        'SellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetails'
        ),
        'TotalQuestionCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalQuestionCount'
        ),
        'ProxyItem' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProxyItem'
        ),
        'ExtendedSellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExtendedContactDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedSellerContactDetails'
        ),
        'LeadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ),
        'NewLeadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewLeadCount'
        ),
        'ItemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'GroupCategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GroupCategoryID'
        ),
        'ClassifiedAdPayPerLeadFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadFee'
        ),
        'ApplyBuyerProtection' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerProtectionDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplyBuyerProtection'
        ),
        'ListingSubtype2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingSubtype2'
        ),
        'MechanicalCheckAccepted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MechanicalCheckAccepted'
        ),
        'UpdateSellerInfo' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateSellerInfo'
        ),
        'UpdateReturnPolicy' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateReturnPolicy'
        ),
        'ItemPolicyViolation' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemPolicyViolationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPolicyViolation'
        ),
        'CrossBorderTrade' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CrossBorderTrade'
        ),
        'BusinessSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'BuyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'BuyerRequirementDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerRequirementDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ),
        'ReturnPolicy' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ),
        'PaymentAllowedSite' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ),
        'InventoryTrackingMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'Variations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'ItemCompatibilityList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemCompatibilityListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ),
        'ItemCompatibilityCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ),
        'ConditionID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
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
        'TaxCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
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
        'PostCheckoutExperienceEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostCheckoutExperienceEnabled'
        ),
        'DiscountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'UseRecommendedProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseRecommendedProduct'
        ),
        'SellerProvidedTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitle'
        ),
        'VIN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VIN'
        ),
        'VINLink' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINLink'
        ),
        'VRM' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRM'
        ),
        'VRMLink' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRMLink'
        ),
        'QuantityInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\QuantityInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'SellerProfiles' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProfilesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ),
        'ShippingServiceCostOverrideList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ),
        'ShippingPackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipPackageDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ),
        'TopRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ),
        'QuantityRestrictionPerBuyer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ),
        'FloorPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ),
        'CeilingPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CeilingPrice'
        ),
        'IsIntermediatedShippingEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsIntermediatedShippingEligible'
        ),
        'UnitInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ),
        'RelistParentID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistParentID'
        ),
        'ConditionDefinition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDefinition'
        ),
        'HideFromSearch' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideFromSearch'
        ),
        'ReasonHideFromSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReasonHideFromSearch'
        ),
        'IncludeRecommendations' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeRecommendations'
        ),
        'PickupInStoreDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupInStoreDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupInStoreDetails'
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
        ),
        'LiveAuction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LiveAuction'
        ),
        'DigitalGoodInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DigitalGoodInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DigitalGoodInfo'
        ),
        'eBayPlus' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPlus'
        ),
        'eBayPlusEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusEligible'
        ),
        'eMailDeliveryAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eMailDeliveryAvailable'
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
