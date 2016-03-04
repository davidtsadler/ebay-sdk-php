============================
Request and Response objects
============================

Introduction
------------

Working with the eBay API normally involves the sending and receiving of XML. By using the SDK this is hidden from your projects and it allows you to instead work with PHP objects for both the request and the response.

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

Likewise, the SDK creates objects for you by parsing the XML response. The example below shows a response from the Finding service and how you would handle this in your projects.

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

Repeatable fields as arrays
~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. code-block:: xml

    <findItemsAdvancedRequest>
        <outputSelector>PictureURLSuperSize</outputSelector>
        <outputSelector>SellerInfo</outputSelector>
    </findItemsAdvancedRequest>
