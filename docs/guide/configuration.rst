=============
Configuration
=============

This guide describes the service configuration options. These options can be provided in a service constructor or to the ``DTS\eBaySDK\Sdk`` class.

Options
-------

The following example shows how to pass options into the FindingService constructor.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US'
    ]);

Refer to the :doc:`basic usage guide </getting-started/basic-usage>` for information on constructing service objects.

.. note::

    Some configuration options are only applicable to certain services. Where this is the case the services will be noted in the documentation for the configuration option.

affiliateUserId
~~~~~~~~~~~~~~~

:Type: ``string``
:Services: ``Shopping``

Affiliate parameter for applications that have registered on the `eBay Partner Network <https://www.ebaypartnernetwork.com/>`_.

apiVersion
~~~~~~~~~~

:Type: ``string``

Each of the services offered by eBay have a version number. Use this optional configuration to specify the API version that is supported by your application.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;
    use DTS\eBaySDK\Trading\Services\TradingService;

    /**
     * Use the 1.13.0 version of the finding service.
     */
    $finding = new FindingService([
        'apiVersion' => '1.13.0'
    ]);

    /**
     * For the trading service use its 951 version.
     */
    $trading = new TradingService([
        'apiVersion' => '951'
    ]);

If you do not provide a version number the SDK will default to the value that is currently specified in the class constant ``<SERVICE CLASS>::API_VERSION``.

.. code-block:: php

    use DTS\eBaySDK\Shopping\Services\ShoppingService;

    /**
     * apiVerion will default to the value in ShoppingService::API_VERSION.
     */
    $shopping = new ShoppingService();

.. warning::

    You should specify an apiVerion in your production code and not leave it to the default value that is provided by the SDK as you code will be dependant upon a value that will changed when the SDK is updated.

authorization
~~~~~~~~~~~~~

:Type: ``string``
:Services: ``Account``, ``Analytics``, ``Browse``, ``Fulfillment``, ``Inventory``, ``Marketing``, ``Metadata``, ``Order``, ``Trading``
:Required: true, except for the Trading service.

All eBay RESTful services use OAuth 2.0 access tokens for application authentication and user authorization. The token passed via ``authorization`` can be either an User or Application token. You must ensure that the token has the require scope for the operation that you are calling.

.. warning::

  The Trading service can accept both an OAuth and Auth'n'auth token. The OAuth token will be used by the SDK if both are specified.

authToken
~~~~~~~~~

:Type: ``string``
:Services: ``BulkDataExchange``, ``BusinessPoliciesManagement``, ``Feedback``, ``FileTransfer``, ``PostOrder``, ``RelatedItemsManagement``, ``ResolutionCaseManagement``, ``ReturnManagement``, ``Trading``.
:Required: true, except for the Trading service.

Some services require an Auth'n'auth token before you can perform operations on behalf of an eBay user. This token can be provided via the ``authToken`` option.

The Trading service is different to other services in that the  Auth'n'auth token can be passed as a configuration option or via the actual request object. Use which ever method is suitable for your project requirements.

.. code-block:: php

    use DTS\eBaySDK\Trading\Types;
    use DTS\eBaySDK\Trading\Services;

    /**
     * No auth token provided.
     */
    $trading = new Services\TradingService();

    $request = new Types\GeteBayOfficialTimeRequestType();
    /**
     * Provide an auth token via the request object.
     */
    $request->RequesterCredentials = new Types\CustomSecurityHeaderType();
    $request->RequesterCredentials->eBayAuthToken = '<AUTH TOKEN>';

credentials
~~~~~~~~~~~

:Type: ``array|DTS\eBaySDK\Credentials\CredentialsInterface|callable``
:Services: ``BulkDataExchange``, ``BusinessPoliciesManagement``, ``Feedback``, ``FileTransfer``, ``Finding``, ``HalfFinding``, ``Merchandising``, ``Product``, ``ProductMetadata``, ``RelatedItemsManagement``, ``ResolutionCaseManagement``, ``ReturnManagement``, ``Shopping``, ``Trading``.

Provide your "Application ID", "Certificate ID", and "Developer ID" credentials that are required when using the eBay API. If you do not provide any credentials the SDK will attempt to load them in the following order:

