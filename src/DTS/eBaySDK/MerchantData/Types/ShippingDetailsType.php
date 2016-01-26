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
 * @property boolean $GlobalShipping
 * @property \DTS\eBaySDK\MerchantData\Types\CalculatedShippingRateType $CalculatedShippingRate
 * @property boolean $ChangePaymentInstructions
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $InsuranceFee
 * @property \DTS\eBaySDK\MerchantData\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property boolean $InsuranceWanted
 * @property boolean $PaymentEdited
 * @property string $PaymentInstructions
 * @property \DTS\eBaySDK\MerchantData\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \DTS\eBaySDK\MerchantData\Enums\ShippingRateTypeCodeType $ShippingRateType
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \DTS\eBaySDK\MerchantData\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
 * @property \DTS\eBaySDK\MerchantData\Enums\ShippingTypeCodeType $ShippingType
 * @property integer $SellingManagerSalesRecordNumber
 * @property \DTS\eBaySDK\MerchantData\Types\TaxTableType $TaxTable
 * @property string $ShippingServiceUsed
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $DefaultShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\InsuranceDetailsType $InsuranceDetails
 * @property \DTS\eBaySDK\MerchantData\Types\InsuranceDetailsType $InternationalInsuranceDetails
 * @property string $ShippingDiscountProfileID
 * @property \DTS\eBaySDK\MerchantData\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \DTS\eBaySDK\MerchantData\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property boolean $PromotionalShippingDiscount
 * @property string $InternationalShippingDiscountProfileID
 * @property \DTS\eBaySDK\MerchantData\Types\FlatShippingDiscountType $InternationalFlatShippingDiscount
 * @property \DTS\eBaySDK\MerchantData\Types\CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
 * @property boolean $InternationalPromotionalShippingDiscount
 * @property \DTS\eBaySDK\MerchantData\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 * @property boolean $SellerExcludeShipToLocationsPreference
 * @property \DTS\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\RateTableDetailsType $RateTableDetails
 */
class ShippingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'GlobalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'CalculatedShippingRate' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CalculatedShippingRateType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingRate'
        ),
        'ChangePaymentInstructions' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ChangePaymentInstructions'
        ),
        'InsuranceFee' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
        ),
        'InsuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ),
        'InsuranceWanted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceWanted'
        ),
        'PaymentEdited' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentEdited'
        ),
        'PaymentInstructions' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstructions'
        ),
        'SalesTax' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SalesTaxType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'ShippingRateErrorMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ),
        'ShippingRateType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateType'
        ),
        'ShippingServiceOptions' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ),
        'InternationalShippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\InternationalShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ),
        'ShippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ),
        'SellingManagerSalesRecordNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSalesRecordNumber'
        ),
        'TaxTable' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TaxTableType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
        ),
        'ShippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'DefaultShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DefaultShippingCost'
        ),
        'InsuranceDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\InsuranceDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceDetails'
        ),
        'InternationalInsuranceDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\InsuranceDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceDetails'
        ),
        'ShippingDiscountProfileID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDiscountProfileID'
        ),
        'FlatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ),
        'CalculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ),
        'PromotionalShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ),
        'InternationalShippingDiscountProfileID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingDiscountProfileID'
        ),
        'InternationalFlatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalFlatShippingDiscount'
        ),
        'InternationalCalculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalCalculatedShippingDiscount'
        ),
        'InternationalPromotionalShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalPromotionalShippingDiscount'
        ),
        'PromotionalShippingDiscountDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PromotionalShippingDiscountDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ),
        'CODCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'ExcludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'SellerExcludeShipToLocationsPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationsPreference'
        ),
        'ShipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'RateTableDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RateTableDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RateTableDetails'
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
