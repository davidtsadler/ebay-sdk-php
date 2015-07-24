<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class RequirementsCheck
{
    private $isCli;
    private $lines = array();

    public function __construct()
    {
        $this->isCli = php_sapi_name() === 'cli';

        if (!$this->isCli) {
            $this->lines[] = sprintf('<style type="text/css">%s %s %s %s</style>',
                'html {font-family:verdana;}',
                'div {margin: 0.5em 0 2em; padding: 1em;}',
                '.ok {background:#dfffdf;border: 2px solid #0bo;color:#264409;}',
                '.fail {background:#ffdfdf;border: 2px solid #b00;color:#8a1f11;}'
            );
        }
    }

    private function notify($type, $msg)
    {
        $this->lines[] = sprintf('<div class="%s">%s</div>', $type, $msg);
    }

    private function pass($msg)
    {
        if ($this->isCli) {
            $this->lines[] = '[OK] '.$msg;
        } else {
            $this->notify('ok', $msg);
        }
    }

    private function fail($msg)
    {
        if ($this->isCli) {
            $this->lines[] = '[FAIL] '.$msg;
        } else {
            $this->notify('fail', $msg);
        }
    }

    public function title($title)
    {
        if ($this->isCli) {
            $this->lines[] = "\n$title\n".str_repeat('=', strlen($title));
        } else {
            $this->lines[] = "<h1>$title</h1>";
        }
    }

    public function header($header)
    {
        if ($this->isCli) {
            $this->lines[] = "\n$header\n".str_repeat('-', strlen($header));
        } else {
            $this->lines[] = "<h2>$header</h2>";
        }
    }

    public function checkPhpVersion($version)
    {
        if (version_compare(phpversion(), $version, '>=')) {
            $this->pass("You have PHP $version or greater");
        } else {
            $this->fail("You need PHP $version or greater");
        }
    }

    public function checkExt($ext)
    {
        if (extension_loaded($ext)) {
            $this->pass("You have the $ext extension installed");
        } else {
            $this->fail("You do not have the $ext extension installed");
        }
    }

    public function checkCurl()
    {
        if (function_exists('curl_version')) {
            $curlVersion = curl_version();
            if (($curlVersion['features'] & CURL_VERSION_SSL)) {
                $this->pass("cURL can send https requests [{$curlVersion['ssl_version']}]");
            } else {
                $this->pass('cURL cannot send https requests');
            }
        }
    }

    public function phpInfo()
    {
        ob_start();
        phpinfo(INFO_GENERAL);
        $this->lines[]= ob_get_clean();
    }

    public function endCheck()
    {
        $text = implode("\n", $this->lines);
        echo $this->isCli ? $text."\n\n" : "<!doctype html><html><body>$text</body></html>";
    }

}

$check = new RequirementsCheck();
$check->title('eBay SDK for PHP Requirements Check');

$check->header('System Requirements');
$check->checkPhpVersion('5.3.9.');

foreach(array('curl', 'libxml') as $ext) {
    $check->checkExt($ext);
}

$check->checkCurl();

$check->title('PHP information');

$check->phpinfo();

$check->endCheck();
