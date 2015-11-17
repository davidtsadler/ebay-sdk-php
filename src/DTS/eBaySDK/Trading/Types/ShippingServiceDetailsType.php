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
 * @property string $Description
 * @property boolean $ExpeditedService
 * @property boolean $InternationalService
 * @property string $ShippingService
 * @property integer $ShippingServiceID
 * @property integer $ShippingTimeMax
 * @property integer $ShippingTimeMin
 * @property \DTS\eBaySDK\Trading\Enums\ShippingServiceCodeType $ShippingServiceCode
 * @property \DTS\eBaySDK\Trading\Enums\ShippingTypeCodeType[] $ServiceType
 * @property \DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType[] $ShippingPackage
 * @property boolean $DimensionsRequired
 * @property boolean $ValidForSellingFlow
 * @property boolean $SurchargeApplicable
 * @property \DTS\eBaySDK\Trading\Enums\ShippingCarrierCodeType[] $ShippingCarrier
 * @property boolean $CODService
 * @property \DTS\eBaySDK\Trading\Types\AnnouncementMessageType[] $DeprecationDetails
 * @property integer $MappedToShippingServiceID
 * @property string $CostGroupFlat
 * @property \DTS\eBaySDK\Trading\Types\ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
 * @property boolean $WeightRequired
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 * @property string $ShippingCategory
 */
class ShippingServiceDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
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
        'ShippingService' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ),
        'ShippingServiceID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceID'
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
        'ShippingServiceCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCode'
        ),
        'ServiceType' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ServiceType'
        ),
        'ShippingPackage' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'DimensionsRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DimensionsRequired'
        ),
        'ValidForSellingFlow' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValidForSellingFlow'
        ),
        'SurchargeApplicable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SurchargeApplicable'
        ),
        'ShippingCarrier' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrier'
        ),
        'CODService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODService'
        ),
        'DeprecationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AnnouncementMessageType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DeprecationDetails'
        ),
        'MappedToShippingServiceID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MappedToShippingServiceID'
        ),
        'CostGroupFlat' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CostGroupFlat'
        ),
        'ShippingServicePackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServicePackageDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServicePackageDetails'
        ),
        'WeightRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightRequired'
        ),
        'DetailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'UpdateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'ShippingCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCategory'
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
