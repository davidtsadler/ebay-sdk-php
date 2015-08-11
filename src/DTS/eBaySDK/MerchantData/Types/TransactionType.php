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
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualHandlingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AmountPaid
 * @property boolean $BestOfferSale
 * @property boolean $BundlePurchase
 * @property \DTS\eBaySDK\MerchantData\Types\UserType $Buyer
 * @property string $BuyerCheckoutMessage
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property \DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType $BuyerPaidStatus
 * @property string $CartID
 * @property string $CodiceFiscale
 * @property \DTS\eBaySDK\MerchantData\Types\OrderType $ContainingOrder
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedAdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedAmountPaid
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ConvertedTransactionPrice
 * @property \DateTime $CreatedDate
 * @property \DTS\eBaySDK\MerchantData\Enums\DepositTypeCodeType $DepositType
 * @property \DTS\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType $DigitalDeliverySelected
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $DutchAuctionBid
 * @property string $ExtendedOrderID
 * @property \DTS\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackLeft
 * @property \DTS\eBaySDK\MerchantData\Types\FeedbackInfoType $FeedbackReceived
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FinalValueFee
 * @property boolean $Gift
 * @property \DTS\eBaySDK\MerchantData\Types\GiftSummaryType $GiftSummary
 * @property boolean $IntangibleItem
 * @property string $InventoryReservationID
 * @property \DateTime $InvoiceSentTime
 * @property boolean $IsMultiLegShipping
 * @property \DTS\eBaySDK\MerchantData\Types\ItemType $Item
 * @property \DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property string $LogisticsPlanType
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property string $OrderLineItemID
 * @property \DateTime $PaidTime
 * @property string $PaisaPayID
 * @property string $PayPalEmailAddress
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property \DTS\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType $Platform
 * @property integer $QuantityPurchased
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $RefundAmount
 * @property \DTS\eBaySDK\MerchantData\Types\RefundArrayType $RefundArray
 * @property string $RefundStatus
 * @property boolean $SellerContactBuyerByEmail
 * @property \DTS\eBaySDK\MerchantData\Types\SellerDiscountsType $SellerDiscounts
 * @property \DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType $SellerPaidStatus
 * @property \DTS\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \DateTime $ShippedTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property \DTS\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TotalPrice
 * @property string $TransactionID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TransactionPrice
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $TransactionSiteID
 * @property \DTS\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 * @property integer $VATPercent
 * @property \DTS\eBaySDK\MerchantData\Types\VariationType $Variation
 * @property boolean $eBayPlusTransaction
 */
class TransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ActualHandlingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualHandlingCost'
        ),
        'ActualShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
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
        'BestOfferSale' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferSale'
        ),
        'BundlePurchase' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BundlePurchase'
        ),
        'Buyer' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Buyer'
        ),
        'BuyerCheckoutMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ),
        'BuyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'BuyerPackageEnclosures' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ),
        'BuyerPaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaidStatus'
        ),
        'CartID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CartID'
        ),
        'CodiceFiscale' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CodiceFiscale'
        ),
        'ContainingOrder' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContainingOrder'
        ),
        'ConvertedAdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAdjustmentAmount'
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
        'DigitalDeliverySelected' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\DigitalDeliverySelectedType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DigitalDeliverySelected'
        ),
        'DutchAuctionBid' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchAuctionBid'
        ),
        'ExtendedOrderID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ),
        'ExternalTransaction' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
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
        'FinalValueFee' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ),
        'Gift' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Gift'
        ),
        'GiftSummary' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\GiftSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GiftSummary'
        ),
        'IntangibleItem' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntangibleItem'
        ),
        'InventoryReservationID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryReservationID'
        ),
        'InvoiceSentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceSentTime'
        ),
        'IsMultiLegShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ),
        'Item' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ),
        'ListingCheckoutRedirectPreference' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ),
        'LogisticsPlanType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ),
        'MonetaryDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentsInformationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ),
        'MultiLegShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ),
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'PaidTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ),
        'PaisaPayID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayID'
        ),
        'PayPalEmailAddress' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ),
        'PaymentHoldDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
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
        'Platform' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ),
        'QuantityPurchased' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityPurchased'
        ),
        'RefundAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'RefundArray' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\RefundArrayType',
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
        'SellerContactBuyerByEmail' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactBuyerByEmail'
        ),
        'SellerDiscounts' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellerDiscountsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerDiscounts'
        ),
        'SellerPaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaidStatus'
        ),
        'SellingManagerProductDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingManagerProductDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'ShippingConvenienceCharge' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'ShippingServiceSelected' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ),
        'Status' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'Taxes' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TaxesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ),
        'TotalPrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalPrice'
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
        'TransactionSiteID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionSiteID'
        ),
        'UnpaidItem' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnpaidItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
        ),
        'VATPercent' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATPercent'
        ),
        'Variation' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VariationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variation'
        ),
        'eBayPlusTransaction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusTransaction'
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