1. Load from :ref:`environment variables <environment_credentials>`.
2. Load from a :ref:`credentials ini file <credentials_profiles>`.

You can :ref:`hardcode your credentials <hardcoded_credentials>` via an associative array of "appId", "certId", and "devId" key value pairs.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => [
            'appId'  => '111',
            'certId' => '222',
            'devId'  => '333'
        ]
    ]);

You can also pass an instance of the ``DTS\eBaySDK\Credentials\CredentialsInterface`` interface.

.. code-block:: php

    use DTS\eBaySDK\Credentials\Credentials;
    use DTS\eBaySDK\Finding\Services\FindingService;

    $credentials = new Credentials('111', '222', '333');

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $credentials
    ]);

Pass a callable :ref:`credentials provider <credentials_provider>` function to create credentials using a function.

.. code-block:: php

    use DTS\eBaySDK\Credentials\Credentials;
    use DTS\eBaySDK\Finding\Services\FindingService;

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

.. _debug:

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

    use DTS\eBaySDK\Finding\Services\FindingService;

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

globalId
~~~~~~~~

:Type: ``string``
:Services: ``BusinessPoliciesManagement``, ``Finding``, ``HalfFinding``, ``Merchandising``, ``Product``, ``ProductMeta``, ``RelatedItemsManagement``, ``ResolutionCaseManagement``, ``ReturnManagement``.
:Required For: ``BusinessPoliciesManagement``

The unique string identifier for the eBay site your API requests are to be sent to. For example, you would pass the value EBAY-US to specify the eBay US site. A `complete list of eBay global IDs <http://developer.ebay.com/devzone/finding/Concepts/SiteIDToGlobalID.html>`_ is available.

.. _httpHandler:

httpHandler
~~~~~~~~~~~

:Type: ``callable``

By default the SDK uses a ``Guzzle 6`` client to handle the sending and receiving HTTP messages. By providing your own ``httpHandler`` you can use a HTTP client that best meets your project's requirments. A ``httpHandler`` accepts a ``Psr\Http\Message\RequestInterface`` object and an array of :ref:`httpOptions <httpOptions>`, and returns a ``GuzzleHttp\Promise\PromiseInterface`` that is fulfilled with a ``Psr\Http\Message\ResponseInterface`` object or rejected with an ``\Exception``.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $httpHandler = function (Psr\Http\Message\RequestInterface $request, array $options) {
        $client = new SomeClient();

        $response = $client->sendRequest($request, $options);

        // Return promise that is fulfilled with a Psr\Http\Message\ResponseInterface.
        return $response;
    };

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US',
        'httpHandler'    => $httpHandler
    ]);

.. _httpOptions:

httpOptions
~~~~~~~~~~~

:Type: ``array``

An array of HTTP options that will be passed to the HTTP client. The SDK supports the following options:

.. _http_options_connect_timeout:

connect_timeout
^^^^^^^^^^^^^^^

:Type: ``float``

A float specifying the number of seconds to wait when trying to connect to the API. Use ``0`` to wait indefinitely.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'httpOptions' => [
            'connect_timeout' => 1.5
        ]
    ]);

.. _http_options_curl:

curl
^^^^

:Type: ``array``

Depending on your project's requirments you may find that you need to set custom cURL options. This can be done by passing an associative array of `CURLOPT_XXX options <http://us1.php.net/curl_setopt>`_.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'httpOptions' => [
            'curl' => [
                CURLOPT_VERBOSE   => true,
                CURLOPT_INTERFACE => 'xxx.xxx.xxx.xxx'
            ]
        ]
    ]);

.. _http_options_debug:

debug
^^^^^

:Type: ``bool|resource``

Pass ``true`` to instruct the HTTP handler to output debug information to STDOUT. Alternatively pass ``resource`` as return from ``fopen`` to write to a specific PHP stream. The information provided will vary between HTTP handlers.

.. _http_options_delay:

delay
^^^^^

:Type: ``int``

The number of milliseconds to delay before sending the request.

.. _http_options_http_errors:

http_errors
^^^^^^^^^^^

:Type: ``bool``

