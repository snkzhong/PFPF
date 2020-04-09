<?php

namespace PFPF\Tests;

class UnlessTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $cond = function ($a) {
            return $a >= 10;
        };
        $fn = function($a) {
            return ++$a;
        };
        $this->assertSame(11, \PFPF\unless($cond, '\PFPF\inc', 11));
        $this->assertSame(7, \PFPF\unless($cond, '\PFPF\inc', 6));
    }
}