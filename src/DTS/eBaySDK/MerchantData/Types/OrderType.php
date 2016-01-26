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
 * @property string $OrderID
 * @property \DTS\eBaySDK\MerchantData\Enums\OrderStatusCodeType $OrderStatus
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AmountPaid
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AmountSaved
 * @property \DTS\eBaySDK\MerchantData\Types\CheckoutStatusType $CheckoutStatus
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Enums\TradingRoleCodeType $CreatingUserRole
 * @property \DateTime $CreatedTime
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $SellerEmail
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $Subtotal
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $Total
 * @property \DTS\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionArrayType $TransactionArray
 * @property string $BuyerUserID
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property string $BuyerCheckoutMessage
 * @property string $EIASToken
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $RefundAmount
 * @property string $RefundStatus
 * @property \DTS\eBaySDK\MerchantData\Types\RefundArrayType $RefundArray
 * @property boolean $IsMultiLegShipping
 * @property \DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property string $SellerUserID
 * @property string $SellerEIASToken
 * @property string $CancelReason
 * @property \DTS\eBaySDK\MerchantData\Enums\CancelStatusCodeType $CancelStatus
 * @property string $CancelReasonDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property \DTS\eBaySDK\MerchantData\Types\CancelDetailType[] $CancelDetail
 * @property string $LogisticsPlanType
 * @property \DTS\eBaySDK\MerchantData\Types\TaxIdentifierType[] $BuyerTaxIdentifier
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $ExtendedOrderID
 * @property boolean $ContainseBayPlusTransaction
 */
class OrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'OrderID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ),
        'OrderStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ),
        'AdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'AmountPaid' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'AmountSaved' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ),
        'CheckoutStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CheckoutStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'CreatingUserRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ),
        'CreatedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ),
        'PaymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'SellerEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'ShippingServiceSelected' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ),
        'Subtotal' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ),
        'Total' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ),
        'ExternalTransaction' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'TransactionArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ),
        'BuyerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ),
        'PaidTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'BuyerCheckoutMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ),
        'EIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'PaymentHoldStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ),
        'PaymentHoldDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ),
        'RefundAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'RefundStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ),
        'RefundArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RefundArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ),
        'IsMultiLegShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ),
        'MultiLegShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ),
        'MonetaryDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentsInformationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ),
        'PickupDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PickupDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ),
        'PickupMethodSelected' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ),
        'SellerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ),
        'SellerEIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ),
        'CancelReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ),
        'CancelStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ),
        'CancelReasonDetails' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelReasonDetails'
        ),
        'ShippingConvenienceCharge' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ),
        'CancelDetail' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CancelDetailType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CancelDetail'
        ),
        'LogisticsPlanType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ),
        'BuyerTaxIdentifier' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TaxIdentifierType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'BuyerTaxIdentifier'
        ),
        'BuyerPackageEnclosures' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ),
        'ExtendedOrderID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ),
        'ContainseBayPlusTransaction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContainseBayPlusTransaction'
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
