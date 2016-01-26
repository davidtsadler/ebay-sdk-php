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

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property string $note
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $author
 * @property string $activity
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType $activityDetail
 * @property \DateTime $creationDate
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ResponseHistoryAttributesType $attributes
 */
class EBPCaseResponseHistoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'note' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'note'
        ),
        'author' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'author'
        ),
        'activity' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'activity'
        ),
        'activityDetail' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'activityDetail'
        ),
        'creationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ),
        'attributes' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ResponseHistoryAttributesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'attributes'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
