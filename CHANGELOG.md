# CHANGELOG

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
