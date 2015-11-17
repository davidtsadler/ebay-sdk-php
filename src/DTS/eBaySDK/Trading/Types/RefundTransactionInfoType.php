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
 * @property \DTS\eBaySDK\Trading\Enums\PaymentTransactionStatusCodeType $RefundStatus
 * @property \DTS\eBaySDK\Trading\Enums\RefundSourceTypeCodeType $RefundType
 * @property \DTS\eBaySDK\Trading\Types\UserIdentityType $RefundTo
 * @property \DateTime $RefundTime
 * @property \DTS\eBaySDK\Trading\Types\AmountType $RefundAmount
 * @property \DTS\eBaySDK\Trading\Types\TransactionReferenceType $ReferenceID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FeeOrCreditAmount
 */
class RefundTransactionInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'RefundStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ),
        'RefundType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundType'
        ),
        'RefundTo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserIdentityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundTo'
        ),
        'RefundTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundTime'
        ),
        'RefundAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'ReferenceID' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionReferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ),
        'FeeOrCreditAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeOrCreditAmount'
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
