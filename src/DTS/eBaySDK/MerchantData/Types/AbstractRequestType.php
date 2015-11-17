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
 * @property \DTS\eBaySDK\MerchantData\Types\CustomSecurityHeaderType $RequesterCredentials
 * @property \DTS\eBaySDK\MerchantData\Types\XMLRequesterCredentialsType $RequesterCredentials
 * @property \DTS\eBaySDK\MerchantData\Enums\DetailLevelCodeType[] $DetailLevel
 * @property string $ErrorLanguage
 * @property string $MessageID
 * @property string $Version
 * @property string $EndUserIP
 * @property \DTS\eBaySDK\MerchantData\Types\XMLRequesterCredentialsType $RequesterCredentials
 * @property \DTS\eBaySDK\MerchantData\Enums\ErrorHandlingCodeType $ErrorHandling
 * @property string $InvocationID
 * @property string[] $OutputSelector
 * @property \DTS\eBaySDK\MerchantData\Enums\WarningLevelCodeType $WarningLevel
 * @property \DTS\eBaySDK\MerchantData\Types\BotBlockRequestType $BotBlock
 */
class AbstractRequestType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'RequesterCredentials' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\CustomSecurityHeaderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RequesterCredentials'
        ),
        'RequesterCredentials' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\XMLRequesterCredentialsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RequesterCredentials'
        ),
        'DetailLevel' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DetailLevel'
        ),
        'ErrorLanguage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ErrorLanguage'
        ),
        'MessageID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ),
        'Version' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Version'
        ),
        'EndUserIP' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndUserIP'
        ),
        'RequesterCredentials' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\XMLRequesterCredentialsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RequesterCredentials'
        ),
        'ErrorHandling' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ErrorHandling'
        ),
        'InvocationID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvocationID'
        ),
        'OutputSelector' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'OutputSelector'
        ),
        'WarningLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarningLevel'
        ),
        'BotBlock' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BotBlockRequestType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
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
