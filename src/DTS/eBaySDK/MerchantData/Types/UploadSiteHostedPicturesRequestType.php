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
 * @property string $PictureName
 * @property integer $PictureSystemVersion
 * @property \DTS\eBaySDK\MerchantData\Enums\PictureSetCodeType $PictureSet
 * @property \DTS\eBaySDK\MerchantData\Types\Base64BinaryType $PictureData
 * @property \DTS\eBaySDK\MerchantData\Enums\PictureUploadPolicyCodeType $PictureUploadPolicy
 * @property string[] $ExternalPictureURL
 * @property \DTS\eBaySDK\MerchantData\Enums\PictureWatermarkCodeType[] $PictureWatermark
 * @property integer $ExtensionInDays
 */
class UploadSiteHostedPicturesRequestType extends \DTS\eBaySDK\MerchantData\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'PictureName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureName'
        ),
        'PictureSystemVersion' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureSystemVersion'
        ),
        'PictureSet' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureSet'
        ),
        'PictureData' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\Base64BinaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureData'
        ),
        'PictureUploadPolicy' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureUploadPolicy'
        ),
        'ExternalPictureURL' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalPictureURL'
        ),
        'PictureWatermark' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PictureWatermark'
        ),
        'ExtensionInDays' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtensionInDays'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'UploadSiteHostedPicturesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
