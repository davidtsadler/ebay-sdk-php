<?php
require __DIR__ . '/../vendor/autoload.php';

$stageDirectory = __DIR__ . '/artifacts/staging';
$projectRoot = __DIR__ . '/../';
$burgomaster = new \Burgomaster($stageDirectory, $projectRoot);
$autoloaderFilename = 'ebay-sdk-php-autoloader.php';

$metaFiles = array('README.md', 'LICENSE.md', 'NOTICE.md', 'CHANGELOG.md');
foreach ($metaFiles as $file) {
    $burgomaster->deepCopy($file, $file);
}

$sdkFiles = new \RecursiveIteratorIterator(
    new \RecursiveDirectoryIterator(realpath('src'))
);

$burgomaster->recursiveCopy('src', 'DTS/eBaySDK', ['php'], $sdkFiles);
$burgomaster->recursiveCopy('vendor/guzzlehttp/guzzle/src', 'GuzzleHttp');
$burgomaster->recursiveCopy('vendor/guzzlehttp/psr7/src', 'GuzzleHttp/Psr7');
$burgomaster->recursiveCopy('vendor/guzzlehttp/promises/src', 'GuzzleHttp/Promise');
$burgomaster->recursiveCopy('vendor/psr/http-message/src', 'Psr/Http/Message');

$burgomaster->createAutoloader([
    'DTS/eBaySDK/functions.php',
    'GuzzleHttp/functions.php',
    'GuzzleHttp/Psr7/functions.php',
    'GuzzleHttp/Promise/functions.php',
], $autoloaderFilename);

$burgomaster->createZip(__DIR__ . '/artifacts/ebay-sdk-php.zip');
$burgomaster->createPhar(
    __DIR__ . "/artifacts/ebay-sdk-php.phar",
    null,
    $autoloaderFilename,
    'ebay-sdk-php-' . \DTS\eBaySDK\Sdk::VERSION . '.phar'
);

$burgomaster->startSection('test_phar');
$burgomaster->exec('php ' . __DIR__ . '/test_phar.php');
$burgomaster->endSection();
