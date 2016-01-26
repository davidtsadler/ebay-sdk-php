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
 * @property string $CommentingUser
 * @property integer $CommentingUserScore
 * @property string $CommentText
 * @property \DateTime $CommentTime
 * @property \DTS\eBaySDK\Trading\Enums\CommentTypeCodeType $CommentType
 * @property string $FeedbackResponse
 * @property string $Followup
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Enums\TradingRoleCodeType $Role
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemPrice
 * @property string $FeedbackID
 * @property string $TransactionID
 * @property boolean $CommentReplaced
 * @property boolean $ResponseReplaced
 * @property boolean $FollowUpReplaced
 * @property boolean $Countable
 * @property boolean $FeedbackRevised
 * @property string $OrderLineItemID
 */
class FeedbackDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CommentingUser' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentingUser'
        ),
        'CommentingUserScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentingUserScore'
        ),
        'CommentText' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentText'
        ),
        'CommentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentTime'
        ),
        'CommentType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentType'
        ),
        'FeedbackResponse' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackResponse'
        ),
        'Followup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Followup'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'Role' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Role'
        ),
        'ItemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'ItemPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPrice'
        ),
        'FeedbackID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackID'
        ),
        'TransactionID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'CommentReplaced' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CommentReplaced'
        ),
        'ResponseReplaced' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResponseReplaced'
        ),
        'FollowUpReplaced' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FollowUpReplaced'
        ),
        'Countable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Countable'
        ),
        'FeedbackRevised' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRevised'
        ),
        'OrderLineItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
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
