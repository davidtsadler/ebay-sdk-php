<?php

namespace DTS\eBaySDK\Test;

class FunctionsTest extends \PHPUnit_Framework_TestCase
{
    public function testArrayMergeDeepArray()
    {
        $a = ['a'=>'b','c' => ['d' => 'e']];
        $b = ['c' => ['f' => 'g']];

        $merged = \DTS\eBaySDK\arrayMergeDeep($a, $b);

        $this->assertEquals([
            'a' => 'b',
            'c' => ['d' => 'e', 'f' => 'g']
        ], $merged);
    }
}
