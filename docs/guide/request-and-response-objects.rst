============================
Request and Response objects
============================

Introduction
------------

Working with the eBay API normally involves the sending and receiving of XML, or JSON if using eBay's RESTful services. By using the SDK this is hidden from your projects and it allows you to instead work with PHP objects for both the request and the response.

Below is an example of a typical XML request to the Finding service.

.. code-block:: xml

    <findItemsAdvancedRequest xmlns="http://www.ebay.com/marketplace/search/v1/services">
        <keywords>Harry Potter</keywords>
        <sortOrder>CurrentPriceHighest</sortOrder>
        <outputSelector>PictureURLSuperSize</outputSelector>
        <outputSelector>SellerInfo</outputSelector>
        <paginationInput xmlns="http://www.ebay.com/marketplace/search/v1/services">
            <pageNumber>1</pageNumber>
            <entriesPerPage>10</entriesPerPage>
        </paginationInput>
    </findItemsAdvancedRequest>

Instead of constructing this XML you use the SDK to instantiate various objects. Information needed by the request is done by setting properties on the objects that you create. The above example would be handled by the code shown below.

.. code-block:: php

    <?php
    use \DTS\eBaySDK\Finding\Services\FindingService;
    use \DTS\eBaySDK\Finding\Types;

    $service = new FindingService([
        'globalId' => Constants\GlobalIds::US,
    ]);

    $request = new Types\FindItemsAdvancedRequest();

    $request->keywords = 'Harry Potter';
    $request->sortOrder = 'CurrentPriceHighest';
    $request->outputSelector = ['PictureURLSuperSize', 'SellerInfo'];

    $request->paginationInput = new Types\PaginationInput();
    $request->paginationInput->entriesPerPage = 10;
    $request->paginationInput->pageNumber = 1;

Likewise, the SDK creates objects for you by parsing the XML/JSON response. The example below shows a response from the Finding service and how you would handle this in your projects.

.. code-block:: xml

    <findItemsAdvancedResponse xmlns="http://www.ebay.com/marketplace/search/v1/services">
        <ack>Success</ack>
        <searchResult count="3">
            <item>
                <itemId>110175316136</itemId>
                <title>Harry Potter and the Philosopher Stone</title>
            </item>
            <item>
                <itemId>198120536046</itemId>
                <title>Harry Potter and the Chamber of Secrets</title>
            </item>
            <item>
                <itemId>258426506032</itemId>
                <title>Harry Potter and the Prisoner of Azkaban</title>
            </item>
        </searchResult>
    </findItemsAdvancedResponse>

.. code-block:: php

    // The SDK returns an object that was parsed from the XML response.
    $response = $service->findItemsAdvanced($request);

    // Iterate over the items returned in the response.
    foreach ($response->searchResult->item as $item) {
        printf(
            "(%s) %s\n",
            $item->itemId,
            $item->title
        );
    }

Using the above examples the rest of this guide will explain a few things that you will need to know when working with the SDK.

Property names must exist
-------------------------

Properties of the objects are named after the fields found in the offical eBay documentation. The SDK will throw a ``DTS\eBaySDK\Exceptions\UnknownPropertyException`` if you get or set a property that does not exist.

.. code-block:: php

    use DTS\eBaySDK\Exceptions;

    try {
        $request->foo = 'foo';
    } catch(Exceptions\UnknownPropertyException $e) {
        // Unknown property foo
        echo $e->getMessage();
    }

.. warning::

    Property names are case sensitive. The SDK will throw an exception if you use the wrong case as it will think the property does not exist. Care must be taken as the field names across the different eBay services are not consistent. As an example, the Trading service uses the field ``Title`` but the Finding service uses ``title``.

Property types are enforced
---------------------------

The fields in a request and response have types, such as booleans and strings, that have been declared in the API `schema <http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/simpleTypes.html>`_. These types are mapped to their corresponding PHP types which allows the SDK to enforce that the correct type is used when assigning a value to an object's property.

