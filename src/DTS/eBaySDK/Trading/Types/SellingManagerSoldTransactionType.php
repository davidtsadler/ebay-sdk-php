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
 * @property string $InvoiceNumber
 * @property integer $TransactionID
 * @property integer $SaleRecordID
 * @property string $ItemID
 * @property integer $QuantitySold
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $SubtotalAmount
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property boolean $Relisted
 * @property integer $WatchCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ReservePrice
 * @property boolean $SecondChanceOfferSent
 * @property string $CustomLabel
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType $SoldOn
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType[] $ListedOn
 * @property \DTS\eBaySDK\Trading\Types\ShipmentType $Shipment
 * @property boolean $CharityListing
 * @property \DTS\eBaySDK\Trading\Types\VariationType $Variation
 * @property string $OrderLineItemID
 */
class SellingManagerSoldTransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'InvoiceNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceNumber'
        ),
        'TransactionID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'SaleRecordID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleRecordID'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'QuantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'ItemPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPrice'
        ),
        'SubtotalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubtotalAmount'
        ),
        'ItemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'ListingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ),
        'Relisted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ),
        'WatchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ),
        'StartPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ),
        'ReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ),
        'SecondChanceOfferSent' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOfferSent'
        ),
        'CustomLabel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomLabel'
        ),
        'SoldOn' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldOn'
        ),
        'ListedOn' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListedOn'
        ),
        'Shipment' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Shipment'
        ),
        'CharityListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityListing'
        ),
        'Variation' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variation'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
