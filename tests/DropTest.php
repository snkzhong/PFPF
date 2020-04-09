<?php

namespace PFPF\Tests;

use function PFPF\drop;

class DropTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello world';
        $arr = [1,2,3,4,5,6,7,8,9,10];

        $this->assertSame('world', drop(6, $str));
        $this->assertSame([7,8,9,10], drop(6, $arr));
    }
}
