<?php
namespace DTS\eBaySDK\Credentials;

/**
 * Credentials providers are functions that accept no arguments and return an
 * instance that implements DTS\eBaySDK\Credentials\CredentialsInterface. If they
 * are unable to provide the credentials an instance of \InvalidArgumentException
 * must be returned. The function can supply a message via the returned exception
 * object to explain why no credentials are available.
 */
class CredentialsProvider
{
    const ENV_APP_ID = 'EBAY_SDK_APP_ID';
    const ENV_CERT_ID = 'EBAY_SDK_CERT_ID';
    const ENV_DEV_ID = 'EBAY_SDK_DEV_ID';
    const ENV_PROFILE = 'EBAY_SDK_PROFILE';

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
        return self::memoize(
            self::chain(
                self::env(),
                self::ini()
            )
        );
    }

    /**
     * Wraps a credentials provider and caches previously provided credentials.
     *
     * @param callable $provider Credentials provider to wrap.
     *
     * @return callable Wrapped provider that returns cached credentials when called.
     */
    public static function memoize(callable $provider)
    {
        return function () use ($provider) {
            static $result;
            static $isConstant;

            if ($isConstant) {
                return $result;
            }

            $isConstant = true;

            return $result = $provider();
        };
    }

    /**
     * Creates an aggregate credentials provider that invokes the provided
     * variadic providers one after the other until a provider returns
     * credentials
     *
     * @return callable
     * @throws \InvalidArgumentException
     */
    public static function chain()
    {
        $providers = func_get_args();
        if (empty($providers)) {
            throw new \InvalidArgumentException('No providers in chain');
        }

        return function () use ($providers) {
            $provider = array_shift($providers);
            $credentials = $provider();

            while (($provider = array_shift($providers))
                && !($credentials instanceof Credentials)
            ) {
                $credentials = $provider();
            }
            return $credentials;
        };
    }

    /**
     * Provider that creates credentials from environment variables
     * EBAY_SDK_APP_ID, EBAY_SDK_CERT_ID, and EBAY_SDK_DEV_ID.
     *
     * @return callable
     */
    public static function env()
    {
        return function () {
            $appId = getenv(self::ENV_APP_ID);
            $certId = getenv(self::ENV_CERT_ID);
            $devId = getenv(self::ENV_DEV_ID);

            if ($appId && $certId && $devId) {
                return new Credentials($appId, $certId, $devId);
            } else {
                return new \InvalidArgumentException(
                    'Could not find environment variable '
                    . 'credentials in '. self::ENV_APP_ID . '/'
                    . self::ENV_CERT_ID . '/'
                    . self::ENV_DEV_ID
                );
            }
        };
    }

    /**
     * Provider that creates credentials using an ini file stored in the
     * current user's home directory.
     *
     * @param string|null $profile Profile to use. Defaults to "default".
     * @param string|null $filename If provided, uses a custom filename rather than
     * looking in the home directory for the current user.
     *
     * @return callable
     * @throws \InvalidArgumentException
     */
    public static function ini($profile = null, $filename = null)
    {
        $filename = $filename ?: (self::getHomeDir() . '/.ebay_sdk/credentials');
        $profile = $profile ?: (getenv(self::ENV_PROFILE) ?: 'default');

        return function () use ($filename, $profile) {
            if (!is_readable($filename)) {
                return new \InvalidArgumentException("Cannot read credentials from $filename");
            }
            $data = parse_ini_file($filename, true);
            if ($data === false) {
                return new \InvalidArgumentException("Invalid credentials file $filename");
            }
            if (!isset($data[$profile])) {
                return new \InvalidArgumentException("'$profile' not found in credentials file");
            }
            if (!isset($data[$profile]['ebay_app_id'])
                || !isset($data[$profile]['ebay_cert_id'])
                || !isset($data[$profile]['ebay_dev_id'])) {
                return new \InvalidArgumentException("No credentials present in INI profile '$profile' ($filename)");
            }

            return new Credentials(
                $data[$profile]['ebay_app_id'],
                $data[$profile]['ebay_cert_id'],
                $data[$profile]['ebay_dev_id']
            );
        };
    }

    /**
     * Gets the environment's HOME directory if available.
     *
     * @return string|null
     */
    private static function getHomeDir()
    {
        // Linux/Unix-like systems.
        if ($homeDir = getenv('HOME')) {
            return $homeDir;
        }

        $homeDrive = getenv('HOMEDRIVE');
        $homePath = getenv('HOMEPATH');

        return ($homeDrive && $homePath) ? $homeDrive . $homePath : null;
    }
}
