<?php

namespace PFPF\Tests;

use function PFPF\equals;
use function PFPF\curry2;

class EqualsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3];
        $this->assertSame(true, curry2('\PFPF\equals')(1)(1));
        $this->assertSame(false, curry2('\PFPF\equals')(1)(2));
        $this->assertSame(true, curry2('\PFPF\equals')($arr)([1,2,3]) );
    }
}