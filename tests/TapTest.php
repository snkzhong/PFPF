<?php

namespace PFPF\Tests;

class TapTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(66, \PFPF\tap('\PFPF\noop', 66));
    }
}