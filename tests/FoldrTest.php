<?php

namespace PFPF\Tests;

use function PFPF\foldr;

class FoldrTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3,4,5,6,7,8,9,10];
        $minusFn = function($a, $b)
        {
            return $a - $b;
        };

        $this->assertSame(15, foldr($minusFn, 70, $arr));
        $this->assertSame(-55, foldr($minusFn, 0, $arr));
    }
}