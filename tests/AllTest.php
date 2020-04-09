<?php

namespace PFPF\Tests;

use function PFPF\curryN;

class AllTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $all = [1,2,3,4,5,6,7,8,9,10];
        $fn = function ($val) {
            return $val > 0;
        };
        $gt5fn = function ($val) {
            return $val > 5;
        };
        $this->assertSame(true, \PFPF\all($fn, $all));
        $this->assertSame(true, curryN(2, '\PFPF\all', $fn)($all));
        $this->assertSame(false, \PFPF\all($gt5fn, $all));
    }
}