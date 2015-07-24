<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$service = new \DTS\eBaySDK\Trading\Services\TradingService(array(
    'apiVersion' => '123'
));

echo 'Version=' . \DTS\eBaySDK\Services\BaseService::VERSION;
