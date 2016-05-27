========
Promises
========

By using **promises** the eBay SDK for PHP enables asynchronous workflows to be used in your projects. Requests to the API can be done concurrently. The promise specification used by the SDK is `Promises/A+ <https://promisesaplus.com/>`_.

Promises in the SDK
-------------------

A *promise* represents the eventual result of an asynchronous operation. The usual way of interacting with a promise is through it's ``then`` method. Callbacks registered via this method will receive either the eventual value or the reason why the promises was not fulfilled.

The SDK makes use of `guzzlehttp/promises <https://github.com/guzzle/promises>`_ for implementing it's promises. Guzzle promises provide blocking and non-blocking workflows and can be used with any non-blocking event loop.

Using Promises
--------------

A promise is returned whenever you call an operation with ``Async`` appended to the method name.

.. code-block:: php

    use \DTS\eBaySDK\Shopping\Services;
    use \DTS\eBaySDK\Shopping\Types;

    $service = new Services\ShoppingService();

    $promise = $service->geteBayTimeAsync(new Types\GeteBayTimeRequestType());

    $promise->then(
        function ($response) {
            printf("The official eBay time is: %s\n", $response->Timestamp->format('H:i (\G\M\T) \o\n l jS F Y'));
        }
        ,
        function ($reason) {
            printf("An error occurred: %s\n", $reason->getMessage());
        }
    );

Executing concurrent requests
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Multiple requests can be composed together and executed concurrently.

.. code-block:: php

    use \DTS\eBaySDK\Sdk;
    use \DTS\eBaySDK\Shopping\Types as Shopping;
    use \DTS\eBaySDK\Trading\Types as Trading;

    $sdk = new Sdk([
        'authToken' => '<AUTH TOKEN>',
        'siteId'    => 0
    ]);

    $shopping = $sdk->createShopping();
    $trading = $sdk->createTrading();

    $promises = [
        'shopping' => $shopping->geteBayTimeAsync(new Shopping\GeteBayTimeRequestType()),
        'trading'  => $trading->getItemAsync(new Trading\GetItemRequestType(['ItemID' => '12345678'])),
    ];

    /**
     * Wait on all promises to complete.
     */
    $results = Promise\unwrap($promises);

    printf(
        "%s\n%s\n",
        $results['shopping']->Timestamp->format('H:i (\G\M\T) \o\n l jS F Y'),
        $results['trading']->Item->Title
    );

Chaining Promises
~~~~~~~~~~~~~~~~~

By chaining ``then`` callbacks with other ``then`` callbacks it's possible to create a transformation pipeline.

.. code-block:: php

    use \DTS\eBaySDK\Shopping\Services;
    use \DTS\eBaySDK\Shopping\Types;

    $service = new Services\ShoppingService();

    $promise = $service->getSingleItemAsync(new Types\GetSingleItemRequestType(['ItemID' => '12345678']));

    $promise->then(function ($response) {
        return $response->Item;
    })->then(function ($item) {
        printf("%s\n", $item->Title);
    });

Synchronous Promises
~~~~~~~~~~~~~~~~~~~~

You can force any promise to complete synchronously by calling the ``wait`` method. If an exception is encountered during the calling of the wait method, the promise is rejected with the exception and the exception is thrown.

.. code-block:: php

    use \DTS\eBaySDK\Shopping\Services;
    use \DTS\eBaySDK\Shopping\Types;

    $service = new Services\ShoppingService();

    $promise = $service->geteBayTimeAsync(new Types\GeteBayTimeRequestType());

    try {
        $result = $promise->wait();
    } catch(\Exception $e) {
        printf("An error occurred: %s\n", $e->getMessage());
    }

Fulfilled promises will return the previously delivered value if the wait method is called again.

.. code-block:: php

    $promise = $service->geteBayTimeAsync(new Types\GeteBayTimeRequestType());
    $result = $promise->wait() ;
    assert($result === $promise->wait());

Cancelling Promises
~~~~~~~~~~~~~~~~~~~

Call the ``cancell`` method to cancel a promise. This has no effect if the promise has already been resolved. A cancelled promise is rejected with a ``GuzzleHttp\Promise\RejectionException``.
