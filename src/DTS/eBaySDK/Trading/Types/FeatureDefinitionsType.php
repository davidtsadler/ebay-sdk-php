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
 * @property \DTS\eBaySDK\Trading\Types\ListingDurationDefinitionsType $ListingDurations
 * @property \DTS\eBaySDK\Trading\Types\ShippingTermRequiredDefinitionType $ShippingTermsRequired
 * @property \DTS\eBaySDK\Trading\Types\BestOfferEnabledDefinitionType $BestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\DutchBINEnabledDefinitionType $DutchBINEnabled
 * @property \DTS\eBaySDK\Trading\Types\UserConsentRequiredDefinitionType $UserConsentRequired
 * @property \DTS\eBaySDK\Trading\Types\HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled
 * @property \DTS\eBaySDK\Trading\Types\ProPackEnabledDefinitionType $ProPackEnabled
 * @property \DTS\eBaySDK\Trading\Types\BasicUpgradePackEnabledDefinitionType $BasicUpgradePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\ValuePackEnabledDefinitionType $ValuePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\ProPackPlusEnabledDefinitionType $ProPackPlusEnabled
 * @property \DTS\eBaySDK\Trading\Types\AdFormatEnabledDefinitionType $AdFormatEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription
 * @property \DTS\eBaySDK\Trading\Types\MinimumReservePriceDefinitionType $MinimumReservePrice
 * @property \DTS\eBaySDK\Trading\Types\TCREnabledDefinitionType $TransactionConfirmationRequestEnabled
 * @property \DTS\eBaySDK\Trading\Types\SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Types\StoreInventoryEnabledDefinitionType $StoreInventoryEnabled
 * @property \DTS\eBaySDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled
 * @property \DTS\eBaySDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular
 * @property \DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty
 * @property \DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Types\SafePaymentRequiredDefinitionType $SafePaymentRequired
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled
 * @property \DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled
 * @property \DTS\eBaySDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled
 * @property \DTS\eBaySDK\Trading\Types\ISBNIdentifierEnabledDefinitionType $ISBNIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\UPCIdentifierEnabledDefinitionType $UPCIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\EANIdentifierEnabledDefinitionType $EANIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled
 * @property \DTS\eBaySDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled
 * @property \DTS\eBaySDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled
 * @property \DTS\eBaySDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled
 * @property \DTS\eBaySDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled
 * @property \DTS\eBaySDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled
 * @property \DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType $CombinedFixedPriceTreatmentEnabled
 * @property \DTS\eBaySDK\Trading\Types\ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations
 * @property \DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline
 * @property \DTS\eBaySDK\Trading\Types\PayPalRequiredDefinitionType $PayPalRequired
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketStreetCountDefinitionType $LocalMarketStreetCount
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled
 * @property \DTS\eBaySDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount
 * @property \DTS\eBaySDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled
 * @property \DTS\eBaySDK\Trading\Types\SpecialitySubscriptionDefinitionType $SpecialitySubscription
 * @property \DTS\eBaySDK\Trading\Types\RegularSubscriptionDefinitionType $RegularSubscription
 * @property \DTS\eBaySDK\Trading\Types\PremiumSubscriptionDefinitionType $PremiumSubscription
 * @property \DTS\eBaySDK\Trading\Types\NonSubscriptionDefinitionType $NonSubscription
 * @property \DTS\eBaySDK\Trading\Types\ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled
 * @property \DTS\eBaySDK\Trading\Types\HandlingTimeEnabledDefinitionType $HandlingTimeEnabled
 * @property \DTS\eBaySDK\Trading\Types\PayPalRequiredForStoreOwnerDefinitionType $PayPalRequiredForStoreOwner
 * @property \DTS\eBaySDK\Trading\Types\ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed
 * @property \DTS\eBaySDK\Trading\Types\RevisePriceAllowedDefinitionType $RevisePriceAllowed
 * @property \DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled
 * @property \DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations
 * @property \DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType $PaymentMethod
 * @property \DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt
 * @property \DTS\eBaySDK\Trading\Types\MaxFlatShippingCostDefinitionType $MaxFlatShippingCost
 * @property \DTS\eBaySDK\Trading\Types\VariationsEnabledDefinitionType $VariationsEnabled
 * @property \DTS\eBaySDK\Trading\Types\FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled
 * @property \DTS\eBaySDK\Trading\Types\FreePicturePackEnabledDefinitionType $FreePicturePackEnabled
 * @property \DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled
 * @property \DTS\eBaySDK\Trading\Types\MaxItemCompatibilityDefinitionType $MaxItemCompatibility
 * @property \DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType $MinItemCompatibility
 * @property \DTS\eBaySDK\Trading\Types\ConditionEnabledDefinitionType $ConditionEnabled
 * @property \DTS\eBaySDK\Trading\Types\ConditionValuesDefinitionType $ConditionValues
 * @property \DTS\eBaySDK\Trading\Types\ValueCategoryDefinitionType $ValueCategory
 * @property \DTS\eBaySDK\Trading\Types\ProductCreationEnabledDefinitionType $ProductCreationEnabled
 * @property \DTS\eBaySDK\Trading\Types\EANEnabledDefinitionType $EANEnabled
 * @property \DTS\eBaySDK\Trading\Types\ISBNEnabledDefinitionType $ISBNEnabled
 * @property \DTS\eBaySDK\Trading\Types\UPCEnabledDefinitionType $UPCEnabled
 * @property \DTS\eBaySDK\Trading\Types\CompatibleVehicleTypeDefinitionType $CompatibleVehicleType
 * @property \DTS\eBaySDK\Trading\Types\MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount
 * @property \DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup
 * @property \DTS\eBaySDK\Trading\Types\VINSupportedDefinitionType $VINSupported
 * @property \DTS\eBaySDK\Trading\Types\VRMSupportedDefinitionType $VRMSupported
 * @property \DTS\eBaySDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported
 * @property \DTS\eBaySDK\Trading\Types\DepositSupportedDefinitionType $DepositSupported
 * @property \DTS\eBaySDK\Trading\Types\GlobalShippingEnabledDefinitionType $GlobalShippingEnabled
 * @property \DTS\eBaySDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled
 * @property \DTS\eBaySDK\Trading\Types\PickupDropOffEnabledDefinitionType $PickupDropOffEnabled
 * @property \DTS\eBaySDK\Trading\Types\DigitalGoodDeliveryEnabledDefinitionType $DigitalGoodDeliveryEnabled
 */
class FeatureDefinitionsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDurationDefinitionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDurations'
        ),
        'ShippingTermsRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingTermRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ),
        'BestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'DutchBINEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DutchBINEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchBINEnabled'
        ),
        'UserConsentRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserConsentRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
        ),
        'HomePageFeaturedEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\HomePageFeaturedEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ),
        'ProPackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProPackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ),
        'BasicUpgradePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BasicUpgradePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BasicUpgradePackEnabled'
        ),
        'ValuePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ValuePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ),
        'ProPackPlusEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProPackPlusEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ),
        'AdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ),
        'BestOfferCounterEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ),
        'BestOfferAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ),
        'LocalMarketSpecialitySubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ),
        'LocalMarketRegularSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ),
        'LocalMarketPremiumSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ),
        'LocalMarketNonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ),
        'MinimumReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinimumReservePriceDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ),
        'TransactionConfirmationRequestEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TCREnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ),
        'SellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ),
        'StoreInventoryEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreInventoryEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreInventoryEnabled'
        ),
        'SkypeMeTransactionalEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeTransactionalEnabled'
        ),
        'SkypeMeNonTransactionalEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeNonTransactionalEnabled'
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
        'LocalListingDistancesNonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesNonSubscription'
        ),
        'ClassifiedAdPaymentMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ),
        'ClassifiedAdShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ),
        'ClassifiedAdBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ),
        'ClassifiedAdCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ),
        'ClassifiedAdAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ),
        'ClassifiedAdContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ),
        'ClassifiedAdContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ),
        'SafePaymentRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SafePaymentRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ),
        'ClassifiedAdPayPerLeadEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ),
        'ItemSpecificsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ),
        'PaisaPayFullEscrowEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ),
        'ISBNIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ISBNIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNIdentifierEnabled'
        ),
        'UPCIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UPCIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCIdentifierEnabled'
        ),
        'EANIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EANIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANIdentifierEnabled'
        ),
        'BrandMPNIdentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ),
        'BestOfferAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ),
        'ClassifiedAdAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ),
        'CrossBorderTradeNorthAmericaEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ),
        'CrossBorderTradeGBEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ),
        'CrossBorderTradeAustraliaEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ),
        'PayPalBuyerProtectionEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ),
        'BuyerGuaranteeEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ),
        'CombinedFixedPriceTreatmentEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedFixedPriceTreatmentEnabled'
        ),
        'GalleryFeaturedDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingEnhancementDurationDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ),
        'INEscrowWorkflowTimeline' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ),
        'PayPalRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ),
        'eBayMotorsProAdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
        ),
        'eBayMotorsProContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ),
        'eBayMotorsProPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ),
        'eBayMotorsProContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ),
        'eBayMotorsProStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProStreetCount'
        ),
        'eBayMotorsProCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ),
        'eBayMotorsProContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ),
        'eBayMotorsProBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
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
        'eBayMotorsProPaymentMethodCheckOutEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ),
        'eBayMotorsProShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ),
        'eBayMotorsProCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ),
        'eBayMotorsProSellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ),
        'LocalMarketAdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
        ),
        'LocalMarketContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ),
        'LocalMarketPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ),
        'LocalMarketContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ),
        'LocalMarketStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ),
        'LocalMarketCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ),
        'LocalMarketContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ),
        'LocalMarketBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
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
        'LocalMarketPaymentMethodCheckOutEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ),
        'LocalMarketShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ),
        'LocalMarketCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ),
        'LocalMarketSellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ),
        'ClassifiedAdPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ),
        'ClassifiedAdContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ),
        'ClassifiedAdStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ),
        'ClassifiedAdCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ),
        'SpecialitySubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SpecialitySubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ),
        'RegularSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegularSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ),
        'PremiumSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PremiumSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ),
        'NonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ),
        'ReturnPolicyEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ),
        'HandlingTimeEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\HandlingTimeEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ),
        'PayPalRequiredForStoreOwner' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalRequiredForStoreOwnerDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequiredForStoreOwner'
        ),
        'ReviseQuantityAllowed' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReviseQuantityAllowedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ),
        'RevisePriceAllowed' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RevisePriceAllowedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ),
        'StoreOwnerExtendedListingDurationsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ),
        'StoreOwnerExtendedListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ),
        'PaymentMethod' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
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
        'MaxFlatShippingCostCBTExempt' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCostCBTExempt'
        ),
        'MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ),
        'VariationsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
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
        'ItemCompatibilityEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
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
        'ValueCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ValueCategoryDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ),
        'ProductCreationEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductCreationEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ),
        'EANEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EANEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANEnabled'
        ),
        'ISBNEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ISBNEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNEnabled'
        ),
        'UPCEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UPCEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCEnabled'
        ),
        'CompatibleVehicleType' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CompatibleVehicleTypeDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
        ),
        'MaxGranularFitmentCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxGranularFitmentCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ),
        'ShippingProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ),
        'PaymentProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ),
        'ReturnPolicyProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
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
        'SellerProvidedTitleSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ),
        'DepositSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DepositSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ),
        'GlobalShippingEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\GlobalShippingEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
        ),
        'AdditionalCompatibilityEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ),
        'PickupDropOffEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupDropOffEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDropOffEnabled'
        ),
        'DigitalGoodDeliveryEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DigitalGoodDeliveryEnabledDefinitionType',
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
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
