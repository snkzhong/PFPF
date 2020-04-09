<?php

namespace PFPF\Tests;

use function PFPF\move;

class MoveTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [3,4,5,6,7];

        $this->assertSame([4,3,5,6,7], move(0,1,$arr));
        $this->assertSame([7,3,4,5,6], move(-1,0,$arr));
    }
}