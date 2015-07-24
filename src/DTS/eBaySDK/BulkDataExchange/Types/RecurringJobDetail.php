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

namespace DTS\eBaySDK\BulkDataExchange\Types;

/**
 *
 * @property \DateTime $creationTime
 * @property \DTS\eBaySDK\BulkDataExchange\Types\DailyRecurrence $dailyRecurrence
 * @property string $downloadJobType
 * @property integer $frequencyInMinutes
 * @property \DTS\eBaySDK\BulkDataExchange\Enums\RecurringJobStatus $jobStatus
 * @property \DTS\eBaySDK\BulkDataExchange\Types\MonthlyRecurrence $monthlyRecurrence
 * @property string $recurringJobId
 * @property \DTS\eBaySDK\BulkDataExchange\Types\WeeklyRecurrence $weeklyRecurrence
 */
class RecurringJobDetail extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'creationTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'creationTime'
        ),
        'dailyRecurrence' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\DailyRecurrence',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'dailyRecurrence'
        ),
        'downloadJobType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'downloadJobType'
        ),
        'frequencyInMinutes' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'frequencyInMinutes'
        ),
        'jobStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'jobStatus'
        ),
        'monthlyRecurrence' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\MonthlyRecurrence',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'monthlyRecurrence'
        ),
        'recurringJobId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'recurringJobId'
        ),
        'weeklyRecurrence' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\WeeklyRecurrence',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'weeklyRecurrence'
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
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
