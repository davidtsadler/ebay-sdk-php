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
 * @property string $ItemID
 * @property string $TransactionID
 * @property string $OrderID
 * @property \DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \DTS\eBaySDK\Trading\Types\SalesTaxType $SalesTax
 * @property \DTS\eBaySDK\Trading\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InsuranceFee
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property string $CheckoutInstructions
 * @property boolean $EmailCopyToSeller
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CODCost
 * @property string $SKU
 * @property string $OrderLineItemID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 */
class SendInvoiceRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'TransactionID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'OrderID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ),
        'InternationalShippingServiceOptions' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOptions'
        ),
        'ShippingServiceOptions' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ),
        'SalesTax' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SalesTaxType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'InsuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ),
        'InsuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
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
        'CheckoutInstructions' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutInstructions'
        ),
        'EmailCopyToSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EmailCopyToSeller'
        ),
        'CODCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'AdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SendInvoiceRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
