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

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DateTime $Timestamp
 * @property \DTS\eBaySDK\MerchantData\Enums\AckCodeType $Ack
 * @property string $CorrelationID
 * @property \DTS\eBaySDK\MerchantData\Types\ErrorType[] $Errors
 * @property string $Message
 * @property string $Version
 * @property string $Build
 * @property string $NotificationEventName
 * @property \DTS\eBaySDK\MerchantData\Types\DuplicateInvocationDetailsType $DuplicateInvocationDetails
 * @property string $RecipientUserID
 * @property string $EIASToken
 * @property string $NotificationSignature
 * @property string $HardExpirationWarning
 * @property \DTS\eBaySDK\MerchantData\Types\BotBlockResponseType $BotBlock
 * @property string $ExternalUserData
 */
class AbstractResponseType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Timestamp' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Timestamp'
        ),
        'Ack' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Ack'
        ),
        'CorrelationID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ),
        'Errors' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ErrorType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Errors'
        ),
        'Message' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ),
        'Version' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Version'
        ),
        'Build' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Build'
        ),
        'NotificationEventName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationEventName'
        ),
        'DuplicateInvocationDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\DuplicateInvocationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DuplicateInvocationDetails'
        ),
        'RecipientUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ),
        'EIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'NotificationSignature' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationSignature'
        ),
        'HardExpirationWarning' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HardExpirationWarning'
        ),
        'BotBlock' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BotBlockResponseType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
        ),
        'ExternalUserData' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalUserData'
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
