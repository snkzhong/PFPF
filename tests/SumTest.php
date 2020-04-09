<?php

namespace PFPF\Tests;

class SumTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = \PFPF\range(1, 5);

        $this->assertSame(15, \PFPF\sum($arr));
    }
}