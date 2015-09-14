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
