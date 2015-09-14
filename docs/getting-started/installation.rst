============
Installation
============

Depending on your project's requirements the eBay SDK for PHP can be installed through one of 3 supported methods. The recommended way is to install the SDK with `Composer <http://getcomposer.org>`_.

Installing via Composer
-----------------------

Using `Composer <http://getcomposer.org>`_ is the recommended way of installing the eBay SDK for PHP.

    Composer is a tool for dependency management in PHP. It allows you to declare the dependent libraries your project needs and it will install them in your project for you.
    -- `Composer Website <http://getcomposer.org>`_.

Installing the SDK with Composer is done as follows:

1. Download and install Composer.

   ::

       curl -sS https://getcomposer.org/installer | php

2. Install the SDK.

   ::

       php composer.phar require dts/ebay-sdk-php


3. Require Composer's autoloader by adding the following line to the top of your code.

   .. code-block:: php

       <?php
       require 'vendor/autoload.php';


It is highly recommended that you read the Composer documentation at `getcomposer.org <http://getcomposer.org>`_ to fully understand how to install Composer, define dependencies and configure the autoloading.

Installing via Phar
-------------------

Each release of the SDK comes with a `phar <http://php.net/manual/en/book.phar.php>`_ archive. This contains all the classes and dependencies you need to run the SDK. You can download the phar from the `SDK releases <https://github.com/davidtsadler/ebay-sdk-php/releases>`_. Using the phar in your project is as simple as including it in your scripts.

.. code-block:: php

    require '/path/to/downloaded/phar/ebay-sdk-php.phar';

Installing via Zip
------------------

You can download a zip archive from the `SDK releases <https://github.com/davidtsadler/ebay-sdk-php/releases>`_ which contains all the classes and dependencies you need to run the SDK. Unzip the archive into a directory of your choice and include the provided autoloader in your project's code.

.. code-block:: php

    require '/path/to/downloaded/zip/ebay-sdk-php-autoloader.php';
