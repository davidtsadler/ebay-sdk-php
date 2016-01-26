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
 * @property \DTS\eBaySDK\Trading\Enums\AccountHistorySelectionCodeType $AccountHistorySelection
 * @property \DateTime $InvoiceDate
 * @property \DateTime $BeginDate
 * @property \DateTime $EndDate
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property boolean $ExcludeBalance
 * @property boolean $ExcludeSummary
 * @property boolean $IncludeConversionRate
 * @property \DTS\eBaySDK\Trading\Enums\AccountEntrySortTypeCodeType $AccountEntrySortType
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property string $ItemID
 */
class GetAccountRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AccountHistorySelection' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountHistorySelection'
        ),
        'InvoiceDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceDate'
        ),
        'BeginDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BeginDate'
        ),
        'EndDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndDate'
        ),
        'Pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ),
        'ExcludeBalance' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExcludeBalance'
        ),
        'ExcludeSummary' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExcludeSummary'
        ),
        'IncludeConversionRate' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeConversionRate'
        ),
        'AccountEntrySortType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountEntrySortType'
        ),
        'Currency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetAccountRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
