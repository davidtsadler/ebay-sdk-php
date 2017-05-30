# CHANGELOG

## Unreleased

### Breaking changes

* Support Marketing API version 1.2.0.

### Fixes

* Added missing shippingServiceCode property to Fulfillment\Types\ShippingFulfillment.
* Added missing paymentMode property to Fulfillment\Types\Payment.
* Added missing lineItemFulfillmentInstructions property to Fulfillment\Types\LineItem.
* Added missing refunds property to Fulfillment\Types\LineItem.
* Added missing enums to Fulfillment\Enums\OrderPaymentStatusEnum.
* Added missing enums to Fulfillment\Enums\PaymentMethodTypeEnum.
* Added missing priceDiscount property to Fulfillment\Types\Pricingsummary.

## 12.0.0 - 2017-05-23

### Fixes

* Renamed state to cancelState and status to cancelStatus.
  This matches the properties returned by the API.
* Changed type from integer to string for ItemEligibilityResult::itemId and ItemEligibilityResult::transactionId
* Added missing subdomain property to PostOrder\Error.
* Added missing discountAmount property to Fulfillment\DeliveryCost.

## 11.0.0 - 2017-03-20

### Breaking changes

* Support Marketing API version 1.1.0.
* Removed constant DTS\eBaySDK\Marketing\Enuns\InventoryCriterionEnum::C_INVALID.
* Removed property inventoryReferenceType from DTS\eBaySDK\Marketing\TypesInventoryItem class.

## 10.0.0 - 2017-03-17

### Breaking changes

* Support Trading API version 997.

## Features

* Can now use SDK to handle generation of OAUTH tokens for the RESTFul services.

## 9.0.1 - 2017-03-06

### Fixes

* Correct mapping between offer_Id and offerId for the UpdateOffer operation in the Inventory service.

## 9.0.0 - 2017-03-01

### Breaking changes

* Correct production URL now used for Order service.
* Support Inventory API version 1.1.0.
* Support Order API version v1_beta.4.0
* Support Trading API version 991.
* Use correct string type for orderFulfillmentStatus and fulfillmentInstructionsType properties.

## 8.0.0 - 2017-01-26

### Breaking changes

* Support Shopping API version 983.
* Support Trading API version 983.
* SDK now uses HTTPS service endpoint when available.

### Features

* Allow object properties to be any type.
* Support Account API version 1.
* Support Analytics API version 1.
* Support Browse API version 1.
* Support Fulfillment API version 1.
* Support Inventory API version 1.
* Support Marketing API version 1.
* Support Metadata API version 1.
* Support Order API version 1.
* Support Post Order API version 2.
* Support Product API version 1.4.0.
* Support Product Metadata API version 1.3.0.
* Support Merchandising API version 1.5.0.
* Support Feedback API version 1.2.2.
* Support Related Items Management API version 1.0.0.
* Configuration option httpOptions now supports http_errors.
* Configuration option httpOptions now supports curl.
* Oauth Token can be used with the Trading service.

## 7.0.0 - 2016-09-03

### Breaking changes

* Support Merchant Data API version 981.
* Support Shopping API version 981.
* Support Trading API version 981.

### Fixes

* Allow properties on `DTS\eBaySDK\Types\DecimalType` objects to be assigned both `integer` and `double` values.

### Features

- The SDK now supports JMESPath expressions that allow you to declaratively extract data from an API response.

## 6.0.0 - 2016-08-30

### Breaking changes

* Support Shopping API version 979.
* Support Trading API version 979.

## 5.0.0 - 2016-06-04

## Doc

* Fixed issue with JMS seriallizer. Documentation was incorrectly using @returns instead of @return.

`find src -type f -iname "*.php" | xargs grep -l @returns | xargs sed -i 's/@returns/@return/'`

### Features

* The SDK now supports asynchronous requests.
* HTTP options can be passed to the HTTP client via the new configuration option [httpOptions](http://devbay.net/sdk/guides/guide/configuration.html#httpOptions).

### Breaking changes

* Support Merchant Data API version 965.
* Support Trading API version 967.
* The protected method `\DTS\eBaySDK\Services::BaseService::callOperation` has been removed. Code that called this method will now need to call `callOperationAsync(...)->wait()` instead.
* The `handler` configuration option is now called [httpHandler](http://devbay.net/sdk/guides/guide/configuration.html#httpHandler) and supports the new [httpOptions](http://devbay.net/sdk/guides/guide/configuration.html#httpOptions) configuration option.
* The class `\DTS\eBaySDK\Handler` is now `\DTS\eBaySDK\HttpHandler`.

## 4.0.1 - 2016-05-25

### Fixes

* Updated recursive function call to new function name.

## 4.0.0 - 2016-04-24

### Breaking changes

* Support Trading API version 963.
* Support Shopping API version 963.

## 3.0.0 - 2016-04-11

### Breaking changes

* Support Trading API version 961.
* Support Shopping API version 961.

## 2.0.0 - 2016-03-28

### Breaking changes

* Support Trading API version 959.
* Support Shopping API version 959.

### Doc

* Added version information.
* Corrected site map for API guide.

## 1.0.0 - 2016-03-19

As this is version 1.0.0 there are a few breaking changes. A full list can be found in the [migration guide](http://devbay.net/sdk/guides/guide/migration.html).

## 0.5.0 - 2015-11-20

### Fixes

* Some properties where incorrectly declared as being `DTS\eBaySDK\ResolutionCaseManagement\Types\Integer` instead of `integer`.
* Correct URLs for Resolution Case Management service.

### API

* Support Trading API version 947.

## 0.4.0 - 2015-11-07

### Feature

SDK now supports the Return Management service.

### Fix

SDK can now handle XML that is returned with namespaces.

### API

* Support Merchant Data API version 945.
* Support Trading API version 945.

## 0.3.0 - 2015-10-11

### API

* Support Merchant Data API version 941.
* Support Shopping API version 941.
* Support Trading API version 941.

### Fixes

Order of object properties now matches the order specified in the service WSDL. Some operations require the elements in the XML to be in the correct order. Since the object properties were originally in alphabetical order the resulting XML would not be valid.

The generated XML is no longer a single string. It was possible to generate XML that was greater than the 20,000 character limit found in the LMS. Each element in the XML is now separated by a line-feed character.

## 0.2.0 - 2015-08-11

### API

* Support Merchant Data API version 933.
* Support Trading API version 933.

## 0.1.1 - 2015-08-05

### Feature

Assigning values when instatiating an object has been improved. It is now possible to simply pass an associative array of property names and values. When a property expects an object as its value you can just pass another associative array instead. For example,

```
$variation = new Types\VariationType(array(
    'SKU' => 'TS-W-S',
    'Quantity' => 5,
    'StartPrice' => ['value' => 10.99],
    'VariationSpecifics' => [[
        'NameValueList' => [
            ['Name' => 'Color', 'Value' => ['White']],
            ['Name' => "Size (Men's)", 'Value' => ['S']]
        ]
    ]]
));
```

This feature is compatiable with the existing method and so you can mix and match as in the example below.

```
$variation = new Types\VariationType(array(
    'SKU' => 'TS-W-S',
    'Quantity' => 5,
    'StartPrice' => new Types\AmountType(['value' => 10.99]),
    'VariationSpecifics' => [[
        'NameValueList' => [
            new Types\NameValueListType(['Name' => 'Color', 'Value' => ['White']]),
            ['Name' => "Size (Men's)", 'Value' => ['S']]
        ]
    ]]
));
```

## 0.1.0 - 2015-08-02

### Initial Release

### API

* Support Merchant Data API version 931.
* Support Trading API version 931.
