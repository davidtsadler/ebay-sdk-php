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
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType $AdFormatEnabled
 * @property boolean $AdditionalCompatibilityEnabled
 * @property boolean $BasicUpgradePackEnabled
 * @property boolean $BestOfferAutoAcceptEnabled
 * @property boolean $BestOfferAutoDeclineEnabled
 * @property boolean $BestOfferCounterEnabled
 * @property boolean $BestOfferEnabled
 * @property boolean $BrandMPNIdentifierEnabled
 * @property boolean $BuyerGuaranteeEnabled
 * @property string $CategoryID
 * @property boolean $ClassifiedAdAutoAcceptEnabled
 * @property boolean $ClassifiedAdAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
 * @property boolean $ClassifiedAdCompanyNameEnabled
 * @property boolean $ClassifiedAdContactByAddressEnabled
 * @property boolean $ClassifiedAdContactByEmailEnabled
 * @property boolean $ClassifiedAdContactByPhoneEnabled
 * @property boolean $ClassifiedAdCounterOfferEnabled
 * @property boolean $ClassifiedAdPayPerLeadEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
 * @property integer $ClassifiedAdPhoneCount
 * @property boolean $ClassifiedAdShippingMethodEnabled
 * @property integer $ClassifiedAdStreetCount
 * @property boolean $CombinedFixedPriceTreatmentEnabled
 * @property string $CompatibleVehicleType
 * @property \DTS\eBaySDK\Trading\Enums\ConditionEnabledCodeType $ConditionEnabled
 * @property \DTS\eBaySDK\Trading\Types\ConditionValuesType $ConditionValues
 * @property boolean $CrossBorderTradeAustraliaEnabled
 * @property boolean $CrossBorderTradeGBEnabled
 * @property boolean $CrossBorderTradeNorthAmericaEnabled
 * @property boolean $DepositSupported
 * @property boolean $DutchBINEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType $EANEnabled
 * @property boolean $ExpressEnabled
 * @property boolean $ExpressPicturesRequired
 * @property boolean $FreeGalleryPlusEnabled
 * @property boolean $FreePicturePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
 * @property boolean $GlobalShippingEnabled
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Group1MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Group2MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Group3MaxFlatShippingCost
 * @property boolean $HandlingTimeEnabled
 * @property boolean $HomePageFeaturedEnabled
 * @property \DTS\eBaySDK\Trading\Enums\INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
 * @property \DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType $ISBNEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
 * @property \DTS\eBaySDK\Trading\Types\ListingDurationReferenceType[] $ListingDuration
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
 * @property boolean $LocalMarketAutoAcceptEnabled
 * @property boolean $LocalMarketAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
 * @property boolean $LocalMarketCompanyNameEnabled
 * @property boolean $LocalMarketContactByAddressEnabled
 * @property boolean $LocalMarketContactByEmailEnabled
 * @property boolean $LocalMarketContactByPhoneEnabled
 * @property boolean $LocalMarketCounterOfferEnabled
 * @property boolean $LocalMarketNonSubscription
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
 * @property integer $LocalMarketPhoneCount
 * @property boolean $LocalMarketPremiumSubscription
 * @property boolean $LocalMarketRegularSubscription
 * @property boolean $LocalMarketSellerContactDetailsEnabled
 * @property boolean $LocalMarketShippingMethodEnabled
 * @property boolean $LocalMarketSpecialitySubscription
 * @property integer $LocalMarketStreetCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MaxFlatShippingCost
 * @property integer $MaxGranularFitmentCount
 * @property integer $MaxItemCompatibility
 * @property integer $MinItemCompatibility
 * @property double $MinimumReservePrice
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $NonSubscription
 * @property boolean $PaisaPayFullEscrowEnabled
 * @property boolean $PayPalBuyerProtectionEnabled
 * @property boolean $PayPalRequired
 * @property boolean $PayPalRequiredForStoreOwner
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethod
 * @property \DTS\eBaySDK\Trading\Enums\PaymentOptionsGroupEnabledCodeType $PaymentOptionsGroup
 * @property \DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
 * @property boolean $PickupDropOffEnabled
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $PremiumSubscription
 * @property boolean $ProPackEnabled
 * @property boolean $ProPackPlusEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProductCreationEnabledCodeType $ProductCreationEnabled
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $RegularSubscription
 * @property boolean $ReturnPolicyEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
 * @property boolean $RevisePriceAllowed
 * @property boolean $ReviseQuantityAllowed
 * @property boolean $SafePaymentRequired
 * @property boolean $SellerContactDetailsEnabled
 * @property boolean $SellerProvidedTitleSupported
 * @property \DTS\eBaySDK\Trading\Enums\ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
 * @property boolean $ShippingTermsRequired
 * @property boolean $SkypeMeNonTransactionalEnabled
 * @property boolean $SkypeMeTransactionalEnabled
 * @property \DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType $SpecialitySubscription
 * @property boolean $StoreInventoryEnabled
 * @property \DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
 * @property boolean $StoreOwnerExtendedListingDurationsEnabled
 * @property boolean $TransactionConfirmationRequestEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType $UPCEnabled
 * @property boolean $UserConsentRequired
 * @property boolean $VINSupported
 * @property boolean $VRMSupported
 * @property boolean $ValueCategory
 * @property boolean $ValuePackEnabled
 * @property boolean $VariationsEnabled
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
 * @property boolean $eBayMotorsProAutoAcceptEnabled
 * @property boolean $eBayMotorsProAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
 * @property boolean $eBayMotorsProCompanyNameEnabled
 * @property boolean $eBayMotorsProContactByAddressEnabled
 * @property boolean $eBayMotorsProContactByEmailEnabled
 * @property boolean $eBayMotorsProContactByPhoneEnabled
 * @property boolean $eBayMotorsProCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Enums\ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property integer $eBayMotorsProPhoneCount
 * @property boolean $eBayMotorsProSellerContactDetailsEnabled
 * @property boolean $eBayMotorsProShippingMethodEnabled
 * @property integer $eBayMotorsProStreetCount
 */
