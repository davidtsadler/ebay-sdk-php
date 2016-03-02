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
- A simple way of providing your own HTTP client via the new ``'handler'`` configuration option.
- Simplified debugging via the new ``'debug'`` configuration option.
- Your eBay application keys no longer have to be hardcode in your project's code. The SDK provides several ways in which to supply your :doc:`credentials <credentials>`.
- Manage shared configuration between multiple services by using the new :ref:`SDK object <sdk-class>`.

Breaking Changes
----------------

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

config method has been removed
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You no longer call the ``config`` method but method now instead call either the ``getConfig`` or ``setConfig`` methods.

.. code-block:: php

    // Pre-version 1
    $service->config([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US'
    ]);

    $globalId = $service->config('globalId');
    assert('$globalId === "EBAY-US"');

    $options = $service->config();
    assert('$options["globalId"] === "EBAY-US"');
    assert('$options["sandbox"] === true');

    // Version 1
    $service->setConfig([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US'
    ]);

    $globalId = $service->getConfig('globalId');
    assert('$globalId === "EBAY-US"');

    $options = $service->getConfig();
    assert('$options["globalId"] === "EBAY-US"');
    assert('$options["sandbox"] === true');


HTML converted automatically
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You no longer need to convert characters to their HTML entities before passing them to an object's property.

.. code-block:: php

    // Pre-version 1
    $request->Description = '&lt;h1&gt;Bits &amp; Bobs&lt;/h1&gt;&lt;p&gt;Just some &lt;stuff&gt; I found.&lt;/p&gt;';

    // Version 1
    $request->Description = '<h1>Bits & Bobs</h1><p>Just some &lt;stuff&gt; I found.</p>';


logger method removed
~~~~~~~~~~~~~~~~~~~~~

The ``logger`` method has been removed. Debugging the SDK has been simplified and is handled by the new ``debug`` configuration option.

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
