<?php

namespace PFPF\Tests;

use function PFPF\mymatch;

class MatchTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, mymatch("/^\d+$/", '232323'));
        $this->assertSame(true, mymatch("/^\d{11}$/", '13911092381'));
        $this->assertSame(false, mymatch("/^\d+$/", 'sd292df2'));
        $this->assertSame(true, mymatch("/^\w+@(\w+\.)+\w+$/", 'xxx@gmail.com'));
    }
}