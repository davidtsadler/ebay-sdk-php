<?php
namespace DTS\eBaySDK\Credentials;

use DTS\eBaySDK\Credentials\Credentials;

/**
 * Credentials providers are functions that accept no arguments and return an
 * instance that implements DTS\eBaySDK\Interfaces\CredentialsInterface. If they
 * are unable to provide the credentials an instance of \InvalidArgumentException
 * must be returned. The function can supply a message via the returned exception
 * object to explain why no credentials are available.
 */
class CredentialsProvider
{
    const ENV_APP_ID = 'EBAY_SDK_APP_ID';
    const ENV_AUTH_TOKEN = 'EBAY_SDK_AUTH_TOKEN';
    const ENV_CERT_ID = 'EBAY_SDK_CERT_ID';
    const ENV_DEV_ID = 'EBAY_SDK_DEV_ID';

    /**
     * Create a default credentials provider that first checks for environment
     * variables, then checks for the "default" profile in ~/.ebay_sdk/credentials.
     *
     * This provider is automatically wrapped in a memoize function that caches
     * previously provided credentails.
     *
     * @return callable
     */
    public static function defaultProvider()
    {
        // TODO Return actual default provider.
        return function () {return new Credentials('111', '222', '333', '444');};
    }

    /**
     * Provider that creates credentials from environment variables
     * EBAY_SDK_APP_ID, EBAY_SDK_AUTH_TOKEN, EBAY_SDK_CERT_ID, and EBAY_SDK_DEV_ID.
     *
     * @return callable
     */
    public static function env()
    {
        return function () {
            $appId = getenv(self::ENV_APP_ID);
            $authToken = getenv(self::ENV_AUTH_TOKEN);
            $certId = getenv(self::ENV_CERT_ID);
            $devId = getenv(self::ENV_DEV_ID);

            if ($appId && $certId && $devId) {
                return new Credentials(
                    $appId,
                    $certId,
                    $devId,
                    $authToken ? $authToken : null
                );
            } else {
                return new \InvalidArgumentException('Could not find environment variable '
                    . 'credentials in '. self::ENV_APP_ID . '/'
                    . self::ENV_AUTH_TOKEN . '/'
                    . self::ENV_CERT_ID . '/'
                    . self::ENV_DEV_ID
                );
            }
        };
    }
}

