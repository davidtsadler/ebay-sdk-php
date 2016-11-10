===========
Credentials
===========

In order to authenticate requests, eBay services require you to provide your `development keys <https://developer.ebay.com/devzone/guides/ebayfeatures/Basics/Call-DevelopmentKeys.html>`_. These keys are your **AppID**, **CertID**, and **DevID**. These keys are provided to a service via the "credentials" configuration option. This guide demonstrates how to provide your credentials to the SDK using one of the following methods:

#. :ref:`environment_credentials`
#. :ref:`credentials_profiles`
#. :ref:`hardcoded_credentials`
#. :ref:`credentials_provider`

.. note::

    The RESTful services do not require any credentials as authentication is done through an OAuth token. Therefore this guide is only applicable to eBay's older XML services.

.. _environment_credentials:

Using credentials from environment variables
--------------------------------------------

If you do not provide credentials to a service object at the time it is instantiated, the SDK will attempt to load the credentials from your environment. The SDK will use the ``getenv()`` function to obtain values from the environment variables ``EBAY_SDK_APP_ID``, ``EBAY_SDK_CERT_ID``, and ``EBAY_SDK_DEV_ID``.

.. _credentials_profiles:

Using a credentials ini file
----------------------------

Credentials can be provided by creating an ini file located in ``~/.ebay_sdk/credentials`` and should be formatted like the following:

.. code-block:: ini

    [default]
    ebay_app_id = YOUR_EBAY_APP_ID
    ebay_cert_id = YOUR_EBAY_CERT_ID
    ebay_dev_id = YOUR_EBAY_DEV_ID

    [project1]
    ebay_app_id = ANOTHER_EBAY_APP_ID
    ebay_cert_id = ANOTHER_EBAY_CERT_ID
    ebay_dev_id = ANOTHER_EBAY_DEV_ID

The sections ``default`` and ``project1`` are examples of credential **profiles**. This allows the ini file to store multiple credentials that are defined in profiles named according to your various projects. You can tell the SDK which profile to use by specifying its name in the ``profile`` configuration option.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    // Instantiate a service that will use the credentials from the project1 profile.
    $service = new FindingService([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-US',
        'profile'    => 'project1'
    ]);

If no credentials or profile were provided to the SDK and no credentials could be found in the environment variables, but an ini is found, the SDK will use the ``default`` profile. You can change the default profile by specifying value in the ``EBAY_SDK_PROFILE`` environment variable.

.. _hardcoded_credentials:

Using hard-coded credentials
----------------------------

You can provide an associative array to the "credentials" configuration option of a service constructor. The array requires the "appId", "certId", and "devId" key values.

.. code-block:: php

    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => [
            'appId'  => 'your-app-id',
            'certId' => 'your-cert-id',
            'devId'  => 'your-dev-id'
        ]
    ]);

.. warning::

    Hard-coding your credentials can be dangerous. There is the potential to accidentally commit these details into a SCM repository, thereby exposing your credentials to people. It also makes it difficult to change your credentials in the future.

.. _credentials_provider:

Using a credentials provider
----------------------------

A credentials provider is a function that returns an object that is an instance of the ``DTS\eBaySDK\Credentials\CredentialsInterface`` interface. If the provider is unable to supply the credentials it should return an instance of ``InvalidArgumentException`` whose message states the reason for the failure.

Providers are specified using the ``credentials`` configuration option and will be called every time a service is instantiated.

.. code-block:: php

    use DTS\eBaySDK\Credentials\CredentialsProvider;
    use DTS\eBaySDK\Finding\Services\FindingService;

    $provider = new CredentialsProvider::defaultProvider();

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $provider
    ]);

The SDK comes with several providers that can be combined together with your own custom provider.

.. important::

    Credential providers are called every time a service is instantiated. If loading credentials is expensive, for example requires the reading of a file from the disk, then you should consider wrapping your provider in the ``DTS\eBaySDK\Credentials\CredentialsProvider::memoize`` function. The default provider that the SDK uses is automatically memorized.

env provider
~~~~~~~~~~~~

``DTS\eBaySDK\Credentials\CredentialsProvider::env`` attempts to load credentials from environment variables.

.. code-block:: php

    use DTS\eBaySDK\Credentials\CredentialsProvider;
    use DTS\eBaySDK\Finding\Services\FindingService;

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => CredentialsProvider::env()
    ]);

ini provider
~~~~~~~~~~~~

``DTS\eBaySDK\Credentials\CredentialsProvider::ini`` attempts to load credentials from an :ref:`ini credential file <credentials_profiles>`. The SDK will by default attempt to load the "default" profile from a file located at ``~/.ebay_sdk/credentials``.

