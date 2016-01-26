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
 * @property string $InvoiceID
 * @property string $SellerID
 * @property string $AccountID
 * @property \DateTime $ReportStartTime
 * @property \DateTime $ReportEndTime
 * @property \DateTime $InvoiceProcessingTime
 * @property \DateTime $ReportProcessingTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeSettlementAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $LastInvoiceAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeRoundingAdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FeeTotalUsageAdjustmentAmount
 * @property \DTS\eBaySDK\MerchantData\Types\OrderDetailsType[] $OrderTransactionList
 * @property \DTS\eBaySDK\MerchantData\Types\TransactionListType[] $ListingTransactionList
 * @property \DTS\eBaySDK\MerchantData\Types\OrderDetailsType[] $OrderAdjustmentList
 * @property \DTS\eBaySDK\MerchantData\Types\AccountTransactionType[] $AccountTransactionList
 * @property \DTS\eBaySDK\MerchantData\Types\AccountTransactionType[] $DiscountTransactionList
 */
class FeeSettlementReportResponseType extends \DTS\eBaySDK\MerchantData\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'InvoiceID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceID'
        ),
        'SellerID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerID'
        ),
        'AccountID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountID'
        ),
        'ReportStartTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReportStartTime'
        ),
        'ReportEndTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReportEndTime'
        ),
        'InvoiceProcessingTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceProcessingTime'
        ),
        'ReportProcessingTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReportProcessingTime'
        ),
        'FeeSettlementAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeSettlementAmount'
        ),
        'LastInvoiceAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastInvoiceAmount'
        ),
        'FeeRoundingAdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeRoundingAdjustmentAmount'
        ),
        'FeeTotalUsageAdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeTotalUsageAdjustmentAmount'
        ),
        'OrderTransactionList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'OrderTransactionList'
        ),
        'ListingTransactionList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TransactionListType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingTransactionList'
        ),
        'OrderAdjustmentList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'OrderAdjustmentList'
        ),
        'AccountTransactionList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AccountTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AccountTransactionList'
        ),
        'DiscountTransactionList' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AccountTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DiscountTransactionList'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'FeeSettlementReport';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
