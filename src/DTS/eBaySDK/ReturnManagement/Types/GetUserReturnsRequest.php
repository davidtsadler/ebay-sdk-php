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
 * @property \DTS\eBaySDK\ReturnManagement\Types\ItemFilterType $itemFilter
 * @property string $orderId
 * @property \DTS\eBaySDK\ReturnManagement\Types\DateRangeFilterType $creationDateRangeFilter
 * @property \DTS\eBaySDK\ReturnManagement\Types\ReturnStatusFilterType $ReturnStatusFilter
 * @property \DTS\eBaySDK\ReturnManagement\Types\UserFilterType $otherUserFilter
 * @property \DTS\eBaySDK\ReturnManagement\Types\PaginationInput $paginationInput
 * @property \DTS\eBaySDK\ReturnManagement\Enums\ReturnSortType $sortType
 * @property \DTS\eBaySDK\ReturnManagement\Enums\ReturnSortOrderType $sortOrderType
 */
class GetUserReturnsRequest extends \DTS\eBaySDK\ReturnManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'itemFilter' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ItemFilterType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ),
        'orderId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'orderId'
        ),
        'creationDateRangeFilter' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\DateRangeFilterType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'creationDateRangeFilter'
        ),
        'ReturnStatusFilter' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ReturnStatusFilterType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatusFilter'
        ),
        'otherUserFilter' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\UserFilterType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'otherUserFilter'
        ),
        'paginationInput' => array(
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\PaginationInput',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ),
        'sortType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sortType'
        ),
        'sortOrderType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sortOrderType'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getUserReturnsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
