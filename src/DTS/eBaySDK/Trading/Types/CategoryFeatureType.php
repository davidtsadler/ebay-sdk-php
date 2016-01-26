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
 * @property string $CategoryID
 * @property \DTS\eBaySDK\Trading\Types\ListingDurationReferenceType[] $ListingDuration
 * @property boolean $ShippingTermsRequired
 * @property boolean $BestOfferEnabled
 * @property boolean $UserConsentRequired
 * @property boolean $HomePageFeaturedEnabled
 * @property boolean $ProPackEnabled
 * @property boolean $ValuePackEnabled
 * @property boolean $ProPackPlusEnabled
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType $AdFormatEnabled
 * @property boolean $BestOfferCounterEnabled
 * @property boolean $BestOfferAutoDeclineEnabled
 * @property boolean $LocalMarketSpecialitySubscription
 * @property boolean $LocalMarketRegularSubscription
 * @property boolean $LocalMarketPremiumSubscription
 * @property boolean $LocalMarketNonSubscription
 * @property double $MinimumReservePrice
 * @property boolean $SellerContactDetailsEnabled
 * @property boolean $TransactionConfirmationRequestEnabled
 * @property boolean $SkypeMeTransactionalEnabled
 * @property boolean $SkypeMeNonTransactionalEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
 * @property boolean $ClassifiedAdShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
 * @property boolean $ClassifiedAdCounterOfferEnabled
 * @property boolean $ClassifiedAdAutoDeclineEnabled
 * @property boolean $ClassifiedAdContactByPhoneEnabled
 * @property boolean $ClassifiedAdContactByEmailEnabled
 * @property boolean $SafePaymentRequired
 * @property boolean $ClassifiedAdPayPerLeadEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
 * @property boolean $PaisaPayFullEscrowEnabled
 * @property boolean $BrandMPNIdentifierEnabled
 * @property boolean $ClassifiedAdAutoAcceptEnabled
 * @property boolean $BestOfferAutoAcceptEnabled
 * @property boolean $CrossBorderTradeNorthAmericaEnabled
 * @property boolean $CrossBorderTradeGBEnabled
 * @property boolean $CrossBorderTradeAustraliaEnabled
 * @property boolean $PayPalBuyerProtectionEnabled
 * @property boolean $BuyerGuaranteeEnabled
 * @property \DTS\eBaySDK\Trading\Types\ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
 * @property boolean $PayPalRequired
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
 * @property boolean $eBayMotorsProContactByPhoneEnabled
 * @property integer $eBayMotorsProPhoneCount
 * @property boolean $eBayMotorsProContactByAddressEnabled
 * @property integer $eBayMotorsProStreetCount
 * @property boolean $eBayMotorsProCompanyNameEnabled
 * @property boolean $eBayMotorsProContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
 * @property boolean $eBayMotorsProAutoAcceptEnabled
 * @property boolean $eBayMotorsProAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property boolean $eBayMotorsProShippingMethodEnabled
 * @property boolean $eBayMotorsProCounterOfferEnabled
 * @property boolean $eBayMotorsProSellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
 * @property boolean $LocalMarketContactByPhoneEnabled
 * @property integer $LocalMarketPhoneCount
 * @property boolean $LocalMarketContactByAddressEnabled
 * @property integer $LocalMarketStreetCount
 * @property boolean $LocalMarketCompanyNameEnabled
 * @property boolean $LocalMarketContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
 * @property boolean $LocalMarketAutoAcceptEnabled
 * @property boolean $LocalMarketAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
 * @property boolean $LocalMarketShippingMethodEnabled
 * @property boolean $LocalMarketCounterOfferEnabled
 * @property boolean $LocalMarketSellerContactDetailsEnabled
 * @property integer $ClassifiedAdPhoneCount
 * @property boolean $ClassifiedAdContactByAddressEnabled
 * @property integer $ClassifiedAdStreetCount
 * @property boolean $ClassifiedAdCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $SpecialitySubscription
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $RegularSubscription
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $PremiumSubscription
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $NonSubscription
 * @property \DTS\eBaySDK\Trading\Enums\INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
 * @property boolean $PayPalRequiredForStoreOwner
 * @property boolean $ReviseQuantityAllowed
 * @property boolean $RevisePriceAllowed
 * @property boolean $StoreOwnerExtendedListingDurationsEnabled
 * @property \DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
 * @property boolean $ReturnPolicyEnabled
 * @property boolean $HandlingTimeEnabled
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Group1MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Group2MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Group3MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethod
 * @property boolean $VariationsEnabled
 * @property boolean $FreeGalleryPlusEnabled
 * @property boolean $FreePicturePackEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
 * @property integer $MinItemCompatibility
 * @property integer $MaxItemCompatibility
 * @property \DTS\eBaySDK\Trading\Enums\ConditionEnabledCodeType $ConditionEnabled
 * @property \DTS\eBaySDK\Trading\Types\ConditionValuesType $ConditionValues
 * @property boolean $ValueCategory
 * @property \DTS\eBaySDK\Trading\Enums\ProductCreationEnabledCodeType $ProductCreationEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType $EANEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType $ISBNEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType $UPCEnabled
 * @property integer $MaxGranularFitmentCount
 * @property string $CompatibleVehicleType
 * @property \DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
 * @property boolean $VINSupported
 * @property boolean $VRMSupported
 * @property boolean $SellerProvidedTitleSupported
 * @property boolean $DepositSupported
 * @property boolean $GlobalShippingEnabled
 * @property boolean $AdditionalCompatibilityEnabled
 * @property boolean $PickupDropOffEnabled
 * @property boolean $DigitalGoodDeliveryEnabled
 */
