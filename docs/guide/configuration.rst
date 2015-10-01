=============
Configuration
=============

This guide describes the service configuration options. These options can be provided in a service constructor or to the ``DTS\eBaySDK\Sdk`` class.

.. contents:: Configuration Options
    :depth: 1
    :local:

The following example shows how to pass options into the FindingService constructor.

.. code-block:: php

    use \DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'appId'      => '1234567890',
        'apiVersion' => '1.13.0'
        'globalId'   => 'EBAY-US'
    ]);

Refer to the :doc:`basic usage guide </getting-started/basic-usage>` for information on constructing service objects.

sandbox
~~~~~~~

:Type: ``bool``

Pass ``true`` to tell the SDK to use eBay's sandbox API. By default the SDK will always use the production API.
