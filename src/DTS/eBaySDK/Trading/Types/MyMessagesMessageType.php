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
 * @property string $Content
 * @property string $ContentType
 * @property \DateTime $CreationDate
 * @property \DateTime $ExpirationDate
 * @property string $ExternalMessageID
 * @property boolean $Flagged
 * @property \DTS\eBaySDK\Trading\Types\MyMessagesFolderType $Folder
 * @property \DTS\eBaySDK\Trading\Types\MyMessagesForwardDetailsType $ForwardDetails
 * @property boolean $HighPriority
 * @property \DateTime $ItemEndTime
 * @property string $ItemID
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Enums\ListingStatusCodeType $ListingStatus
 * @property string $MessageID
 * @property \DTS\eBaySDK\Trading\Types\MessageMediaType[] $MessageMedia
 * @property \DTS\eBaySDK\Trading\Enums\MessageTypeCodeType $MessageType
 * @property \DTS\eBaySDK\Trading\Enums\QuestionTypeCodeType $QuestionType
 * @property boolean $Read
 * @property \DateTime $ReceiveDate
 * @property string $RecipientUserID
 * @property boolean $Replied
 * @property \DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType $ResponseDetails
 * @property string $SendToName
 * @property string $Sender
 * @property string $Subject
 * @property string $Text
 */
class MyMessagesMessageType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Content' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Content'
        ),
        'ContentType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContentType'
        ),
        'CreationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreationDate'
        ),
        'ExpirationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpirationDate'
        ),
        'ExternalMessageID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalMessageID'
        ),
        'Flagged' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Flagged'
        ),
        'Folder' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesFolderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Folder'
        ),
        'ForwardDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesForwardDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ForwardDetails'
        ),
        'HighPriority' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighPriority'
        ),
        'ItemEndTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemEndTime'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'ItemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'ListingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ),
        'MessageID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ),
        'MessageMedia' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MessageMediaType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'MessageMedia'
        ),
        'MessageType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageType'
        ),
        'QuestionType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionType'
        ),
        'Read' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Read'
        ),
        'ReceiveDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReceiveDate'
        ),
        'RecipientUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ),
        'Replied' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Replied'
        ),
        'ResponseDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResponseDetails'
        ),
        'SendToName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SendToName'
        ),
        'Sender' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Sender'
        ),
        'Subject' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subject'
        ),
        'Text' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Text'
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
