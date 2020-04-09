<?php

namespace PFPF\Tests;

class TestTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, \PFPF\test("/^\d+$/", '232323'));
        $this->assertSame(true, \PFPF\test("/^\d{11}$/", '13911092381'));
        $this->assertSame(false, \PFPF\test("/^\d+$/", 'sd292df2'));
        $this->assertSame(true, \PFPF\test("/^\w+@(\w+\.)+\w+$/", 'xxx@gmail.com'));
    }
}