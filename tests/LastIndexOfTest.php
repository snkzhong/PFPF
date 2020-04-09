<?php

namespace PFPF\Tests;

use function PFPF\lastIndexOf;

class LastIndexOfTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(3, lastIndexOf('l', 'hello'));
        $this->assertSame(6, lastIndexOf(1, [1,2,1,2,5,7,1,3,4]));
        $this->assertSame(-1, lastIndexOf('h', 'world'));
        $this->assertSame(-1, lastIndexOf(9, [2,1,3,4,8,7]));
    }

}