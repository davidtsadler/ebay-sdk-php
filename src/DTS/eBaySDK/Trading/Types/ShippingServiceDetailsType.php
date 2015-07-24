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
 * @property boolean $CODService
 * @property string $CostGroupFlat
 * @property \DTS\eBaySDK\Trading\Types\AnnouncementMessageType[] $DeprecationDetails
 * @property string $Description
 * @property string $DetailVersion
 * @property boolean $DimensionsRequired
 * @property boolean $ExpeditedService
 * @property boolean $InternationalService
 * @property integer $MappedToShippingServiceID
 * @property \DTS\eBaySDK\Trading\Enums\ShippingTypeCodeType[] $ServiceType
 * @property \DTS\eBaySDK\Trading\Enums\ShippingCarrierCodeType[] $ShippingCarrier
 * @property string $ShippingCategory
 * @property \DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType[] $ShippingPackage
 * @property string $ShippingService
 * @property \DTS\eBaySDK\Trading\Enums\ShippingServiceCodeType $ShippingServiceCode
 * @property integer $ShippingServiceID
 * @property \DTS\eBaySDK\Trading\Types\ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
 * @property integer $ShippingTimeMax
 * @property integer $ShippingTimeMin
 * @property boolean $SurchargeApplicable
 * @property \DateTime $UpdateTime
 * @property boolean $ValidForSellingFlow
 * @property boolean $WeightRequired
 */
class ShippingServiceDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CODService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODService'
        ),
        'CostGroupFlat' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CostGroupFlat'
        ),
        'DeprecationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AnnouncementMessageType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DeprecationDetails'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'DetailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'DimensionsRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DimensionsRequired'
        ),
        'ExpeditedService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ),
        'InternationalService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalService'
        ),
        'MappedToShippingServiceID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MappedToShippingServiceID'
        ),
        'ServiceType' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ServiceType'
        ),
        'ShippingCarrier' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrier'
        ),
        'ShippingCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCategory'
        ),
        'ShippingPackage' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'ShippingService' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ),
        'ShippingServiceCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCode'
        ),
        'ShippingServiceID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceID'
        ),
        'ShippingServicePackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServicePackageDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServicePackageDetails'
        ),
        'ShippingTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ),
        'ShippingTimeMin' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ),
        'SurchargeApplicable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SurchargeApplicable'
        ),
        'UpdateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'ValidForSellingFlow' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValidForSellingFlow'
        ),
        'WeightRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightRequired'
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