class CategoryFeatureType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ),
        'AdditionalCompatibilityEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ),
        'BasicUpgradePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BasicUpgradePackEnabled'
        ),
        'BestOfferAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ),
        'BestOfferAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ),
        'BestOfferCounterEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ),
        'BestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'BrandMPNIdentifierEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ),
        'BuyerGuaranteeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ),
        'CategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'ClassifiedAdAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ),
        'ClassifiedAdAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ),
        'ClassifiedAdBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ),
        'ClassifiedAdCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ),
        'ClassifiedAdContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ),
        'ClassifiedAdContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ),
        'ClassifiedAdContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ),
        'ClassifiedAdCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ),
        'ClassifiedAdPayPerLeadEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ),
        'ClassifiedAdPaymentMethodEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ),
        'ClassifiedAdPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ),
        'ClassifiedAdShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ),
        'ClassifiedAdStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ),
        'CombinedFixedPriceTreatmentEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedFixedPriceTreatmentEnabled'
        ),
        'CompatibleVehicleType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
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
        'CrossBorderTradeAustraliaEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ),
        'CrossBorderTradeGBEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ),
        'CrossBorderTradeNorthAmericaEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ),
        'DepositSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ),
        'DutchBINEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchBINEnabled'
        ),
        'EANEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANEnabled'
        ),
        'ExpressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressEnabled'
        ),
        'ExpressPicturesRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressPicturesRequired'
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
        'GalleryFeaturedDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingEnhancementDurationReferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ),
        'GlobalShippingEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
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
        'HandlingTimeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ),
        'HomePageFeaturedEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ),
        'INEscrowWorkflowTimeline' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ),
        'ISBNEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNEnabled'
        ),
        'ItemCompatibilityEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
        ),
        'ItemSpecificsEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ),
        'ListingDuration' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDurationReferenceType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ),
        'LocalMarketAdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
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
        'LocalMarketBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
        ),
        'LocalMarketCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ),
        'LocalMarketContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ),
        'LocalMarketContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ),
        'LocalMarketContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ),
        'LocalMarketCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ),
        'LocalMarketNonSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ),
        'LocalMarketPaymentMethodCheckOutEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ),
        'LocalMarketPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ),
        'LocalMarketPremiumSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ),
        'LocalMarketRegularSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ),
        'LocalMarketSellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ),
        'LocalMarketShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ),
        'LocalMarketSpecialitySubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ),
        'LocalMarketStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ),
        'MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ),
        'MaxGranularFitmentCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ),
        'MaxItemCompatibility' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxItemCompatibility'
        ),
        'MinItemCompatibility' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinItemCompatibility'
        ),
        'MinimumReservePrice' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ),
        'NonSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ),
        'PaisaPayFullEscrowEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ),
        'PayPalBuyerProtectionEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ),
        'PayPalRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ),
        'PayPalRequiredForStoreOwner' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequiredForStoreOwner'
        ),
        'PaymentMethod' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'PaymentOptionsGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentOptionsGroup'
        ),
        'PaymentProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ),
        'PickupDropOffEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDropOffEnabled'
        ),
        'PremiumSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ),
        'ProPackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ),
        'ProPackPlusEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ),
        'ProductCreationEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ),
        'RegularSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ),
        'ReturnPolicyEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ),
        'ReturnPolicyProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
        ),
        'RevisePriceAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ),
        'ReviseQuantityAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ),
        'SafePaymentRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ),
        'SellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ),
        'SellerProvidedTitleSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ),
        'ShippingProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ),
        'ShippingTermsRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ),
        'SkypeMeNonTransactionalEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeNonTransactionalEnabled'
        ),
        'SkypeMeTransactionalEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeTransactionalEnabled'
        ),
        'SpecialitySubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ),
        'StoreInventoryEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreInventoryEnabled'
        ),
        'StoreOwnerExtendedListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ),
        'StoreOwnerExtendedListingDurationsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ),
        'TransactionConfirmationRequestEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ),
        'UPCEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCEnabled'
        ),
        'UserConsentRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
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
        'ValueCategory' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ),
        'ValuePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ),
        'VariationsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
        ),
        'eBayMotorsProAdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
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
        'eBayMotorsProBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
        ),
        'eBayMotorsProCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ),
        'eBayMotorsProContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ),
        'eBayMotorsProContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ),
        'eBayMotorsProContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ),
        'eBayMotorsProCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ),
        'eBayMotorsProPaymentMethodCheckOutEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ),
        'eBayMotorsProPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ),
        'eBayMotorsProSellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ),
        'eBayMotorsProShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ),
        'eBayMotorsProStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProStreetCount'
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
