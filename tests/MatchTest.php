<?php

namespace PFPF\Tests;

use function PFPF\match;

class MatchTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, match("/^\d+$/", '232323'));
        $this->assertSame(true, match("/^\d{11}$/", '13911092381'));
        $this->assertSame(false, match("/^\d+$/", 'sd292df2'));
        $this->assertSame(true, match("/^\w+@(\w+\.)+\w+$/", 'xxx@gmail.com'));
    }
}