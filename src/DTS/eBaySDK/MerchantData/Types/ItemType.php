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
 * @property string $ApplicationData
 * @property \DTS\eBaySDK\MerchantData\Types\AttributeSetArrayType $AttributeSetArray
 * @property \DTS\eBaySDK\MerchantData\Types\AttributeArrayType $AttributeArray
 * @property \DTS\eBaySDK\MerchantData\Types\LookupAttributeArrayType $LookupAttributeArray
 * @property boolean $AutoPay
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentDetailsType $PaymentDetails
 * @property \DTS\eBaySDK\MerchantData\Types\BiddingDetailsType $BiddingDetails
 * @property boolean $MotorsGermanySearchable
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyItNowPrice
 * @property boolean $CategoryMappingAllowed
 * @property \DTS\eBaySDK\MerchantData\Types\CharityType $Charity
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $Country
 * @property \DTS\eBaySDK\MerchantData\Types\CrossPromotionsType $CrossPromotion
 * @property \DTS\eBaySDK\MerchantData\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DTS\eBaySDK\MerchantData\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property \DTS\eBaySDK\MerchantData\Types\DistanceType $Distance
 * @property integer $GiftIcon
 * @property \DTS\eBaySDK\MerchantData\Enums\GiftServicesCodeType[] $GiftServices
 * @property \DTS\eBaySDK\MerchantData\Enums\HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDetailsType $ListingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property string $PartnerCode
 * @property string $PartnerName
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $PrimaryCategory
 * @property boolean $PrivateListing
 * @property \DTS\eBaySDK\MerchantData\Types\ProductListingDetailsType $ProductListingDetails
 * @property integer $Quantity
 * @property string $PrivateNotes
 * @property string $RegionID
 * @property boolean $RelistLink
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ReservePrice
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseStatusType $ReviseStatus
 * @property \DateTime $ScheduleTime
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $SecondaryCategory
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $FreeAddedCategory
 * @property \DTS\eBaySDK\MerchantData\Types\UserType $Seller
 * @property \DTS\eBaySDK\MerchantData\Types\SellingStatusType $SellingStatus
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $Site
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\MerchantData\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property \DTS\eBaySDK\MerchantData\Types\VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property integer $WatchCount
 * @property integer $HitCount
 * @property boolean $DisableBuyerRequirements
 * @property \DTS\eBaySDK\MerchantData\Types\BestOfferDetailsType $BestOfferDetails
 * @property boolean $LocationDefaulted
 * @property boolean $ThirdPartyCheckout
 * @property boolean $UseTaxTable
 * @property boolean $GetItFast
 * @property boolean $BuyerResponsibleForShipping
 * @property boolean $LimitedWarrantyEligible
 * @property string $eBayNotes
 * @property integer $QuestionCount
 * @property boolean $Relisted
 * @property integer $QuantityAvailable
 * @property string $SKU
 * @property boolean $CategoryBasedAttributesPrefill
 * @property \DTS\eBaySDK\MerchantData\Types\SearchDetailsType $SearchDetails
 * @property string $PostalCode
 * @property boolean $ShippingTermsInDescription
 * @property \DTS\eBaySDK\MerchantData\Types\ExternalProductIDType $ExternalProductID
 * @property string $SellerInventoryID
 * @property \DTS\eBaySDK\MerchantData\Types\PictureDetailsType $PictureDetails
 * @property integer $DispatchTimeMax
 * @property boolean $SkypeEnabled
 * @property string $SkypeID
 * @property \DTS\eBaySDK\MerchantData\Enums\SkypeContactOptionCodeType[] $SkypeContactOption
 * @property boolean $BestOfferEnabled
 * @property boolean $LocalListing
 * @property boolean $ThirdPartyCheckoutIntegration
 * @property \DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $SellerContactDetails
 * @property integer $TotalQuestionCount
 * @property boolean $ProxyItem
 * @property \DTS\eBaySDK\MerchantData\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property integer $LeadCount
 * @property integer $NewLeadCount
 * @property \DTS\eBaySDK\MerchantData\Types\NameValueListArrayType $ItemSpecifics
 * @property string $GroupCategoryID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ClassifiedAdPayPerLeadFee
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $UpdateSellerInfo
 * @property boolean $UpdateReturnPolicy
 * @property \DTS\eBaySDK\MerchantData\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property \DTS\eBaySDK\MerchantData\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ReturnPolicyType $ReturnPolicy
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DTS\eBaySDK\MerchantData\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\VariationsType $Variations
 * @property \DTS\eBaySDK\MerchantData\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $ItemCompatibilityCount
 * @property integer $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property \DTS\eBaySDK\MerchantData\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property boolean $PostCheckoutExperienceEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property boolean $UseRecommendedProduct
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VINLink
 * @property string $VRM
 * @property string $VRMLink
 * @property \DTS\eBaySDK\MerchantData\Types\QuantityInfoType $QuantityInfo
 * @property \DTS\eBaySDK\MerchantData\Types\SellerProfilesType $SellerProfiles
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property \DTS\eBaySDK\MerchantData\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property boolean $TopRatedListing
 * @property \DTS\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FloorPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $CeilingPrice
 * @property boolean $IsIntermediatedShippingEligible
 * @property \DTS\eBaySDK\MerchantData\Types\UnitInfoType $UnitInfo
 * @property integer $RelistParentID
 * @property string $ConditionDefinition
 * @property boolean $HideFromSearch
 * @property \DTS\eBaySDK\MerchantData\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property boolean $IncludeRecommendations
 * @property \DTS\eBaySDK\MerchantData\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 * @property boolean $LiveAuction
 * @property \DTS\eBaySDK\MerchantData\Types\DigitalGoodInfoType $DigitalGoodInfo
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
        'AttributeSetArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AttributeSetArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeSetArray'
        ),
        'AttributeArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AttributeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeArray'
        ),
        'LookupAttributeArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\LookupAttributeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LookupAttributeArray'
        ),
        'AutoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ),
        'PaymentDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ),
        'BiddingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BiddingDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\CharityType',
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
        'CrossPromotion' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CrossPromotionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossPromotion'
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\DistanceType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ),
        'ListingDesigner' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDesignerType',
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
        'PartnerCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PartnerCode'
        ),
        'PartnerName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PartnerName'
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\ProductListingDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ),
        'ReviseStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseStatusType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ),
        'FreeAddedCategory' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ),
        'Seller' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'SellingStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ),
        'Storefront' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\StorefrontType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\VATDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\BestOfferDetailsType',
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
        'GetItFast' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GetItFast'
        ),
        'BuyerResponsibleForShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ),
        'LimitedWarrantyEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LimitedWarrantyEligible'
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\SearchDetailsType',
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
        'ExternalProductID' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExternalProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalProductID'
        ),
        'SellerInventoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ),
        'PictureDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PictureDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ),
        'SellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExtendedContactDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\NameValueListArrayType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadFee'
        ),
        'ApplyBuyerProtection' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemPolicyViolationType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'BuyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'BuyerRequirementDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ),
        'ReturnPolicy' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReturnPolicyType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'ItemCompatibilityList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemCompatibilityListType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\QuantityInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'SellerProfiles' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellerProfilesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ),
        'ShippingServiceCostOverrideList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ),
        'ShippingPackageDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShipPackageDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ),
        'FloorPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ),
        'CeilingPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnitInfoType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\PickupInStoreDetailsType',
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
            'type' => 'DTS\eBaySDK\MerchantData\Types\DigitalGoodInfoType',
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
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