.. code-block:: php

    use DTS\eBaySDK\Credentials\CredentialsProvider;
    use DTS\eBaySDK\Finding\Services\FindingService;

    $provider = CredentialsProvider::ini();
    // Cache the results in a memoize function to avoid loading and parsing
    // the ini file every time a service is instantiated.
    $provider = CredentialsProvider::memoize($provider);

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $provider
    ]);

You can use a custom profile or ini file location by providing arguments to the function that creates the provider.

.. code-block:: php

    $profile = 'production';
    $path = '/full/path/to/credentials.ini';

    $provider = CredentialsProvider::ini($profile, $path);
    $provider = CredentialsProvider::memoize($provider);

    $service = new FindingService([
        'apiVersion'  => '1.13.0',
        'globalId'    => 'EBAY-US',
        'credentials' => $provider
    ]);

defaultProvider provider
~~~~~~~~~~~~~~~~~~~~~~~~

``DTS\eBaySDK\Credentials\CredentialsProvider::defaultProvider`` is the default credentials provider. This provider is used if you omit a ``credentials`` configuration option when creating a service. It first attempts to load credentials from the environment variables and then from an ini file.

.. note::

    The result of the default provider is automatically memoized.

Creating a custom provider
~~~~~~~~~~~~~~~~~~~~~~~~~~

Credential providers are functions that when invoked return an object that implements the ``DTS\eBaySDK\Credentials\CredentialsInterface`` interface or that will return an ``InvalidArgumentException`` instance upon failure.

A best practice for creating providers is to create a function that is invoked to create the actual credential provider. As an example, here's the source of the ``env`` provider (slightly modified for example purposes). Notice that it is a function that returns the actual provider function. This allows you to easily compose credential providers and pass them around as values.

.. code-block:: php

    use DTS\eBaySDK\Credentials\Credentials;

    // This function CREATES a credentials provider.
    public static function env()
    {
        // This function IS the credentials provider.
        return function () {
            // Use credentials from environment variables, if available
            $appId = getenv(self::ENV_APP_ID);
            $certId = getenv(self::ENV_CERT_ID);
            $devId = getenv(self::ENV_DEV_ID);

            if ($appId && $certId && $devId) {
                return new Credentials($appId, $certId, $devId);
            } else {
                return new \InvalidArgumentException('Could not find environment variable '
                    . 'credentials in '. self::ENV_APP_ID . '/'
                    . self::ENV_CERT_ID . '/'
                    . self::ENV_DEV_ID
                );
            }
        };
    }

Memoizing Credentials
~~~~~~~~~~~~~~~~~~~~~

It is sometimes necessary to create a credentials provider that remembers the previous return value. This can be useful for performance when loading credentials is an expensive operation or when using the ``DTS\eBaySDK\Sdk`` class to share a credentials provider across multiple services. You can add memoization to a credentials provider by wrapping the credentials provider function in a ``memoize`` function:

.. code-block:: php

    use DTS\eBaySDK\Credentials\CredentialsProvider;
    use DTS\eBaySDK\Sdk;

    $provider = CredentialsProvider::ini();
    // Wrap the actual provider in a memoize function.
    $provider = CredentialsProvider::memoize($provider);

    // Pass the provider into the Sdk class and share the provider
    // across multiple services. Each time a new service is constructed,
    // it will use the previously returned credentials.
    $sdk = new Sdk(['credentials' => $provider]);

    $finding = $sdk->createFinding([
        'apiVersion' => '1.13.0',
        'globalId'   => 'EBAY-GB'
    ]);

    $trading = $sdk->createTrading([
        'apiVersion' => '903',
        'siteId'     => '3'
    ]);

    assert($finding->getCredentials() === $trading->getCredentials());

Chaining providers
~~~~~~~~~~~~~~~~~~

Credential providers can be chained using the ``DTS\eBaySDK\Credentials\CredentialsProvider::chain()`` function. This function accepts a variadic number of arguments, each of which are credentials provider functions. This function then returns a new function that is the composition of the provided functions such that they are invoked one after the other until one of the providers returns an object that is an instance of the ``DTS\eBaySDK\Credentials\CredentialsInterface`` interface .

The ``defaultProvider`` uses this composition in order to check multiple providers before failing. The source of the ``defaultProvider`` demonstrates the use of the ``chain`` function.

.. code-block:: php

    // This function returns a provider.
    public static function defaultProvider(array $config = [])
    {
        // This function is the provider, which is actually the composition
        // of multiple providers. Notice that we are memoizing the result by
        // default as well.
        return self::memoize(
            self::chain(
                self::env(),
                self::ini()
            )
        );
    }
