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
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementType $type
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $fromParty
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $toParty
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\Amount $amount
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\PaymentMethodType $paymentMethod
 * @property string $paypalTransactionId
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementStatusType $status
 * @property \DateTime $transactionDate
 * @property string $id
 * @property string $parentId
 */
class MoneyMovementDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'type' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'type'
        ),
        'fromParty' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'fromParty'
        ),
        'toParty' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'toParty'
        ),
        'amount' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paymentMethod'
        ),
        'paypalTransactionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paypalTransactionId'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'status'
        ),
        'transactionDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'transactionDate'
        ),
        'id' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'id'
        ),
        'parentId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'parentId'
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
