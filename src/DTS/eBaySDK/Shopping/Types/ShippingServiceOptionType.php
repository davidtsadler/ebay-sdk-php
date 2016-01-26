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

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ShippingInsuranceCost
 * @property string $ShippingServiceName
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ShippingServiceCost
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ShippingServiceAdditionalCost
 * @property integer $ShippingServicePriority
 * @property boolean $ExpeditedService
 * @property integer $ShippingTimeMin
 * @property integer $ShippingTimeMax
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $ShippingSurcharge
 * @property string[] $ShipsTo
 * @property \DateTime $EstimatedDeliveryMinTime
 * @property \DateTime $EstimatedDeliveryMaxTime
 * @property boolean $FastAndFree
 * @property \DateTime $ShippingServiceCutOffTime
 */
class ShippingServiceOptionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ShippingInsuranceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ),
        'ShippingServiceName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceName'
        ),
        'ShippingServiceCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ),
        'ShippingServiceAdditionalCost' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceAdditionalCost'
        ),
        'ShippingServicePriority' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServicePriority'
        ),
        'ExpeditedService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ),
        'ShippingTimeMin' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ),
        'ShippingTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ),
        'ShippingSurcharge' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingSurcharge'
        ),
        'ShipsTo' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipsTo'
        ),
        'EstimatedDeliveryMinTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMinTime'
        ),
        'EstimatedDeliveryMaxTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMaxTime'
        ),
        'FastAndFree' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FastAndFree'
        ),
        'ShippingServiceCutOffTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCutOffTime'
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
