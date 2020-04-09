<?php

namespace PFPF\Tests;

use function PFPF\nth;

class NthTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello world';
        $arr = ['PFPF', '2020', 'CN'];

        $this->assertSame('PFPF', nth(0, $arr));
        $this->assertSame('2020', nth(1, $arr));
        $this->assertSame('CN', nth(2, $arr));
        $this->assertSame('h', nth(0, $str));
        $this->assertSame('d', nth(-1, $str));
    }
}