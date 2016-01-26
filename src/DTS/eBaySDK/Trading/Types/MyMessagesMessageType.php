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
 * @property string $Sender
 * @property string $RecipientUserID
 * @property string $SendToName
 * @property string $Subject
 * @property string $MessageID
 * @property string $ExternalMessageID
 * @property string $ContentType
 * @property string $Text
 * @property boolean $Flagged
 * @property boolean $Read
 * @property \DateTime $CreationDate
 * @property \DateTime $ReceiveDate
 * @property \DateTime $ExpirationDate
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType $ResponseDetails
 * @property \DTS\eBaySDK\Trading\Types\MyMessagesFolderType $Folder
 * @property string $Content
 * @property \DTS\eBaySDK\Trading\Enums\MessageTypeCodeType $MessageType
 * @property \DTS\eBaySDK\Trading\Enums\ListingStatusCodeType $ListingStatus
 * @property \DTS\eBaySDK\Trading\Enums\QuestionTypeCodeType $QuestionType
 * @property boolean $Replied
 * @property boolean $HighPriority
 * @property \DateTime $ItemEndTime
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Types\MessageMediaType[] $MessageMedia
 */
class MyMessagesMessageType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Sender' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Sender'
        ),
        'RecipientUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ),
        'SendToName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SendToName'
        ),
        'Subject' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subject'
        ),
        'MessageID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ),
        'ExternalMessageID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalMessageID'
        ),
        'ContentType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContentType'
        ),
        'Text' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Text'
        ),
        'Flagged' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Flagged'
        ),
        'Read' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Read'
        ),
        'CreationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreationDate'
        ),
        'ReceiveDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReceiveDate'
        ),
        'ExpirationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpirationDate'
        ),
        'ItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'ResponseDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResponseDetails'
        ),
        'Folder' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesFolderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Folder'
        ),
        'Content' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Content'
        ),
        'MessageType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageType'
        ),
        'ListingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ),
        'QuestionType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionType'
        ),
        'Replied' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Replied'
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
        'ItemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'MessageMedia' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MessageMediaType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'MessageMedia'
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