.. code-block:: php

    // Boolean
    $request->freeShipping = true;

    // String
    $request->keywords = "Harry Potter";

    // Integer
    $request->entriesPerPage = 20;

    // Double/Float
    $request->amount = 9.87;

    // Dates can also be assigned
    $request->date = new datetime('2016-01-01');

A ``DTS\eBaySDK\Exceptions\InvalidPropertyTypeException`` is thrown if a value of the wrong type is assigned to a property.

.. code-block:: php

    use DTS\eBaySDK\Exceptions;

    try {
        $request->keywords = 123;
    } catch(Exceptions\InvalidPropertyTypeException $e) {
        // Invalid property type provided for keywords. Expected string but got integer
        echo $e->getMessage();
    }

You can disable this type checking by assigning ``false`` to the static property ``\DTS\eBaySDK\Sdk::$STRICT_PROPERTY_TYPES``.

.. code-block:: php

  \DTS\eBaySDK\Sdk::$STRICT_PROPERTY_TYPES = false;

  // No exception will be thrown.
  $request->keywords = 123;

Repeatable fields as arrays
---------------------------

The eBay API allows some fields to be specified multiple times in the request or response.

.. code-block:: xml

    <findItemsAdvancedRequest>
        <outputSelector>PictureURLSuperSize</outputSelector>
        <outputSelector>SellerInfo</outputSelector>
    </findItemsAdvancedRequest>

The SDK handles these `repeatable <http://developer.ebay.com/DevZone/finding/CallRef/types/simpleTypes.html#repeatable>`_ fields as arrays.

.. code-block:: php

    // Assign multiple values using an array.
    $request->outputSelector = ['PictureURLSuperSize', 'SellerInfo'];

    // Assign values one at a time.
    $request->outputSelector[] = 'PictureURLSuperSize';
    $request->outputSelector[] = 'SellerInfo';

    // Iterate through an array in the response.
    foreach ($response->searchResult->item as $item) {
        printf(
            "(%s) %s\n",
            $item->itemId,
            $item->title
        );
    }

    // Access the first element of the array.
    echo $response->searchResult->item[0]->title;

Assign multiple properties
--------------------------

Passing an associative array when constructing an object allows you to specify multiple properties at a time. Use the property names as the keys of the array and pass in the values that you want assigned. You can nest associative arrays to assign properties of other complex properties.

.. code-block:: php

    // Assigning values directly to the properties.
    $request = new Types\FindItemsAdvancedRequest();
    $request->keywords = 'Harry Potter';
    $request->categoryId = ['617', '171228'];
    $request->paginationInput = new Types\PaginationInput();
    $request->paginationInput->entriesPerPage = 10;

    // Assigning properties during the construction.
    $request = new Types\FindItemsAdvancedRequest([
        'keywords'        => 'Harry Potter',
        'categoryId'      => ['617', '171228'],
        'paginationInput' => [
            'entriesPerPage' => 10
        ]
    ]);


HTML converted automatically
----------------------------

You can assign HTML to a property.

.. code-block:: php

    $request->Description = '<h1>Bits & Bobs</h1><p>Just some &lt;stuff&gt; I found.</p>';

The SDK will handle the escaping of it in the XML/JSON.

.. code-block:: xml

    <Description>
        &lt;h1&gt;Bits &amp; Bobs&lt;/h1&gt;&lt;p&gt;Just some &amp;lt;stuff&amp;gt; I found.&lt;/p&gt;
    </Description>

Convert to an array
-------------------

The ``toArray`` method returns an associate array of an object's properties. The array keys are the property names and the values are the property values.

.. code-block:: php

    $request = new Types\FindItemsAdvancedRequest();
    $request->keywords = 'Harry Potter';
    $request->categoryId = ['617', '171228'];

    print_r($request->toArray());

    /**
      Array
      (
          [keywords] => Harry Potter
          [categoryId] => Array
              (
                  [0] => 617
                  [1] => 171228
              )

      )
    */

.. note::

    The output from ``toArray`` can be passed to the constructor of a object to assign multiple properties.
