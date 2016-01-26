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
 * @property string $Name
 * @property string $Street
 * @property string $Street1
 * @property string $Street2
 * @property string $CityName
 * @property string $County
 * @property string $StateOrProvince
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $Country
 * @property string $CountryName
 * @property string $Phone
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $PhoneCountryCode
 * @property string $PhoneCountryPrefix
 * @property string $PhoneAreaOrCityCode
 * @property string $PhoneLocalNumber
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $Phone2CountryCode
 * @property string $Phone2CountryPrefix
 * @property string $Phone2AreaOrCityCode
 * @property string $Phone2LocalNumber
 * @property string $PostalCode
 * @property string $AddressID
 * @property \DTS\eBaySDK\MerchantData\Enums\AddressOwnerCodeType $AddressOwner
 * @property string $ExternalAddressID
 * @property string $InternationalName
 * @property string $InternationalStateAndCity
 * @property string $InternationalStreet
 * @property string $CompanyName
 * @property string $FirstName
 * @property string $LastName
 * @property string $Phone2
 * @property \DTS\eBaySDK\MerchantData\Enums\AddressUsageCodeType $AddressUsage
 * @property string $ReferenceID
 * @property \DTS\eBaySDK\MerchantData\Types\AddressAttributeType[] $AddressAttribute
 */
class AddressType extends \DTS\eBaySDK\Types\BaseType
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
        'Street' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street'
        ),
        'Street1' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street1'
        ),
        'Street2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street2'
        ),
        'CityName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CityName'
        ),
        'County' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'County'
        ),
        'StateOrProvince' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StateOrProvince'
        ),
        'Country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'CountryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CountryName'
        ),
        'Phone' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone'
        ),
        'PhoneCountryCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryCode'
        ),
        'PhoneCountryPrefix' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryPrefix'
        ),
        'PhoneAreaOrCityCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneAreaOrCityCode'
        ),
        'PhoneLocalNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneLocalNumber'
        ),
        'Phone2CountryCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryCode'
        ),
        'Phone2CountryPrefix' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryPrefix'
        ),
        'Phone2AreaOrCityCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2AreaOrCityCode'
        ),
        'Phone2LocalNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2LocalNumber'
        ),
        'PostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'AddressID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressID'
        ),
        'AddressOwner' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressOwner'
        ),
        'ExternalAddressID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalAddressID'
        ),
        'InternationalName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalName'
        ),
        'InternationalStateAndCity' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalStateAndCity'
        ),
        'InternationalStreet' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalStreet'
        ),
        'CompanyName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompanyName'
        ),
        'FirstName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FirstName'
        ),
        'LastName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastName'
        ),
        'Phone2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2'
        ),
        'AddressUsage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressUsage'
        ),
        'ReferenceID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ),
        'AddressAttribute' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressAttributeType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AddressAttribute'
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
