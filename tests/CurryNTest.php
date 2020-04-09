<?php

namespace PFPF\Tests;

use const PFPF\_;
use function PFPF\curryN;

class CurryNTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $fn = function($a, $b, $c)
        {
            //3*4/6
            return $a*$b/$c;
        };
        $curryf = curryN(3, $fn);
        $this->assertSame(2, $curryf(3, 4, 6));
        $this->assertSame(2, $curryf(3,4)(6));
        $this->assertSame(2, $curryf(3)(4)(6));
        $this->assertSame(2, $curryf(3)(4,6));
    }

    public function testPlaceHolder()
    {
        $fn = function ($a, $b, $c, $d)
        {
            //6*8/4*2
            return ($a*$b)/$c*$d;
        };

        $curryf = curryN(4, $fn);
        $this->assertSame(24, $curryf(_, 8, 4, 2)(6));
        $this->assertSame(24, $curryf(_, 8)(6)(4)(2));
        $this->assertSame(24, $curryf(6)(8, _, 2)(4));
    }
}