<?php

namespace PFPF\Tests;

use function PFPF\dropLast;

class DropLastTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello world';
        $arr = [1,2,3,4,5,6,7,8,9,10];

        $this->assertSame('hello', dropLast(6, $str));
        $this->assertSame([1,2,3,4], dropLast(6, $arr));
    }
}
