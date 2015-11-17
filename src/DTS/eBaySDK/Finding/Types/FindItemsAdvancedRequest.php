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

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property string $keywords
 * @property string[] $categoryId
 * @property \DTS\eBaySDK\Finding\Types\ItemFilter[] $itemFilter
 * @property \DTS\eBaySDK\Finding\Types\AspectFilter[] $aspectFilter
 * @property \DTS\eBaySDK\Finding\Enums\OutputSelectorType[] $outputSelector
 * @property boolean $descriptionSearch
 */
class FindItemsAdvancedRequest extends \DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'keywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'keywords'
        ),
        'categoryId' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'categoryId'
        ),
        'itemFilter' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ItemFilter',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ),
        'aspectFilter' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\AspectFilter',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'aspectFilter'
        ),
        'outputSelector' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'outputSelector'
        ),
        'descriptionSearch' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'descriptionSearch'
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
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/search/v1/services';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsAdvancedRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
