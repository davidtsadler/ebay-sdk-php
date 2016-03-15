<?php
/*
 * Creates a Github API release using the changelog contents. Attaches ebay-sdk-php.zip
 * and ebay-sdk-php.phar to the release.
 *
 * The OAUTH_TOKEN environment variable is required.
 *
 *     Usage: php gh-release.php X.Y.Z
 */

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7;

$owner = 'davidtsadler';
$repo = 'ebay-sdk-php';
$token = getenv('OAUTH_TOKEN') or die('An OAUTH_TOKEN environment variable is required');
isset($argv[1]) or die('Usage php gh-release.php X.Y.Z');
$tag = $argv[1];

assert(file_exists(__DIR__ . '/artifacts/ebay-sdk-php.zip'));
assert(file_exists(__DIR__ . '/artifacts/ebay-sdk-php.phar'));

// Grab and validate the tag annotation
chdir(dirname(__DIR__));
$message = `chag contents --tag "$tag"` or die('Chag could not find or parse the tag');

// Create a GitHub client
$client = new GuzzleHttp\Client([
    'base_uri' => 'https://api.github.com/',
    'headers'  => ['Authorization' => "token $token"],
]);

// Create the release
$response = $client->post("repos/${owner}/${repo}/releases", [
    'json' => [
        'tag_name' => $tag,
        'name'     => "Version {$tag}",
        'body'     => $message,
    ]
]);

// Grab the location of the new release
$url = $response->getHeaderLine('Location');
echo "Release successfully published to: $url\n";

// Uploads go to uploads.github.com
$uploadUrl = new Uri($url);
$uploadUrl = $uploadUrl->withHost('uploads.github.com');

// Upload ebay-sdk-php.zip
$response = $client->post($uploadUrl . '/assets?name=ebay-sdk-php.zip', [
    'headers' => ['Content-Type' => 'application/zip'],
    'body'    => Psr7\try_fopen(__DIR__ . '/artifacts/ebay-sdk-php.zip', 'r')
]);
echo "ebay-sdk-php.zip uploaded to: " . json_decode($response->getBody(), true)['browser_download_url'] . "\n";

// Upload ebay-sdk-php.phar
$response = $client->post($uploadUrl . '/assets?name=ebay-sdk-php.phar', [
    'headers' => ['Content-Type' => 'application/phar'],
    'body'    => Psr7\try_fopen(__DIR__ . '/artifacts/ebay-sdk-php.phar', 'r')
]);
echo "ebay-sdk-php.phar uploaded to: " . json_decode($response->getBody(), true)['browser_download_url'] . "\n";
