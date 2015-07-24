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
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DTS\eBaySDK\MerchantData\Types\AttributeArrayType $AttributeArray
 * @property boolean $AutoPay
 * @property \DTS\eBaySDK\MerchantData\Types\BestOfferDetailsType $BestOfferDetails
 * @property \DTS\eBaySDK\MerchantData\Types\BiddingDetailsType $BiddingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyItNowPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property boolean $BuyerResponsibleForShipping
 * @property boolean $CategoryBasedAttributesPrefill
 * @property boolean $CategoryMappingAllowed
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $CeilingPrice
 * @property \DTS\eBaySDK\MerchantData\Types\CharityType $Charity
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property integer $ConditionID
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $Country
 * @property string[] $CrossBorderTrade
 * @property \DTS\eBaySDK\MerchantData\Types\CrossPromotionsType $CrossPromotion
 * @property \DTS\eBaySDK\MerchantData\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DTS\eBaySDK\MerchantData\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property boolean $DisableBuyerRequirements
 * @property \DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property integer $DispatchTimeMax
 * @property boolean $EligibleForPickupDropOff
 * @property \DTS\eBaySDK\MerchantData\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FloorPrice
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $FreeAddedCategory
 * @property integer $GiftIcon
 * @property \DTS\eBaySDK\MerchantData\Enums\GiftServicesCodeType[] $GiftServices
 * @property boolean $HideFromSearch
 * @property integer $HitCount
 * @property \DTS\eBaySDK\MerchantData\Enums\HitCounterCodeType $HitCounter
 * @property boolean $IgnoreQuantity
 * @property boolean $IncludeRecommendations
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IsIntermediatedShippingEligible
 * @property integer $ItemCompatibilityCount
 * @property \DTS\eBaySDK\MerchantData\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property string $ItemID
 * @property \DTS\eBaySDK\MerchantData\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property \DTS\eBaySDK\MerchantData\Types\NameValueListArrayType $ItemSpecifics
 * @property integer $LeadCount
 * @property \DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDesignerType $ListingDesigner
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDetailsType $ListingDetails
 * @property string $ListingDuration
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingTypeCodeType $ListingType
 * @property boolean $LiveAuction
 * @property string $Location
 * @property boolean $LocationDefaulted
 * @property integer $LotSize
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $MotorsGermanySearchable
 * @property integer $NewLeadCount
 * @property string $PartnerCode
 * @property string $PartnerName
 * @property string $PayPalEmailAddress
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentDetailsType $PaymentDetails
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property \DTS\eBaySDK\MerchantData\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PictureDetailsType $PictureDetails
 * @property boolean $PostCheckoutExperienceEnabled
 * @property string $PostalCode
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $PrimaryCategory
 * @property boolean $PrivateListing
 * @property string $PrivateNotes
 * @property \DTS\eBaySDK\MerchantData\Types\ProductListingDetailsType $ProductListingDetails
 * @property boolean $ProxyItem
 * @property integer $Quantity
 * @property integer $QuantityAvailable
 * @property \DTS\eBaySDK\MerchantData\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property \DTS\eBaySDK\MerchantData\Types\QuantityInfoType $QuantityInfo
 * @property \DTS\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property integer $QuantityThreshold
 * @property integer $QuestionCount
 * @property \DTS\eBaySDK\MerchantData\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property string $RegionID
 * @property boolean $RelistLink
 * @property integer $RelistParentID
 * @property boolean $Relisted
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ReservePrice
 * @property \DTS\eBaySDK\MerchantData\Types\ReturnPolicyType $ReturnPolicy
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseStatusType $ReviseStatus
 * @property string $SKU
 * @property \DateTime $ScheduleTime
 * @property \DTS\eBaySDK\MerchantData\Types\SearchDetailsType $SearchDetails
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $SecondaryCategory
 * @property \DTS\eBaySDK\MerchantData\Types\UserType $Seller
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $SellerContactDetails
 * @property string $SellerInventoryID
 * @property \DTS\eBaySDK\MerchantData\Types\SellerProfilesType $SellerProfiles
 * @property string $SellerProvidedTitle
 * @property string $SellerVacationNote
 * @property \DTS\eBaySDK\MerchantData\Types\SellingStatusType $SellingStatus
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property boolean $ShippingTermsInDescription
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $Site
 * @property \DTS\eBaySDK\MerchantData\Enums\SkypeContactOptionCodeType[] $SkypeContactOption
 * @property boolean $SkypeEnabled
 * @property string $SkypeID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\MerchantData\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TaxCategory
 * @property string $TimeLeft
 * @property string $Title
 * @property boolean $TopRatedListing
 * @property integer $TotalQuestionCount
 * @property string $UUID
 * @property \DTS\eBaySDK\MerchantData\Types\UnitInfoType $UnitInfo
 * @property boolean $UpdateReturnPolicy
 * @property boolean $UpdateSellerInfo
 * @property boolean $UseRecommendedProduct
 * @property boolean $UseTaxTable
 * @property \DTS\eBaySDK\MerchantData\Types\VATDetailsType $VATDetails
 * @property string $VIN
 * @property string $VINLink
 * @property string $VRM
 * @property string $VRMLink
 * @property \DTS\eBaySDK\MerchantData\Types\VariationsType $Variations
 * @property integer $WatchCount
 * @property string $eBayNotes
 * @property boolean $eBayNowAvailable
 * @property boolean $eBayNowEligible
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
        'ApplyBuyerProtection' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplyBuyerProtection'
        ),
        'AttributeArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AttributeArrayType',
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
        'BestOfferDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BestOfferDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ),
        'BiddingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BiddingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingDetails'
        ),
        'BusinessSellerDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'BuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ),
        'BuyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'BuyerProtection' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerProtection'
        ),
        'BuyerRequirementDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ),
        'BuyerResponsibleForShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ),
        'CategoryBasedAttributesPrefill' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryBasedAttributesPrefill'
        ),
        'CategoryMappingAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryMappingAllowed'
        ),
        'CeilingPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CeilingPrice'
        ),
        'Charity' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CharityType',
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
        'Country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'CrossBorderTrade' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CrossBorderTrade'
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
        'DisableBuyerRequirements' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisableBuyerRequirements'
        ),
        'DiscountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'DispatchTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DispatchTimeMax'
        ),
        'EligibleForPickupDropOff' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
        ),
        'ExtendedSellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExtendedContactDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedSellerContactDetails'
        ),
        'FloorPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ),
        'FreeAddedCategory' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
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
        'HideFromSearch' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideFromSearch'
        ),
        'HitCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ),
        'HitCounter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCounter'
        ),
        'IgnoreQuantity' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ),
        'IncludeRecommendations' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeRecommendations'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'InventoryTrackingMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ),
        'IsIntermediatedShippingEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsIntermediatedShippingEligible'
        ),
        'ItemCompatibilityCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ),
        'ItemCompatibilityList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemCompatibilityListType',
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
        'ItemPolicyViolation' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemPolicyViolationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPolicyViolation'
        ),
        'ItemSpecifics' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'LeadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ),
        'ListingCheckoutRedirectPreference' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ),
        'ListingDesigner' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDesignerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDesigner'
        ),
        'ListingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
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
        'ListingSubtype2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingSubtype2'
        ),
        'ListingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ),
        'LiveAuction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LiveAuction'
        ),
        'Location' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ),
        'LocationDefaulted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocationDefaulted'
        ),
        'LotSize' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ),
        'MechanicalCheckAccepted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MechanicalCheckAccepted'
        ),
        'MotorsGermanySearchable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsGermanySearchable'
        ),
        'NewLeadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewLeadCount'
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
        'PayPalEmailAddress' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ),
        'PaymentAllowedSite' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ),
        'PaymentDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ),
        'PaymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'PickupInStoreDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PickupInStoreDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupInStoreDetails'
        ),
        'PictureDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PictureDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureDetails'
        ),
        'PostCheckoutExperienceEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostCheckoutExperienceEnabled'
        ),
        'PostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
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
        'PrivateNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ),
        'ProductListingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ),
        'ProxyItem' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProxyItem'
        ),
        'Quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'QuantityAvailable' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ),
        'QuantityAvailableHint' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ),
        'QuantityInfo' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\QuantityInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'QuantityRestrictionPerBuyer' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ),
        'QuantityThreshold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ),
        'QuestionCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionCount'
        ),
        'ReasonHideFromSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReasonHideFromSearch'
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
        'RelistParentID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistParentID'
        ),
        'Relisted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ),
        'ReservePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ),
        'ReturnPolicy' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ),
        'ReviseStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseStatus'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'ScheduleTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ),
        'SearchDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SearchDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchDetails'
        ),
        'SecondaryCategory' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ),
        'Seller' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'SellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetails'
        ),
        'SellerInventoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ),
        'SellerProfiles' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellerProfilesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ),
        'SellerProvidedTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitle'
        ),
        'SellerVacationNote' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerVacationNote'
        ),
        'SellingStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ),
        'ShipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'ShippingPackageDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShipPackageDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ),
        'ShippingServiceCostOverrideList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ),
        'ShippingTermsInDescription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsInDescription'
        ),
        'Site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'SkypeContactOption' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SkypeContactOption'
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
        'TaxCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
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
        'TotalQuestionCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalQuestionCount'
        ),
        'UUID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ),
        'UnitInfo' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ),
        'UpdateReturnPolicy' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateReturnPolicy'
        ),
        'UpdateSellerInfo' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateSellerInfo'
        ),
        'UseRecommendedProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseRecommendedProduct'
        ),
        'UseTaxTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseTaxTable'
        ),
        'VATDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VATDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
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
        'Variations' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'WatchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ),
        'eBayNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNotes'
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
