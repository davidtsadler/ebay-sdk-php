=============
Configuration
=============

This guide describes the service configuration options. These options can be provided in a service constructor or to the ``DTS\eBaySDK\Sdk`` class.

Options
-------

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

credentials
~~~~~~~~~~~

:Type: ``array|\DTS\eBaySDK\Interfaces\CredentialsInterface|callable``

Provide your "Application ID", "Certificate ID", and "Developer ID" credentials that are required when using the eBay API. If you do not provide any credentials the SDK will attempt to load them in the following order:

1. Load from :ref:`environment variables <environment_credentials>`.
2. Load from a :ref:`credentials ini file <credentials_profiles>`.

You can :ref:`hardcode your credentials <hardcoded_credentials>` via an associative array of "appId", "certId", and "devId" key value pairs.

.. code-block:: php

    use \DTS\eBaySDK\Finding\Services\FindingService;

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

    use \DTS\eBaySDK\Credentials\Credentials;
    use \DTS\eBaySDK\Finding\Services\FindingService;

    $credentials = new Credentials('111', '222', '333');

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $credentials
    ]);

Pass a callable :ref:`credentials provider <credentials_provider>` function to create credentials using a function.

.. code-block:: php

    use \DTS\eBaySDK\Credentials\Credentials;
    use \DTS\eBaySDK\Finding\Services\FindingService;

    $provider = function () {
        return new Credentials('111', '222', '333');
    };

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $provider
    ]);

More information about providing credentials to a client can be found in the :doc:`credentials` guide.

.. note::

    Credentials must be valid for the eBay environment that you are using. Sandbox and production credentials are not interchangeable.

debug
~~~~~

:Type: ``bool|array``

Pass ``true`` to have the SDK output debug information about the request and response. Alternatively an associative array can be provided with the following keys:

logfn (callable)
    Pass a function that takes a single string parameter. This function is called every time the SDK wishes to output some debug information. By default the SDK uses PHP's ``echo`` function.

scrub_credentials (bool)
    Before passing any information to ``logfn`` the SDK removes any references to your API credentials. This is to prevent sensitive information from been accidently exposed. Set this to ``false`` to disable this scrubbing.

scrub_strings (array)
    Associative array of regular expressions mapped to replacement strings. If ``scrub_credentials`` is ``true`` these additional strings will be used to remove senestive information from the debug messages.

.. code-block:: php

    use \DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US',
        'debug'      => [
            'logfn'             => function ($msg) { echo $msg."\n"; },
            'scrub_credentials' => true
            'scrub_strings'     => [
                '/email@example.com/'      => 'REDACTED_EMAIL',
                '/Secret=[A-Za-z0-9]{9}/i' => 'Secret=XXXXXXXXX',
            ]
        ]
    ]);

handler
~~~~~~~

:Type: ``callable``

By default the SDK uses a ``Guzzle 6`` client to handle the sending and receiving HTTP messages. By providing your own ``handler`` you can use a HTTP client that best meets your project's requirments. A ``handler`` accepts a ``Psr\Http\Message\RequestInterface`` object and returns a string.

.. code-block:: php

    use \DTS\eBaySDK\Finding\Services\FindingService;

    $handler = function (Psr\Http\Message\RequestInterface $request) {
        $client = new SomeClient();
        $response = $client->sendRequest($request);

        return $response->getBody()->getContent();
    };

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US',
        'handler'    => $handler
    ]);

profile
~~~~~~~

:Type: ``string``

Specifies the name of a profile within the ini file that is located in your HOME directory. The SDK will attempt to load the credentials from this profile. Note that the ``credentials`` option and ``EBAY_SDK_PROFILE`` environment variable are both ignored if this option is specified.

.. code-block:: php

    use \DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US',
        'profile'    => 'production'
    ]);

sandbox
~~~~~~~

:Type: ``bool``

eBay provides a sandbox environment for testing your API calls. Pass ``true`` to tell the SDK to use this sandbox. By default the SDK will always use the production environment.

Managing the configuration
--------------------------

There are two methods available that allow you to manage the configuration during the lifetime of a service object.

getConfig
~~~~~~~~~

You can get the value of any configuration option by just passing its name to the ``getConfig`` method.

.. code-block:: php

    $globalId = $service->getConfig('globalId');

    assert('$globalId === "EBAY-US"');

By passing no paramters all options are returned as an associative array.

.. code-block:: php

    $options = $service->getConfig();

    assert('$options["globalId"] === "EBAY-US"');
    assert('$options["sandbox"] === true');

setConfig
~~~~~~~~~

You can pass an associative array to the ``setConfig`` method to set multiple configuration options.

.. code-block:: php

    $service->setConfig([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US'
    ]);

