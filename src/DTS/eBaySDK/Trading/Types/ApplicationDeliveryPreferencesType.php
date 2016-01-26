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
 * @property string $ApplicationURL
 * @property \DTS\eBaySDK\Trading\Enums\EnableCodeType $ApplicationEnable
 * @property string $AlertEmail
 * @property \DTS\eBaySDK\Trading\Enums\EnableCodeType $AlertEnable
 * @property \DTS\eBaySDK\Trading\Enums\DeviceTypeCodeType $DeviceType
 * @property string $PayloadVersion
 * @property \DTS\eBaySDK\Trading\Types\DeliveryURLDetailType[] $DeliveryURLDetails
 */
class ApplicationDeliveryPreferencesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ApplicationURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationURL'
        ),
        'ApplicationEnable' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationEnable'
        ),
        'AlertEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AlertEmail'
        ),
        'AlertEnable' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AlertEnable'
        ),
        'DeviceType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeviceType'
        ),
        'PayloadVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayloadVersion'
        ),
        'DeliveryURLDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DeliveryURLDetailType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DeliveryURLDetails'
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
