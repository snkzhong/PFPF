<?php

namespace PFPF\Tests;

use function PFPF\both;

class BothTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gt10 = function($a) {
            return $a > 10;
        };
        $lt30 = function($a) {
            return $a < 30;
        };

        $this->assertSame(true, both($gt10, $lt30, 20));
        $this->assertSame(true, both('PFPF\Tests\a_gt_b', 'PFPF\Tests\a_divide_b_is_even', 20, 10));
        $this->assertSame(false, both('PFPF\Tests\a_gt_b', 'PFPF\Tests\a_divide_b_is_even', 30, 10));
    }
}

function a_gt_b($a, $b)
{
    return $a > $b;
}

function a_divide_b_is_even($a, $b)
{
    return ($a / $b) % 2 == 0;
}