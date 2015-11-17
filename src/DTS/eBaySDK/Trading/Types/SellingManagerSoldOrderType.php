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
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CashOnDeliveryCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TotalAmount
 * @property integer $TotalQuantity
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemCost
 * @property \DTS\eBaySDK\Trading\Types\VATRateType[] $VATRate
 * @property \DTS\eBaySDK\Trading\Types\AmountType $NetInsuranceFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $VATInsuranceFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $VATShippingFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $NetShippingFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $NetTotalAmount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $VATTotalAmount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 * @property string $NotesToBuyer
 * @property string $NotesFromBuyer
 * @property string $NotesToSeller
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerOrderStatusType $OrderStatus
 * @property \DTS\eBaySDK\Trading\Enums\UnpaidItemStatusTypeCodeType $UnpaidItemStatus
 * @property \DTS\eBaySDK\Trading\Types\AmountType $SalePrice
 * @property integer $EmailsSent
 * @property integer $DaysSinceSale
 * @property string $BuyerID
 * @property string $BuyerEmail
 * @property integer $SaleRecordID
 * @property \DateTime $CreationTime
 */
class SellingManagerSoldOrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'SellingManagerSoldTransaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerSoldTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SellingManagerSoldTransaction'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'ShippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'CashOnDeliveryCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CashOnDeliveryCost'
        ),
        'TotalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalAmount'
        ),
        'TotalQuantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalQuantity'
        ),
        'ItemCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCost'
        ),
        'VATRate' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VATRateType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VATRate'
        ),
        'NetInsuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetInsuranceFee'
        ),
        'VATInsuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATInsuranceFee'
        ),
        'VATShippingFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATShippingFee'
        ),
        'NetShippingFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetShippingFee'
        ),
        'NetTotalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetTotalAmount'
        ),
        'VATTotalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATTotalAmount'
        ),
        'ActualShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ),
        'AdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'NotesToBuyer' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotesToBuyer'
        ),
        'NotesFromBuyer' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotesFromBuyer'
        ),
        'NotesToSeller' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotesToSeller'
        ),
        'OrderStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerOrderStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ),
        'UnpaidItemStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemStatus'
        ),
        'SalePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ),
        'EmailsSent' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EmailsSent'
        ),
        'DaysSinceSale' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DaysSinceSale'
        ),
        'BuyerID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerID'
        ),
        'BuyerEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerEmail'
        ),
        'SaleRecordID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleRecordID'
        ),
        'CreationTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreationTime'
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
