<?php

namespace PFPF\Tests;

use const PFPF\_;

class CurryTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $fn = function($a, $b, $c) {
            return $a + $b + $c;
        };

        $curryf = \PFPF\curry($fn);
        
        $this->assertSame(6, $curryf(1,2,3));
        $this->assertSame(6, $curryf(1)(2)(3));
        $this->assertSame(6, $curryf(1)(2,3));
        $this->assertSame(6, $curryf(1,2)(3));
    }

    public function testPlaceHolder()
    {
        $fn = function($a, $b, $c, $d) {
            //3*4 - 6/2
            return $a*$b - $c/$d;
        };
        $curryf = \PFPF\curry($fn);
        $this->assertSame(9, $curryf(3, 4, _, 2)(6));
        $this->assertSame(9, $curryf(_, 4)(3)(6)(2));
        $this->assertSame(9, $curryf(3, _)(4)(6)(2));
    }
}