Set to false to disable throwing exceptions on an HTTP protocol errors (i.e., 4xx and 5xx responses). Exceptions are thrown by default when HTTP protocol errors are encountered.

.. _http_options_proxy:

proxy
^^^^^

:Type: ``string|array``

If you are connecting to the API through a proxy pass a string specifying the proxy or pass an array to specify several proxies.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'httpOptions' => [
            'proxy' => 'http://192.168.2.1:10'
        ]
    ]);

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'httpOptions' => [
            'proxy' => [
                'http'  => 'tcp://192.168.2.1:10',
                'https' => 'tcp://192.168.2.1:11'
            ]
        ]
    ]);

.. _http_options_timeout:

timeout
^^^^^^^

:Type: ``float``

A float specifying the number of seconds to wait for a response from the API. Use ``0`` to wait indefinitely.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'httpOptions' => [
            'timeout' => 1.5
        ]
    ]);

.. _http_options_verify:

verify
^^^^^^

:Type: ``bool|string``

Control the SSL certificate verification behavior of the request.

* Set to ``true``  to enable SSL/TLS certificate verification. The SDK will use the default CA bundle provided by the operating system.
* Set to ``false`` to disable verification. You should not do this in production as the SDK will connect to the API using an insecure connection.
* Pass a string that is the path to the CA bundle to be used by the SDK.

marketplaceId
~~~~~~~~~~~~~

:Type: ``string``
:Services: ``Account``, ``Analytics``, ``Browse``, ``Fulfillment``, ``Inventory``, ``Marketing``, ``Metadata``, ``Order``

The string identifier for the eBay site your API requests are to be sent to. For example, you would pass the value ``EBAY-UK`` to specify the eBay UK site.

profile
~~~~~~~

:Type: ``string``
:Services: ``BulkDataExchange``, ``BusinessPoliciesManagement``, ``Feedback``, ``FileTransfer``, ``Finding``, ``HalfFinding``, ``Merchandising``, ``Product``, ``ProductMetadata``, ``RelatedItemsManagement``, ``ResolutionCaseManagement``, ``ReturnManagement``, ``Shopping``, ``Trading``.

Specifies the name of a profile within the ini file that is located in your HOME directory. The SDK will attempt to load the credentials from this profile. Note that the ``credentials`` option and ``EBAY_SDK_PROFILE`` environment variable are both ignored if this option is specified.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US',
        'profile'    => 'production'
    ]);

requestLanguage
~~~~~~~~~~~~~~~

:Type: ``string``
:Services: ``Account``, ``Analytics``, ``Browse``, ``Fulfillment``, ``Inventory``, ``Marketing``, ``Metadata``, ``Order``

This configuration option will set the ``Content-Language`` HTTP header for the request.

responseLanguage
~~~~~~~~~~~~~~~~

:Type: ``string``
:Services: ``Account``, ``Analytics``, ``Browse``, ``Fulfillment``, ``Inventory``, ``Marketing``, ``Metadata``, ``Order``

This configuration option will set the ``Accept-Language`` HTTP header for the request.

sandbox
~~~~~~~

:Type: ``bool``

eBay provides a sandbox environment for testing your API calls. Pass ``true`` to tell the SDK to use this sandbox. By default the SDK will always use the production environment.

siteId
~~~~~~

:Type: ``string|integer``
:Services: ``Shopping``, ``Trading``.
:Required For: ``Trading``

The unique numerical identifier for the eBay site your API requests are to be sent to. For example, you would pass the value ``3`` to specify the eBay UK site. A `complete list of eBay site IDs <http://developer.ebay.com/devzone/finding/Concepts/SiteIDToGlobalID.html>`_ is available.

trackingId
~~~~~~~~~~

:Type: ``string``
:Services: ``Shopping``

Affiliate parameter for applications that have registered on the `eBay Partner Network <https://www.ebaypartnernetwork.com/>`_.

trackingPartnerCode
~~~~~~~~~~~~~~~~~~~

:Type: ``string``
:Services: ``Shopping``

Affiliate parameter for applications that have registered on the `eBay Partner Network <https://www.ebaypartnernetwork.com/>`_.

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
