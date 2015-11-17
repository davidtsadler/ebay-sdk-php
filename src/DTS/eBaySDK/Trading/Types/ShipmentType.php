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
 * @property \DateTime $EstimatedDeliveryDate
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InsuredValue
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $PackageDepth
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $PackageLength
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property integer $ShipmentID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $PostageTotal
 * @property \DateTime $PrintedTime
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShipFromAddress
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\Trading\Enums\ShippingFeatureCodeType[] $ShippingFeature
 * @property \DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $WeightMajor
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $WeightMinor
 * @property \DTS\eBaySDK\Trading\Types\ItemTransactionIDType[] $ItemTransactionID
 * @property \DateTime $DeliveryDate
 * @property \DTS\eBaySDK\Trading\Enums\ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property \DateTime $RefundGrantedTime
 * @property \DateTime $RefundRequestedTime
 * @property \DTS\eBaySDK\Trading\Enums\ShipmentStatusCodeType $Status
 * @property \DateTime $ShippedTime
 * @property string $Notes
 * @property \DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \DTS\eBaySDK\Trading\Types\ShipmentLineItemType $ShipmentLineItem
 */
class ShipmentType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'EstimatedDeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ),
        'InsuredValue' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ),
        'PackageDepth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ),
        'PackageLength' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ),
        'PackageWidth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ),
        'PayPalShipmentID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ),
        'ShipmentID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ),
        'PostageTotal' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ),
        'PrintedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ),
        'ShipFromAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'ShippingFeature' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ),
        'ShippingPackage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'ShippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'WeightMajor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ),
        'WeightMinor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        ),
        'ItemTransactionID' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemTransactionIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ),
        'DeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ),
        'DeliveryStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ),
        'RefundGrantedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ),
        'RefundRequestedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ),
        'Status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'Notes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ),
        'ShipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'ShipmentLineItem' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentLineItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
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
