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
 * @property \DTS\eBaySDK\Trading\Types\AdFormatEnabledDefinitionType $AdFormatEnabled
 * @property \DTS\eBaySDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled
 * @property \DTS\eBaySDK\Trading\Types\BasicUpgradePackEnabledDefinitionType $BasicUpgradePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferEnabledDefinitionType $BestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount
 * @property \DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType $CombinedFixedPriceTreatmentEnabled
 * @property \DTS\eBaySDK\Trading\Types\CompatibleVehicleTypeDefinitionType $CompatibleVehicleType
 * @property \DTS\eBaySDK\Trading\Types\ConditionEnabledDefinitionType $ConditionEnabled
 * @property \DTS\eBaySDK\Trading\Types\ConditionValuesDefinitionType $ConditionValues
 * @property \DTS\eBaySDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled
 * @property \DTS\eBaySDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled
 * @property \DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled
 * @property \DTS\eBaySDK\Trading\Types\DepositSupportedDefinitionType $DepositSupported
 * @property \DTS\eBaySDK\Trading\Types\DutchBINEnabledDefinitionType $DutchBINEnabled
 * @property \DTS\eBaySDK\Trading\Types\EANEnabledDefinitionType $EANEnabled
 * @property \DTS\eBaySDK\Trading\Types\EANIdentifierEnabledDefinitionType $EANIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled
 * @property \DTS\eBaySDK\Trading\Types\FreePicturePackEnabledDefinitionType $FreePicturePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations
 * @property \DTS\eBaySDK\Trading\Types\GlobalShippingEnabledDefinitionType $GlobalShippingEnabled
 * @property \DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\HandlingTimeEnabledDefinitionType $HandlingTimeEnabled
 * @property \DTS\eBaySDK\Trading\Types\HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled
 * @property \DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline
 * @property \DTS\eBaySDK\Trading\Types\ISBNEnabledDefinitionType $ISBNEnabled
 * @property \DTS\eBaySDK\Trading\Types\ISBNIdentifierEnabledDefinitionType $ISBNIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled
 * @property \DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled
 * @property \DTS\eBaySDK\Trading\Types\ListingDurationDefinitionsType $ListingDurations
 * @property \DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular
 * @property \DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketStreetCountDefinitionType $LocalMarketStreetCount
 * @property \DTS\eBaySDK\Trading\Types\MaxFlatShippingCostDefinitionType $MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt
 * @property \DTS\eBaySDK\Trading\Types\MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount
 * @property \DTS\eBaySDK\Trading\Types\MaxItemCompatibilityDefinitionType $MaxItemCompatibility
 * @property \DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType $MinItemCompatibility
 * @property \DTS\eBaySDK\Trading\Types\MinimumReservePriceDefinitionType $MinimumReservePrice
 * @property \DTS\eBaySDK\Trading\Types\NonSubscriptionDefinitionType $NonSubscription
 * @property \DTS\eBaySDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled
 * @property \DTS\eBaySDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled
 * @property \DTS\eBaySDK\Trading\Types\PayPalRequiredDefinitionType $PayPalRequired
 * @property \DTS\eBaySDK\Trading\Types\PayPalRequiredForStoreOwnerDefinitionType $PayPalRequiredForStoreOwner
 * @property \DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType $PaymentMethod
 * @property \DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Types\PickupDropOffEnabledDefinitionType $PickupDropOffEnabled
 * @property \DTS\eBaySDK\Trading\Types\PremiumSubscriptionDefinitionType $PremiumSubscription
 * @property \DTS\eBaySDK\Trading\Types\ProPackEnabledDefinitionType $ProPackEnabled
 * @property \DTS\eBaySDK\Trading\Types\ProPackPlusEnabledDefinitionType $ProPackPlusEnabled
 * @property \DTS\eBaySDK\Trading\Types\ProductCreationEnabledDefinitionType $ProductCreationEnabled
 * @property \DTS\eBaySDK\Trading\Types\RegularSubscriptionDefinitionType $RegularSubscription
 * @property \DTS\eBaySDK\Trading\Types\ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled
 * @property \DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Types\RevisePriceAllowedDefinitionType $RevisePriceAllowed
 * @property \DTS\eBaySDK\Trading\Types\ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed
 * @property \DTS\eBaySDK\Trading\Types\SafePaymentRequiredDefinitionType $SafePaymentRequired
 * @property \DTS\eBaySDK\Trading\Types\SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported
 * @property \DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Types\ShippingTermRequiredDefinitionType $ShippingTermsRequired
 * @property \DTS\eBaySDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled
 * @property \DTS\eBaySDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled
 * @property \DTS\eBaySDK\Trading\Types\SpecialitySubscriptionDefinitionType $SpecialitySubscription
 * @property \DTS\eBaySDK\Trading\Types\StoreInventoryEnabledDefinitionType $StoreInventoryEnabled
 * @property \DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations
 * @property \DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled
 * @property \DTS\eBaySDK\Trading\Types\TCREnabledDefinitionType $TransactionConfirmationRequestEnabled
 * @property \DTS\eBaySDK\Trading\Types\UPCEnabledDefinitionType $UPCEnabled
 * @property \DTS\eBaySDK\Trading\Types\UPCIdentifierEnabledDefinitionType $UPCIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\UserConsentRequiredDefinitionType $UserConsentRequired
 * @property \DTS\eBaySDK\Trading\Types\VINSupportedDefinitionType $VINSupported
 * @property \DTS\eBaySDK\Trading\Types\VRMSupportedDefinitionType $VRMSupported
 * @property \DTS\eBaySDK\Trading\Types\ValueCategoryDefinitionType $ValueCategory
 * @property \DTS\eBaySDK\Trading\Types\ValuePackEnabledDefinitionType $ValuePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\VariationsEnabledDefinitionType $VariationsEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
 */
class FeatureDefinitionsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ),
        'AdditionalCompatibilityEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ),
        'BasicUpgradePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BasicUpgradePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BasicUpgradePackEnabled'
        ),
        'BestOfferAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ),
        'BestOfferAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ),
        'BestOfferCounterEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ),
        'BestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'BrandMPNIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ),
        'BuyerGuaranteeEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ),
        'ClassifiedAdAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ),
        'ClassifiedAdAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ),
        'ClassifiedAdBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ),
        'ClassifiedAdCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ),
        'ClassifiedAdContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ),
        'ClassifiedAdContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ),
        'ClassifiedAdContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ),
        'ClassifiedAdCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ),
        'ClassifiedAdPayPerLeadEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ),
        'ClassifiedAdPaymentMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ),
        'ClassifiedAdPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ),
        'ClassifiedAdShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ),
        'ClassifiedAdStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ),
        'CombinedFixedPriceTreatmentEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedFixedPriceTreatmentEnabled'
        ),
        'CompatibleVehicleType' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CompatibleVehicleTypeDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
        ),
        'ConditionEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ConditionEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionEnabled'
        ),
        'ConditionValues' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ConditionValuesDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionValues'
        ),
        'CrossBorderTradeAustraliaEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ),
        'CrossBorderTradeGBEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ),
        'CrossBorderTradeNorthAmericaEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ),
        'DepositSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DepositSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ),
        'DutchBINEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DutchBINEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchBINEnabled'
        ),
        'EANEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EANEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANEnabled'
        ),
        'EANIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EANIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANIdentifierEnabled'
        ),
        'FreeGalleryPlusEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FreeGalleryPlusEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeGalleryPlusEnabled'
        ),
        'FreePicturePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FreePicturePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreePicturePackEnabled'
        ),
        'GalleryFeaturedDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingEnhancementDurationDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ),
        'GlobalShippingEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\GlobalShippingEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
        ),
        'Group1MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group1MaxFlatShippingCost'
        ),
        'Group2MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group2MaxFlatShippingCost'
        ),
        'Group3MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group3MaxFlatShippingCost'
        ),
        'HandlingTimeEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\HandlingTimeEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ),
        'HomePageFeaturedEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\HomePageFeaturedEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ),
        'INEscrowWorkflowTimeline' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ),
        'ISBNEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ISBNEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNEnabled'
        ),
        'ISBNIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ISBNIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNIdentifierEnabled'
        ),
        'ItemCompatibilityEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
        ),
        'ItemSpecificsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ),
        'ListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDurationDefinitionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDurations'
        ),
        'LocalListingDistancesNonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesNonSubscription'
        ),
        'LocalListingDistancesRegular' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesRegular'
        ),
        'LocalListingDistancesSpecialty' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesSpecialty'
        ),
        'LocalMarketAdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
        ),
        'LocalMarketAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoAcceptEnabled'
        ),
        'LocalMarketAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoDeclineEnabled'
        ),
        'LocalMarketBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
        ),
        'LocalMarketCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ),
        'LocalMarketContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ),
        'LocalMarketContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ),
        'LocalMarketContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ),
        'LocalMarketCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ),
        'LocalMarketNonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ),
        'LocalMarketPaymentMethodCheckOutEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ),
        'LocalMarketPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ),
        'LocalMarketPremiumSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ),
        'LocalMarketRegularSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ),
        'LocalMarketSellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ),
        'LocalMarketShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ),
        'LocalMarketSpecialitySubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ),
        'LocalMarketStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ),
        'MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ),
        'MaxFlatShippingCostCBTExempt' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCostCBTExempt'
        ),
        'MaxGranularFitmentCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxGranularFitmentCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ),
        'MaxItemCompatibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxItemCompatibilityDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxItemCompatibility'
        ),
        'MinItemCompatibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinItemCompatibility'
        ),
        'MinimumReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinimumReservePriceDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ),
        'NonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ),
        'PaisaPayFullEscrowEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ),
        'PayPalBuyerProtectionEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ),
        'PayPalRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ),
        'PayPalRequiredForStoreOwner' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalRequiredForStoreOwnerDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequiredForStoreOwner'
        ),
        'PaymentMethod' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'PaymentProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ),
        'PickupDropOffEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupDropOffEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDropOffEnabled'
        ),
        'PremiumSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PremiumSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ),
        'ProPackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProPackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ),
        'ProPackPlusEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProPackPlusEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ),
        'ProductCreationEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductCreationEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ),
        'RegularSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegularSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ),
        'ReturnPolicyEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ),
        'ReturnPolicyProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
        ),
        'RevisePriceAllowed' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RevisePriceAllowedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ),
        'ReviseQuantityAllowed' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReviseQuantityAllowedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ),
        'SafePaymentRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SafePaymentRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ),
        'SellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ),
        'SellerProvidedTitleSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ),
        'ShippingProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ),
        'ShippingTermsRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingTermRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ),
        'SkypeMeNonTransactionalEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeNonTransactionalEnabled'
        ),
        'SkypeMeTransactionalEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeTransactionalEnabled'
        ),
        'SpecialitySubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SpecialitySubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ),
        'StoreInventoryEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreInventoryEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreInventoryEnabled'
        ),
        'StoreOwnerExtendedListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ),
        'StoreOwnerExtendedListingDurationsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ),
        'TransactionConfirmationRequestEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TCREnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ),
        'UPCEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UPCEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCEnabled'
        ),
        'UPCIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UPCIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCIdentifierEnabled'
        ),
        'UserConsentRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserConsentRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
        ),
        'VINSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VINSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINSupported'
        ),
        'VRMSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VRMSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRMSupported'
        ),
        'ValueCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ValueCategoryDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ),
        'ValuePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ValuePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ),
        'VariationsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
        ),
        'eBayMotorsProAdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
        ),
        'eBayMotorsProAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoAcceptEnabled'
        ),
        'eBayMotorsProAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoDeclineEnabled'
        ),
        'eBayMotorsProBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
        ),
        'eBayMotorsProCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ),
        'eBayMotorsProContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ),
        'eBayMotorsProContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ),
        'eBayMotorsProContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ),
        'eBayMotorsProCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ),
        'eBayMotorsProPaymentMethodCheckOutEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ),
        'eBayMotorsProPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ),
        'eBayMotorsProSellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ),
        'eBayMotorsProShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ),
        'eBayMotorsProStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProStreetCountDefinitionType',
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
