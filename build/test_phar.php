<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \DTS\eBaySDK\Sdk();

$trading = new \DTS\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \DTS\eBaySDK\Sdk::VERSION;
