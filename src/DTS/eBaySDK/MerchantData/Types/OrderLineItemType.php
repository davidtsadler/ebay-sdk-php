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
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property string $BuyerPaymentTransactionNumber
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeAmount
 * @property string $FeeDescription
 * @property string $GlobalCategoryDescription
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $InsuranceCost
 * @property string $ItemID
 * @property string $ItemTitle
 * @property integer $ListingSiteID
 * @property string $Memo
 * @property string $OrderLineItemID
 * @property \DateTime $OriginalChargeTime
 * @property \DateTime $PaymentClearedTime
 * @property integer $QuantitySold
 * @property string $SKU
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $SalePrice
 * @property \DateTime $SaleTime
 * @property string $SecondDescription
 * @property integer $SellingManagerSaleRecordID
 * @property string $SerialNumber
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingCost
 * @property string $SiteDescription
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property string $TaxCategory
 * @property \DTS\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TotalCost
 * @property \DateTime $TransactionTime
 * @property \DTS\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 * @property \DTS\eBaySDK\MerchantData\Types\MerchantDataVariationType $Variation
 */
class OrderLineItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ActualShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ),
        'BuyerPaymentTransactionNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaymentTransactionNumber'
        ),
        'FeeAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeAmount'
        ),
        'FeeDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeDescription'
        ),
        'GlobalCategoryDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalCategoryDescription'
        ),
        'InsuranceCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
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
        'ListingSiteID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingSiteID'
        ),
        'Memo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Memo'
        ),
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'OriginalChargeTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OriginalChargeTime'
        ),
        'PaymentClearedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentClearedTime'
        ),
        'QuantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'SKU' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'SalePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ),
        'SaleTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleTime'
        ),
        'SecondDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondDescription'
        ),
        'SellingManagerSaleRecordID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSaleRecordID'
        ),
        'SerialNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SerialNumber'
        ),
        'ShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ),
        'SiteDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SiteDescription'
        ),
        'Status' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'TaxAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
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
        'TotalCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalCost'
        ),
        'TransactionTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionTime'
        ),
        'UnpaidItem' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnpaidItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
        ),
        'Variation' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MerchantDataVariationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variation'
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
