============
Requirements
============

There are a few minimum system requirements to start using the SDK. Many of these are installed by default in most PHP environments.

Minimum requirements
--------------------

* PHP 5.5.0 or greater with the following extensions:

  * cURL
  * libxml

* 64 bit version of PHP recommended as there are some `issues when using the SDK with 32 bit <#using-the-sdk-with-32-bit-systems>`_.
* SSL enabled on the cURL extension so that https requests can be made.

Checking requirements
---------------------

Run the `requirements_check.php <https://github.com/davidtsadler/ebay-sdk-php/blob/master/requirements_check.php>`_ file in the SDK to check that your system meets the minimum requirements. It can be run from the command line or a web browser and will report which checks your system passes and fails.

It is often helpful to include information about your system when reporting an issue with the SDK. Using the output from the requirements check may help identify the cause of an issue and speed up the resolution.

Using the SDK with 32 bit systems
---------------------------------

It is important to note that for most developers the SDK can be installed and used on 32 bit systems without any problems. However, depending upon your project requirements you may come across an issue when assigning values to integers that are greater than the largest possible 32 bit integer value.

.. code-block:: php

    // StoreCategoryID requires an integer value to be assigned to it.
    $item->Storefront->StoreCategoryID = (int)51874727017;

    // You would except 51874727017 to be outputted.
    echo $item->Storefront->StoreCategoryID;

On 64 bit systems, assuming you have built the 64 bit version of PHP, the above code would work as expected and output the value `51874727017`. However, on 32 bit systems the value `335119465` would be displayed. The reason for this issue is that the largest possible integer value for 32 bit systems is 2147483647. Assigning a value greater than this results in an integer overflow. For 64 bit systems the largest possible integer value is `9223372036854775807` which means that API values using the `long schema type <http://www.w3.org/TR/xmlschema-2/#long>`_ are handled correctly by the SDK.
