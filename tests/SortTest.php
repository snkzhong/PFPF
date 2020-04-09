<?php

namespace PFPF\Tests;

class SortTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'a' => 9,
            'b' => -3,
            'c' => 4,
            'd' => 17,
            'e' => 7,
            'f' => 2,
        ];

        $compareFun = function($a, $b) {
            return $a <=> $b;
        };

        $this->assertSame([-3,2,4,7,9,17], \PFPF\sort($compareFun, $arr));

        $dist = [
            'b' => -3,
            'f' => 2,
            'c' => 4,
            'e' => 7,
            'a' => 9,
            'd' => 17
        ];
        $this->assertSame($dist, \PFPF\sort($compareFun, $arr, true));
    }
}