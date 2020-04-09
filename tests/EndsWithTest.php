<?php

namespace PFPF\Tests;

use function PFPF\endsWith;

class EndsWithTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello world';
        $arr = [1,2,3,4,5];

        $this->assertSame(true, endsWith('world', $str));
        $this->assertSame(false, endsWith('wod', $str));
        $this->assertSame(true, endsWith([4,5], $arr));
        $this->assertSame(false, endsWith([3,5], $arr));
    }
}