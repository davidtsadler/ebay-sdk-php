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
 * @property string $CallName
 * @property boolean $CountsTowardAggregate
 * @property integer $DailyHardLimit
 * @property integer $DailySoftLimit
 * @property integer $DailyUsage
 * @property integer $HourlyHardLimit
 * @property integer $HourlySoftLimit
 * @property integer $HourlyUsage
 * @property \DateTime $ModTime
 * @property integer $Period
 * @property integer $PeriodicHardLimit
 * @property integer $PeriodicSoftLimit
 * @property \DateTime $PeriodicStartDate
 * @property integer $PeriodicUsage
 * @property \DTS\eBaySDK\Trading\Enums\AccessRuleCurrentStatusCodeType $RuleCurrentStatus
 * @property \DTS\eBaySDK\Trading\Enums\AccessRuleStatusCodeType $RuleStatus
 */
class ApiAccessRuleType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CallName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CallName'
        ),
        'CountsTowardAggregate' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CountsTowardAggregate'
        ),
        'DailyHardLimit' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DailyHardLimit'
        ),
        'DailySoftLimit' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DailySoftLimit'
        ),
        'DailyUsage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DailyUsage'
        ),
        'HourlyHardLimit' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HourlyHardLimit'
        ),
        'HourlySoftLimit' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HourlySoftLimit'
        ),
        'HourlyUsage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HourlyUsage'
        ),
        'ModTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ModTime'
        ),
        'Period' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Period'
        ),
        'PeriodicHardLimit' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PeriodicHardLimit'
        ),
        'PeriodicSoftLimit' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PeriodicSoftLimit'
        ),
        'PeriodicStartDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PeriodicStartDate'
        ),
        'PeriodicUsage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PeriodicUsage'
        ),
        'RuleCurrentStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RuleCurrentStatus'
        ),
        'RuleStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RuleStatus'
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
