<?php

namespace PFPF\Tests;

use function PFPF\any;
use function PFPF\curry2;

class AnyTest extends AbstractTestCase
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
        $this->assertSame(true, curry2('\PFPF\any')($fn)($all));
        $this->assertSame(true, any($fn, $all));
        $this->assertSame(true, curry2('\PFPF\any')($gt5fn)($all));
    }
}