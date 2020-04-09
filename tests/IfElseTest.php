<?php

namespace PFPF\Tests;

use function PFPF\ifElse;
use function PFPF\curry;

class IfElseTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $trueFun = function($a, $b) {
            return sprintf('%d > %d', $a, $b);
        };
        $falseFun = function($a, $b) {
            return sprintf('%d <= %d', $a, $b);
        };

        $this->assertSame('10 > 5', ifElse('PFPF\gt', $trueFun, $falseFun)(10, 5));
        $this->assertSame('3 <= 7', ifElse('PFPF\gt', $trueFun, $falseFun)(3)(7));
    }
}