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
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AmountPaid
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedAdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\UserType $Buyer
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedAmountPaid
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedTransactionPrice
 * @property \DateTime $CreatedDate
 * @property \DTS\eBaySDK\MerchantData\Enums\DepositTypeCodeType $DepositType
 * @property \DTS\eBaySDK\MerchantData\Types\ItemType $Item
 * @property integer $QuantityPurchased
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property string $TransactionID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TransactionPrice
 * @property boolean $BestOfferSale
 * @property integer $VATPercent
 * @property \DTS\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType $BuyerPaidStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType $SellerPaidStatus
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TotalPrice
 * @property \DTS\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackLeft
 * @property \DTS\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackReceived
 * @property \DTS\eBaySDK\MerchantData\Types\OrderType $ContainingOrder
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FinalValueFee
 * @property \DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DTS\eBaySDK\MerchantData\Types\RefundArrayType $RefundArray
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $TransactionSiteID
 * @property \DTS\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType $Platform
 * @property string $CartID
 * @property boolean $SellerContactBuyerByEmail
 * @property string $PayPalEmailAddress
 * @property string $PaisaPayID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\MerchantData\Types\VariationType $Variation
 * @property string $BuyerCheckoutMessage
 * @property \DTS\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property boolean $BundlePurchase
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualHandlingCost
 * @property string $OrderLineItemID
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DTS\eBaySDK\MerchantData\Types\SellerDiscountsType $SellerDiscounts
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $RefundAmount
 * @property string $RefundStatus
 * @property string $CodiceFiscale
 * @property boolean $IsMultiLegShipping
 * @property \DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \DateTime $InvoiceSentTime
 * @property \DTS\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 * @property boolean $IntangibleItem
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property string $LogisticsPlanType
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $InventoryReservationID
 * @property string $ExtendedOrderID
 * @property boolean $eBayPlusTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\GiftSummaryType $GiftSummary
 * @property \DTS\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType $DigitalDeliverySelected
 * @property boolean $Gift
 */
class TransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AmountPaid' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'AdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'ConvertedAdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAdjustmentAmount'
        ),
        'Buyer' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Buyer'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'ConvertedAmountPaid' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAmountPaid'
        ),
        'ConvertedTransactionPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedTransactionPrice'
        ),
        'CreatedDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatedDate'
        ),
        'DepositType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositType'
        ),
        'Item' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ),
        'QuantityPurchased' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityPurchased'
        ),
        'Status' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'TransactionID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'TransactionPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionPrice'
        ),
        'BestOfferSale' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferSale'
        ),
        'VATPercent' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATPercent'
        ),
        'ExternalTransaction' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'SellingManagerProductDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ),
        'ShippingServiceSelected' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ),
        'BuyerPaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaidStatus'
        ),
        'SellerPaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaidStatus'
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
        'TotalPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalPrice'
        ),
        'FeedbackLeft' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\FeedbackInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackLeft'
        ),
        'FeedbackReceived' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\FeedbackInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ),
        'ContainingOrder' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContainingOrder'
        ),
        'FinalValueFee' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ),
        'ListingCheckoutRedirectPreference' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ),
        'RefundArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RefundArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ),
        'TransactionSiteID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionSiteID'
        ),
        'Platform' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ),
        'CartID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CartID'
        ),
        'SellerContactBuyerByEmail' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactBuyerByEmail'
        ),
        'PayPalEmailAddress' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ),
        'PaisaPayID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayID'
        ),
        'BuyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'Variation' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VariationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variation'
        ),
        'BuyerCheckoutMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ),
        'Taxes' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TaxesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ),
        'BundlePurchase' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BundlePurchase'
        ),
        'ActualShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ),
        'ActualHandlingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualHandlingCost'
        ),
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'PaymentHoldDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ),
        'SellerDiscounts' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellerDiscountsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerDiscounts'
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
        'CodiceFiscale' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CodiceFiscale'
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
        'InvoiceSentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceSentTime'
        ),
        'UnpaidItem' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnpaidItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
        ),
        'IntangibleItem' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntangibleItem'
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
        'ShippingConvenienceCharge' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ),
        'LogisticsPlanType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ),
        'BuyerPackageEnclosures' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ),
        'InventoryReservationID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryReservationID'
        ),
        'ExtendedOrderID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ),
        'eBayPlusTransaction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusTransaction'
        ),
        'GiftSummary' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\GiftSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GiftSummary'
        ),
        'DigitalDeliverySelected' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DigitalDeliverySelected'
        ),
        'Gift' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Gift'
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
