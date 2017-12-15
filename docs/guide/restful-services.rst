================
RESTful Services
================

The SDK supports eBay's `RESTful services <http://developer.ebay.com/devzone/rest/ebay-rest/content/ebay-rest-landing.html>`_ in the same way that it supports eBay's older XML services. It will take care of constructing the JSON request and likewise parsing the JSON response. The SDK has some features that help with using the RESTful services.

.. note::

    These features are only available to parts of the SDK that deal with the RESTful services. These features may become available to the rest of the SDK in a future release.

Naming conventions
------------------

The names of the classes for the request and response objects follow the patten ``<operation name>RestRequest`` and ``<operation name>RestResponse``. That is, the name of the operation followed by either **RestRequest** or **RestResponse**. For example, when using the `Browse <http://developer.ebay.com/devzone/rest/api-ref/browse/index.html>`_ service and calling the `GetItem <https://developer.ebay.com/devzone/rest/api-ref/browse/item-item_id__get.html>`_ operation, the class name for the request object would be ``GetItemRestRequest`` and likewise the response object's would be ``GetItemRestResponse``.

.. code-block:: php

    <?php
    use \DTS\eBaySDK\Browse\Types;

    $request = new Types\GetItemRestRequest();

    /**
     * $response will be of the type DTS\eBaySDK\Browse\Types\GetItemRestResponse
     */
    $response = $service->getItem($request);

URI and query parameters
------------------------

Many of the operations in the RESTful services require the usage of URI and query parameters. The SDK exposes these parameters as properties on the request object.

The URL below uses the 3 query parameters **category_ids**, **q** and **limit**.

``https://api.ebay.com/buy/browse/v1/item_summary/search?category_ids=29792&q=Harry+Potter&limit=50``

Since the SDK exposes these parameters as object properties they can be specified as shown in the below example.

.. code-block:: php

    <?php
    use \DTS\eBaySDK\Browse\Types;

    $request = new Types\SearchForItemsRestRequest();
    $request->category_ids = '29792';
    $request->q = 'Harry Potter';
    $request->limit = '50';

    $response = $service->getItem($request);


HTTP status code
----------------

Response objects provide the ``getStatusCode`` method in order to get the HTTP status code of the response.

.. code-block:: php

    if ($response->getStatusCode() === 200) {
        foreach ($response->itemSummaries as $item) {
            printf(
                "(%s) %s: %s %.2f\n",
                $item->itemId,
                $item->title,
                $item->price->currency,
                $item->price->value
            );
        }
    }

HTTP headers
------------

Response objects provide several methods in order to obtain the HTTP headers of the response.

getHeaders
~~~~~~~~~~

Returns an associative array of headers. Each key will be a header name, and each value will be an array of strings for that header.

.. code-block:: php

    foreach ($response->getHeaders() as $name => $values) {
        printf(
            "(%s) %s\n",
            $name,
            implode(', ', $values)
        );
    }

hasHeader
~~~~~~~~~

Returns true if any header names match the given header name using a case-insensitive string comparison. Returns false if no matching header name is found in the response.

.. code-block:: php

    if ($response->hasHeader('content-length')) {
        printf(
            "(Content-Length) %s\n",
            implode(', ', $response->getHeader('content-length'))
        );
    }

getHeader
~~~~~~~~~

Returns an array of string values as provided for the given header. If the header does not appear in the message, this method will return an empty array.

.. code-block:: php

    printf(
        "(Content-Length) %s\n",
        implode(', ', $response->getHeader('content-length'))
    );

getHeaderLine
~~~~~~~~~~~~~

Returns a string of values as provided for the given header concatenated together using a comma. If the header does not appear in the message, this method will return an empty string.

.. code-block:: php

    printf(
        "(Content-Length) %s\n",
        $response->getHeader('content-length')
    );

hasHeader
~~~~~~~~~

Returns true if any header names match the given header name using a case-insensitive string comparison. Returns false if no matching header name is found in the response.

