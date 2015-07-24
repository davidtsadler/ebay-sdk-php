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
 * @property boolean $AllowPaymentEdit
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CODCost
 * @property \DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\CalculatedShippingRateType $CalculatedShippingRate
 * @property boolean $ChangePaymentInstructions
 * @property \DTS\eBaySDK\Trading\Types\AmountType $DefaultShippingCost
 * @property string[] $ExcludeShipToLocation
 * @property \DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property boolean $GlobalShipping
 * @property \DTS\eBaySDK\Trading\Types\InsuranceDetailsType $InsuranceDetails
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InsuranceFee
 * @property \DTS\eBaySDK\Trading\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property boolean $InsuranceWanted
 * @property \DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $InternationalFlatShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\InsuranceDetailsType $InternationalInsuranceDetails
 * @property boolean $InternationalPromotionalShippingDiscount
 * @property string $InternationalShippingDiscountProfileID
 * @property \DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
 * @property boolean $PaymentEdited
 * @property string $PaymentInstructions
 * @property boolean $PromotionalShippingDiscount
 * @property \DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \DTS\eBaySDK\Trading\Types\RateTableDetailsType $RateTableDetails
 * @property \DTS\eBaySDK\Trading\Types\SalesTaxType $SalesTax
 * @property boolean $SellerExcludeShipToLocationsPreference
 * @property integer $SellingManagerSalesRecordNumber
 * @property \DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property string $ShippingDiscountProfileID
 * @property string $ShippingRateErrorMessage
 * @property \DTS\eBaySDK\Trading\Enums\ShippingRateTypeCodeType $ShippingRateType
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property string $ShippingServiceUsed
 * @property \DTS\eBaySDK\Trading\Enums\ShippingTypeCodeType $ShippingType
 * @property \DTS\eBaySDK\Trading\Types\TaxTableType $TaxTable
 */
class ShippingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AllowPaymentEdit' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllowPaymentEdit'
        ),
        'CODCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'CalculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ),
        'CalculatedShippingRate' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingRateType',
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
        'DefaultShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DefaultShippingCost'
        ),
        'ExcludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'FlatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ),
        'GlobalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'InsuranceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InsuranceDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceDetails'
        ),
        'InsuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
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
        'InternationalCalculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalCalculatedShippingDiscount'
        ),
        'InternationalFlatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalFlatShippingDiscount'
        ),
        'InternationalInsuranceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InsuranceDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceDetails'
        ),
        'InternationalPromotionalShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalPromotionalShippingDiscount'
        ),
        'InternationalShippingDiscountProfileID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingDiscountProfileID'
        ),
        'InternationalShippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
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
        'PromotionalShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ),
        'PromotionalShippingDiscountDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ),
        'RateTableDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RateTableDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RateTableDetails'
        ),
        'SalesTax' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SalesTaxType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'SellerExcludeShipToLocationsPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationsPreference'
        ),
        'SellingManagerSalesRecordNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSalesRecordNumber'
        ),
        'ShipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'ShippingDiscountProfileID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDiscountProfileID'
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
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ),
        'ShippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'ShippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ),
        'TaxTable' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TaxTableType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
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
