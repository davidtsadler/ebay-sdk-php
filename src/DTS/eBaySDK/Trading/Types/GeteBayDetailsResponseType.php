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
 * @property \DTS\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
 * @property \DTS\eBaySDK\Trading\Types\CountryDetailsType[] $CountryDetails
 * @property \DTS\eBaySDK\Trading\Types\CurrencyDetailsType[] $CurrencyDetails
 * @property \DTS\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
 * @property \DTS\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
 * @property \DTS\eBaySDK\Trading\Types\ItemSpecificDetailsType[] $ItemSpecificDetails
 * @property \DTS\eBaySDK\Trading\Types\ListingFeatureDetailsType[] $ListingFeatureDetails
 * @property \DTS\eBaySDK\Trading\Types\ListingStartPriceDetailsType[] $ListingStartPriceDetails
 * @property \DTS\eBaySDK\Trading\Types\ProductDetailsType $ProductDetails
 * @property \DTS\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
 * @property \DTS\eBaySDK\Trading\Types\RegionDetailsType[] $RegionDetails
 * @property \DTS\eBaySDK\Trading\Types\RegionOfOriginDetailsType[] $RegionOfOriginDetails
 * @property \DTS\eBaySDK\Trading\Types\ReturnPolicyDetailsType $ReturnPolicyDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingCarrierDetailsType[] $ShippingCarrierDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingCategoryDetailsType[] $ShippingCategoryDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingLocationDetailsType[] $ShippingLocationDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingPackageDetailsType[] $ShippingPackageDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceDetailsType[] $ShippingServiceDetails
 * @property \DTS\eBaySDK\Trading\Types\SiteDetailsType[] $SiteDetails
 * @property \DTS\eBaySDK\Trading\Types\TaxJurisdictionType[] $TaxJurisdiction
 * @property \DTS\eBaySDK\Trading\Types\TimeZoneDetailsType[] $TimeZoneDetails
 * @property \DTS\eBaySDK\Trading\Types\URLDetailsType[] $URLDetails
 * @property \DTS\eBaySDK\Trading\Types\UnitOfMeasurementDetailsType[] $UnitOfMeasurementDetails
 * @property \DateTime $UpdateTime
 * @property \DTS\eBaySDK\Trading\Types\VariationDetailsType $VariationDetails
 */
class GeteBayDetailsResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BuyerRequirementDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ),
        'CountryDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CountryDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CountryDetails'
        ),
        'CurrencyDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CurrencyDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CurrencyDetails'
        ),
        'DispatchTimeMaxDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DispatchTimeMaxDetails'
        ),
        'ExcludeShippingLocationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShippingLocationDetails'
        ),
        'ItemSpecificDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemSpecificDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemSpecificDetails'
        ),
        'ListingFeatureDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingFeatureDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingFeatureDetails'
        ),
        'ListingStartPriceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingStartPriceDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingStartPriceDetails'
        ),
        'ProductDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductDetails'
        ),
        'RecoupmentPolicyDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyDetails'
        ),
        'RegionDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegionDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RegionDetails'
        ),
        'RegionOfOriginDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegionOfOriginDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RegionOfOriginDetails'
        ),
        'ReturnPolicyDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyDetails'
        ),
        'ShippingCarrierDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingCarrierDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrierDetails'
        ),
        'ShippingCategoryDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingCategoryDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCategoryDetails'
        ),
        'ShippingLocationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingLocationDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingLocationDetails'
        ),
        'ShippingPackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingPackageDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ),
        'ShippingServiceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceDetails'
        ),
        'SiteDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SiteDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SiteDetails'
        ),
        'TaxJurisdiction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TaxJurisdictionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'TaxJurisdiction'
        ),
        'TimeZoneDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TimeZoneDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'TimeZoneDetails'
        ),
        'URLDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\URLDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'URLDetails'
        ),
        'UnitOfMeasurementDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnitOfMeasurementDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UnitOfMeasurementDetails'
        ),
        'UpdateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'VariationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationDetails'
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
        
        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GeteBayDetailsResponse';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
