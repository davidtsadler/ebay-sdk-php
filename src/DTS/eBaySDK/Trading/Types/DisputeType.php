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
 * @property string $DisputeID
 * @property \DTS\eBaySDK\Trading\Enums\DisputeRecordTypeCodeType $DisputeRecordType
 * @property \DTS\eBaySDK\Trading\Enums\DisputeStateCodeType $DisputeState
 * @property \DTS\eBaySDK\Trading\Enums\DisputeStatusCodeType $DisputeStatus
 * @property \DTS\eBaySDK\Trading\Enums\TradingRoleCodeType $OtherPartyRole
 * @property string $OtherPartyName
 * @property \DTS\eBaySDK\Trading\Enums\TradingRoleCodeType $UserRole
 * @property string $BuyerUserID
 * @property string $SellerUserID
 * @property string $TransactionID
 * @property \DTS\eBaySDK\Trading\Types\ItemType $Item
 * @property \DTS\eBaySDK\Trading\Enums\DisputeReasonCodeType $DisputeReason
 * @property \DTS\eBaySDK\Trading\Enums\DisputeExplanationCodeType $DisputeExplanation
 * @property \DTS\eBaySDK\Trading\Enums\DisputeCreditEligibilityCodeType $DisputeCreditEligibility
 * @property \DateTime $DisputeCreatedTime
 * @property \DateTime $DisputeModifiedTime
 * @property \DTS\eBaySDK\Trading\Types\DisputeResolutionType[] $DisputeResolution
 * @property \DTS\eBaySDK\Trading\Types\DisputeMessageType[] $DisputeMessage
 * @property boolean $Escalation
 * @property boolean $PurchaseProtection
 * @property string $OrderLineItemID
 */
class DisputeType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'DisputeID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeID'
        ),
        'DisputeRecordType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeRecordType'
        ),
        'DisputeState' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeState'
        ),
        'DisputeStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeStatus'
        ),
        'OtherPartyRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyRole'
        ),
        'OtherPartyName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyName'
        ),
        'UserRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserRole'
        ),
        'BuyerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ),
        'SellerUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ),
        'TransactionID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'Item' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ),
        'DisputeReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeReason'
        ),
        'DisputeExplanation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeExplanation'
        ),
        'DisputeCreditEligibility' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeCreditEligibility'
        ),
        'DisputeCreatedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeCreatedTime'
        ),
        'DisputeModifiedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeModifiedTime'
        ),
        'DisputeResolution' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DisputeResolutionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DisputeResolution'
        ),
        'DisputeMessage' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DisputeMessageType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DisputeMessage'
        ),
        'Escalation' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Escalation'
        ),
        'PurchaseProtection' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PurchaseProtection'
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
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
