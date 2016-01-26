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
 * @property \DTS\eBaySDK\Shopping\Types\DomainHistogramType $DomainHistogram
 * @property integer $PageNumber
 * @property integer $ApproximatePages
 * @property boolean $MoreResults
 * @property integer $TotalProducts
 * @property \DTS\eBaySDK\Shopping\Types\HalfProductsType[] $Products
 * @property string $ProductSearchURL
 */
class FindHalfProductsResponseType extends \DTS\eBaySDK\Shopping\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'DomainHistogram' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\DomainHistogramType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DomainHistogram'
        ),
        'PageNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ),
        'ApproximatePages' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApproximatePages'
        ),
        'MoreResults' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MoreResults'
        ),
        'TotalProducts' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalProducts'
        ),
        'Products' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\HalfProductsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Products'
        ),
        'ProductSearchURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductSearchURL'
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
