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
 * @property string $OrderLineItemID
 * @property \DateTime $TransactionTime
 * @property \DateTime $OriginalChargeTime
 * @property string $ItemID
 * @property string $ItemTitle
 * @property string $SerialNumber
 * @property string $SKU
 * @property string $GlobalCategoryDescription
 * @property string $SiteDescription
 * @property integer $QuantitySold
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $SalePrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TotalCost
 * @property \DateTime $PaymentClearedTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $InsuranceCost
 * @property integer $ListingSiteID
 * @property \DateTime $SaleTime
 * @property string $Memo
 * @property string $SecondDescription
 * @property string $FeeDescription
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeAmount
 * @property integer $SellingManagerSaleRecordID
 * @property string $BuyerPaymentTransactionNumber
 * @property \DTS\eBaySDK\MerchantData\Types\MerchantDataVariationType $Variation
 * @property string $TaxCategory
 * @property \DTS\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 */
class OrderLineItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'TransactionTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionTime'
        ),
        'OriginalChargeTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OriginalChargeTime'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'ItemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'SerialNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SerialNumber'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'GlobalCategoryDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalCategoryDescription'
        ),
        'SiteDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SiteDescription'
        ),
        'QuantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'SalePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ),
        'TaxAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
        ),
        'ShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ),
        'TotalCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalCost'
        ),
        'PaymentClearedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentClearedTime'
        ),
        'InsuranceCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ),
        'ListingSiteID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingSiteID'
        ),
        'SaleTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleTime'
        ),
        'Memo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Memo'
        ),
        'SecondDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondDescription'
        ),
        'FeeDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeDescription'
        ),
        'FeeAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeAmount'
        ),
        'SellingManagerSaleRecordID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSaleRecordID'
        ),
        'BuyerPaymentTransactionNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaymentTransactionNumber'
        ),
        'Variation' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MerchantDataVariationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variation'
        ),
        'TaxCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
        ),
        'Taxes' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TaxesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ),
        'Status' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'ActualShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ),
        'UnpaidItem' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnpaidItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
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
