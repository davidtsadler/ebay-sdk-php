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

