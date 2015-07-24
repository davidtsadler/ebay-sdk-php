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
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AmountPaid
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AmountSaved
 * @property string $BuyerCheckoutMessage
 * @property \DTS\eBaySDK\Trading\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property \DTS\eBaySDK\Trading\Types\TaxIdentifierType[] $BuyerTaxIdentifier
 * @property string $BuyerUserID
 * @property \DTS\eBaySDK\Trading\Types\CancelDetailType[] $CancelDetail
 * @property string $CancelReason
 * @property string $CancelReasonDetails
 * @property \DTS\eBaySDK\Trading\Enums\CancelStatusCodeType $CancelStatus
 * @property \DTS\eBaySDK\Trading\Types\CheckoutStatusType $CheckoutStatus
 * @property \DateTime $CreatedTime
 * @property \DTS\eBaySDK\Trading\Enums\TradingRoleCodeType $CreatingUserRole
 * @property string $EIASToken
 * @property string $ExtendedOrderID
 * @property \DTS\eBaySDK\Trading\Types\ExternalTransactionType[] $ExternalTransaction
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property boolean $IsMultiLegShipping
 * @property string $LogisticsPlanType
 * @property \DTS\eBaySDK\Trading\Types\PaymentsInformationType $MonetaryDetails
 * @property \DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property string $OrderID
 * @property \DTS\eBaySDK\Trading\Enums\OrderStatusCodeType $OrderStatus
 * @property \DateTime $PaidTime
 * @property \DTS\eBaySDK\Trading\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DTS\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property \DTS\eBaySDK\Trading\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\Trading\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property \DTS\eBaySDK\Trading\Types\AmountType $RefundAmount
 * @property \DTS\eBaySDK\Trading\Types\RefundArrayType $RefundArray
 * @property string $RefundStatus
 * @property string $SellerEIASToken
 * @property string $SellerEmail
 * @property string $SellerUserID
 * @property \DateTime $ShippedTime
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ShippingConvenienceCharge
 * @property \DTS\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Subtotal
 * @property \DTS\eBaySDK\Trading\Types\AmountType $Total
 * @property \DTS\eBaySDK\Trading\Types\TransactionArrayType $TransactionArray
 */
class OrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'AmountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'AmountSaved' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ),
        'BuyerCheckoutMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ),
        'BuyerPackageEnclosures' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerPackageEnclosuresType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ),
        'BuyerTaxIdentifier' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TaxIdentifierType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'BuyerTaxIdentifier'
        ),
        'BuyerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ),
        'CancelDetail' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CancelDetailType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CancelDetail'
        ),
        'CancelReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ),
        'CancelReasonDetails' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelReasonDetails'
        ),
        'CancelStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ),
        'CheckoutStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CheckoutStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'CreatedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ),
        'CreatingUserRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ),
        'EIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'ExtendedOrderID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ),
        'ExternalTransaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'IsMultiLegShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ),
        'LogisticsPlanType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ),
        'MonetaryDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentsInformationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ),
        'MultiLegShippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ),
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
        'PaidTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ),
        'PaymentHoldDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentHoldDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ),
        'PaymentHoldStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ),
        'PaymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'PickupDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ),
        'PickupMethodSelected' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupMethodSelectedType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ),
        'RefundAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'RefundArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ),
        'RefundStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ),
        'SellerEIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ),
        'SellerEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ),
        'SellerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'ShippingConvenienceCharge' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'ShippingServiceSelected' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ),
        'Subtotal' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ),
        'Total' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ),
        'TransactionArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
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
