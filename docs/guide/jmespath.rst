===============================
JMESPath Expressions in the SDK
===============================

`JMESPath <http://jmespath.org/>`_ allows you to declaratively specify how to extract elements from a JSON document. The eBay SDK for PHP allows you to use JMESPath expressions to declaratively extract data from an API response.

Extracting data from responses
------------------------------

The SDK provides a ``search`` method where a JMESPath expression can be passed to extract data from a response object. Using an expression to query the data can reduce the amount of code in your projects and concisely express the data you are extracting.

The examples in this guide will extract data from the following response to a ``findItemsAdvanced`` operation. Each example shows how to extract data with and without using JMESPath expressions.

.. code-block:: xml

    <?xml version='1.0' encoding='UTF-8'?>
    <findItemsAdvancedResponse xmlns="http://www.ebay.com/marketplace/search/v1/services">
      <searchResult count="4">
        <item>
          <itemId>282108587906</itemId>
          <primaryCategory>
            <categoryId>617</categoryId>
          </primaryCategory>
          <sellingStatus>
            <currentPrice currencyId="USD">10.0</currentPrice>
          </sellingStatus>
        </item>
        <item>
          <itemId>272319687567</itemId>
          <primaryCategory>
            <categoryId>171228</categoryId>
          </primaryCategory>
          <sellingStatus>
            <currentPrice currencyId="USD">9.99</currentPrice>
          </sellingStatus>
        </item>
        <item>
          <itemId>302020618673</itemId>
          <primaryCategory>
            <categoryId>617</categoryId>
          </primaryCategory>
          <sellingStatus>
            <currentPrice currencyId="USD">15.00</currentPrice>
          </sellingStatus>
        </item>
        <item>
          <itemId>162150617662</itemId>
          <primaryCategory>
            <categoryId>171228</categoryId>
          </primaryCategory>
          <sellingStatus>
            <currentPrice currencyId="USD">5.00</currentPrice>
          </sellingStatus>
        </item>
      </searchResult>
    </findItemsAdvancedResponse>

To reduce the amount of code the examples assume that the following was used to call the ``findItemsAdvanced`` operation.

.. code-block:: php

  //  How the request is filled in is not shown.
  $request = new Types\FindItemsAdvancedRequest();

  $response = $service->findItemsAdvanced($request);

  // Work with just the searchResult from the response.
  $searchResult = $response->searchResult;

First, we show how to obtain an array of the item Ids by iterating through the items.

.. code-block:: php

    $result  = [];
    foreach ($searchResult->item as $item) {
        $result[] = $item->itemId;
    }

Using a JMESPath expression the same example can re-written as:

.. code-block:: php

    $result = $searchResult->search('item[].itemId');

A ``var_dump($result)`` for both examples produce the following::

    Array
    (
        [0] => 282108587906
        [1] => 272319687567
        [2] => 302020618673
        [3] => 162150617662
    )

We may only want to obtain the item Ids of those belonging to category ``171228``.

.. code-block:: php

    $result  = [];
    foreach ($searchResult->item as $item) {
        if ($item->primaryCategory->categoryId === '171228') {
            $result[] = $item->itemId;
        }
    }

The above can be achieved by using a filter in the JMESPath expression.

.. code-block:: php

    $result = $searchResult->search("item[?primaryCategory.categoryId == '171228'].itemId");

Again, both examples produce the same result::

    Array
    (
        [0] => 272319687567
        [1] => 162150617662
    )

Obtaining a total of the item's prices can be done with:

.. code-block:: php

    $result = 0.00;
    foreach ($searchResult->item as $item) {
        $result += $item->sellingStatus->currentPrice->value;
    }

JMESPath provides a ``sum`` function for your expressions.

.. code-block:: php

    $result = $searchResult->search('sum(item[].sellingStatus.currentPrice.value)');

Both examples produce a result of ``39.99``.

Extracting the item Id and price of the most expensive item can be done with the example below.

.. code-block:: php

    $result = null;
    foreach ($searchResult->item as $item) {
        if (!$result || $result['price'] < $item->sellingStatus->currentPrice->value) {
            $result = [
                'itemId' => $item->itemId,
                'price'  => $item->sellingStatus->currentPrice->value
            ];
        }
    }

Using a JMESPath expression can reduce the amount of code.

.. code-block:: php

    $result = $searchResult->search('max_by(item, &sellingStatus.currentPrice.value).{
        itemId: itemId,
        price: sellingStatus.currentPrice.value
    }');

Both examples produce an array with the following information::

    Array
    (
        [itemId] => 302020618673
        [price] => 15
    )
