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
 * @property string $BuyerUserID
 * @property string $BuyerFirstName
 * @property string $BuyerLastName
 * @property string $BuyerEmail
 * @property string $BuyerPhone
 * @property string $ShipRecipientName
 * @property string $ShipStreet1
 * @property string $ShipStreet2
 * @property string $ShipCityName
 * @property string $ShipStateOrProvince
 * @property string $ShipPostalCode
 * @property string $ShipCountryName
 * @property string $ShippingService
 * @property \DateTime $PaymentClearedTime
 * @property integer $CheckoutSiteID
 * @property \DateTime $OrderCreationTime
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $OrderSalePrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $InsuranceCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $OrderTotalCost
 * @property integer $SellingManagerSaleRecordID
 * @property \DTS\eBaySDK\MerchantData\Types\OrderItemDetailsType $OrderItemDetails
 * @property string $BuyerStaticAlias
 * @property string $ShippingServiceToken
 * @property \DTS\eBaySDK\MerchantData\Types\CheckoutStatusType $CheckoutStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \DTS\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property string $ShipReferenceId
 * @property \DTS\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 */
class OrderDetailsType extends \DTS\eBaySDK\Types\BaseType
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
        'BuyerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ),
        'BuyerFirstName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerFirstName'
        ),
        'BuyerLastName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerLastName'
        ),
        'BuyerEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerEmail'
        ),
        'BuyerPhone' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPhone'
        ),
        'ShipRecipientName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipRecipientName'
        ),
        'ShipStreet1' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipStreet1'
        ),
        'ShipStreet2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipStreet2'
        ),
        'ShipCityName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipCityName'
        ),
        'ShipStateOrProvince' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipStateOrProvince'
        ),
        'ShipPostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipPostalCode'
        ),
        'ShipCountryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipCountryName'
        ),
        'ShippingService' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ),
        'PaymentClearedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentClearedTime'
        ),
        'CheckoutSiteID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutSiteID'
        ),
        'OrderCreationTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderCreationTime'
        ),
        'OrderSalePrice' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderSalePrice'
        ),
        'TaxAmount' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
        ),
        'InsuranceCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ),
        'ShippingCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ),
        'OrderTotalCost' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderTotalCost'
        ),
        'SellingManagerSaleRecordID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSaleRecordID'
        ),
        'OrderItemDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\OrderItemDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderItemDetails'
        ),
        'BuyerStaticAlias' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerStaticAlias'
        ),
        'ShippingServiceToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceToken'
        ),
        'CheckoutStatus' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CheckoutStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'PaymentHoldStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ),
        'ExternalTransaction' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'ShipReferenceId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipReferenceId'
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
