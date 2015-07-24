<?php
require __DIR__ . '/artifacts/Burgomaster.php';

$stageDirectory = __DIR__ . '/artifacts/staging';
$projectRoot = __DIR__ . '/../';
$packager = new \Burgomaster($stageDirectory, $projectRoot);
$autoLoader = 'ebay-sdk-php-autoloader.php';

$metaFiles = array('README.md', 'LICENSE.md', 'NOTICE.md', 'CHANGELOG.md');
foreach ($metaFiles as $file) {
    $packager->deepCopy($file, $file);
}

$packager->recursiveCopy('src/DTS', 'DTS');
$packager->recursiveCopy('vendor/guzzle/guzzle/src/Guzzle', 'Guzzle', ['php', 'pem']);
$packager->recursiveCopy('vendor/psr/log/Psr', 'Psr', ['php']);
$packager->recursiveCopy('vendor/symfony/event-dispatcher', 'Symfony/Component/EventDispatcher');

$packager->createAutoloader(array(

), $autoLoader);
$packager->createZip(__DIR__ . '/artifacts/ebay-sdk-php.zip');
$packager->createPhar(__DIR__ . '/artifacts/ebay-sdk-php.phar', null, $autoLoader);
$packager->startSection('test_phar');
$packager->debug('Phar output: ' . $packager->exec('php ' . __DIR__ . '/test_phar.php'));
$packager->endSection();
