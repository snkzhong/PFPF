<?php

namespace PFPF\Tests;

use function PFPF\slice;

class SliceTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello';
        $arr = [1,2,3,4,5];

        $this->assertSame('ell', slice(1,3,$str));
        $this->assertSame([5], slice(4,3,$arr));
    }
}