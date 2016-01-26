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
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerAlertTypeCodeType $AlertType
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
 * @property integer $DurationInDays
 * @property integer $Count
 */
class SellingManagerAlertType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AlertType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AlertType'
        ),
        'SoldAlert' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldAlert'
        ),
        'InventoryAlert' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryAlert'
        ),
        'AutomationAlert' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutomationAlert'
        ),
        'PaisaPayAlert' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayAlert'
        ),
        'GeneralAlert' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GeneralAlert'
        ),
        'DurationInDays' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DurationInDays'
        ),
        'Count' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Count'
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
