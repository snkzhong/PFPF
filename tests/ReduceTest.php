<?php

namespace PFPF\Tests;

use function PFPF\reduce;

class ReduceTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3,4,5,6,7,8,9,10];
        $sumFn = function($a, $b)
        {
            return $a + $b;
        };

        $multiFn = function($a, $b)
        {
            return $a * $b;
        };

        $this->assertSame(55, reduce($sumFn, 0, $arr));
        $this->assertSame(3628800, reduce($multiFn, 1, $arr));
    }
}