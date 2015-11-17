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

namespace DTS\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property string $globalId
 * @property \DTS\eBaySDK\ReturnManagement\Types\ReturnResponseHistoryType[] $returnHistory
 * @property \DTS\eBaySDK\ReturnManagement\Types\RefundInfoType $refundInfo
 * @property \DTS\eBaySDK\ReturnManagement\Types\ReturnPolicyInfoType $returnPolicy
 * @property \DTS\eBaySDK\ReturnManagement\Types\ShipmentType $buyerReturnShipment
 * @property \DTS\eBaySDK\ReturnManagement\Types\ShipmentType[] $shipmentInfo
 * @property \DTS\eBaySDK\ReturnManagement\Types\CaseIdType $caseId
 */
class ReturnDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'globalId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'globalId'
        ),
        'returnHistory' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ReturnResponseHistoryType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'returnHistory'
        ),
        'refundInfo' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\RefundInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'refundInfo'
        ),
        'returnPolicy' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ReturnPolicyInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnPolicy'
        ),
        'buyerReturnShipment' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ShipmentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'buyerReturnShipment'
        ),
        'shipmentInfo' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ShipmentType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'shipmentInfo'
        ),
        'caseId' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\CaseIdType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'caseId'
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
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/returns/v1/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
