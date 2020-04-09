<?php

namespace PFPF\Tests;

use function PFPF\findLast;
use function PFPF\curry2;

class FindLastTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFilter()
    {
        $arr = [10, 11, 12, 13, 14];
        $fn = function($val) {
            return $val < 13;
        };
        $this->assertSame(12, findLast($fn, $arr));
        $this->assertSame(12, curry2('\PFPF\findLast')($fn)($arr));
    }
}