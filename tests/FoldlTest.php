<?php

namespace PFPF\Tests;

use function PFPF\foldl;

class FoldlTest extends AbstractTestCase
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

        $this->assertSame(55, foldl($sumFn, 0, $arr));
        $this->assertSame(3628800, foldl($multiFn, 1, $arr));
    }

}