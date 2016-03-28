==========
Versioning
==========

As of version 1.0.0 the SDK follows strict `Semantic Versioning <http://semver.org/>`_.  Any breaking change, **no matter how small**, increments the Major version number. Since the API is regularly updated you should expect many increments to the Major Version number.

Current Version
---------------

The SDK provides the constant ``\DTS\eBaySDK\Sdk::VERSION`` that is set to the current version of the SDK.

.. code-block:: php

    echo DTS\eBaySDK\Sdk::VERSION;

Service Versions
----------------

The SDK supports many of the different eBay services. You can determine which version of a service the SDK supports by looking at the ``<SERVICE CLASS>::API_VERSION`` constant. Replace ``<SERVICE CLASS>`` with the class that is associated with the service. For example,

.. code-block:: php

    echo DTS\eBaySDK\Trading\Services\TradingService::API_VERSION;
