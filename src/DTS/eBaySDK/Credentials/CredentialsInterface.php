<?php
namespace DTS\eBaySDK\Credentials;

/**
 * Provides access to the API credentials used for accessing the eBay services.
 */
interface CredentialsInterface
{
    /**
     * Returns the application ID.
     *
     * @return string
     */
    public function getAppId();

    /**
     * Returns the certificate ID.
     *
     * @return string
     */
    public function getCertId();

    /**
     * Returns the developer ID.
     *
     * @return string
     */
    public function getDevId();
}
