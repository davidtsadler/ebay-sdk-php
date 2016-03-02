===============================
Uploading and downloading files
===============================

Depending on your project requirements you may need to upload or download files via the eBay API.

Uploading files
---------------

The eBay SDK for PHP handles this through the ``attachment`` method.

.. code-block:: php

    $attachment = $request->attachment(file_get_contents(__DIR__.'/picture.jpg'));
    assert('$request->hasAttachment() === true');

The above example will attach an image file called ``picture.jpg`` to a request object. The image data is obtained by calling the PHP function ``file_get_contents`` and it should be noted that you do not have to base64 encode the data when passing it to the SDK.

Once a file is attached to a request object the SDK will handle sending the data as part of the request's XML when the service operation method is called.

.. code-block:: php

    // The SDK ensures that any file attached to the request object will be sent as part of the XML.
    $response = $service->uploadSiteHostedPictures($request);

By default the attachment is sent with the mime type ``application/octet-stream`` This can be overridden by passing the desired mime type as the second parameter to the ``attachment`` method.

.. code-block:: php

    $request->attachment(file_get_contents(__DIR__.'/picture.jpg'), 'image/jpeg');

Alternatively an associative array can be passed as the single parameter to the method.

.. code-block:: php

    $request->attachment([
        'data'     => file_get_contents(__DIR__.'/picture.jpg'),
        'mimeType' => 'image/jpeg'
    ]);

Downloading files
-----------------

Some operations of the API result in a file been sent as part of the XML response. If a response has a file the method ``hasAttachment`` will return true. To obtain the file simply call the ``attachment`` method with no parameters on the response object. This will return an associative array that has two keys. The key ``data`` returns the data of the attachment while the key ``mimeType`` returns the attachment's mime type sent by the API.

.. code-block:: php

    $response = $service->downloadFile($request);
    if ($response->hasAttachment()) {
        $attachment = $response->attachment();
        $fp = fopen('attachment', 'wb');
        fwrite($fp, $attachment['data']);
        fclose($fp);
        printf("Mime Type: %s\n", $attachment['mimeType']);
    }
