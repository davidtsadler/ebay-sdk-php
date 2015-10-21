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
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US'
    ]);

Refer to the :doc:`basic usage guide </getting-started/basic-usage>` for information on constructing service objects.

.. note::

    Some configuration options are only applicable to certain services. Where this is the case the services will be noted in the documentation for the configuration option.

sandbox
~~~~~~~

:Type: ``bool``

eBay provides a sandbox environment for testing your API calls. Pass ``true`` to tell the SDK to use this sandbox. By default the SDK will always use the production environment.

credentials
~~~~~~~~~~~

:Type: ``array|\DTS\eBaySDK\Interfaces\CredentialsInterface|callable``

Provide your "Application ID", "Certificate ID", and "Developer ID" credentials that are required when using the eBay API. If you do not provide any credentials the SDK will attempt to load them in the following order:

1. Load from :ref:`environment variables <environment_credentials>`.
2. Load from a :ref:`credentials ini file <credentials_profiles>`.

You can :ref:`hardcode your credentials <hardcoded_credentials>` via an associative array of "appId", "certId", and "devId" key value pairs.

.. code-block:: php

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => [
            'appId'  => '111',
            'certId' => '222',
            'devId'  => '333'
        ]
    ]);

You can also pass an instance of the ``DTS\eBaySDK\Interfaces\CredentialsInterface`` interface.

.. code-block:: php

    $credentials = new DTS\eBaySDK\Credentials\Credentials('111', '222', '333');

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $credentials
    ]);

Pass a callable :ref:`credentials provider <credentials_provider>` function to create credentials using a function.

.. code-block:: php

    $provider = function () {
        return [
            'appId'  => '111',
            'certId' => '222',
            'devId'  => '333'
        ]
    };

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $provider
    ]);

More information about providing credentials to a client can be found in the :doc:`credentials` guide.

.. note::

    Credentials must be valid for the eBay environment that you are using. Sandbox and production credentials are not interchangeable.

