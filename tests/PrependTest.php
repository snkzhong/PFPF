<?php

namespace PFPF\Tests;

use function PFPF\prepend;

class PrependTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [5,6,7,8];

        $this->assertSame([4,5,6,7,8], prepend(4, $arr));
        $this->assertSame([[1],5,6,7,8], prepend([1], $arr));
    }
}