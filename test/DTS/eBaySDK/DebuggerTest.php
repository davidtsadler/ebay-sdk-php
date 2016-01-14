<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\Debugger;

class DebuggerTest extends \PHPUnit_Framework_TestCase
{
    public function testOutputsDebugInformation()
    {
        $str = '';
        $logfn = function ($value) use (&$str) { $str .= $value; };

        $d = new Debugger(['logfn' => $logfn]);

        $d('debug');

        $this->assertContains('debug', $str);
    }
}

