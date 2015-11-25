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
