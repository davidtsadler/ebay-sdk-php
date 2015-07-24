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
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InternationalPackagingHandlingCosts
 * @property \DTS\eBaySDK\Trading\Enums\MeasurementSystemCodeType $MeasurementUnit
 * @property string $OriginatingPostalCode
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $PackageDepth
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $PackageLength
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $PackageWidth
 * @property \DTS\eBaySDK\Trading\Types\AmountType $PackagingHandlingCosts
 * @property boolean $ShippingIrregular
 * @property \DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType $ShippingPackage
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $WeightMajor
 * @property \DTS\eBaySDK\Trading\Types\MeasureType $WeightMinor
 */
class CalculatedShippingRateType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'InternationalPackagingHandlingCosts' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalPackagingHandlingCosts'
        ),
        'MeasurementUnit' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MeasurementUnit'
        ),
        'OriginatingPostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OriginatingPostalCode'
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
        'PackagingHandlingCosts' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackagingHandlingCosts'
        ),
        'ShippingIrregular' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingIrregular'
        ),
        'ShippingPackage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
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