class CategoryFeatureType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'ListingDuration' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDurationReferenceType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ),
        'ShippingTermsRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ),
        'BestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'UserConsentRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
        ),
        'HomePageFeaturedEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ),
        'ProPackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ),
        'ValuePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ),
        'ProPackPlusEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ),
        'AdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ),
        'BestOfferCounterEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ),
        'BestOfferAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ),
        'LocalMarketSpecialitySubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ),
        'LocalMarketRegularSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ),
        'LocalMarketPremiumSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ),
        'LocalMarketNonSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ),
        'MinimumReservePrice' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ),
        'SellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ),
        'TransactionConfirmationRequestEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ),
        'SkypeMeTransactionalEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeTransactionalEnabled'
        ),
        'SkypeMeNonTransactionalEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeNonTransactionalEnabled'
        ),
        'ClassifiedAdPaymentMethodEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ),
        'ClassifiedAdShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ),
        'ClassifiedAdBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ),
        'ClassifiedAdCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ),
        'ClassifiedAdAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ),
        'ClassifiedAdContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ),
        'ClassifiedAdContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ),
        'SafePaymentRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ),
        'ClassifiedAdPayPerLeadEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ),
        'ItemSpecificsEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ),
        'PaisaPayFullEscrowEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ),
        'BrandMPNIdentifierEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ),
        'ClassifiedAdAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ),
        'BestOfferAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ),
        'CrossBorderTradeNorthAmericaEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ),
        'CrossBorderTradeGBEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ),
        'CrossBorderTradeAustraliaEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ),
        'PayPalBuyerProtectionEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ),
        'BuyerGuaranteeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ),
        'GalleryFeaturedDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingEnhancementDurationReferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ),
        'PayPalRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ),
        'eBayMotorsProAdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
        ),
        'eBayMotorsProContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ),
        'eBayMotorsProPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ),
        'eBayMotorsProContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ),
        'eBayMotorsProStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProStreetCount'
        ),
        'eBayMotorsProCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ),
        'eBayMotorsProContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ),
        'eBayMotorsProBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
        ),
        'eBayMotorsProAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoAcceptEnabled'
        ),
        'eBayMotorsProAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoDeclineEnabled'
        ),
        'eBayMotorsProPaymentMethodCheckOutEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ),
        'eBayMotorsProShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ),
        'eBayMotorsProCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ),
        'eBayMotorsProSellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ),
        'LocalMarketAdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
        ),
        'LocalMarketContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ),
        'LocalMarketPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ),
        'LocalMarketContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ),
        'LocalMarketStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ),
        'LocalMarketCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ),
        'LocalMarketContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ),
        'LocalMarketBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
        ),
        'LocalMarketAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoAcceptEnabled'
        ),
        'LocalMarketAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoDeclineEnabled'
        ),
        'LocalMarketPaymentMethodCheckOutEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ),
        'LocalMarketShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ),
        'LocalMarketCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ),
        'LocalMarketSellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ),
        'ClassifiedAdPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ),
        'ClassifiedAdContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ),
        'ClassifiedAdStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ),
        'ClassifiedAdCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ),
        'SpecialitySubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ),
        'RegularSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ),
        'PremiumSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ),
        'NonSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ),
        'INEscrowWorkflowTimeline' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ),
        'PayPalRequiredForStoreOwner' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequiredForStoreOwner'
        ),
        'ReviseQuantityAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ),
        'RevisePriceAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ),
        'StoreOwnerExtendedListingDurationsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ),
        'StoreOwnerExtendedListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ),
        'ReturnPolicyEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ),
        'HandlingTimeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ),
        'MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ),
        'Group1MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group1MaxFlatShippingCost'
        ),
        'Group2MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group2MaxFlatShippingCost'
        ),
        'Group3MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group3MaxFlatShippingCost'
        ),
        'PaymentMethod' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'VariationsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
        ),
        'FreeGalleryPlusEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeGalleryPlusEnabled'
        ),
        'FreePicturePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreePicturePackEnabled'
        ),
        'ItemCompatibilityEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
        ),
        'MinItemCompatibility' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinItemCompatibility'
        ),
        'MaxItemCompatibility' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxItemCompatibility'
        ),
        'ConditionEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionEnabled'
        ),
        'ConditionValues' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ConditionValuesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionValues'
        ),
        'ValueCategory' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ),
        'ProductCreationEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ),
        'EANEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANEnabled'
        ),
        'ISBNEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNEnabled'
        ),
        'UPCEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCEnabled'
        ),
        'MaxGranularFitmentCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ),
        'CompatibleVehicleType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
        ),
        'ShippingProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ),
        'PaymentProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ),
        'ReturnPolicyProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
        ),
        'VINSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINSupported'
        ),
        'VRMSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRMSupported'
        ),
        'SellerProvidedTitleSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ),
        'DepositSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ),
        'GlobalShippingEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
        ),
        'AdditionalCompatibilityEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ),
        'PickupDropOffEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDropOffEnabled'
        ),
        'DigitalGoodDeliveryEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DigitalGoodDeliveryEnabled'
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
