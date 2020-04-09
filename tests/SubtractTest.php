<?php

namespace PFPF\Tests;

class SubtractTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $subtract10 = \PFPF\curry('\PFPF\subtract', \PFPF\_, 10);

        $this->assertSame(13, $subtract10(23));
        $this->assertSame(111, $subtract10(121));
        $this->assertSame(-8, \PFPF\subtract(9, 17));
    }
}