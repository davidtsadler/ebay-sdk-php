<?php
namespace DTS\eBaySDK;

/**
 * @internal Handles outputing debug messages.
 */
class Debugger
{
    /**
     * @var array $config. Debug configuration.
     */
    private $config;

    /**
     * @var array $credentialsStrings. RegExp patterns to remove credentials from the debug info.
     */
    private static $credentialsStrings = [
        '/^(X-EBAY-SOA-SECURITY-TOKEN:.*)?$/im' => 'X-EBAY-SOA-SECURITY-TOKEN: SECURITY-TOKEN',
        '/^(X-EBAY-SOA-SECURITY-APPNAME:.*)?$/im' => 'X-EBAY-SOA-SECURITY-APPNAME: SECURITY-APPNAME',
        '/^(X-EBAY-API-AFFILIATE-USER-ID:.*)?$/im' => 'X-EBAY-API-AFFILIATE-USER-ID: AFFILIATE-USER-ID',
        '/^(X-EBAY-API-APP-ID:.*)?$/im' => 'X-EBAY-API-APP-ID: APP-ID',
        '/^(X-EBAY-API-TRACKING-ID:.*)?$/im' => 'X-EBAY-API-TRACKING-ID: TRACKING-ID',
        '/^(X-EBAY-API-TRACKING-PARTNER-CODE:.*)?$/im' => 'X-EBAY-API-TRACKING-PARTNER-CODE: TRACKING-PARTNER-CODE',
        '/^(X-EBAY-API-APP-NAME:.*)?$/im' => 'X-EBAY-API-APP-NAME: APP-NAME',
        '/^(X-EBAY-API-CERT-NAME:.*)?$/im' => 'X-EBAY-API-CERT-NAME: CERT-NAME',
        '/^(X-EBAY-API-DEV-NAME:.*)?$/im' => 'X-EBAY-API-DEV-NAME: DEV-NAME ',
        '/<eBayAuthToken>.*<\/eBayAuthToken>/i' => '<eBayAuthToken>EBAY-AUTH-TOKEN</eBayAuthToken>'
    ];

    /**
     * @param array $config Debug configuration.
     */
    public function __construct(array $config)
    {
        $this->config = $config + [
            'logfn' => function ($msg) {
                echo $msg.PHP_EOL;
            },
            'scrub_credentials' => true,
            'scrub_strings' => []
        ];

        $this->config['scrub_strings'] += self::$credentialsStrings;
    }

    /**
     * @param string $info The debug information.
     */
    public function __invoke($info)
    {
        if ($this->config['scrub_credentials']) {
            foreach ($this->config['scrub_strings'] as $pattern => $replacement) {
                $info = preg_replace($pattern, $replacement, $info);
            }
        }
        $this->config['logfn']($info);
    }
}
