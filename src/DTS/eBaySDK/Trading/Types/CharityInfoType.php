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
 * @property integer[] $CharityDomain
 * @property integer $CharityRegion
 * @property string $Description
 * @property boolean $DisplayLogoSelling
 * @property string $EIN
 * @property string $ExternalID
 * @property string $ListingNPContactName
 * @property string $ListingNPEmail
 * @property boolean $ListingNPEmailNotifPref
 * @property string $LogoURL
 * @property string $LogoURLSelling
 * @property string $Mission
 * @property string $Name
 * @property \DTS\eBaySDK\Trading\Types\NonProfitAddressType[] $NonProfitAddress
 * @property string $NonProfitSecondName
 * @property \DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType[] $NonProfitSocialAddress
 * @property integer $PopularityIndex
 * @property string $id
 */
class CharityInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CharityDomain' => array(
            'type' => 'integer',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CharityDomain'
        ),
        'CharityRegion' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegion'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'DisplayLogoSelling' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisplayLogoSelling'
        ),
        'EIN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIN'
        ),
        'ExternalID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalID'
        ),
        'ListingNPContactName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPContactName'
        ),
        'ListingNPEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmail'
        ),
        'ListingNPEmailNotifPref' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmailNotifPref'
        ),
        'LogoURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoURL'
        ),
        'LogoURLSelling' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoURLSelling'
        ),
        'Mission' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Mission'
        ),
        'Name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'NonProfitAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitAddressType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NonProfitAddress'
        ),
        'NonProfitSecondName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonProfitSecondName'
        ),
        'NonProfitSocialAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NonProfitSocialAddress'
        ),
        'PopularityIndex' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PopularityIndex'
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
