<?php

namespace PFPF\Tests;

use function PFPF\find;
use function PFPF\curry2;

class FindTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFilter()
    {
        $arr = [10, 11, 12, 13, 14];
        $fn = function($val) {
            return $val > 10;
        };
        $this->assertSame(11, find($fn, $arr));
        $this->assertSame(11, curry2('\PFPF\find')($fn)($arr));
    }
}