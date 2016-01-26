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
 * @property string $Name
 * @property boolean $ListingNPEmailNotifPref
 * @property string $ListingNPEmail
 * @property string $ListingNPContactName
 * @property string $Mission
 * @property string $LogoURL
 * @property integer $CharityRegion
 * @property integer[] $CharityDomain
 * @property string $LogoURLSelling
 * @property string $Description
 * @property string $ExternalID
 * @property integer $PopularityIndex
 * @property string $EIN
 * @property string $NonProfitSecondName
 * @property \DTS\eBaySDK\Trading\Types\NonProfitAddressType[] $NonProfitAddress
 * @property \DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType[] $NonProfitSocialAddress
 * @property string $id
 */
class CharityInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'ListingNPEmailNotifPref' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmailNotifPref'
        ),
        'ListingNPEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmail'
        ),
        'ListingNPContactName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPContactName'
        ),
        'Mission' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Mission'
        ),
        'LogoURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoURL'
        ),
        'CharityRegion' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegion'
        ),
        'CharityDomain' => array(
            'type' => 'integer',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CharityDomain'
        ),
        'LogoURLSelling' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoURLSelling'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'ExternalID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalID'
        ),
        'PopularityIndex' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PopularityIndex'
        ),
        'EIN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIN'
        ),
        'NonProfitSecondName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonProfitSecondName'
        ),
        'NonProfitAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitAddressType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NonProfitAddress'
        ),
        'NonProfitSocialAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NonProfitSocialAddress'
        ),
        'id' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'id'
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
