===============
Basic SDK Usage
===============

This guide will take you through the basics of using the eBay SDK for PHP. By the end of it you should have enough knowledge to start using the SDK in your projects. For the purpose of this guide the `Finding <http://developer.ebay.com/Devzone/finding/Concepts/FindingAPIGuide.html>`_ service is been used and for the most part the process is the same for all services. It is assumed that you have already :doc:`downloaded and installed the SDK <installation>` and `retrieved your development keys <http://developer.ebay.com/devzone/guides/ebayfeatures/Basics/Call-DevelopmentKeys.html>`_.

Including the SDK
-----------------

No matter how the SDK was installed you include it into your code using the ``require`` statement. The table below shows how to include the SDK for each of the installation methods. Note that you should replace ``/path/to/`` with the actual path used on your system.

=================== ===================================================
Installation Method Require Statement
=================== ===================================================
Composer            ``require '/path/to/vendor/autoload.php';``
------------------- ---------------------------------------------------
Phar                ``require '/path/to/ebay-sdk-php.phar';``
------------------- ---------------------------------------------------
Zip                 ``require '/path/to/ebay-sdk-php-autoloader.php';``
=================== ===================================================

Examples shown through out the guides will assume that you have used Composer to install the SDK. You can refer back to this section if you have used a different method.

Usage Summary
-------------

To use the SDK you instaniate a **service** object for the eBay API service you are using. Service objects have methods that correspond to each of the operations that are available in the service's API. Each method accepts a **request** object that contains the parameters to be passed to the operation. Calling a method executes the corresponding operation and returns a **response** object.

Creating a Service
------------------

You can create a service object by passing an associative array of configuration options to the service's constructor.

.. code-block:: php

    <?php
    // Use the Composer autoloader to include the SDK.
    require 'vendor/autoload.php';

    $finding = new DTS\eBaySDK\Finding\Services\FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => DTS\eBaySDK\Constants\GlobalIds::US
    ]);

.. _sdk-class:

Using the Sdk class
-------------------

The ``DTS\eBaySDK\Sdk`` class can be used as a factory for creating services. Configuration options passed to this class are shared with any services that it creates.

.. code-block:: php

    // Services will use the 903 version of the api and UK site (Site ID 3).
    $config = [
        'apiVersion' => '903',
        'siteId'     => '3'
    ];

    // Create an SDK class used to share configuration across services.
    $sdk = new DTS\eBaySDK\Sdk($config);

    // Create two services that share the same configuration.
    $trading = $sdk->createTrading();
    $shopping = $sdk->createShopping();

Configuration options that are in the root-level key-value pairs are shared across all services. You can provide service-specific options by providing a key that is the same name as the service (e.g "Finding", "Trading", etc.).

.. code-block:: php

    $sdk = new DTS\eBaySDK\Sdk([
        'apiVersion' => '903',
        'Finding'    => [
            'apiVersion' => '1.13.0'
        ]
    ]);

    // Trading service will use the 903 api version.
    $trading = $sdk->createTrading();

    // Finding service will instead use the 1.13.0 api version.
    $finding = $sdk->createFinding();

Service-specific configuration options are deep merged with those provided to the SDK object. Options passed to the various ``create`` methods are also deep merged.

.. code-block:: php

    $sdk = new DTS\eBaySDK\Sdk([
        'apiVersion' => '903',
        'siteId'     => '3'
    ]);

    // Both services share options provide by the SDK.
    $trading = $sdk->createTrading();
    $shopping = $sdk->createShopping();

    // Finding service will get additional options.
    $finding = $sdk->createFinding([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-GB'
    ]);

Creating a Request
------------------

Before sending data to the API you will need to instaniate a **request** object. This example will call the `findItemsByKeywords <http://developer.ebay.com/DevZone/finding/CallRef/findItemsByKeywords.html>`_ operation and so the object will be an instance of the `DTS\\eBaySDK\\Finding\\Types\\FindItemsByKeywordsRequest <https://github.com/davidtsadler/ebay-sdk-php/blob/master/src/Finding/Types/FindItemsByKeywordsRequest.php>`_ class.

.. code-block:: php

    // Create the API request object.
    $request = new Types\FindItemsByKeywordsRequest();

Properties of the request object can then be assigned values that will be sent to the API. Note that you may have to create instances of other classes, such as `DTS\\eBaySDK\\Finding\\Types\\PaginationInput <https://github.com/davidtsadler/ebay-sdk-php/blob/master/src/Finding/Types/PaginationInput.php>`_, in order to build up a complete request.

.. code-block:: php

    // Assign the keywords.
    $request->keywords = 'Harry Potter';

    // Ask for the first 25 items.
    $request->paginationInput = new Types\PaginationInput();
    $request->paginationInput->entriesPerPage = 25;
    $request->paginationInput->pageNumber = 1;

    // Ask for the results to be sorted from high to low price.
    $request->sortOrder = 'CurrentPriceHighest';

Calling a service operation
---------------------------

You call a service operation by calling the appropriate method on the service object. There will be one method for each  operation that the service provides. All methods, such as *findItemsByKeywords*, accept the request object as their only parameter. The SDK takes the information assigned to the properties of the request object and uses it to construct the raw XML that is sent to the API.

.. code-block:: php

    // Send the request.
    $response = $service->findItemsByKeywords($request);

Asynchronous Requests
---------------------

You can call an operation asynchronously by adding `Async` to the method's name. This will initiate the request and return a promise that is resolved with a response object or rejected with an Exception.

.. code-block:: php

    // Send the request.
    $promise = $service->findItemsByKeywordsAsync($request);
    $promise->then(function ($response) {
        echo $response->ack;
    })->otherwise(function ($reason) {
        echo 'An error occurred: '.$reason->getMessage();
    });

You can make a promise complete synchronously by using the `wait` method of the promise.

.. code-block:: php

    // Send the request.
    $promise = $service->findItemsByKeywordsAsync($request);
    // Block until response is received.
    $response = $promise->wait();

Working with Responses
----------------------

The result of calling a service operation is a **response** object that contains the data returned from the API. The SDK uses the raw XML response to assign values to the properties on the response object. The type and contents of the object depend on the service operation that was called. In this example the object will be an instance of the `DTS\\eBaySDK\\Finding\\Types\\FindItemsByKeywordsResponse <https://github.com/davidtsadler/ebay-sdk-php/blob/master/src/Finding/Types/FindItemsByKeywordsResponse.php>`_ class.

.. code-block:: php

    // Output the response from the API.
    if ($response->ack !== 'Success') {
        foreach ($response->errorMessage->error as $error) {
            printf("Error: %s\n", $error->message);
        }
    } else {
        foreach ($response->searchResult->item as $item) {
            printf("(%s) %s:%.2f\n", $item->itemId, $item->title, $item->sellingStatus->currentPrice->value);
        }
    }