.. code-block:: php

    if ($response->hasHeader('content-length')) {
        printf(
            "(Content-Length) %s\n",
            implode(', ', $response->getHeader('content-length'))
        );
    }

OAuth access tokens
-------------------

The SDK provides some support for generating the OAuth tokens needed by the RESTful services. This is provided via the ``\DTS\eBaySDK\OAuth\Services\OAuthService`` class.


.. code-block:: php

    use \DTS\eBaySDK\OAuth\Services;
    use \DTS\eBaySDK\OAuth\Types;

    $service = new Services\OAuthService([
        'credentials' => '<YOUR CREDENTIALS>',
        'ruName'      => '<YOUR RUNAME>'
    ]);

Application tokens
~~~~~~~~~~~~~~~~~~

An application token can be generated by calling the ``getAppToken`` method on the service object.

.. code-block:: php

    $response = $service->getAppToken();

    printf("\nStatus Code: %s\n\n", $response->getStatusCode());
    if ($response->getStatusCode() !== 200) {
        printf(
            "%s: %s\n\n",
            $response->error,
            $response->error_description
        );
    } else {
        printf(
            "%s\n%s\n%s\n\n",
            $response->access_token,
            $response->token_type,
            $response->expires_in
        );
    }

User tokens
~~~~~~~~~~~

Generating a user token requires your application to redirect a user to eBay where they will grant permission. The redirect url can be created via the ``redirectUrlForUser`` method.
( If you retrieve your code direcly from the browser please make sure to use ``urldecode`` when passing the code. )

.. code-block:: php

    $service = new Services\OAuthService([
        'credentials' => [
            'appId'  => '111',
            'certId' => '222',
            'devId'  => '333',
        ],
        'ruName'      => 'foo'
    ]);

    $url =  $service->redirectUrlForUser([
        'state' => 'bar',
        'scope' => [
            'https://api.ebay.com/oauth/api_scope/sell.account',
            'https://api.ebay.com/oauth/api_scope/sell.inventory'
        ]
    ]);

    echo $url;
    /**
     * Outputs (wrapped for readability)
     *
     * https://signin.ebay.com/authorize?
     *   client_id=111&
     *   redirect_uri=foo&
     *   response_type=code&
     *   state=bar&
     *   scope=https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope%2Fsell.account%20
     *     https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope%2Fsell.inventory
     */

Once a user has granted permission your application will be given a code that should be exchanged for an oauth token. This can be done with the ``getUserToken`` method.


.. code-block:: php

    $response = $service->getUserToken(new Types\GetUserTokenRestRequest([
        'code' => '<CODE TO BE EXCHANGED FOR TOKEN>'
    ]));

    printf("\nStatus Code: %s\n\n", $response->getStatusCode());
    if ($response->getStatusCode() !== 200) {
        printf(
            "%s: %s\n\n",
            $response->error,
            $response->error_description
        );
    } else {
        printf(
            "%s\n%s\n%s\n%s\n\n",
            $response->access_token,
            $response->token_type,
            $response->expires_in,
            $response->refresh_token
        );
    }

The oauth tokens that eBay generate are short lived. A refresh token is given to your application in order to generate a new token without the need for prompting the user. The SDK provides the ``refreshUserToken`` method to handle this process. When calling this method you must ensure that the same ``scope`` values used in the ``redirectUrlForUser`` method is used.

.. code-block:: php

    $response = $service->refreshUserToken(new Types\RefreshUserTokenRestRequest([
        'refresh_token' => '<REFRESH TOKEN>',
        'scope' => [
            'https://api.ebay.com/oauth/api_scope/sell.account',
            'https://api.ebay.com/oauth/api_scope/sell.inventory'
        ]
    ]));

    printf("\nStatus Code: %s\n\n", $response->getStatusCode());
    if ($response->getStatusCode() !== 200) {
        printf(
            "%s: %s\n\n",
            $response->error,
            $response->error_description
        );
    } else {
        printf(
            "%s\n%s\n%s\n%s\n\n",
            $response->access_token,
            $response->token_type,
            $response->expires_in,
            $response->refresh_token
        );
    }
