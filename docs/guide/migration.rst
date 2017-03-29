===============
Migration Guide
===============

Introduction
------------

Version 1 of the SDK introduced new features and refined existing ones. If you are updating your project's code from the pre-version 1 SDK you will find this guide useful during the migration.

What's New?
-----------

- The SDK now requires PHP 5.5+.
- The SDK has been upgraded to use `Guzzle 6 <http://guzzlephp.org>`_ as its underlying HTTP client.
- Follows the `PSR-4 <http://www.php-fig.org/psr/psr-4/>`_ and `PSR-7 <http://www.php-fig.org/psr/psr-7/>`_ standards.
- A simple way of providing your own HTTP client via the new ``'httpHandler'`` configuration option.
- Simplified debugging via the new :ref:`debug <debug>` configuration option.
- Your eBay application keys no longer have to be hardcode in your project's code. The SDK provides several ways in which to supply your :doc:`credentials <credentials>`.
- Manage shared configuration between multiple services by using the new :ref:`SDK object <sdk-class>`.

Breaking Changes
----------------

HTML converted automatically
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You no longer need to convert characters to their HTML entities before passing them to an object's property.

.. code-block:: php

    // Pre-version 1
    $request->Description = '&lt;h1&gt;Bits &amp; Bobs&lt;/h1&gt;&lt;p&gt;Just some &lt;stuff&gt; I found.&lt;/p&gt;';

    // Version 1
    $request->Description = '<h1>Bits & Bobs</h1><p>Just some &lt;stuff&gt; I found.</p>';

Removed MerchantDataService class
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The ``DTS\eBaySDK\MerchantData\Services\MerchantDataService`` class was removed in version 1 and replaced with the ``DTS\eBaySDK\MerchantData\MerchantData`` class. There is no difference in how the new class works when compared with the previous version.

Removed UnboundType class
~~~~~~~~~~~~~~~~~~~~~~~~~

The ``DTS\eBaySDK\Types\UnboundType`` class was removed in version 1 and replaced with the ``DTS\eBaySDK\Types\RepeatableType`` class. There is no difference in how the new class works when compared with the previous version.

Required configuration options enforced
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

From version 1 onwards the SDK enforces required configuration options by throwning a ``InvalidArgumentException`` during the construction of a service object.

.. code-block:: php

    use DTS\eBaySDK\Trading\Services\TradingService;

    // Pre-version 1
    // No exception thrown.
    $service = new TradingService();

    // Version 1
    try {
        $service = new TradingService();
    } catch (\InvalidArgumentException $e) {
        // Missing required configuration options: siteId
        echo $e->getMessage();
    }

Strict type checking on configuration options
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Version 1 introduced strict type checking for configuration options. A ``InvalidArgumentException`` will be thrown if the value passed to a configuration option is the wrong type. Strict type checking is also enabled for values passed to the ``setConfig`` method.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    // Pre-version 1
    // No exception thrown.
    $service = new FindingService([
        'globalId' => 3
    ]);

    // Version 1
    try {
        $service = new FindingService([
            'globalId' => 3
        ]);
    } catch (\InvalidArgumentException $e) {
        // Invalid configuration value provided for "globalId". Expected string, but got int(3)
        echo $e->getMessage();
    }

eBay Application Keys
~~~~~~~~~~~~~~~~~~~~~

The service configuration options ``appId``, ``certId``, and ``devId`` have been removed. You now pass your eBay Application Keys via the new :doc:`credentials <credentials>` configuration option.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    // Pre-version 1
    $service = new FindingService([
        'appId'  => '111',
        'certId' => '222',
        'devId'  => '333'
    ]);

    // Version 1
    $service = new FindingService([
        'credentials' => [
            'appId'  => '111',
            'certId' => '222',
            'devId'  => '333'
        ]
    ]);

Config method has been removed
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You no longer call the ``config`` method but now instead call either the ``getConfig`` or ``setConfig`` methods.

.. code-block:: php

    // Pre-version 1
    $service->config([
        'apiVersion' => '1.13.0'
    ]);

    $globalId = $service->config('globalId');
    assert('$globalId === "EBAY-US"');

    // Version 1
    $service->setConfig([
        'apiVersion' => '1.13.0'
    ]);

    $globalId = $service->getConfig('globalId');
    assert('$globalId === "EBAY-US"');

Logger method removed
~~~~~~~~~~~~~~~~~~~~~

The ``logger`` method has been removed. Debugging the SDK has been simplified and is handled by the new :ref:`debug <debug>` configuration option.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    // Pre-version 1
    class EchoLogger extends Psr\Log\AbstractLogger
    {
        public function log($level, $message, array $context = array())
        {
            echo $context['body'];
        }
    }

    $service = new FindingService([
        'debug' => true
    ]);

    $service->logger(new EchoLogger());

    // Version 1
    $service = new FindingService([
        'debug' => [
            'logfn' => function ($msg) { echo $msg."\n"; }
        ]
    ]);

Exceptions no longer thrown for non-existent configuration options
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The pre-version 1 SDK would throw a ``DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException`` when a non-existent configuration option was passed to either the service constructor or ``config`` method. The SDK will now silently ignore any unknown configuration options.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    // Pre-version 1
    try {
        $service = new FindingService([
            'non-existent' => true
        ]);
    } catch (\DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException $e) {
        echo $e->getMessage();
    }

    // Version 1
    // No exception thrown.
    $service = new FindingService([
        'non-existent' => true
    ]);

HttpClient parameter and method have been removed
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Version 1 introduced the new :ref:`httpHandler <httpHandler>` configuration option which replaced both the ``httpClient`` parameter and method.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    // Pre-version 1
    class HttpClient implements \DTS\eBaySDK\Interfaces\HttpClientInterface
    {
        public function __construct() {}

        public function post($url, $headers, $body)
        {
          // Handle sending the HTTP request.
          // Code removed for brevity.
        }
    }

    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US'
    ], new HttpClient());

    // Version 1
    $httpHandler = function (Psr\Http\Message\RequestInterface $request, array $options) {
        $client = new SomeClient();

        $response = $client->sendRequest($request, $options);

        // Return promise that is fulfilled with a Psr\Http\Message\ResponseInterface.
        return $response;
    };

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'httpHandler' => $httpHandler
    ]);
