===========
Credentials
===========

In order to authenticate requests, eBay services require you to provide your `development keys <https://developer.ebay.com/devzone/guides/ebayfeatures/Basics/Call-DevelopmentKeys.html>`_. These keys are your **AppID**, **CertID**, and **DevID**. These keys are provided to a service via the "credentials" configuration option. This guide demonstrates how to provide your credentials to the SDK using one of the following methods:

#. :ref:`environment_credentials`
#. :ref:`credentials_profiles`
#. :ref:`hardcoded_credentials`
#. :ref:`credentials_provider`

.. _environment_credentials:

Using credentials from environment variables
--------------------------------------------

If you do not provide credentials to a service object at the time it is instantiated, the SDK will attempt to load the the credentials from your environment. The SDK will use the ``getenv()`` function to obtain values from the environment variables ``EBAY_SDK_APP_ID``, ``EBAY_SDK_CERT_ID``, and ``EBAY_SDK_DEV_ID``.

.. _credentials_profiles:

Using the eBay credentials files and credential profiles
--------------------------------------------------------



.. _hardcoded_credentials:

Using hard-coded credentials
----------------------------

You can provide an associative array to the "credentials" configuration option of a service constructor. The array requires the "appId", "certId", and "devId" key values. 

.. code-block:: php

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

