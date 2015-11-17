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
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AmountPaid
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\Trading\Enums\CompleteStatusCodeType $CheckoutStatus
 * @property string $ShippingService
 * @property boolean $ShippingIncludedInTax
 * @property \DTS\eBaySDK\Trading\Enums\InsuranceSelectedCodeType $InsuranceType
 * @property \DTS\eBaySDK\Trading\Enums\RCSPaymentStatusCodeType $PaymentStatus
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property string $BuyerID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ShippingInsuranceCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $SalesTax
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ShippingCost
 * @property string $EncryptedID
 * @property \DTS\eBaySDK\Trading\Types\ExternalTransactionType $ExternalTransaction
 * @property string $MultipleSellerPaymentID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CODCost
 * @property string $OrderLineItemID
 */
class ReviseCheckoutStatusRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
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
        'AmountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'PaymentMethodUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ),
        'CheckoutStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'ShippingService' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ),
        'ShippingIncludedInTax' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingIncludedInTax'
        ),
        'InsuranceType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceType'
        ),
        'PaymentStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentStatus'
        ),
        'AdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'BuyerID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerID'
        ),
        'ShippingInsuranceCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ),
        'SalesTax' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'ShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ),
        'EncryptedID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EncryptedID'
        ),
        'ExternalTransaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalTransactionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'MultipleSellerPaymentID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MultipleSellerPaymentID'
        ),
        'CODCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseCheckoutStatusRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
